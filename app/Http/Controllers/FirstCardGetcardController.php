<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstCardGetcardController extends Controller
{
    public function welcome(){
        return view('welcome_user_page');
    }


    public function getcard(){
        return view('user_get_card');
    }
}
