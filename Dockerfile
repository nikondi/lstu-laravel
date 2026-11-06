FROM php:8.3-fpm-alpine AS php-ext-builder

RUN apk add --no-cache \
    libzip-dev \
    icu-dev \
    libxml2-dev \
    openssl-dev \
    curl-dev \
    g++ make autoconf linux-headers git

RUN docker-php-ext-install -j$(nproc) \
      intl zip curl mysqli pdo_mysql

# ==========================================
# Stage 3: Общая база для dev и prod
# ==========================================
FROM php:8.3-fpm-alpine AS base

ARG HOST_UID=1000
ARG HOST_GID=1000

RUN addgroup -g $HOST_GID -S appuser && adduser -u $HOST_UID -G appuser -S -D appuser

RUN mkdir -p /var/log/app && chown appuser:appuser /var/log/app

RUN apk add --no-cache \
        git bash curl openssl libzip unzip icu-libs \
        nginx supervisor nodejs npm

WORKDIR /app

COPY ./.docker/php-fpm.d/ /usr/local/etc/php-fpm.d/
COPY ./.docker/php.ini /usr/local/etc/php/php.ini
COPY ./.docker/nginx.conf /etc/nginx/http.d/default.conf

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY --from=php-ext-builder /usr/local/lib/php/extensions/ /usr/local/lib/php/extensions/
RUN docker-php-ext-enable intl zip curl mysqli pdo_mysql

RUN rm -rf /tmp/* /var/cache/apk/*

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]


# ==========================================
# Stage 1: Сборка фронтенда (Node.js)
# ==========================================

FROM base AS deps-installer

COPY ./composer.json ./composer.lock ./
COPY ./app/helpers.php ./app/helpers.php

RUN --mount=type=secret,id=CI_JOB_TOKEN \
    CI_JOB_TOKEN=$(cat /run/secrets/CI_JOB_TOKEN) && \
    composer config -- gitlab-token.gitlab.com gitlab-ci-token "${CI_JOB_TOKEN}" && \
    composer install --no-dev --optimize-autoloader --no-interaction --no-progress --no-scripts

FROM base AS frontend-builder

WORKDIR /app
COPY ./package.json ./package-lock.json ./vite.config.ts ./postcss.config.js ./tailwind.config.js ./
RUN npm ci

# 2. Копируем ВЕСЬ исходный код (Blade-шаблоны жизненно необходимы Tailwind для сборки стилей!)
COPY ./resources ./resources

# 3. Копируем вендоры (если Ziggy или другие пакеты нужны для генерации путей/скриптов)
COPY --from=deps-installer /app/vendor /app/vendor

# 4. Запускаем сборку (теперь Tailwind видит все ваши классы в resources/views и других файлах)
RUN npm run build

# ==========================================
# Stage 4: Dev (код монтируется томом)
# ==========================================
FROM base AS dev

COPY ./.docker/supervisord.dev.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80 5173

# ==========================================
# Stage 5: Prod (код копируется в образ)
# ==========================================
FROM base AS production

COPY ./.docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

COPY --chown=appuser:appuser src .
COPY --from=frontend-builder /app/public/build /app/public/build
COPY --from=deps-installer /app/vendor /app/vendor

# 3. Гарантированно удаляем локальные кэш-файлы, если они случайно пролезли через COPY
RUN rm -f bootstrap/cache/config.php \
    && rm -f bootstrap/cache/packages.php \
    && rm -f bootstrap/cache/services.php \
    && rm -f bootstrap/cache/routes.php

# 4. Вручную генерируем манифест пакетов (Auto-Discovery) БЕЗ Debugbar
RUN php artisan package:discover --ansi

# 5. Кэшируем конфигурацию и роуты для продакшна
RUN php artisan route:cache

# 6. Выставляем права
RUN chown -R appuser:appuser storage bootstrap/cache

EXPOSE 80
