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

    public function index(){
        return view('User.add_new_card');
    }

  

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

             $logo = $request->file('logo');

            if ($logo) {
                // If an image is uploaded
                $logoFileNameee = $logo->hashName();
                $destinationPathh = public_path('logo');

                // Move the uploaded image to the destination folder
                $logo->move($destinationPathh, $logoFileNameee);

                // Path to the saved logo image
                $logoImagePath = $destinationPathh . '/' . $logoFileNameee;
            } else {
                // If no image is uploaded, use the default image
                $logoFileNameee = ''; // Use a different variable name to store the filename
            }

            // Check if a new PDF file is provided
             $pdf = $request->file('doc');
             if($pdf) {
                // If an image is uploaded
                $logopdfNameee = $pdf->hashName();
                $destinationPathh = public_path('pdf');

                // Move the uploaded image to the destination folder
                $pdf->move($destinationPathh, $logopdfNameee);

                // Path to the saved logo image
                $logoImagePath = $destinationPathh . '/' . $logopdfNameee;
            } else {
                // If no image is uploaded, use the default image
                $logopdfNameee = ''; // Use a different variable name to store the filename
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
               'logo' => $logoFileNameee,
               ]);

               $socelmedia = socelmedia::create([
               'cardform_id' => $cardform->id,
               'facebook' => $request->facebook,
               'pinterest' => $request->pinterest,
               'twitter' => $request->twitter,
               'instagram' => $request->instagram,
               'whatsapp' => $request->whatsapp,
               'youtube' => $request->youtube,


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
               'doc'=>$logopdfNameee
            ]);

            return redirect()->route('home')->with('succes', 'Your card info has been registered successfully. You can use it.');


     }

}
