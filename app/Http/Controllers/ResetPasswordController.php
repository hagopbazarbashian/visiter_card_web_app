<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\Websitemail;
use Hash;
use Auth;

class ResetPasswordController extends Controller
{
     public function index(){
        return view('reset_password');
     }

     public function forget_password_company_submit(Request $request){

        $request->validate([
            'email' => 'required|email'
        ]);

        $User = User::where('email' , $request->email)->first();

        if(!$User){
            return redirect()->back()->with('error' , 'Email Addrees not found');
        }


        $token = hash('sha256' , time());

        $User->token =$token;
        $User->update();


        $reset_link = url('reset-password/user/'.$token.'/'.$request->email);
        $subject = "Reset Password";
        $message = 'Please click on the following link : <br>';
        $message =  '<a href="'.$reset_link.'">Click here</a>';

        \Mail::to($request->email)->send(new Websitemail($subject , $message));

        return redirect()->route('welcome')->with('succes' , 'Please check your email and follow the steps there');


     }

     public function reset_password_user($token , $email ){

        $User = User::where('token' , $token)->where('email' , $email)->first();

        if(!$User){
            return redirect()->route('login');
        }

        return view('reset_now_add_new_password' , compact('User'));
    }

    public function reset_password_user_submit(Request $request , $token , $email){

        $request->validate([
            'password' => 'required',
            're-password'=>'required |same:password'
        ]);

        $hashedPassword = Hash::make($request->input('password'));

        $User = User::where('token' , $token)->where('email' , $email)->first();

        $User->update([
            'password'=>$hashedPassword,
            'token'=>''
        ]);

        return redirect()->route('welcome')->with('succes' , 'Password is reset successfully');

    }


}
