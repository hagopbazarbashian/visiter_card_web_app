<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cardform;  
use App\Models\socelmedia;

class ShowFullVisiterCardController extends Controller
{ 
     public function index($id){
         $cardform = cardform::where('id' , $id)->with('user')->first();
         $socelmedia = socelmedia::where('cardform_id' , $cardform->id)->first();
         return view('User.user_card_edit',compact('cardform','socelmedia'));

     }

     public function update(Request $request , $id){
        dd($id);
     }
} 
