<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cardform;
use Illuminate\Support\Facades\Auth;

class UserHomeController extends Controller
{
    public function index(){

        $cardforms = Cardform::with('user')->orderBy('created_at', 'desc')->get();
        $filteredCardforms = $cardforms->filter(function ($cardform) {
            return optional($cardform->user)->id == Auth::id();
        });

        if (auth()->user()->status == 1) {
            return view('User.user_home', compact('filteredCardforms'));
        }

        if (auth()->user()->status == 0) {
            return view('User.user_not_verifiy');
        }
    }

     public function logout(Request $request){
        if (Auth::check()) {
            // User is authenticated, you can access user properties
            $userName = Auth::user()->name;
            // ... any other operations you want to perform on the authenticated user
        }
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

     }
}
