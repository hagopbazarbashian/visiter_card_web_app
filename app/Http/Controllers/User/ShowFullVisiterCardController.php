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

            // Find the existing record
            $cardform = Cardform::findOrFail($id);
            $media = socelmedia::where('cardform_id' , $cardform->id)->first();

            // Check if a new photo is provided
            if ($request->hasFile('photo')) {
                // Retrieve the old photo file name
                $oldPhoto = $cardform->photo;

                // Delete the old photo file
                if ($oldPhoto) {
                    $oldPhotoPath = public_path('user_image') . '/' . $oldPhoto;
                    if (file_exists($oldPhotoPath)) {
                        unlink($oldPhotoPath);
                    }
                }

                $image = $request->file('photo');
                $logoFileName = $image->hashName();
                $destinationPath = public_path('user_image');

                // Move the new uploaded image to the destination folder
                $image->move($destinationPath, $logoFileName);

                // Update record with new photo information
                $cardform->update([
                    'photo' => $logoFileName,
                ]);
            }

             // Check if a new Logo is provided
            if ($request->hasFile('logo')) {
                // Retrieve the old photo file name
                $logo = $cardform->logo;

                // Delete the old photo file
                if ($logo) {
                    $oldPhotoPath = public_path('logo') . '/' . $logo;
                    if (file_exists($oldPhotoPath)) {
                        unlink($oldPhotoPath);
                    }
                }

                $image = $request->file('logo');
                $logo = $image->hashName();
                $destinationPath = public_path('logo');

                // Move the new uploaded image to the destination folder
                $image->move($destinationPath, $logo);

                // Update record with new photo information
                $cardform->update([
                    'logo' => $logo,
                ]);
            }


            // Update other fields
            $cardform->update([
                'user_id' => Auth()->user()->id,
                'full_name' => $request->full_name,
                'title' => $request->title,
                'department' => $request->department,
                'company' => $request->company,
                'headline' => $request->headline,
                'email' => $request->email,
                'phone' => $request->phone,
                'color' => $request->color,
                'date'=>$request->date
            ]);


            if ($media) {
            $updateData = [
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
            ];

            $updateResult = $media->update($updateData);

            if ($updateResult) {
                // Update successful
                return redirect()->back()->with('succes', 'Social media information updated successfully.');
            } else {
                // Update failed
                return redirect()->back()->with('error', 'Failed to update social media information.');
            }
            } else {
                // Media record not found
                return redirect()->back()->with('error', 'Social media record not found.');
            }

            return redirect()->back()->with('succes', 'Record updated successfully.');
     }

        public function delete(Request $request , $id){
           // Find the Cardform record
            $cardform = Cardform::findOrFail($id);

            // Find the associated socelmedia record
            $media = socelmedia::where('cardform_id', $cardform->id)->first();

            // Delete the image file
            if ($cardform->photo) {
                $photoPath = public_path('user_image') . '/' . $cardform->photo;
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }

             // Delete the Logo file
            if ($cardformlogo->logo) {
                $photoPath = public_path('logo') . '/' . $cardformlogo->photo;
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }

            // Delete the socelmedia record
            if ($media) {
                $media->delete();
            }

            // Delete the Cardform record
            $cardform->delete();

            return redirect()->back()->with('succes', 'Card and associated media deleted successfully.');

        }
}
