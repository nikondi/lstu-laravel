@extends('layouts.default')

@section('content')
    @include('parts.header.default')
    @include('parts.page-title', [
        'breadcrumbs' => [
            ['link' => route('abit'), 'title' => 'Абитуриенту'],
        ],
        'title' => 'Будущему студенту'
    ])

    <section class="default-section" style="margin-top: 0">
        <div class="container formatted-text">
            <ul>
                <li><a href="abit/future-students/inzhenernaya-olimpiada-shkolnikov-czentra-rossii/">Инженерная Олимпиада школьников Центра России</a>
                </li></ul>
        </div>
    </section>

    <section class="abit-future-dates slider-wrapper">
        <div class="container">
            <div class="swiper abit-future-dates-slider">
                <div class="slider-heading">
                    <h2 class="heading-2">Сроки поступления на бакалавриат, специалитет и базовое высшее</h2>
                    <div class="slider-heading__buttons">
                        <div
                            class="slider-heading__button swiper-button-prev swiper-button-disabled swiper-button-lock">
                            <svg width="1em" height="1em">
                                <use xlink:href="/assets/img/arrows.svg#left"></use>
                            </svg>
                        </div>
                        <div
                            class="slider-heading__button swiper-button-next swiper-button-disabled swiper-button-lock">
                            <svg width="1em" height="1em">
                                <use xlink:href="/assets/img/arrows.svg#right"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    @foreach($dates as $date)
                        <div class="swiper-slide">
                            <div class="abit-future-date">
                                <div class="abit-future-date__heading">
                                    <div class="abit-future-date__date">
                                        <div class="abit-future-date__day">{{ $date['day'] }}</div>
                                        <div class="abit-future-date__month">{{ $date['month'] }}</div>
                                    </div>
                                    <div class="abit-future-date__time">{{ $date['time'] }}</div>
                                </div>
                                <div class="abit-future-date__text">{{ $date['title'] }}</div>
                                @if(!empty($date['description']))
                                    <div class="abit-future-date__description">{{ $date['description'] }}</div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    <section class="abit-future-booklets slider-wrapper">
        <div class="container">
            <div class="abit-future-booklets-wrapper">
                <div class="abit-future-booklet-slider">
                    <div class="swiper gallery">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="/assets/img/abit/future/booklet/z-map-1.jpg" data-fancybox="z-map">
                                    <img src="/assets/img/abit/future/booklet/z-map-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="/assets/img/abit/future/booklet/z-map-2.jpg" data-fancybox="z-map">
                                    <img src="/assets/img/abit/future/booklet/z-map-2.jpg" alt="">
                                </a>
                            </div>
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
                <div class="abit-future-booklet-slider">
                    <div class="swiper gallery">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="/assets/img/abit/future/booklet/spo-1.jpg" data-fancybox="spo">
                                    <img src="/assets/img/abit/future/booklet/spo-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="/assets/img/abit/future/booklet/spo-2.jpg" data-fancybox="spo">
                                    <img src="/assets/img/abit/future/booklet/spo-2.jpg" alt="">
                                </a>
                            </div>
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
    </section>

    <section class="default-section">
        <div class="container">
            <h2 class="abit-future-title">Об институтах и колледже</h2>
            <div class="abit-future-tabs">
                <div class="abit-future-tabs-triggers">
                    <div class="abit-future-tabs-trigger fak-color--ikn active">
                        <div class="fak-logo">
                            <svg width="32" class="fak-logo__logo">
                                <use xlink:href="/assets/img/faks-only-logo.svg#ikn"/>
                            </svg>
                        </div>
                        <div class="abit-future-tabs-trigger__name">ИКН</div>
                    </div>
                    <div class="abit-future-tabs-trigger fak-color--imit">
                        <div class="fak-logo">
                            <svg width="32" class="fak-logo__logo">
                                <use xlink:href="/assets/img/faks-only-logo.svg#imit"/>
                            </svg>
                        </div>
                        <div class="abit-future-tabs-trigger__name">ИМиТ</div>
                    </div>
                    <div class="abit-future-tabs-trigger fak-color--isa">
                        <div class="fak-logo">
                            <svg width="32" class="fak-logo__logo">
                                <use xlink:href="/assets/img/faks-only-logo.svg#isa"/>
                            </svg>
                        </div>
                        <div class="abit-future-tabs-trigger__name">ИСА</div>
                    </div>
                    <div class="abit-future-tabs-trigger fak-color--isnep">
                        <div class="fak-logo">
                            <svg width="32" class="fak-logo__logo">
                                <use xlink:href="/assets/img/faks-only-logo.svg#isnep"/>
                            </svg>
                        </div>
                        <div class="abit-future-tabs-trigger__name">ИСНЭП</div>
                    </div>
                    <div class="abit-future-tabs-trigger fak-color--uk">
                        <div class="fak-logo">
                            <svg width="32" class="fak-logo__logo">
                                <use xlink:href="/assets/img/faks-only-logo.svg#uk"/>
                            </svg>
                        </div>
                        <div class="abit-future-tabs-trigger__name">УК</div>
                    </div>
                    <div class="abit-future-tabs-trigger fak-color--mi">
                        <div class="fak-logo">
                            <svg width="32" class="fak-logo__logo">
                                <use xlink:href="/assets/img/faks-only-logo.svg#mi"/>
                            </svg>
                        </div>
                        <div class="abit-future-tabs-trigger__name">МИ</div>
                    </div>
                    <div class="abit-future-tabs-trigger fak-color--fei">
                        <div class="fak-logo">
                            <svg width="32" class="fak-logo__logo">
                                <use xlink:href="/assets/img/faks-only-logo.svg#fei"/>
                            </svg>
                        </div>
                        <div class="abit-future-tabs-trigger__name">ФЭИ</div>
                    </div>
                </div>
                <div class="abit-future-tab active">
                    <div class="abit-future-presentation gallery swiper">
                        <div class="swiper-wrapper">
                            @for($i = 1; $i <= 8; $i++)
                                <div class="swiper-slide">
                                    <a href="/assets/img/abit/future/presentation/ikn/{{ $i }}.jpg" data-fancybox="ikn">
                                        <img src="/assets/img/abit/future/presentation/ikn/{{ $i }}.jpg" alt="">
                                    </a>
                                </div>
                            @endfor
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
                <div class="abit-future-tab">
                    <div class="abit-future-presentation gallery swiper">
                        <div class="swiper-wrapper">
                            @for($i = 1; $i <= 11; $i++)
                                <div class="swiper-slide">
                                    <a href="/assets/img/abit/future/presentation/imit/{{ $i }}.jpg"
                                       data-fancybox="imit">
                                        <img src="/assets/img/abit/future/presentation/imit/{{ $i }}.jpg" alt="">
                                    </a>
                                </div>
                            @endfor
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
                <div class="abit-future-tab">
                    <div class="abit-future-presentation gallery swiper">
                        <div class="swiper-wrapper">
                            @for($i = 1; $i <= 6; $i++)
                                <div class="swiper-slide">
                                    <a href="/assets/img/abit/future/presentation/isa/{{ $i }}.jpg" data-fancybox="isa">
                                        <img src="/assets/img/abit/future/presentation/isa/{{ $i }}.jpg" alt="">
                                    </a>
                                </div>
                            @endfor
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
                <div class="abit-future-tab">
                    <div class="abit-future-presentation gallery swiper">
                        <div class="swiper-wrapper">
                            @for($i = 1; $i <= 9; $i++)
                                <div class="swiper-slide">
                                    <a href="/assets/img/abit/future/presentation/isnep/{{ $i }}.jpg"
                                       data-fancybox="isnep">
                                        <img src="/assets/img/abit/future/presentation/isnep/{{ $i }}.jpg" alt="">
                                    </a>
                                </div>
                            @endfor
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
                <div class="abit-future-tab">
                    <div class="abit-future-presentation gallery swiper">
                        <div class="swiper-wrapper">
                            @for($i = 1; $i <= 7; $i++)
                                <div class="swiper-slide">
                                    <a href="/assets/img/abit/future/presentation/uk/{{ $i }}.jpg" data-fancybox="uk">
                                        <img src="/assets/img/abit/future/presentation/uk/{{ $i }}.jpg" alt="">
                                    </a>
                                </div>
                            @endfor
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

                <div class="abit-future-tab">
                    <div class="abit-future-presentation gallery swiper">
                        <div class="swiper-wrapper">
                            @for($i = 1; $i <= 9; $i++)
                                <div class="swiper-slide">
                                    <a href="/assets/img/abit/future/presentation/mi/{{ $i }}.jpg" data-fancybox="mi">
                                        <img src="/assets/img/abit/future/presentation/mi/{{ $i }}.jpg" alt="">
                                    </a>
                                </div>
                            @endfor
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
                <div class="abit-future-tab">
                    <div class="abit-future-presentation gallery swiper">
                        <div class="swiper-wrapper">
                            @for($i = 1; $i <= 7; $i++)
                                <div class="swiper-slide">
                                    <a href="/assets/img/abit/future/presentation/fei/{{ $i }}.jpg" data-fancybox="fei">
                                        <img src="/assets/img/abit/future/presentation/fei/{{ $i }}.jpg" alt="">
                                    </a>
                                </div>
                            @endfor
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
    </section>
    <section class="default-section">
        <div class="container">
            <h2 class="abit-future-title">День открытых дверей</h2>
            <div class="abit-future-tabs">
                <div class="abit-future-tabs-triggers">
                    <div class="abit-future-tabs-trigger fak-color--ikn active">
                        <div class="fak-logo">
                            <svg width="32" class="fak-logo__logo">
                                <use xlink:href="/assets/img/faks-only-logo.svg#ikn"/>
                            </svg>
                        </div>
                        <div class="abit-future-tabs-trigger__name">ИКН</div>
                    </div>
                    <div class="abit-future-tabs-trigger fak-color--imit">
                        <div class="fak-logo">
                            <svg width="32" class="fak-logo__logo">
                                <use xlink:href="/assets/img/faks-only-logo.svg#imit"/>
                            </svg>
                        </div>
                        <div class="abit-future-tabs-trigger__name">ИМиТ</div>
                    </div>
                    <div class="abit-future-tabs-trigger fak-color--isa">
                        <div class="fak-logo">
                            <svg width="32" class="fak-logo__logo">
                                <use xlink:href="/assets/img/faks-only-logo.svg#isa"/>
                            </svg>
                        </div>
                        <div class="abit-future-tabs-trigger__name">ИСА</div>
                    </div>
                    <div class="abit-future-tabs-trigger fak-color--isnep">
                        <div class="fak-logo">
                            <svg width="32" class="fak-logo__logo">
                                <use xlink:href="/assets/img/faks-only-logo.svg#isnep"/>
                            </svg>
                        </div>
                        <div class="abit-future-tabs-trigger__name">ИСНЭП</div>
                    </div>
                    <div class="abit-future-tabs-trigger fak-color--uk">
                        <div class="fak-logo">
                            <svg width="32" class="fak-logo__logo">
                                <use xlink:href="/assets/img/faks-only-logo.svg#uk"/>
                            </svg>
                        </div>
                        <div class="abit-future-tabs-trigger__name">УК</div>
                    </div>
                    <div class="abit-future-tabs-trigger fak-color--mi">
                        <div class="fak-logo">
                            <svg width="32" class="fak-logo__logo">
                                <use xlink:href="/assets/img/faks-only-logo.svg#mi"/>
                            </svg>
                        </div>
                        <div class="abit-future-tabs-trigger__name">МИ</div>
                    </div>
                    <div class="abit-future-tabs-trigger fak-color--fei">
                        <div class="fak-logo">
                            <svg width="32" class="fak-logo__logo">
                                <use xlink:href="/assets/img/faks-only-logo.svg#fei"/>
                            </svg>
                        </div>
                        <div class="abit-future-tabs-trigger__name">ФЭИ</div>
                    </div>
                </div>
                <div class="abit-future-tab active">
                    <iframe width="100%" height="405"
                            src="https://rutube.ru/play/embed/e5b5f4a95fae30c05aae086ffee54909/" style="border: none;"
                            allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen
                            allowFullScreen></iframe>
                </div>
                <div class="abit-future-tab">
                    2
                </div>
                <div class="abit-future-tab">
                    3
                </div>
                <div class="abit-future-tab">
                    4
                </div>
                <div class="abit-future-tab">
                    5
                </div>
                <div class="abit-future-tab">
                    6
                </div>
                <div class="abit-future-tab">
                    7
                </div>
            </div>
        </div>
    </section>

    <section class="formatted-text default-section">
        <div class="container">
            <h2>Курсы по подготовке к ОГЭ и ЕГЭ</h2>
            <ul>
                <li>Очные занятия по подготовке к поступлению на направления «Архитектура» и «Градостроительство»<br/>
                    Преподаватель: Карандашева Мария Константиновна, старший преподаватель кафедры архитектуры<br/>
                    Расписание занятий:<br/>
                    Площадка проведения: ул. Московская, 30, корп. 3, ауд. 268<br/>
                    Обязательная предварительная запись: (4742) 328 127, 8&nbsp;951&nbsp;303 19 00, отдел по
                    профориентационной
                    работе
                </li>

                <li>Дистанционные занятия по подготовке к ЕГЭ по информатике
                    Преподаватель: Гаев Леонид Витальевич, кандидат технических наук, доцент кафедры автоматизированных
                    систем управления
                    Расписание занятий:
                    Площадка проведения: ссылка
                    ! Обязательная предварительная запись: (4742) 328 127, 8&nbsp;951&nbsp;303 19 00, отдел по
                    профориентационной работе
                </li>

                <li> Видео-уроки по физике для подготовки к ЕГЭ
                    ссылка
                </li>
            </ul>

        </div>
    </section>
@endsection
