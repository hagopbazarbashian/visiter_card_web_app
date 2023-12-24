<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cardform;

class ShowFullVisiterCardController extends Controller
{ 
     public function index($id){
         $cardform = cardform::where('id' , $id)->with('user')->first();
        //  dd($cardform);
         return view('User.user_card_edit',compact('cardform'));

     }
} 
