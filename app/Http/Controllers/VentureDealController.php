<?php

namespace App\Http\Controllers;

use App\VentureDeal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VentureDealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ventures.index');
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
        $startup = new VentureDeal();

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


        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VentureDeal  $ventureDeal
     * @return \Illuminate\Http\Response
     */
    public function show(VentureDeal $ventureDeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VentureDeal  $ventureDeal
     * @return \Illuminate\Http\Response
     */
    public function edit(VentureDeal $ventureDeal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VentureDeal  $ventureDeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VentureDeal $ventureDeal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VentureDeal  $ventureDeal
     * @return \Illuminate\Http\Response
     */
    public function destroy(VentureDeal $ventureDeal)
    {
        //
    }
}
