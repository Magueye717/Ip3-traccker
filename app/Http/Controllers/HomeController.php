<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('base');
    }

    public function minor()
    {
        return view('home/minor');
    }
}
