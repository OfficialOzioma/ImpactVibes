<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Mentor;

class MentorsController extends Controller
{
    
    public function index()
    {
        $mentors = Mentor::orderBy('id', 'desc')->get();

        return view('admin.mentors.index', compact('mentors'));
    }

    function create()
    {
        return view('admin.mentors.create');
    }

    
    public function store(Request $request)
    {
        $mentor = new Mentor;

        $mentor->name = $request->input('name');
        $mentor->email = $request->input('email');
        $mentor->category = $request->input('category');
        $mentor->nationality = $request->input('nationality');
        $mentor->contact = $request->input('contact');
        $mentor->facebook = $request->input('facebook');
        $mentor->twitter = $request->input('twitter');
        $mentor->linkedin = $request->input('linkedin');
        $mentor->image = $request->input('image');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $name = $file->getClientoriginalName();
            $filename = time() . '.' . $name;
            $file->move('mentor_images/', $filename);
            $mentor->image = $filename;
        }else {
            $file = $request->file('image');
            $mentor->image = "";

            return $file;
        }

        $mentor->save();

        return redirect('mentors');

    }

    
    public function show($id)
    {
        $mentor = Mentor::find($id);
        return view('admin.mentors.show', compact('mentor'));
    }

    
    public function edit($id)
    {
        $mentor = Mentor::find($id);
        return view('admin.mentors.edit', compact('mentor'));
    }

    
    public function update(Request $request, $id)
    {
        $mentor = Mentor::find($id);

        $mentor->name = $request->input('name');
        $mentor->email = $request->input('email');
        $mentor->category = $request->input('category');
        $mentor->nationality = $request->input('nationality');
        $mentor->contact = $request->input('contact');
        $mentor->facebook = $request->input('facebook');
        $mentor->twitter = $request->input('twitter');
        $mentor->linkedin = $request->input('linkedin');
        $mentor->image = $request->input('image');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $name = $file->getClientoriginalName();
            $filename = time() . '.' . $name;
            $file->move('mentor_images/', $filename);
            $mentor->image = $filename;
        }else {
            $file = $request->file('image');
            $mentor->image = "";

            return $file;
        }


        $mentor->update();

        return redirect('mentors');
    }

    public function destroy($id)
    {
        $mentor = Mentor::find($id);
        $mentor->delete();
        Session::flash('Deleted',"The Mentor has been successfully Deleted");
        return redirect('mentors');
    }
}
