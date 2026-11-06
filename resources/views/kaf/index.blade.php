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

    <section class="fak-info container">
        <div class="fak-info__logo">
            <img class="LSTU-fak-logo" src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-diz/i/logo.jpg" alt="">

        </div>
        <div class="fak-info__text">
            <p>Кафедра художественной обработки материалов была открыта в 1998 году. В образовании новой специальности
                участвовали Епископ Липецкий и Елецкий Никон - профессор Российской Петровской академии наук и искусств
                Санкт-Петербурга, доктор наук, профессор Гамов Е.С. и непосредственно руководство вуза. С открытием
                новой специальности "Дизайн" в 2005 году она была переименована в кафедру дизайна и художественной
                обработки материалов.</p>

            <p>Основная цель создания кафедры - дать возможность наиболее одаренным выпускникам средних школ г. Липецка,
                Липецкой области и других регионов получать высшее профессиональное образование в области науки и
                искусства, а также способствовать сохранению и развитию художественно-промышленного производства, как в
                регионе, так и в Российской Федерации.</p>

            <p>В настоящее время состав кафедры формируют высококвалифицированные специалисты – профессионалы в области
                дизайна и художественных технологий: в их число входят 2 доктора наук, профессора, 7 доцентов – 3
                кандидата наук и 4 члена Союза Дизайнеров России, а также квалифицированные преподаватели СПО. С 2021
                года кафедру возглавляет доктор искусствоведения, профессор Орлов Игорь Иванович, почетный член
                Российской академии художеств, действительный член Российской академии естествознания, действительный
                член Российской Петровской Академии наук и искусств Санкт-Петербурга, академик Национальной Академии
                дизайна РФ, почетный доктор наук International Academy of Natural History (UK-Lоndon), член Союза
                художников РФ и член Союза дизайнеров РФ.</p>

            <p>Специализированные лаборатории кафедры оснащены учебно-лабораторными установками, компьютерами с
                необходимым общим и специализированным программным обеспечением.</p>

            <p>Кафедра сотрудничает: с Российской Академией Художеств, Российским государственным
                художественно-промышленным университетом им. С.Г. Строганова, Национальной Академией художеств Монголии,
                университетом им. Паисия Хилендарского г. Пловдива (Болгария), Главное управление МЧС России по Липецкой
                области, Липецкой Митрополией Русской Православной Церкви, Росгвардией и предприятиями: ОАО «Боринское»,
                ООО «Рекламные-Технологии», ООО «ЮВЕМАСТ», ООО «ЕТМ-ИНЖИНИРИНГ», ООО Дизайн-центр «Неон-Лайн», и др.</p>

            <p><strong>На кафедре осуществляется подготовка:</strong></p>

            <p>- среднее профессиональное образование (СПО)</p>

            <ul>
                <li><em>54.02.01 Дизайн (по отраслям).</em><br>
                    Выпускники могут работать в таких областях, как архитектура, средства массовой информации,
                    издательство и полиграфия, лёгкая и текстильная промышленность, сервис и оказание услуг населению и
                    другие.
                </li>
            </ul>

            <p>- бакалавриат по направлениям:</p>

            <ul>
                <li><em>29.03.04 «Технология художественной обработки материалов»</em><br>
                    «Технология художественной обработки материалов» — специальность, которая занимается изучением
                    различных методов и техник обработки материалов с целью создания художественных и декоративных
                    изделий. Программа включает практические занятия в мастерских и на фабриках, где студенты
                    непосредственно работают с материалами и инструментами.<br>
                    Некоторые профессии, которые могут получить выпускники: дизайнеры предметов интерьера, ювелирные
                    дизайнеры, художники по работе с различными материалами, реставраторы арт-объектов, мастера по
                    созданию декоративных элементов и фасадов, а также ведущие специалисты на предприятиях
                    художественных производств.
                </li>
                <li><em>54.03.01 «Дизайн»</em><br>
                    Направление подготовки «Дизайн» — это направление бакалавриата, охватывающее изучение различных
                    направлений дизайна, включая графический, промышленный, веб-дизайн и интерьерный дизайн.<br>
                    Специальность направлена на развитие творческих и технических навыков для создания функциональных и
                    эстетически привлекательных продуктов и пространств.<br>
                    Выпускники могут работать графическими дизайнерами, дизайнерами интерьеров, модельерами, дизайнерами
                    упаковки, арт-директорами в рекламных и дизайн-агентствах, а также заниматься фрилансом или
                    открывать собственные дизайн-студии.
                </li>
            </ul>

            <p>- магистратура по направлениям:</p>

            <ul>
                <li><em>29.04.04 «Технология художественной обработки материалов»</em><br>
                    Магистратура по направлению подготовки «Технология художественной обработки материалов» предполагает
                    изучение и применение различных методов и техник для художественной обработки материалов, включая
                    металл, дерево, стекло и другие.<br>
                    Специалисты в области художественной обработки материалов востребованы в музейном деле, реставрации,
                    ювелирном искусстве и дизайне интерьеров. Выпускники могут занимать позиции в дизайнерских бюро, на
                    производстве и в мастерских по производству изделий декоративно-прикладного творчества и
                    функциональных изделий для широкого потребителя
                </li>
                <li><em>54.04.01 «Дизайн»</em><br>
                    Магистратура по направлению подготовки «Дизайн» охватывает различные области применения, включая
                    визуальную коммуникацию, промышленный дизайн, мультимедиа и интерактивный дизайн.<br>
                    Выпускники магистратуры по направлению «Дизайн» могут работать в различных областях, где
                    востребованы специалисты в сфере дизайна, а так же в сферах, связанных с образованием и наукой,
                    архитектурой, средствами массовой информации, издательством и полиграфией, лёгкой и текстильной
                    промышленностью, автомобилестроением.
                </li>
            </ul>

            <p>Кроме этого, выпускники имеют возможность продолжить обучение в аспирантуре по научной специальности
                5.10.1. «Теория и история культуры, искусства», участвуя в научно-исследовательской работе под
                руководством преподавателей кафедры.</p>

        </div>
    </section>

    <section class="slider-wrapper">
        <div class="container">
            <div class="staff-slider">
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
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <?php
                                $employee = [
                                    'image' => 'https://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/korobova_natalya_viktorovna.jpg',
                                    'position' => 'Секретарь кафедры высшей математики',
                                    'name' => 'Коробова Наталья Викторовна',
                                    'description' => '<p>Образование: высшее</p>
                                    <ol>
                                        <li>Металловедение, оборудование и технология термической обработки металлов.
                                            Инженер-металлург.
                                        </li>
                                    </ol>

                                    <p><strong>Преподаваемые дисциплины:</strong></p>

                                    <p>29.03.04 - Технология художественной обработки материалов<br>
                                        (Технологии легкой промышленности)</p>

                                    <ul>
                                        <li>Мастерство</li>
                                        <li>Материаловедение</li>
                                        <li>Материалы ювелирной техники</li>
                                    </ul>
                                    <p>Общий стаж: 33 года</p>
                                    <p>Стаж работы по специальности: 20 лет</p>'
                                ];
                                ?>
                                <div class="employee-card__image">
                                    <button class="employee-card__button"
                                            data-employee="<?= htmlspecialchars(json_encode($employee)) ?>">
                                        Подробнее
                                        <svg height="1em" width="1em">
                                            <use xlink:href="/assets/img/arrows.svg#right"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="employee-card__position">профессор</div>
                                <div class="employee-card__name">Шмырин Анатолий Михайлович</div>
                                <div class="employee-card__academic">Доктор технических наук</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image">
                                    <img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/syisoev_anton_sergeevich.jpg"
                                        alt="">

                                    <button class="employee-card__button">Подробнее
                                        <svg height="1em" width="1em">
                                            <use xlink:href="/assets/img/arrows.svg#right"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="employee-card__position">Заведующий кафедрой</div>
                                <div class="employee-card__name">Сысоев Антон Сергеевич</div>
                                <div class="employee-card__academic">Кандидат технических наук, доцент</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/pogodaev.png" alt="">
                                </div>
                                <div class="employee-card__position"></div>
                                <div class="employee-card__name">Погодаев Анатолий Кирьянович</div>
                                <div class="employee-card__academic">Доктор технических наук, профессор</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/lubenecz_yurij_vladimirovich.jpg"
                                        alt=""></div>
                                <div class="employee-card__position"></div>
                                <div class="employee-card__name">Лубенец Юрий Владимирович</div>
                                <div class="employee-card__academic">Кандидат физико-математических наук, доцент</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/miroshnikov_artyom_igorevich.jpg"
                                        alt=""></div>
                                <div class="employee-card__position"></div>
                                <div class="employee-card__name">Мирошников Артём Игоревич</div>
                                <div class="employee-card__academic">Кандидат технических наук, доцент</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/oreshina_mariya_nikolaevna.jpg"
                                        alt=""></div>
                                <div class="employee-card__position"></div>
                                <div class="employee-card__name">Орешина Мария Николаевна</div>
                                <div class="employee-card__academic">Кандидат физико-математических наук, доцент</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/zhbanova_natalya_yurevna.jpg"
                                        alt=""></div>
                                <div class="employee-card__position"></div>
                                <div class="employee-card__name">Жбанова Наталья Юрьевна</div>
                                <div class="employee-card__academic">Кандидат технических наук, доцент</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/zhbanov_sergej_aleksandrovich.jpg"
                                        alt=""></div>
                                <div class="employee-card__position">Старший преподаватель, преподаватель СПО,
                                    ответственный
                                    секретарь приёмной комиссии ФАИ
                                </div>
                                <div class="employee-card__name">Жбанов Сергей Александрович</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/kuzneczova_elena_vasilevna.jpg"
                                        alt=""></div>
                                <div class="employee-card__position"></div>
                                <div class="employee-card__name">Кузнецова Елена Васильевна</div>
                                <div class="employee-card__academic">Кандидат физико-математических наук, доцент</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/levina_lyubov_vladimirovna.jpg"
                                        alt=""></div>
                                <div class="employee-card__position"></div>
                                <div class="employee-card__name">Левина Любовь Владимировна</div>
                                <div class="employee-card__academic">Кандидат физико-математических наук, доцент</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/sedyix_irina_aleksandrovna.jpg"
                                        alt=""></div>
                                <div class="employee-card__position"></div>
                                <div class="employee-card__name">Седых Ирина Александровна</div>
                                <div class="employee-card__academic">Доктор технических наук, профессор</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/domashneva_ekaterina_leonidovna.jpg"
                                        alt=""></div>
                                <div class="employee-card__position">Старший преподаватель</div>
                                <div class="employee-card__name">Домашнева Екатерина Леонидовна</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/zhixoreva_svetlana_viktorovna.jpg"
                                        alt=""></div>
                                <div class="employee-card__position">Ассистент, преподаватель СПО</div>
                                <div class="employee-card__name">Жихорева Светлана Викторовна</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/akulova_svetlana_aleksandrovna.jpg"
                                        alt=""></div>
                                <div class="employee-card__position"></div>
                                <div class="employee-card__name">Акулова Светлана Александровна</div>
                                <div class="employee-card__academic">Ассистент, преподаватель СПО</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-pm/staff/matyunin_andrej_gennadevich.jpg"
                                        alt=""></div>
                                <div class="employee-card__position">Заведующий лабораторией, преподаватель СПО</div>
                                <div class="employee-card__name">Матюнин Андрей Геннадьевич</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/korobova_natalya_viktorovna.jpg"
                                        alt=""></div>
                                <div class="employee-card__position">Секретарь кафедры высшей математики</div>
                                <div class="employee-card__name">Коробова Наталья Викторовна</div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/shherbakov_artem_petrovich.jpg"
                                        alt=""></div>
                                <div class="employee-card__position">старший преподаватель, заместитель директора по
                                    учебной
                                    работе физико-энергетического института
                                </div>
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
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/denisenko_yurij_ivanovich.jpg"
                                        alt=""></div>
                                <div class="employee-card__position">Старший преподаватель</div>
                                <div class="employee-card__name">Денисенко Юрий Иванович</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/dobryinina_irina_igorevna.jpg"
                                        alt=""></div>
                                <div class="employee-card__position">Преподаватель СПО</div>
                                <div class="employee-card__name">Добрынина Ирина Игоревна</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/dyachkin_oleg_dmitrievich.jpg"
                                        alt=""></div>
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
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/luzyanina_natalya_vladimirovna.jpg"
                                        alt=""></div>
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
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/palinchak_natalya_ferenczovna.jpg"
                                        alt=""></div>
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
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/popov_roman_valerevich.jpg"
                                        alt=""></div>
                                <div class="employee-card__position">Преподаватель СПО</div>
                                <div class="employee-card__name">Попов Роман Валерьевич</div>
                                <div class="employee-card__academic">кандидата технических наук</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/smetannikova_tatyana_andreevna.jpg"
                                        alt=""></div>
                                <div class="employee-card__position">доцент</div>
                                <div class="employee-card__name">Сметанникова Татьяна Андреевна</div>
                                <div class="employee-card__academic">кандидат технических наук</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img
                                        src="https://stu.lipetsk.ru/assets/struct/kaf/kaf-vm/staff/suprunov_igor_ivanovich.jpg"
                                        alt=""></div>
                                <div class="employee-card__position">старший преподаватель</div>
                                <div class="employee-card__name">Супрунов Игорь Иванович</div>
                                <div class="employee-card__academic">Кандидат технических наук</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="employee-card">
                                <div class="employee-card__image"><img src="" alt=""></div>
                                <div class="employee-card__position">доцент, Заместитель директора по научной работе
                                    физико-энергетического института
                                </div>
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
        </div>
    </section>
    <div class="employee-popup popup" id="employee-popup">
        <div class="popup-background"></div>
        <div class="popup-content">
            <button class="popup-close"></button>
            <div id="employee-popup-content"></div>
        </div>
    </div>
@endsection
