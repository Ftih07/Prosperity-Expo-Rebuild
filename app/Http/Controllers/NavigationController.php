<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home()
    {
        return view('home'); // resources/views/home.blade.php
    }

    public function about()
    {
        return view('about'); // resources/views/about.blade.php
    }

    public function conference()
    {
        return view('conference'); // resources/views/conference.blade.php
    }

    public function exhibition()
    {
        return view('exhibition'); // resources/views/exhibition.blade.php
    }

    public function businessmatching()
    {
        return view('businessmatching'); // resources/views/businessmatching.blade.php
    }
}
