<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Hash;
use Auth;

class LoginController extends Controller
{
     public function index(){
         return view('login_user');
     }


     public function submit_login(LoginRequest $request){

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('web')->attempt($credential)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login_user')->with('error', 'Information is not correct!');
        }
     }
}
