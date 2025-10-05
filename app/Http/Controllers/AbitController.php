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
        return view('abit.future');
    }
}
