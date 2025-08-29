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
    <section class="slider-wrapper">
        <div class="container">
            <div class="staff-slider swiper">
                <div class="slider-heading">
                    <h2 class="heading-2">Сотрудники</h2>
                    <div class="slider-heading__buttons">
                        <div class="slider-heading__button swiper-button-prev">
                            <svg width="1em" height="1em">
                                <use xlink:href="/assets/img/arrows.svg#left"></use>
                            </svg>
                        </div>
                        <div class="slider-heading__button swiper-button-next">
                            <svg width="1em" height="1em">
                                <use xlink:href="/assets/img/arrows.svg#right"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/syisoev_anton_sergeevich.jpg" alt=""></div>
                            <div class="employee-card__position">Заведующий кафедрой</div>
                            <div class="employee-card__name">Сысоев Антон Сергеевич</div>
                            <div class="employee-card__academic">Кандидат технических наук, доцент</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/pogodaev.png" alt=""></div>
                            <div class="employee-card__position"></div>
                            <div class="employee-card__name">Погодаев Анатолий Кирьянович</div>
                            <div class="employee-card__academic">Доктор технических наук, профессор</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/lubenecz_yurij_vladimirovich.jpg" alt=""></div>
                            <div class="employee-card__position"></div>
                            <div class="employee-card__name">Лубенец Юрий Владимирович</div>
                            <div class="employee-card__academic">Кандидат физико-математических наук, доцент</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/miroshnikov_artyom_igorevich.jpg" alt=""></div>
                            <div class="employee-card__position"></div>
                            <div class="employee-card__name">Мирошников Артём Игоревич</div>
                            <div class="employee-card__academic">Кандидат технических наук, доцент</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/oreshina_mariya_nikolaevna.jpg" alt=""></div>
                            <div class="employee-card__position"></div>
                            <div class="employee-card__name">Орешина Мария Николаевна</div>
                            <div class="employee-card__academic">Кандидат физико-математических наук, доцент</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/zhbanova_natalya_yurevna.jpg" alt=""></div>
                            <div class="employee-card__position"></div>
                            <div class="employee-card__name">Жбанова Наталья Юрьевна</div>
                            <div class="employee-card__academic">Кандидат технических наук, доцент</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/zhbanov_sergej_aleksandrovich.jpg" alt=""></div>
                            <div class="employee-card__position">Старший преподаватель, преподаватель СПО, ответственный секретарь приёмной комиссии ФАИ</div>
                            <div class="employee-card__name">Жбанов Сергей Александрович</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/kuzneczova_elena_vasilevna.jpg" alt=""></div>
                            <div class="employee-card__position"></div>
                            <div class="employee-card__name">Кузнецова Елена Васильевна</div>
                            <div class="employee-card__academic">Кандидат физико-математических наук, доцент</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/levina_lyubov_vladimirovna.jpg" alt=""></div>
                            <div class="employee-card__position"></div>
                            <div class="employee-card__name">Левина Любовь Владимировна</div>
                            <div class="employee-card__academic">Кандидат физико-математических наук, доцент</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/sedyix_irina_aleksandrovna.jpg" alt=""></div>
                            <div class="employee-card__position"></div>
                            <div class="employee-card__name">Седых Ирина Александровна</div>
                            <div class="employee-card__academic">Доктор технических наук, профессор</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/domashneva_ekaterina_leonidovna.jpg" alt=""></div>
                            <div class="employee-card__position">Старший преподаватель</div>
                            <div class="employee-card__name">Домашнева Екатерина Леонидовна</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/zhixoreva_svetlana_viktorovna.jpg" alt=""></div>
                            <div class="employee-card__position">Ассистент, преподаватель СПО</div>
                            <div class="employee-card__name">Жихорева Светлана Викторовна</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/akulova_svetlana_aleksandrovna.jpg" alt=""></div>
                            <div class="employee-card__position"></div>
                            <div class="employee-card__name">Акулова Светлана Александровна</div>
                            <div class="employee-card__academic">Ассистент, преподаватель СПО</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/matyunin_andrej_gennadevich.jpg" alt=""></div>
                            <div class="employee-card__position">Заведующий лабораторией, преподаватель СПО</div>
                            <div class="employee-card__name">Матюнин Андрей Геннадьевич</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/korobova_natalya_viktorovna.jpg" alt=""></div>
                            <div class="employee-card__position">Секретарь кафедры высшей математики</div>
                            <div class="employee-card__name">Коробова Наталья Викторовна</div>
                            <div class="employee-popup popup">
                                <div class="popup-background"></div>
                                <div class="popup-content">
                                    <div class="popup-close"></div>
                                    <div class="employee-popup__head">
                                        <div class="employee-popup__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/korobova_natalya_viktorovna.jpg" alt=""></div>
                                        <div class="employee-popup__info">
                                            <div class="employee-popup__position">Секретарь кафедры высшей математики</div>
                                            <div class="employee-popup__name">Коробова Наталья Викторовна</div>
                                        </div>
                                    </div>
                                    <div class="employee-popup__description">
                                        <p>В ЛГТУ работает в 1997 года, на кафедре высшей математики с 1998 года.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="employee-card__button">
                                <button>Подробнее <svg height="1em" width="1em"><use xlink:href="/assets/img/arrows.svg#right"></use></svg></button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/shmyirin_anatolij_mixajlovich.jpg" alt=""></div>
                            <div class="employee-card__position">профессор</div>
                            <div class="employee-card__name">Шмырин Анатолий Михайлович</div>
                            <div class="employee-card__academic">Доктор технических наук</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/shherbakov_artem_petrovich.jpg" alt=""></div>
                            <div class="employee-card__position">старший преподаватель, заместитель директора по учебной работе физико-энергетического института</div>
                            <div class="employee-card__name">Щербаков Артем Петрович</div>
                            <div class="employee-card__academic">Кандидат технических наук</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="" alt=""></div>
                            <div class="employee-card__position">Преподаватель СПО</div>
                            <div class="employee-card__name">Бобылев Александр Игоревич</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="" alt=""></div>
                            <div class="employee-card__position">Преподаватель СПО</div>
                            <div class="employee-card__name">Бузин Валерий Васильевич</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/denisenko_yurij_ivanovich.jpg" alt=""></div>
                            <div class="employee-card__position">Старший преподаватель</div>
                            <div class="employee-card__name">Денисенко Юрий Иванович</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/dobryinina_irina_igorevna.jpg" alt=""></div>
                            <div class="employee-card__position">Преподаватель СПО</div>
                            <div class="employee-card__name">Добрынина Ирина Игоревна</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/dyachkin_oleg_dmitrievich.jpg" alt=""></div>
                            <div class="employee-card__position">доцент</div>
                            <div class="employee-card__name">Дячкин Олег Дмитриевич</div>
                            <div class="employee-card__academic">Кандидат физико-математических наук</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="" alt=""></div>
                            <div class="employee-card__position">Преподаватель СПО</div>
                            <div class="employee-card__name">Казьмина Лилия Николаевна</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="" alt=""></div>
                            <div class="employee-card__position">доцент, профессор</div>
                            <div class="employee-card__name">Корнеев Андрей Мастиславович</div>
                            <div class="employee-card__academic">Доктор технических наук</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/luzyanina_natalya_vladimirovna.jpg" alt=""></div>
                            <div class="employee-card__position">доцент, Преподаватель СПО</div>
                            <div class="employee-card__name">Лузянина Наталья Владимировна</div>
                            <div class="employee-card__academic">Кандидат педагогических наук</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="" alt=""></div>
                            <div class="employee-card__position">доцент</div>
                            <div class="employee-card__name">Мишачёв Николай Михайлович</div>
                            <div class="employee-card__academic">Кандидат физико-математических наук</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="" alt=""></div>
                            <div class="employee-card__position">старший преподаватель (внешний совместитель)</div>
                            <div class="employee-card__name">Немец Сергей Юрьевич</div>
                            <div class="employee-card__academic">Кандидат технических наук</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/palinchak_natalya_ferenczovna.jpg" alt=""></div>
                            <div class="employee-card__position">доцент</div>
                            <div class="employee-card__name">Палинчак Наталья Ференцовна</div>
                            <div class="employee-card__academic">Кандидат физико-математических наук</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="" alt=""></div>
                            <div class="employee-card__position">профессор</div>
                            <div class="employee-card__name">Пеньков Виктор Борисович</div>
                            <div class="employee-card__academic">Доктор физико-математических наук</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/popov_roman_valerevich.jpg" alt=""></div>
                            <div class="employee-card__position">Преподаватель СПО</div>
                            <div class="employee-card__name">Попов Роман Валерьевич</div>
                            <div class="employee-card__academic">кандидата технических наук </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/smetannikova_tatyana_andreevna.jpg" alt=""></div>
                            <div class="employee-card__position">доцент</div>
                            <div class="employee-card__name">Сметанникова Татьяна Андреевна</div>
                            <div class="employee-card__academic">кандидат технических наук</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="http://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/suprunov_igor_ivanovich.jpg" alt=""></div>
                            <div class="employee-card__position">старший преподаватель</div>
                            <div class="employee-card__name">Супрунов Игорь Иванович</div>
                            <div class="employee-card__academic">Кандидат технических наук</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="" alt=""></div>
                            <div class="employee-card__position">доцент, Заместитель директора по научной работе физико-энергетического института</div>
                            <div class="employee-card__name">Сёмина Валерия Владимировна</div>
                            <div class="employee-card__academic">Кандидат технических наук</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="" alt=""></div>
                            <div class="employee-card__position">доцент, Преподаватель СПО</div>
                            <div class="employee-card__name">Семиряжко Вера Александровна</div>
                            <div class="employee-card__academic">Кандидат педагогических наук</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
