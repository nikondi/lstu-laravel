@extends('layouts.default')

@section('content')
    @include('parts.header.default')
    @include('parts.page-title', [
        'breadcrumbs' => [
            ['link' => route('abit'), 'title' => 'Абитуриенту'],
            'Целевое обучение'
        ],
        'title' => 'Приемная комиссия'
    ])
    <section id="content">
        <div class="container">
            <p align="center">Телефон приемной комиссии ЛГТУ по вопросам целевого приема: <a href="tel:+74742328223">+7 (4742) 328-223</a>, <a href="tel:+79046914519">+7 (904) 691-45-19</a></p>

            <p align="center">Сайт ЕКЦ «Приём в вуз» – <a href="https://priemvuz.ru/">https://priemvuz.ru/</a></p>

            <p align="center">Телефоны ЕКЦ «Приём в вуз» – <a href="tel:88003014455">8 (800) 301-44-55</a> (для звонков<br />
                по России), <a href="http://84951222268">8 (495) 122-22-68</a> (для звонков из-за рубежа).</p>

            <p align="center">&nbsp;</p>

            <h2 align="center">Памятка для абитуриента-целевика</h2>

            <h3 align="center">Что такое целевое обучение?</h3>

            <p><strong>Целевое обучение</strong> – это форма обучения, при которой абитуриент после зачисления в университет заключает договор со своим будущим работодателем.<br />
                По этому договору <strong>студент учится бесплатно</strong>, получает стипендию, а также может претендовать на дополнительные меры поддержки<br />
                от будущего работодателя (например, возмещение расходов на проезд, предоставление жилья, оплата питания и др.).</p>

            <p><u>Преимущества программы</u>:</p>

            <ul>
                <li>получение специальности, востребованной работодателями региона;</li>
                <li>понимание, где и кем будет работать студент после выпуска;</li>
                <li>знание своей будущей заработной платы;</li>
                <li>уверенность в трудоустройстве после выпуска.</li>
            </ul>

            <h3 align="center">Как поступить на места в пределах целевой квоты?</h3>

            <p><strong>Поступление </strong><strong>на места в пределах целевой квоты – </strong>это особый формат приема в вуз, который позволяет поступить на обучение<br />
                по отдельному конкурсу.</p>

            <p><strong>Шаг первый:</strong></p>

            <p>Найти подходящую вакансию на сайте платформы «Работа в России»<br />
                или при подаче заявления в вуз через Госуслуги.</p>

            <p><strong>Шаг второй:</strong></p>

            <p>Подать заявление на Госуслугах или непосредственно в вуз (лично, по почте или через информационную систему вуза).<br />
                <strong>Важно: </strong>поступление в рамках конкурса на целевую квоту может быть выбрано только по <u>одной</u> образовательной программе.</p>

            <p><strong>Шаг третий: </strong></p>

            <p>Следить за результатами отбора через личный кабинет на Госуслугах или официальный сайт вуза.</p>

            <p><strong>Шаг четвертый:</strong></p>

            <p>Заключить целевой договор с заказчиком целевого обучения (после опубликования приказа о зачислении) до начала учебного года.</p>

            <p><strong>Сроки приема заявлений </strong><em>(</em>вуз устанавливает сроки приема документов в пределах указанных дат<em>):</em></p>

            <p>по программам бакалавриата, специалитета, базового высшего образования – <strong>с 20 июня</strong> <strong>по 25 июля</strong>;</p>

            <p>по программам магистратуры – <strong>с 20 июня по 20 августа;</strong></p>

            <p>по программам аспирантуры – <strong>с 20 июня </strong><em>через Госуслуги </em><strong>до даты, установленной вузом (научной организацией)</strong>,<br />
                при этом вуз (научная организация) может установить более ранний срок для приема документов <em>на бумаге</em>.</p>

            <p><strong>По программам ординатуры, ассистентуры-стажировки:</strong></p>

            <p>Гражданин должен самостоятельно ознакомиться с предложениями заказчиков на платформе «Работа в России» и подать заявку на заключение договора о целевом обучении в вуз в сроки, установленные в этом вузе для приема заявлений о приеме на обучение (по программам ординатуры прием документов начинается не ранее 1 июля, по программам ассистентуры-стажировки – в сроки, установленные вузом).</p>

            <p>&nbsp;</p>

            <div class="celevoe-sliders">
                <div class="swiper gallery gallery--dark-dots">
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
                <div class="swiper gallery">
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

            <div class="celevoe-links">
                <a href="https://minobrnauki.gov.ru/action/targeted_training/2025-2026/employers">
                    <img alt="" src="https://minobrnauki.gov.ru/action/targeted_training/images/Работодатели.jpg" title="Работодатели" />
                    <div>Работодатели (заказчики и<br />субъекты Российской Федерации)</div>
                </a>
                <a href="https://minobrnauki.gov.ru/action/targeted_training/2025-2026/universities">
                    <img alt="" src="https://minobrnauki.gov.ru/action/targeted_training/images/Университеты.jpg" title="Университеты" />
                    <div>Университеты</div>
                </a>
                <a href="https://minobrnauki.gov.ru/action/targeted_training/2025-2026/applicants">
                    <img alt="" src="https://minobrnauki.gov.ru/action/targeted_training/images/Абитуриенты.jpg" title="Абитуриенты и обучающиеся" />
                    <div>Абитуриенты и обучающиеся</div>
                </a>
            </div>
        </div>
    </section>

@endsection
