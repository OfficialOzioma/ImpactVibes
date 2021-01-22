<?php

namespace App\Http\Controllers;

use App\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mentors = Mentor::paginate(4);

        return view('/admin/mentors/index',compact('mentors'));
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
        $mentor = new Mentor();

        $mentor->name = $request->input('name');
        $mentor->email = $request->input('email');
        $mentor->contact = $request->input('contact');
        $mentor->category = $request->input('category');
        $mentor->twitter = $request->input('twitter');
        $mentor->linkedin = $request->input('linkedin');
        $mentor->facebook = $request->input('facebook');


        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientoriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('mentor_images/', $filename);
            $mentor->image = $filename;
        }else {
            return $request;
            $mentor->image = "";
        }

        $mentor->save();
        Session::flash('mentor_created',"Mentor has been successfully created");
        return redirect('/createMentors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function show(Mentor $mentor)
    {
        //
        $mentors = Mentor::paginate(12);

        return view('/admin/mentors/index',compact('mentors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function edit(Mentor $mentor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mentor $mentor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mentor $mentor)
    {
        //
    }
}
