<?php

namespace App\Http\Controllers;

use App\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MentorController extends Controller
{
    public function index()
    {
        $mentors = Mentor::paginate(12);

        return view('/admin/mentors/index',compact('mentors'));
    }

   
    public function create()
    {
        return view('/admin/mentors/create');
    }

    
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
        return redirect('/mentors');
    }

    public function show($id)
    {
        $mentor = Mentor::find($id);
       return view('admin/mentors/show', compact('mentor'));
    }

    
    public function edit($id)
    {
        $mentor = Mentor::find($id);
        return view('admin/mentors/edit', compact('mentor'));
    }

    
    public function update(Request $request, $id)
    {
        $mentor = Mentor::find($id);

        $mentor->name = $request->input('name');
        $mentor->email = $request->input('email');
        $mentor->contact = $request->input('contact');
        $mentor->category = $request->input('category');
        $mentor->twitter = $request->input('twitter');
        $mentor->linkedin = $request->input('linkedin');
        $mentor->facebook = $request->input('facebook');

        $data =array(
                "name"=> $mentor->name,
                "email"=> $mentor->email,
                "contact"=> $mentor->contact,
                "category"=> $mentor->category,
                "twitter"=> $mentor->twitter,
                "linkedin"=> $mentor->linkedin,
                "facebook"=> $mentor->facebook
        );

            Mentor::where('id', $id)->update($data);
            $mentor->update();

            return redirect('/mentors');
            return $id;
    }

    
    public function destroy(Mentor $mentor)
    {
        //
    }
}
