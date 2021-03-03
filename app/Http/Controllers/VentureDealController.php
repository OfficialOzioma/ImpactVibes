<?php

namespace App\Http\Controllers;

use App\Venture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class VentureDealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventureDeal = Venture::where('user_id', Auth::user()->id)->get();

        return view('ventures.index', compact('ventureDeal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $startup = new Venture();
        //  dd($request);
        $startup->user_id = Auth::user()->id;
        $startup->startup_name = $request->input('startup_name');
        $startup->venture_type = $request->input('venture_type');
        $startup->about_startup = $request->input('about_startup');
        $startup->city = $request->input('city');
        $startup->state = $request->input('state');
        $startup->country = $request->input('country');
        $startup->Website = $request->input('Website');
        $startup->linkedIn_profile = $request->input('linkedIn_profile');
        $startup->facebook_profile = $request->input('facebook_profile');
        $startup->twitter_profile = $request->input('twitter_profile');
        $startup->other_profile = $request->input('other_profile');
        $startup->address = $request->input('address');
        $startup->industries = $request->input('industries');
        $startup->total_invested_cash = $request->input('total_invested_cash');
        $startup->making_revenue = $request->input('making_revenue');
        $startup->venture_stage = $request->input('venture_stage');
        $startup->founder_name = $request->input('founder_name');
        $startup->founder_phone_number = $request->input('founder_phone_number');
        $startup->founder_email_address = $request->input('founder_email');
        $startup->team_member_name = $request->input('team_member_name');
        $startup->team_member_designation = $request->input('team_member_designation');
        $startup->team_member_phone_number = $request->input('team_member_phone_number');

        if($request->hasfile('picture_of_the_startup')){
            $file = $request->file('picture_of_the_startup');
            $extension = $file->getClientoriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('ventures_images/', $filename);
            $startup->picture_of_the_startup = $filename;
        }else {
            $file = $request->file('picture_of_the_startup');
            $startup->picture_of_the_startup = "";

            return $file;
        }

        $startup->save();

        return redirect('ventures');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venture  $Venture
     * @return \Illuminate\Http\Response
     */
    public function show(Venture $venture)
    {
        $getventure = Venture::findOrFail($venture->id);
        return view('ventures.show', compact('getventure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venture  $Venture
     * @return \Illuminate\Http\Response
     */
    public function edit(Venture $venture)
    {
        $venturesRecord = Venture::findOrFail($venture->id);
        return view('ventures.edit', compact('venturesRecord'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venture  $Venture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venture $venture)
    {
        $updateVenture = Venture::findOrFail($venture->id);

        $updateVenture->startup_name = $request->input('startup_name');
        $updateVenture->venture_type = $request->input('venture_type');
        $updateVenture->about_startup = $request->input('about_startup');
        $updateVenture->city = $request->input('city');
        $updateVenture->state = $request->input('state');
        $updateVenture->country = $request->input('country');
        $updateVenture->Website = $request->input('Website');
        $updateVenture->linkedIn_profile = $request->input('linkedIn_profile');
        $updateVenture->facebook_profile = $request->input('facebook_profile');
        $updateVenture->twitter_profile = $request->input('twitter_profile');
        $updateVenture->other_profile = $request->input('other_profile');
        $updateVenture->address = $request->input('address');
        $updateVenture->industries = $request->input('industries');
        $updateVenture->total_invested_cash = $request->input('total_invested_cash');
        $updateVenture->making_revenue = $request->input('making_revenue');
        $updateVenture->venture_stage = $request->input('venture_stage');
        $updateVenture->founder_name = $request->input('founder_name');
        $updateVenture->founder_phone_number = $request->input('founder_phone_number');
        $updateVenture->founder_email_address = $request->input('founder_email');
        $updateVenture->team_member_name = $request->input('team_member_name');
        $updateVenture->team_member_designation = $request->input('team_member_designation');
        $updateVenture->team_member_phone_number = $request->input('team_member_phone_number');

        if($request->hasfile('picture_of_the_startup')){
            $file = $request->file('picture_of_the_startup');
            $extension = $file->getClientoriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('ventures_images/', $filename);
            $updateVenture->picture_of_the_startup = $filename;
        }else {
            $file = $request->file('picture_of_the_startup');
            $updateVenture->picture_of_the_startup = "";

            return $file;
        }

        $updateVenture->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venture  $Venture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venture $venture)
    {
        $deleteRecord = Venture::findOrFail($venture->id);
        $deleteRecord->delete();
        Session::flash('Deleted',"The record has been successfully Deleted");
        return redirect('ventures');
    }
}
