<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cardform;
use App\Models\socelmedia;



class DuplicateController extends Controller
{
    public function duplicate($id)
    {
        // Find the existing record
        $originalCardform = cardform::findOrFail($id);

        // Duplicate the cardform
        $newCardform = $originalCardform->replicate();
        $newCardform->user_id = Auth()->user()->id; // Update the user_id for the new record
        $newCardform->date = now(); // Update the date for the new record (if needed)
        $newCardform->save();
        // Duplicate the associated media record
        $originalMedia = socelmedia::where('cardform_id', $originalCardform->id)->first();

        if ($originalMedia) {
            $newMedia = $originalMedia->replicate();
            $newMedia->cardform_id = $newCardform->id;
            $newMedia->save();
        }

        return redirect()->back()->with('succes', 'Record duplicated successfully.');
    }

}
