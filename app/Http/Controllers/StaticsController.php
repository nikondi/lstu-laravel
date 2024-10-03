<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticsController extends Controller
{
    public function __invoke()
    {
        return view('static.index');
    }

    public function management() {
        return view('static.management');
    }
}
