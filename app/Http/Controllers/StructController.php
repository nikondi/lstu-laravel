<?php

namespace App\Http\Controllers;

class StructController extends Controller
{
    public function __invoke()
    {
        return view('pages/struct/dept');
    }
}
