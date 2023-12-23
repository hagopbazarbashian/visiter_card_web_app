<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\send_mail_to_user;
use App\Mail\forfreetest;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class AdminHomeController extends Controller
{
    public function index(){
        return view('admin.home');
    }
}
