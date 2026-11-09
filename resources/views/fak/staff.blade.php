@extends('layouts.default')

@section('content')
    @include('parts.header.default')
    @include('parts.page-title', [
        'breadcrumbs' => [
            ['link' => '#', 'title' => 'Факультеты'],
            ['link' => '#', 'title' => 'Институт Компьютерных Технологий'],
            'Сотрудники'
        ],
        'title' => 'Сотрудники'
    ])

    <section>
        <div class="container">
            <div class="staff-list">
                @foreach($staff as $employee)
                    <div class="employee-card">
                        <div class="employee-card__image">
                            @if($employee['image'])
                                <img src="{{ $employee['image'] }}" alt="">
                            @endif
                            @if(!empty($employee['description']))
                                <button class="employee-card__button"
                                        data-employee="<?= htmlspecialchars(json_encode($employee)) ?>">
                                    Подробнее
                                    <svg height="1em" width="1em">
                                        <use xlink:href="/assets/img/arrows.svg#right"></use>
                                    </svg>
                                </button>
                            @endif
                        </div>
                        {{-- TODO: Cut position --}}
                        <div class="employee-card__position">{{ $employee['position'] }}</div>
                        <div class="employee-card__name">{{ $employee['name'] }}</div>
                        @if(!empty($employee['academic']))
                            <div class="employee-card__academic">{{ $employee['academic'] }}</div>
                        @endif
                    </div>
                @endforeach
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
