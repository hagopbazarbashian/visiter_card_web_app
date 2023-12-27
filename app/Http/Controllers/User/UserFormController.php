<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cardform;
use App\Models\socelmedia;
use App\Http\Requests\Formcardrequest;
use Hash;
use Auth;
 
class UserFormController extends Controller
{
     public function store(Formcardrequest $request){
  

            $image = $request->file('photo');
           

            if ($image) {
            // If an image is uploaded
            $logoFileName = $image->hashName();
            $destinationPath = public_path('user_image');

            // Move the uploaded image to the destination folder
            $image->move($destinationPath, $logoFileName);

            // Path to the saved logo image
            $logoImagePath = $destinationPath . '/' . $logoFileName;
            } else {
            // If no image is uploaded, use the default image
            $logoFileName = '';
            }

               $cardform = cardform::create([
               'user_id' => Auth()->user()->id,
               'photo' => $logoFileName,
               'full_name' => $request->full_name,
               'title' => $request->title,
               'department' => $request->department,
               'company' => $request->company,
               'headline' => $request->headline,
               'date'=>$request->date,
               'email' => $request->email,
               'phone' => $request->phone,
               'color' => $request->color,
               'color_code' => $request->color_code,
               ]);

               $socelmedia = socelmedia::create([
               'cardform_id' => $cardform->id,
               'facebook' => $request->facebook,
               'pinterest' => $request->full_name,
               'twitter' => $request->title,
               'instagram' => $request->department,
               'whatsapp' => $request->company,
               'youtube' => $request->headline,


               'tiktok' => $request->tiktok,
               'linkedin' => $request->linkedin,
               'snapchat' => $request->snapchat,
               'telegram' => $request->telegram,
               'discord' => $request->discord,
               'skype' => $request->skype,
               'paypal' => $request->paypal,
               'spotify' => $request->spotify,
               'applemusic' => $request->applemusic,

               'soundcloud' => $request->soundcloud,
               'behance' => $request->behance,
               'twitch' => $request->twitch,
               'link' => $request->link,
               'website' => $request->website,
            ]);

            return redirect()->back()->with('succes', 'Your card info has been registered successfully. You can use it.');


     }

}
