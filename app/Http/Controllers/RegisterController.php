<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cardform;
use App\Models\socelmedia;
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
            'token'=>$token
            // 'status' => 0
        ]);

        //    For Work
           $cardform = cardform::create([
            'user_id' => $use->id,
            'full_name' => 'Work',
            'email' => $use->email,
            'color'=>'#68b7e2'
            ]);

            $socelmedia = socelmedia::create([
            'cardform_id' => $cardform->id,
            ]);


            $cardform = cardform::create([
                'user_id' => $use->id,
                'full_name' => 'Personal',
                'email' => $use->email,
                'color'=>'#68b7e2'
            ]);

            $socelmedia = socelmedia::create([
             'cardform_id' => $cardform->id,
            ]);

        return redirect()->route('login_user')->with('succes', 'Registration successful!');
     }
}
