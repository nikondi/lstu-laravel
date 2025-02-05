import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        hmr: {
            host: 'docker.local', // Здесь хост для локальной разработки (localhost), можно убрать
        },
        proxy: {
            '^/img/.*': {
                target: 'http://docker.local',
            }
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/css/styles.scss',
                'resources/js/js.js',
                'resources/js/main.js',
                'resources/js/frontbar.js',
                'resources/css/frontbar.scss'
            ],
            refresh: true,
        }),
    ],

});
