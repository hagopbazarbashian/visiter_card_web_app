<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Hash;
use Auth;

class RegisterController extends Controller
{
     public function index(){
        return view('register_user');
     }

     public function store(RegisterRequest $request){

        $user = User::where('email', $request->input('email'))->first();

        if ($user) {
            // Email already exists
            return redirect()->back()->with('error', 'You already have this email');
        }

        $hashedPassword = Hash::make($request->input('password'));
        $token = hash('sha256', time());

        $use = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $hashedPassword,
            // 'status' => 0
        ]);

        return redirect()->back()->with('succes', 'Registration successful!');
     }
} 
