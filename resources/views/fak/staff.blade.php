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
                    <div class="staff-item">
                        <div class="employee-card">
                            <div class="employee-card__image"><img src="{{ $employee['image'] }}" alt=""></div>
                            <div class="employee-card__position">{{ $employee['position'] }}</div>
                            <div class="employee-card__name">{{ $employee['name'] }}</div>
                            @if(!empty($employee['academic']))
                                <div class="employee-card__academic">{{ $employee['academic'] }}</div>
                            @endif
                            @if(!empty($employee['description']))
                                <div class="employee-popup popup">
                                    <div class="popup-background"></div>
                                    <div class="popup-content">
                                        <div class="popup-close"></div>
                                        <div class="employee-popup__head">
                                            <div class="employee-popup__image"><img src="{{ $employee['image'] }}" alt=""></div>
                                            <div class="employee-popup__info">
                                                <div class="employee-popup__position">{{ $employee['position'] }}</div>
                                                <div class="employee-popup__name">{{ $employee['name'] }}</div>
                                                @if(!empty($employee['academic']))
                                                    <div class="employee-popup__academic">{{ $employee['academic'] }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="employee-popup__description">
                                            {!! $employee['description'] !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="employee-card__button">
                                    <button>Подробнее <svg height="1em" width="1em"><use xlink:href="/assets/img/arrows.svg#right"/></svg></button>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
