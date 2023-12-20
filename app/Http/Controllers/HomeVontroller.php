<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeVontroller extends Controller
{
     public function index(){
        return view('welcome');
     }
}
 