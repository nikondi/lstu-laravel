@extends('layouts.default')

@section('content')
    @include('parts.header.default')
    @include('parts.page-title', [
        'breadcrumbs' => [
            ['link' => route('abit'), 'title' => 'Абитуриенту'],
        ],
        'title' => 'Будущему студенту'
    ])


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

    <section>
        <div class="container">
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
                    <h4>Об институте</h4>
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
                    <h4>Об институте</h4>
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
                    <h4>Об институте</h4>
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
                    <h4>Об институте</h4>
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
                    <h4>О колледже</h4>
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
                    <h4>Об институте</h4>
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
                    <h4>Об институте</h4>
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
