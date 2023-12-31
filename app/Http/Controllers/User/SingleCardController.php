<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cardform;
use App\Models\socelmedia;
use Illuminate\Support\Facades\Auth;

class SingleCardController extends Controller
{
    public function index($id){
        $cardform = cardform::where('id' , $id)->with('socelmedia')->first();
        return  view('User.full_visitor_card',compact('cardform'));

    }
}
