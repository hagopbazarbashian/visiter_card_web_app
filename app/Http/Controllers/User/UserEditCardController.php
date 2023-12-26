<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cardform;
use App\Http\Requests\Formcardrequest;
use Illuminate\Support\Facades\Auth;

class UserEditCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cardforms = cardform::with('user')->orderBy('created_at', 'desc')->get();

        $filteredCardforms = $cardforms->filter(function ($cardform) {
            return optional($cardform->user)->id == Auth::id();
        });

        return view('User.user_show_cart', compact('filteredCardforms'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd($id);
        $cardform = cardform::where('id' , $id)->with('user')->first();
         return view('User.user_card_edit',compact('cardform'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Formcardrequest $request, $id)
    {
        // Find the existing record
    $cardform = Cardform::findOrFail($id);

    // Check if a new photo is provided
    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $logoFileName = $image->hashName();
        $destinationPath = public_path('user_image');

        // Move the uploaded image to the destination folder
        $image->move($destinationPath, $logoFileName);

        // Path to the saved logo image
        $logoImagePath = $destinationPath . '/' . $logoFileName;

        // Update record with new photo information
        $cardform->update([
            'photo' => $logoFileName,
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
        'fb' => $request->fb,
        'ins' => $request->ins,
        'link' => $request->link,
        'color' => $request->color,
    ]);

    return redirect()->back()->with('succes', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cardform = Cardform::findOrFail($id);
        $cardform->delete();
        return redirect()->back()->with('succes', 'Deleted successfully');

    }
}
