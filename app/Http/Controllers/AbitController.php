<?php

namespace App\Http\Controllers;

class AbitController extends Controller
{
    public function index()
    {
        return view('abit.index');
    }

    public function celevoe()
    {
        return view('abit.celevoe');
    }

    public function future()
    {
        return view('abit.future', [
            'dates' => [
                ['day' => '15-20', 'month' => 'июля', 'time' => '', 'title' => 'Завершение приёма документов', 'description' => 'Со сдачей вступительных испытаний'],
                ['day' => '25', 'month' => 'июля', 'time' => '', 'title' => 'Завершение приёма документов', 'description' => 'Без сдачи вступительных испытаний'],
                ['day' => '27', 'month' => 'июля', 'time' => '', 'title' => 'Публикация конкурсных списков', 'description' => ''],
                ['day' => '1', 'month' => 'августа', 'time' => '12:00 МСК', 'title' => 'Завершение приёма согласий', 'description' => 'Приоритетное зачисление'],
                ['day' => '2-3', 'month' => 'августа', 'time' => '', 'title' => 'Публикация приказов о зачислении', 'description' => 'Приоритетное зачисление'],
                ['day' => '5', 'month' => 'августа', 'time' => '12:00 МСК', 'title' => 'Завершение приёма согласий', 'description' => 'Основное зачисление'],
                ['day' => '6-7', 'month' => 'августа', 'time' => '', 'title' => 'Публикация приказов о зачислении', 'description' => 'Основное зачисление'],
            ]
        ]);
    }
}
