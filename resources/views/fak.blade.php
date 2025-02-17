@extends('layouts.default')

@section('content')
    @include('parts.header.default')
    @include('parts.page-title', [
        'breadcrumbs' => [
            ['link' => '#', 'title' => 'Факультеты'],
            'Институт Компьютерных Технологий'
        ],
        'title' => 'Институт Компьютерных Технологий'
    ])
    <section class="fak-menu">
        <div class="container">
            <ul class="fak-menu-list">
                <li>
                    <button type="button">
                        Об институте
                        <svg width="12" height="12"><use xlink:href="/assets/img/arrows.svg#bottom" /></svg>
                    </button>
                    <div class="fak-submenu">
                        <ul>
                            <li><a href="#">Руководство</a></li>
                            <li><a href="#">Директорат</a></li>
                            <li><a href="#">Попечительский совет</a></li>
                            <li><a href="#">Ученый совет</a></li>
                            <li><a href="#">Положение об институте</a></li>
                            <li><a href="#">Лабораторная база</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button type="button">
                        Кафедры
                        <svg width="12" height="12"><use xlink:href="/assets/img/arrows.svg#bottom" /></svg>
                    </button>
                    <div class="fak-submenu">
                        <ul>
                            <li><a href="#">Руководство</a></li>
                            <li><a href="#">Руководство</a></li>
                            <li><a href="#">Руководство</a></li>
                            <li><a href="#">Руководство</a></li>
                            <li><a href="#">Руководство</a></li>
                            <li><a href="#">Руководство</a></li>
                            <li><a href="#">Руководство</a></li>
                            <li><a href="#">Руководство</a></li>
                            <li><a href="#">Руководство</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button type="button">
                        Деятельность
                        <svg width="12" height="12"><use xlink:href="/assets/img/arrows.svg#bottom" /></svg>
                    </button>
                    <div class="fak-submenu">
                        <ul>
                            <li><a href="#">Учебная</a></li>
                            <li><a href="#">Научная</a></li>
                            <li><a href="#">Внеучебная</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Газета "ФАИ.NEWS"</a></li>
            </ul>
        </div>
    </section>

    <section class="fak-info container">
        <div class="fak-info__logo">
            <img src="/assets/img/faks/IKN.svg" alt="">
        </div>
        <div class="fak-info__text">

            <p>Факультет автоматизации и информатики (ФАИ) был образован в 1988 году. По количеству направлений подготовки и обучающихся студентов ФАИ является одним из крупнейших в университете.</p>

            <p>В связи с реорганизацией 1 февраля 2024 года на базе факультета автоматизации и информатики (ФАИ) был создан институт компьютерных наук (ИКН).</p>

            <p>ИКН осуществляет подготовку бакалавров,&nbsp;магистров и кадров высшей квалификации в сферах создания, использования, сопровождения информационных систем и программных продуктов, систем и средств управления в различных отраслях, а также разработки, проектирования, эксплуатации автоматизированных электроприводов и систем электроснабжения. Многие реализуемые направления подготовки относятся к приоритетным направлениям развития науки, технологий и техники в РФ.</p>

            <p>В состав института&nbsp;входят кафедры <a href="[[~19]]">автоматизированных систем управления</a>, <a href="[[~20]]">информатики</a>, <a href="[[~21]]">прикладной математики</a>, <a href="[[~3585]]">автоматизированного электропривода и робототехники</a>. В рамках кафедр института&nbsp;сформированы и интенсивно развиваются научные школы.</p>
            <ul>
                <li>дополнительное образование детей и взрослых,
                    <ul>
                        <li>дополнительное образование детей и взрослых,</li>
                        <li>повышение квалификации,</li>
                        <li>профессиональную переподготовку,</li>
                        <li>обучающие курсы и семинары.</li>
                    </ul></li>
                <li>повышение квалификации,</li>
                <li>профессиональную переподготовку,</li>
                <li>обучающие курсы и семинары.</li>
            </ul>
            <p>В состав института&nbsp;входят кафедры <a href="[[~19]]">автоматизированных систем управления</a>, <a href="[[~20]]">информатики</a>, <a href="[[~21]]">прикладной математики</a>, <a href="[[~3585]]">автоматизированного электропривода и робототехники</a>. В рамках кафедр института&nbsp;сформированы и интенсивно развиваются научные школы.</p>
            <!--[[getResources? &parents=`[[LSTU_inner_id ? &parent_id=`14` &path=`chairs/`]]` &debug=`1` &sortby=`menuindex`]]-->
        </div>
    </section>

    <section class="fak-dean container">
        <div class="dean">
            <div class="dean__text">
                <h2>Галкин Александр Васильевич</h2>
                <h3>директор, к.т.н., доцент </h3>
                <p class="dean__contacts">
                    <a href="mailto:lstu-fai-decan@mail.ru">
                        <svg width="14" height="14"><use xlink:href="/assets/img/icons.svg#envelope"/></svg>
                        lstu-fai-decan@mail.ru
                    </a>
                    <a href="mailto:+74742328002">
                        <svg width="14" height="14"><use xlink:href="/assets/img/icons.svg#phone"/></svg>
                        +7 (4742) 32-80-02
                    </a>
                </p>
                <p>К1-343</p>
                <p></p>
                <h4>Директорат:</h4>
                <p class="dean__contacts">
                    <a href="mailto:lstu-fai-decan@mail.ru">
                        <svg width="14" height="14"><use xlink:href="/assets/img/icons.svg#envelope"/></svg>
                        fai@stu.lipetsk.ru
                    </a>
                    <a href="mailto:+74742328042">
                        <svg width="14" height="14"><use xlink:href="/assets/img/icons.svg#phone"/></svg>
                        +7 (4742) 32-80-42
                    </a>
                </p>
                <p>К1-344</p>
            </div>
            <div class="dean__image">
                <img src="/assets/img/faks/dean/ikn.png" alt="">
            </div>
        </div>
    </section>
    <section class="directions container">
        <h2 class="heading-2">Направления</h2>
        <div class="directions-list">
            <div class="direction">
                <div class="direction__heading">Бакалавриат</div>
                <div class="direction__content first" style="">
                    <h3><a href="kaf/asu.html">Кафедра автоматизированных систем управления</a></h3>

                    <ul>
                        <li>09.03.01 "Информатика и вычислительная техника",<br>
                            профиль <a href="http://legacy.stu.lipetsk.ru/education/chair/kaf-asu/education/bachelor/as/">"Автоматизированные системы обработки информации и управления"</a>;&nbsp;</li>
                        <li>02.03.03 "Математическое обеспечение и администрирование информационных систем",<br>
                            профиль <a href="http://legacy.stu.lipetsk.ru/education/chair/kaf-asu/education/bachelor/ai/">"Администрирование информационных систем"</a>;</li>
                        <li>09.03.04 "Программная инженерия",<br>
                            профиль <a href="http://legacy.stu.lipetsk.ru/education/chair/kaf-asu/education/bachelor/pi/">"Разработка программно-информационных систем"</a>.</li>
                    </ul>

                </div>
            </div>
            <div class="direction">
                <div class="direction__heading">Специалитет</div>
                <div class="direction__content second">
                    <ul>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                    </ul>
                </div>
            </div>
            <div class="direction">
                <div class="direction__heading">Магистратура</div>
                <div class="direction__content second">
                    <ul>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                    </ul>
                </div>
            </div>
            <div class="direction">
                <div class="direction__heading">Аспирантура</div>
                <div class="direction__content second">
                    <ul>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                        <li><a href="#">08.03.01 Строительство (Промышленное и гражданское строительство; Теплогазоснабжение, вентиляция, водоснабжение и водоотведение, Урбанистика и строительство)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="fak-partners">
        <div class="container">
            <h2 class="heading-2">Партнеры ИКН</h2>

            <div class="swiper fak-partners-slider">
                <div class="swiper-wrapper">
                        @foreach(\Illuminate\Support\Facades\Storage::disk('public')->files('fak/IKN/partners') as $file)
                            <div class="swiper-slide fak-partner">
                                <a href="#">
                                    <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($file) }}" title="{{ $file }}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </section>

    <section class="fak-graduates">
        <div class="container">
            <div class="swiper fak-graduates-slider">
                <div class="slider-heading">
                    <h2 class="heading-2">Выдающиеся выпускники</h2>
                    <div class="slider-heading__buttons">
                        <div class="swiper-button-prev">
                            <svg width="1em" height="1em">
                                <use xlink:href="http://localhost/assets/img/arrows.svg#left"></use>
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg width="1em" height="1em">
                                <use xlink:href="http://localhost/assets/img/arrows.svg#right"></use>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="swiper-wrapper">
                    <div class="fak-graduate swiper-slide">
                        <div class="fak-graduate__image">
                            <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('/fak/IKN/graduates/trubnikov.png') }}" alt="">
                        </div>
                        <div class="fak-graduate__position">академик РАН, директор Объединённого института ядерных исследований</div>
                        <div class="fak-graduate__name">Трубников Григорий Владимирович</div>
                    </div>
                    <div class="fak-graduate swiper-slide">
                        <div class="fak-graduate__image">
                            <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('/fak/IKN/graduates/trubnikov.png') }}" alt="">
                        </div>
                        <div class="fak-graduate__position">академик РАН, директор Объединённого института ядерных исследований</div>
                        <div class="fak-graduate__name">Трубников Григорий Владимирович</div>
                    </div>
                    <div class="fak-graduate swiper-slide">
                        <div class="fak-graduate__image">
                            <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('/fak/IKN/graduates/trubnikov.png') }}" alt="">
                        </div>
                        <div class="fak-graduate__position">академик РАН, директор Объединённого института ядерных исследований</div>
                        <div class="fak-graduate__name">Трубников Григорий Владимирович</div>
                    </div>
                    <div class="fak-graduate swiper-slide">
                        <div class="fak-graduate__image">
                            <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('/fak/IKN/graduates/trubnikov.png') }}" alt="">
                        </div>
                        <div class="fak-graduate__position">академик РАН, директор Объединённого института ядерных исследований</div>
                        <div class="fak-graduate__name">Трубников Григорий Владимирович</div>
                    </div>
                    <div class="fak-graduate swiper-slide">
                        <div class="fak-graduate__image">
                            <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('/fak/IKN/graduates/chebotarev.png') }}" alt="">
                        </div>
                        <div class="fak-graduate__position">академик РАН, директор Объединённого института ядерных исследований</div>
                        <div class="fak-graduate__name">Трубников Григорий Владимирович</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fak-news slider-wrapper">
        <div class="container">
            <div class="swiper news-slider">
                <div class="slider-heading">
                    <h2 class="heading-2">Новости</h2>
                    <div class="slider-heading__buttons">
                        <div class="swiper-button-prev">
                            <svg width="1em" height="1em">
                                <use xlink:href="http://localhost/assets/img/arrows.svg#left"></use>
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg width="1em" height="1em">
                                <use xlink:href="http://localhost/assets/img/arrows.svg#right"></use>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="swiper-wrapper">
                    @foreach($news as $card)
                        <div class="swiper-slide">
                            <a href="#" class="news-slider-card">
                                <div class="news-slider-card__image">
                                    <img src="/assets/img/news/1.jpg" alt=""/>
                                </div>
                                <div class="news-slider-card__date">{{ $card['date'] }}</div>
                                <div class="news-slider-card__title">{{ $card['title'] }}</div>
                                <div class="news-slider-card__description">{{ $card['desc'] }}</div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
