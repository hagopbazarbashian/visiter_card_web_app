<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cardform;
use App\Http\Requests\Formcardrequest;
use Hash;
use Auth;

class UserFormController extends Controller
{
     public function store(Formcardrequest $request){

        $image = $request->file('photo');

        if ($image) {
            $logoFileName = $image->hashName();
            $destinationPath = public_path('user_image');

            // Move the uploaded image to the destination folder
            $image->move($destinationPath, $logoFileName);

            // Path to the saved logo image
            $logoImagePath = $destinationPath . '/' . $logoFileName;

            $cardform = cardform::create([
                'user_id'=>Auth()->user()->id,
                'photo' => $logoFileName,
                'full_name'=>$request->full_name,
                'title'=>$request->title,
                'department'=>$request->department,
                'company'=>$request->company,
                'headline'=>$request->headline,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'fb'=>$request->fb,
                'ins'=>$request->ins,
                'link'=>$request->link,
                'color'=>$request->color,
             ]);
        } else {
            // Handle the case where the logo image is not present in the request
        }

        return redirect()->back()->with('succes', 'you registered successfully done you can activate with nfc');


     }
}
