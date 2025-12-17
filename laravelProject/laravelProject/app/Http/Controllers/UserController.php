<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contactor()
    {
        return view('contact');
    }

    public function route()
    {
        return view('route');
    }
}
