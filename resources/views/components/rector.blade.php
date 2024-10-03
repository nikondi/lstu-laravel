@props([
    'name', 'position', 'image'
])
<div {{ $attributes->class('rector-single') }}>
    <div class="rector-single__image">
        <img src="{{ $image }}" alt="">
    </div>
    <div class="rector-single__info">
        <h2 class="rector-single__name">{{ $name }}</h2>
        @isset($position)<div class="rector-single__position">{{ $position }}</div>@endisset
        <div class="rector-single__contacts">
            <a href="mailto:lstu-fai-decan@mail.ru">
                <svg width="14" height="14"><use xlink:href="/assets/img/icons.svg#envelope"/></svg>
                mailbox@stu.lipetsk.ru
            </a>
            <a href="mailto:+74742328042">
                <svg width="14" height="14"><use xlink:href="/assets/img/icons.svg#phone"/></svg>
                +7 (4742) 32-80-42
            </a>
        </div>
        <div class="rector-single__menu">
            {{ $menu }}
        </div>
        <div class="rector-single-content accordion">
            <div class="rector-single-content__trigger accordion-trigger">
                <span class="accordion-trigger__closed">Подробнее</span>
                <span class="accordion-trigger__opened">Скрыть</span>
                <svg width="1em" height="1em" viewBox="0 0 24 24"><g><path d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z" fill="currentColor"></path></g></svg>
            </div>
            <div class="rector-single-content__text accordion-content">
                {{ $slot }}
            </div>
        </div>
    </div>

</div>
