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
            ];

            $updateResult = $media->update($updateData);

            // Check if a new PDF file is provided
            if ($request->hasFile('doc')) {
                $pdfFile = $request->file('doc');
                $pdfFileName = $pdfFile->hashName();
                $pdfDestinationPath = public_path('pdf'); // Change the path as needed

                // Move the uploaded PDF file to the destination folder
                $pdfFile->move($pdfDestinationPath, $pdfFileName);

                // Update record with new PDF information
                $media->update([
                    'doc' => $pdfFileName,
                ]);
            }

            if ($updateResult) {
                // Update successful
                return redirect()->route('home')->with('succes', 'Record updated successfully.');
            } else {
                // Update failed
                return redirect()->back()->with('error', 'Failed to update social media information.');
            }
            } else {
                // Media record not found
                return redirect()->back()->with('error', 'Social media record not found.');
            }

            return redirect()->route('home')->with('succes', 'Record updated successfully.');
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
            if ($cardform->logo) {
                $photoPath = public_path('logo') . '/' . $cardform->logo;
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }

            // Delete the PDf file
            if ($media->doc) {
                $photoPath = public_path('pdf') . '/' . $media->doc;
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


        public function deletefileinfo(Request $request , $id){

            $media = socelmedia::find($id);

            if ($media->doc) {
                $photoPath = public_path('pdf') . '/' . $media->doc;
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }

            $media->update([
                'doc'=>''

            ]);

            return redirect()->back()->with('succes','Deleted successfully');
        }

        public function deleteprofileimage(Request $request , $id){

            $media = cardform::find($id);

            if ($media->photo) {
                $photoPath = public_path('user_image') . '/' . $media->photo;
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            } 

            $media->update([
                'photo'=>''

            ]);

            return redirect()->back()->with('succes','Deleted successfully');

        }

        public function deleteprologo(Request $request ,$id){

            $media = cardform::find($id); 

                if ($media->logo) {
                    $photoPath = public_path('logo') . '/' . $media->logo;
                    if (file_exists($photoPath)) {
                        unlink($photoPath);
                    }
                }

                $media->update([
                    'logo'=>''

                ]);

                return redirect()->back()->with('succes','Deleted successfully');
            
            }
}
