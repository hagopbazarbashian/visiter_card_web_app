<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cardform;

class UserHomeController extends Controller
{
    public function index(){
        if (auth()->user()->status == 1) {
            return view('User.user_home');
        }

        if (auth()->user()->status == 0) {
            return view('User.user_not_verifiy');
        }
    }
}
