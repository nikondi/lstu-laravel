@extends('layouts.default')

@section('content')
    @include('parts.header.default')
    @include('parts.page-title', [
        'breadcrumbs' => [
            'Структура'
        ],
        'title' => 'Отдел внешних связей'
    ])

    <section class="service-heading">
        <div class="container">
            <div class="service-heading__inner">
                <div class="service-description formatted-text">
                    <h3>Деятельность</h3>

                    <p>Отдел информационной политики и связей с общественностью ЛГТУ организован 5 апреля 2023 года.
                        Сотрудники отдела реализуют стратегию информационной политики университета, курируют размещение
                        и актуальность информации на официальном сайте и в аккаунтах ЛГТУ, участвуют в подготовке и
                        проведении официальных визитов и рабочих поездок представителей университета, осуществляют фото-
                        и видеосопровождение мероприятий, издают газету «Политехник», разрабатывают макеты корпоративных
                        материалов, проводят мониторинг СМИ и выстраивают эффективные отношения с их
                        представителями.</p>

                    <p>Функционирование отдела способствует укреплению устойчивой деловой репутации и связей вуза, а
                        также формированию корпоративной культуры.</p>

                </div>
                <div class="service-sub">
                    <div class="service-sub__heading">Подразделения</div>
                    <ul class="service-sub__list">
                        @foreach(['Первое подразделение', 'Второе'] as $item)
                            <li><a href="#">{{ $item }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="service-contacts slider-wrapper">
        <div class="container">
            <h2 class="service-contacts__heading">Контакты</h2>
            <div class="service-contacts__about">
                <div class="service-data">
                    <div class="service-location service-card">
                        <svg width="1em" height="1em" x="0" y="0" viewBox="0 0 512 512">
                            <path
                                d="M256 0C153.755 0 70.573 83.182 70.573 185.426c0 126.888 165.939 313.167 173.004 321.035 6.636 7.391 18.222 7.378 24.846 0 7.065-7.868 173.004-194.147 173.004-321.035C441.425 83.182 358.244 0 256 0zm0 469.729c-55.847-66.338-152.035-197.217-152.035-284.301 0-83.834 68.202-152.036 152.035-152.036s152.035 68.202 152.035 152.035C408.034 272.515 311.861 403.37 256 469.729z"
                                fill="currentColor"></path>
                            <path
                                d="M256 92.134c-51.442 0-93.292 41.851-93.292 93.293S204.559 278.72 256 278.72s93.291-41.851 93.291-93.293S307.441 92.134 256 92.134zm0 153.194c-33.03 0-59.9-26.871-59.9-59.901s26.871-59.901 59.9-59.901 59.9 26.871 59.9 59.901-26.871 59.901-59.9 59.901z"
                                fill="currentColor"></path>
                        </svg>
                        <div>
                            398055, г. Липецк, ул. Московская, д. 30
                        </div>
                    </div>
                    <div class="service-worktime service-card">
                        <svg width="512" height="512" x="0" y="0" viewBox="0 0 512 512" class="service-worktime__icon">
                            <path
                                d="m347.216 301.211-71.387-53.54V138.609c0-10.966-8.864-19.83-19.83-19.83-10.966 0-19.83 8.864-19.83 19.83v118.978c0 6.246 2.935 12.136 7.932 15.864l79.318 59.489a19.713 19.713 0 0 0 11.878 3.966c6.048 0 11.997-2.717 15.884-7.952 6.585-8.746 4.8-21.179-3.965-27.743z"
                                fill="#e6e6e6"></path>
                            <path
                                d="M256 0C114.833 0 0 114.833 0 256s114.833 256 256 256 256-114.833 256-256S397.167 0 256 0zm0 472.341c-119.275 0-216.341-97.066-216.341-216.341S136.725 39.659 256 39.659c119.295 0 216.341 97.066 216.341 216.341S375.275 472.341 256 472.341z"
                                fill="#e6e6e6"></path>
                        </svg>
                        <div class="service-worktime__inner">
                            <p>пн – чт: 8:00 – 17:00</p>
                            <p>пт: 8:00 – 16:00</p>
                            <p>сб - вс: выходной</p>
                            <p><strong>Обеденный перерыв: с 12:00 до 12:48</strong></p>
                        </div>
                    </div>

                    @foreach([
                        '<ul><li><a href="https://vk.com/infolgtu">Вконтакте</a></li><li><a href="https://ok.ru/group/54350853243051">Одноклассники</a></li><li><a href="https://t.me/infolgtu">Телеграм</a></li><li><a href="https://rutube.ru/channel/23637735/">RuTube</a></li><li><a href="https://www.youtube.com/channel/UCpNTU2trtnplKH4mXVNW-Rg">YouTube</a></li></ul>',
                        '<div class="contacts-list"><p><svg height="1em" width="1em"> <use xlink:href="/assets/img/icons.svg#phone"></use> </svg> <span> <a href="tel:(4742) 307-937">(4742) 307-937</a> </span></p></div>'
                    ] as $item)
                        <div class="service-card">
                            {!! $item !!}
                        </div>
                    @endforeach
                </div>

                <div class="service-info">
                    <h2 class="service-info__heading">Сотрудники</h2>

                    <div class="service-staff swiper">
                        <div class="swiper-wrapper">
                            @foreach([
                                ['image' => '/assets/img/faks/dean/ikn.png', 'position' => 'Начальник отдела', 'name' => 'Галкин Денис Валерьевич', 'phone' => '8 910 359 99 99', 'email' => 'test@example.com', 'cabinet' => '9-302'],
                                ['image' => '/assets/img/faks/dean/UK_dean.png', 'position' => 'Начальник отдела', 'name' => 'Галкин Денис Валерьевич', 'phone' => '8 910 359 99 99'],
                                ['image' => '/assets/img/faks/dean/ikn.png', 'position' => 'Начальник отдела', 'name' => 'Галкин Денис Валерьевич', 'phone' => '8 910 359 99 99', 'email' => 'test@example.com', 'cabinet' => '9-302'],
                                ['image' => '/assets/img/faks/dean/UK_dean.png', 'position' => 'Начальник отдела', 'name' => 'Галкин Денис Валерьевич', 'phone' => '8 910 359 99 99'],
                                ['image' => '/assets/img/faks/dean/ikn.png', 'position' => 'Начальник отдела', 'name' => 'Галкин Денис Валерьевич', 'phone' => '8 910 359 99 99', 'email' => 'test@example.com', 'cabinet' => '9-302'],
                                ['image' => '/assets/img/faks/dean/UK_dean.png', 'position' => 'Начальник отдела', 'name' => 'Галкин Денис Валерьевич', 'phone' => '8 910 359 99 99'],
                            ] as $employee)
                                <div class="swiper-slide">
                                    <div class="service-staff-card">
                                        <div class="service-staff-card__image">
                                            <img src="{{$employee['image']}}" alt="">
                                        </div>
                                        <div class="service-staff-card__info">
                                            @if(!empty($employee['position']))
                                                <div
                                                    class="service-staff-card__position">{{$employee['position']}}</div>
                                            @endif
                                            <div class="service-staff-card__name">{{$employee['name']}}</div>
                                            <div class="service-staff-card__contacts">
                                                @if(!empty($employee['phone']))
                                                    <p>
                                                        <svg width="1em" height="1em">
                                                            <use xlink:href="/assets/img/icons.svg#phone"/>
                                                        </svg>
                                                        <span>
                                                            <a href="tel:{{$employee['phone']}}">{{$employee['phone']}}</a>
                                                        </span>
                                                    </p>
                                                @endif
                                                @if(!empty($employee['email']))
                                                    <p>
                                                        <svg width="1em" height="1em">
                                                            <use xlink:href="/assets/img/icons.svg#envelope"/>
                                                        </svg>
                                                        <span>
                                                            <a href="tel:{{$employee['email']}}">{{$employee['email']}}</a>
                                                        </span>
                                                    </p>
                                                @endif
                                                @if(!empty($employee['cabinet']))
                                                    <p>
                                                        <svg width="1em" height="1em" x="0" y="0" viewBox="0 0 128 128">
                                                            <g transform="matrix(1.220000000000001,0,0,1.220000000000001,-14.080330028534036,-14.080002937316976)">
                                                                <path
                                                                    d="M113.206 106.265H99.583v-86.28a1.749 1.749 0 0 0-1.554-1.738l-46-5.192a1.75 1.75 0 0 0-1.946 1.739v3.441H30.167a1.75 1.75 0 0 0-1.75 1.75v86.28H14.794a1.75 1.75 0 1 0 0 3.5h35.289v3.441a1.75 1.75 0 0 0 1.75 1.75 1.61 1.61 0 0 0 .2-.011l45.9-5.18h15.276a1.75 1.75 0 0 0 0-3.5zm-81.289-84.53h18.166v4.5H38.166a1.75 1.75 0 0 0-1.75 1.75v78.28h-4.5zm8 84.53v-76.53h10.166v76.53zm13.666-89.513 42.5 4.8v84.9l-42.5 4.8z"
                                                                    fill="currentColor"></path>
                                                                <path
                                                                    d="M61.125 58.792A5.208 5.208 0 1 0 66.333 64a5.214 5.214 0 0 0-5.208-5.208zm0 6.916A1.708 1.708 0 1 1 62.833 64a1.71 1.71 0 0 1-1.708 1.708z"
                                                                    fill="currentColor"></path>
                                                            </g>
                                                        </svg>
                                                        <span>{{$employee['cabinet']}}</span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination slider-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
