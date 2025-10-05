@extends('layouts.default')

@section('content')
    <section class="main_promo">
        <div class="main_promo__background">
            <img src="/assets/img/main-background.jpg" alt="">
        </div>
        <div class="main_promo__content">
            <header class="main_promo__header container">
                <a href="/" class="logo main_promo__logo">
                    ЛИПЕЦКИЙ ГОСУДАРСТВЕННЫЙ<br/> ТЕХНИЧЕСКИЙ УНИВЕРСТИТЕТ
                </a>
                <ul class="main_promo__menu">
                    <li><a href="{{ route('abit') }}">Поступающим</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </header>
        </div>
    </section>
    <section class="main_info">
        <div class="main_info__inner">
            <a href="{{ route('abit.celevoe') }}" class="btn history-banner__btn_question" style="margin-right: 0">ПОДРОБНО
                О ЦЕЛЕВОМ ОБУЧЕНИИ</a>
        </div>
        <div class="main_info__inner">
            <div class="main_infoblock history-banner">
                <div class="history-banner__text">
                    <p>Основанный в 1956 году, Липецкий Политех сегодня – это прогрессивный научно-образовательный
                        центр, который успешно сочетает традиции инженерного вуза с современными тенденциями и
                        разнообразием образовательных программ.</p>
                    <p>Университет охватывает широкий спектр областей знаний и предлагает образовательные программы
                        от
                        металлургии, машиностроения, нанотехнологий и архитектуры до гуманитарных наук. Выпускники
                        университета вносят значительный вклад в различные отрасли экономики и общественной жизни
                        региона.</p>
                </div>
                <div class="history-banner__buttons">
                    <a href="https://www.stu.lipetsk.ru/quest/" class="btn history-banner__btn_question">Приемная
                        комиссия</a>
                    <a href="{{ route('abit.future') }}"
                       class="btn btn--outlined history-banner__btn_about">Будущему студенту</a>
                </div>
            </div>
            <div class="main_infoblock">
                <div class="main_banners swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="/assets/img/banners/1.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="/assets/img/banners/2.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="/assets/img/banners/3.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="/assets/img/banners/4.jpg" alt=""></div>
                    </div>
                    <div class="swiper-pagination slider-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="fak-section">
        <div class="container">
            <div class="swiper fak-slider">
                <div class="swiper-wrapper fak-list">
                    <div class="swiper-slide">
                        <a href="{{ route('fak.show') }}" class="fak-link fak-color--imit">
                            <div class="fak-logo">
                                <svg width="32" class="fak-logo__logo">
                                    <use xlink:href="/assets/img/faks-only-logo.svg#imit"/>
                                </svg>
                            </div>
                            <div class="fak-title">Институт<br/>машиностроения и<br/>транспорта</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('fak.show') }}" class="fak-link fak-color--mi">
                            <div class="fak-logo">
                                <svg width="32" class="fak-logo__logo">
                                    <use xlink:href="/assets/img/faks-only-logo.svg#mi"/>
                                </svg>
                            </div>
                            <div class="fak-title">Металлургический<br/>институт</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('fak.show') }}" class="fak-link fak-color--isnep">
                            <div class="fak-logo">
                                <svg width="32" class="fak-logo__logo">
                                    <use xlink:href="/assets/img/faks-only-logo.svg#isnep"/>
                                </svg>
                            </div>
                            <div class="fak-title">Институт<br/>социальных наук,<br/>экономики и права</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('fak.show') }}" class="fak-link fak-color--isa">
                            <div class="fak-logo">
                                <svg width="32" class="fak-logo__logo">
                                    <use xlink:href="/assets/img/faks-only-logo.svg#isa"/>
                                </svg>
                            </div>
                            <div class="fak-title">Институт<br/>строительства и<br/>архитектуры</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('fak.show') }}" class="fak-link fak-color--fei">
                            <div class="fak-logo">
                                <svg width="32" class="fak-logo__logo">
                                    <use xlink:href="/assets/img/faks-only-logo.svg#fei"/>
                                </svg>
                            </div>
                            <div class="fak-title">Физико-<br/>энергетический<br/>институт</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('fak.show') }}" class="fak-link fak-color--ikn">
                            <div class="fak-logo">
                                <svg width="32" class="fak-logo__logo">
                                    <use xlink:href="/assets/img/faks-only-logo.svg#ikn"/>
                                </svg>
                            </div>
                            <div class="fak-title">Институт<br/>компьютерных<br/>наук</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('fak.show') }}" class="fak-link fak-color--zf">
                            <div class="fak-logo">
                                <svg width="32" class="fak-logo__logo">
                                    <use xlink:href="/assets/img/faks-only-logo.svg#zf"/>
                                </svg>
                            </div>
                            <div class="fak-title">Заочный<br/>факультет</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('fak.show') }}" class="fak-link fak-color--fdo">
                            <div class="fak-logo">
                                <svg width="32" class="fak-logo__logo">
                                    <use xlink:href="/assets/img/faks-only-logo.svg#fdo"/>
                                </svg>
                            </div>
                            <div class="fak-title">Факультет<br/>дополнительного<br/>образования</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('fak.show') }}" class="fak-link fak-color--uk">
                            <div class="fak-logo">
                                <svg width="32" class="fak-logo__logo">
                                    <use xlink:href="/assets/img/faks-only-logo.svg#uk"/>
                                </svg>
                            </div>
                            <div class="fak-title">Университетский<br/>колледж</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('fak.show') }}" class="fak-link fak-color--nii">
                            <div class="fak-logo">
                                <svg width="32" class="fak-logo__logo">
                                    <use xlink:href="/assets/img/faks-only-logo.svg#nii"/>
                                </svg>
                            </div>
                            <div class="fak-title">Научно-<br/>исследовательский<br/>институт</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('fak.show') }}" class="fak-link fak-color--lic">
                            <div class="fak-logo">
                                <svg width="32" class="fak-logo__logo">
                                    <use xlink:href="/assets/img/faks-only-logo.svg#lic"/>
                                </svg>
                            </div>
                            <div class="fak-title">Региональный<br/>технический<br/>лицей</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('fak.show') }}" class="fak-link fak-color--vuc">
                            <div class="fak-logo fak-logo--image"><img src="/assets/img/vuc.png" alt=""></div>
                            <div class="fak-title">Военный<br/>учебный<br/>центр</div>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination slider-pagination slider-pagination--center"></div>
            </div>
        </div>
    </section>
    <section class="main-education">
        <div class="container">
            <h2 class="heading-1">Образование</h2>
            <div class="education-list">
                <div class="card-education card-education--uk">
                    <div class="heading-2">Среднее профессиональное образование</div>
                    <div class="card-education-inner">
                        <div class="card-education__stat">
                            <div>10</div>
                            направлений
                        </div>
                        <div class="card-education__stat">
                            <div>100</div>
                            бюджетных мест
                        </div>
                    </div>
                    <a href="#" class="prof-link"><img src="/assets/img/spo.png" alt=""></a>
                    <a href="https://stu.lipetsk.ru/fak/uk/" class="btn">Подробнее</a>
                </div>
                <div class="card-education card-education--bak">
                    <div class="heading-2">Бакалавриат и специалитет</div>
                    <div class="card-education-inner">
                        <div class="card-education__stat">
                            <div>50</div>
                            направлений
                        </div>
                        <div class="card-education__stat">
                            <div>865</div>
                            бюджетных мест
                        </div>
                    </div>
                    <a href="https://stu.lipetsk.ru/struct/management/rector/sub/pk/priem-po-programmam-bakalavriata,-speczialiteta,-magistraturyi-v-2024-godu/"
                       class="btn">Подробнее</a>
                </div>
                <div class="card-education card-education--mag">
                    <div class="heading-2">Магистратура</div>
                    <div class="card-education-inner">
                        <div class="card-education__stat">
                            <div>35</div>
                            направлений
                        </div>
                        <div class="card-education__stat">
                            <div>169</div>
                            бюджетных мест
                        </div>
                    </div>
                    <a href="https://stu.lipetsk.ru/struct/management/rector/sub/pk/priem-po-programmam-bakalavriata,-speczialiteta,-magistraturyi-v-2024-godu/"
                       class="btn">Подробнее</a>
                </div>
                <div class="card-education card-education--asp">
                    <div class="heading-2">Аспирантура</div>
                    <div class="card-education-inner">
                        <div class="card-education__stat">
                            <div>25</div>
                            направлений
                        </div>
                        <div class="card-education__stat">
                            <div>24</div>
                            бюджетных мест
                        </div>
                    </div>
                    <a href="#" class="btn">Подробнее</a>
                </div>
            </div>
        </div>
    </section>
    <section class="infographics">
        <div class="container">
            <div class="infographics__list">
                <div class="infographic">
                    <div class="infographic__title">С 1956 года</div>
                    <div class="infographic__description">готовим инженеров</div>
                </div>
                <div class="infographic">
                    <div class="infographic__title">6446</div>
                    <div class="infographic__description">студентов сейчас</div>
                    <div class="infographic__sub">* - по состоянию на 01.01.2024</div>
                </div>
                <div class="infographic">
                    <div class="infographic__title">120</div>
                    <div class="infographic__description">образовательных программ</div>
                </div>
                <div class="infographic">
                    <div class="infographic__title">10</div>
                    <div class="infographic__description">факультетов и институтов</div>
                </div>
            </div>
        </div>
    </section>
    <section class="useful-links">
        <div class="container">
            <h2 class="heading-2">Полезные ссылки</h2>
            <ul class="useful-links-list">
                <li>
                    <a href="[[~1579]]" class="useful-link">
                        <div class="useful-link__image">
                            <svg width="32" height="32" viewBox="0 0 511 512">
                                <path
                                    d="M256.082 223.652c-25.074 0-45.477 20.403-45.477 45.477 0 25.078 20.403 45.48 45.477 45.48 25.078 0 45.48-20.402 45.48-45.48 0-25.074-20.402-45.477-45.48-45.477zm0 75.961c-16.805 0-30.477-13.675-30.477-30.48 0-16.809 13.672-30.48 30.477-30.48 16.809 0 30.48 13.671 30.48 30.48 0 16.805-13.671 30.48-30.48 30.48zM68.047 343.578h53.469c8.52 0 15.453-6.93 15.453-15.453v-53.469c0-8.52-6.934-15.453-15.453-15.453h-53.47c-8.519 0-15.452 6.934-15.452 15.453v53.469c0 8.523 6.933 15.453 15.453 15.453zm53.922-68.918v53.465c0 .25-.203.457-.453.457H102.28v-54.379h19.235c.25 0 .453.203.453.457zm-54.375 0c0-.254.203-.457.453-.457H87.28v54.379H68.047a.457.457 0 0 1-.453-.457zM459.574 274.66c0-8.523-6.933-15.457-15.457-15.457h-53.465c-8.523 0-15.457 6.934-15.457 15.457v53.465c0 8.523 6.934 15.457 15.457 15.457h53.465c8.524 0 15.457-6.934 15.457-15.457zm-69.379 53.465v-53.469c0-.25.203-.453.457-.453h19.23v54.375h-19.23a.454.454 0 0 1-.457-.453zm54.38 0c0 .25-.208.453-.458.453h-19.23v-54.375h19.23c.25 0 .457.203.457.453zM52.594 437.348c0 8.52 6.933 15.453 15.453 15.453h53.469c8.52 0 15.453-6.934 15.453-15.453v-53.47c0-8.523-6.934-15.456-15.453-15.456h-53.47c-8.519 0-15.452 6.933-15.452 15.457zm69.375-53.47v53.47c0 .25-.203.453-.453.453H102.28v-54.38h19.235c.25 0 .453.204.453.458zm-54.375 0c0-.253.203-.456.453-.456H87.28V437.8H68.047a.453.453 0 0 1-.453-.453zM444.117 368.422h-53.465c-8.523 0-15.457 6.933-15.457 15.457v53.469c0 8.52 6.934 15.453 15.457 15.453h53.465c8.524 0 15.457-6.934 15.457-15.453v-53.47c0-8.523-6.933-15.456-15.457-15.456zm-53.922 68.926v-53.47c0-.253.203-.456.457-.456h19.23V437.8h-19.23a.454.454 0 0 1-.457-.453zm54.38 0c0 .25-.208.453-.458.453h-19.23v-54.38h19.23c.25 0 .457.204.457.458zm0 0"
                                    fill="currentColor"></path>
                                <path
                                    d="M511.664 213.34v-14.59c0-8.207-6.676-14.883-14.883-14.883h-15.879l-39.71-58.726a21.142 21.142 0 0 0-17.536-9.313H316.207L269.34 78.176a20.797 20.797 0 0 0-5.758-3.278V60.371l52.11-19.375c4.085-1.516 6.722-5.312 6.722-9.668s-2.637-8.148-6.719-9.668L258.848.527a7.555 7.555 0 0 0-3.523-.488c-.009 0-.016 0-.028.004-.043.004-.09.008-.133.016l-.098.011a7.464 7.464 0 0 0-3.633 1.547c-.015.012-.027.02-.038.031-.032.024-.063.047-.09.075l-.13.105c-.53.461-1.003 1-1.398 1.61l-.023.039-.059.093c-.015.028-.035.055-.05.082a.906.906 0 0 0-.032.055c-.027.047-.05.09-.078.137 0 0 0 .004-.004.004a7.456 7.456 0 0 0-.804 2.199 7.197 7.197 0 0 0-.141 1.629v47.308a4.928 4.928 0 0 0 0 .34v19.578a20.883 20.883 0 0 0-5.758 3.274l-46.871 37.652H88.512c-7.04 0-13.598 3.48-17.535 9.313l-39.715 58.726h-15.88C7.177 183.867.5 190.543.5 198.75v14.59c0 8.207 6.676 14.883 14.883 14.883h136.023v239.422H38.25V249.102c0-4.145-3.355-7.5-7.5-7.5a7.5 7.5 0 0 0-7.5 7.5v218.543h-7.867C7.176 467.645.5 474.32.5 482.527v14.59C.5 505.324 7.176 512 15.383 512H496.78c8.207 0 14.883-6.676 14.883-14.883v-14.59c0-8.207-6.676-14.882-14.883-14.882h-7.867V249.102c0-4.145-3.355-7.5-7.5-7.5a7.497 7.497 0 0 0-7.5 7.5v218.543H360.762V228.223h136.02c8.206 0 14.882-6.676 14.882-14.883zM496.781 497v7.5zm-73.125-366.172a6.16 6.16 0 0 1 5.11 2.715l34.03 50.324h-61.898l-66.02-53.039zm-160.074-86.46V18.288l35.07 13.04zm-11.36 45.503a6.089 6.089 0 0 1 3.192-1.312c.223.02.445.027.668.027.227 0 .45-.008.668-.027a6.101 6.101 0 0 1 3.195 1.312l117.004 93.996H135.22zm-168.82 43.672a6.16 6.16 0 0 1 5.11-2.715h88.773l-66.015 53.04H49.37zM15.5 213.223v-14.356h135.906v14.356zM496.664 497H15.5v-14.355h481.164zm-191.73-29.355h-41.352V363.883h35.29a6.068 6.068 0 0 1 6.062 6.062zm-56.352 0H207.23v-97.7c0-3.343 2.723-6.062 6.067-6.062h35.285zm71.352 0v-97.7c0-11.613-9.45-21.062-21.063-21.062h-85.574c-11.617 0-21.067 9.449-21.067 21.062v97.7h-25.824V198.867h179.356v268.778zm176.73-254.422H360.762v-14.356h135.902zm0 0"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <div class="useful-link__text">
                            Противодействие коррупции
                        </div>
                    </a>
                </li>
                <li>
                    <a href="[[~1579]]" class="useful-link">
                        <div class="useful-link__image">
                            <svg width="32" height="32" viewBox="0 0 511 512">
                                <path
                                    d="M256.082 223.652c-25.074 0-45.477 20.403-45.477 45.477 0 25.078 20.403 45.48 45.477 45.48 25.078 0 45.48-20.402 45.48-45.48 0-25.074-20.402-45.477-45.48-45.477zm0 75.961c-16.805 0-30.477-13.675-30.477-30.48 0-16.809 13.672-30.48 30.477-30.48 16.809 0 30.48 13.671 30.48 30.48 0 16.805-13.671 30.48-30.48 30.48zM68.047 343.578h53.469c8.52 0 15.453-6.93 15.453-15.453v-53.469c0-8.52-6.934-15.453-15.453-15.453h-53.47c-8.519 0-15.452 6.934-15.452 15.453v53.469c0 8.523 6.933 15.453 15.453 15.453zm53.922-68.918v53.465c0 .25-.203.457-.453.457H102.28v-54.379h19.235c.25 0 .453.203.453.457zm-54.375 0c0-.254.203-.457.453-.457H87.28v54.379H68.047a.457.457 0 0 1-.453-.457zM459.574 274.66c0-8.523-6.933-15.457-15.457-15.457h-53.465c-8.523 0-15.457 6.934-15.457 15.457v53.465c0 8.523 6.934 15.457 15.457 15.457h53.465c8.524 0 15.457-6.934 15.457-15.457zm-69.379 53.465v-53.469c0-.25.203-.453.457-.453h19.23v54.375h-19.23a.454.454 0 0 1-.457-.453zm54.38 0c0 .25-.208.453-.458.453h-19.23v-54.375h19.23c.25 0 .457.203.457.453zM52.594 437.348c0 8.52 6.933 15.453 15.453 15.453h53.469c8.52 0 15.453-6.934 15.453-15.453v-53.47c0-8.523-6.934-15.456-15.453-15.456h-53.47c-8.519 0-15.452 6.933-15.452 15.457zm69.375-53.47v53.47c0 .25-.203.453-.453.453H102.28v-54.38h19.235c.25 0 .453.204.453.458zm-54.375 0c0-.253.203-.456.453-.456H87.28V437.8H68.047a.453.453 0 0 1-.453-.453zM444.117 368.422h-53.465c-8.523 0-15.457 6.933-15.457 15.457v53.469c0 8.52 6.934 15.453 15.457 15.453h53.465c8.524 0 15.457-6.934 15.457-15.453v-53.47c0-8.523-6.933-15.456-15.457-15.456zm-53.922 68.926v-53.47c0-.253.203-.456.457-.456h19.23V437.8h-19.23a.454.454 0 0 1-.457-.453zm54.38 0c0 .25-.208.453-.458.453h-19.23v-54.38h19.23c.25 0 .457.204.457.458zm0 0"
                                    fill="currentColor"></path>
                                <path
                                    d="M511.664 213.34v-14.59c0-8.207-6.676-14.883-14.883-14.883h-15.879l-39.71-58.726a21.142 21.142 0 0 0-17.536-9.313H316.207L269.34 78.176a20.797 20.797 0 0 0-5.758-3.278V60.371l52.11-19.375c4.085-1.516 6.722-5.312 6.722-9.668s-2.637-8.148-6.719-9.668L258.848.527a7.555 7.555 0 0 0-3.523-.488c-.009 0-.016 0-.028.004-.043.004-.09.008-.133.016l-.098.011a7.464 7.464 0 0 0-3.633 1.547c-.015.012-.027.02-.038.031-.032.024-.063.047-.09.075l-.13.105c-.53.461-1.003 1-1.398 1.61l-.023.039-.059.093c-.015.028-.035.055-.05.082a.906.906 0 0 0-.032.055c-.027.047-.05.09-.078.137 0 0 0 .004-.004.004a7.456 7.456 0 0 0-.804 2.199 7.197 7.197 0 0 0-.141 1.629v47.308a4.928 4.928 0 0 0 0 .34v19.578a20.883 20.883 0 0 0-5.758 3.274l-46.871 37.652H88.512c-7.04 0-13.598 3.48-17.535 9.313l-39.715 58.726h-15.88C7.177 183.867.5 190.543.5 198.75v14.59c0 8.207 6.676 14.883 14.883 14.883h136.023v239.422H38.25V249.102c0-4.145-3.355-7.5-7.5-7.5a7.5 7.5 0 0 0-7.5 7.5v218.543h-7.867C7.176 467.645.5 474.32.5 482.527v14.59C.5 505.324 7.176 512 15.383 512H496.78c8.207 0 14.883-6.676 14.883-14.883v-14.59c0-8.207-6.676-14.882-14.883-14.882h-7.867V249.102c0-4.145-3.355-7.5-7.5-7.5a7.497 7.497 0 0 0-7.5 7.5v218.543H360.762V228.223h136.02c8.206 0 14.882-6.676 14.882-14.883zM496.781 497v7.5zm-73.125-366.172a6.16 6.16 0 0 1 5.11 2.715l34.03 50.324h-61.898l-66.02-53.039zm-160.074-86.46V18.288l35.07 13.04zm-11.36 45.503a6.089 6.089 0 0 1 3.192-1.312c.223.02.445.027.668.027.227 0 .45-.008.668-.027a6.101 6.101 0 0 1 3.195 1.312l117.004 93.996H135.22zm-168.82 43.672a6.16 6.16 0 0 1 5.11-2.715h88.773l-66.015 53.04H49.37zM15.5 213.223v-14.356h135.906v14.356zM496.664 497H15.5v-14.355h481.164zm-191.73-29.355h-41.352V363.883h35.29a6.068 6.068 0 0 1 6.062 6.062zm-56.352 0H207.23v-97.7c0-3.343 2.723-6.062 6.067-6.062h35.285zm71.352 0v-97.7c0-11.613-9.45-21.062-21.063-21.062h-85.574c-11.617 0-21.067 9.449-21.067 21.062v97.7h-25.824V198.867h179.356v268.778zm176.73-254.422H360.762v-14.356h135.902zm0 0"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <div class="useful-link__text">
                            Противодействие коррупции
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="main_news">
        <div class="container">
            <div class="tabs">
                <div class="tabs-header">
                    <div class="active">Новости</div>
                    <div>Объявления</div>
                    <div>Мероприятия</div>
                </div>
                <div class="tabs-contents">
                    <div class="active">
                        <div class="news-wrapper">
                            @foreach($news as $i => $item)
                                <a href="#" class="news_item">
                                    <div class="news_item__image">
                                        <img src="/assets/img/news/<?= $i == 0?'big':$i ?>.png" alt="">
                                    </div>
                                    <div class="news_item__content">
                                        <div class="news_date">{{ $item['date'] }}</div>
                                        <div class="news_item__title">{{ $item['title'] }}</div>
                                        <div class="news_item__description">{{ $item['desc'] }}</div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        <div class="main_news__more">
                            <a href="https://www.stu.lipetsk.ru/news/" class="btn btn--outlined">Подробнее</a>
                        </div>
                    </div>
                    <div>
                        <div class="announcements">
                            @foreach($announcements as $announcement)
                                <a href="#" class="announcement">
                                    <div class="announcement-content">
                                        <div class="announcement-content__title"><?= $announcement['title']; ?></div>
                                        @if(!empty($announcement['link']))
                                            <div
                                                class="announcement-content__description"><?= $announcement['description']; ?></div>
                                        @endif
                                    </div>
                                    <div class="announcement-date">
                                        <div class="announcement-date__date">
                                            <div>{{ explode(' ', $announcement['date'])[0] }}</div>
                                            {{ explode(' ', $announcement['date'])[1] }}
                                        </div>
                                        <div class="announcement-date__year">2024</div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        <div class="main_news__more">
                            <a href="https://www.stu.lipetsk.ru/struct/council/obyavleniya/" class="btn btn--outlined">Подробнее</a>
                        </div>
                    </div>
                    <div>
                        <div class="swiper events">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="/assets/img/announcement/1.jpg" alt=""></div>
                                <div class="swiper-slide"><img src="/assets/img/announcement/2.jpg" alt=""></div>
                                <div class="swiper-slide"><img src="/assets/img/announcement/3.jpg" alt=""></div>
                            </div>
                            <div class="swiper-button-prev">
                                <svg width="1em" height="1em">
                                    <use xlink:href="/assets/img/arrows.svg#left"/>
                                </svg>
                            </div>
                            <div class="swiper-button-next">
                                <svg width="1em" height="1em">
                                    <use xlink:href="/assets/img/arrows.svg#right"/>
                                </svg>
                            </div>
                            <div class="swiper-pagination slider-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
