<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navigation extends Controller
{
    public function register()
    {
        return view('form');
    }
    public function landing(){
        return view('welcome');
    }
}
