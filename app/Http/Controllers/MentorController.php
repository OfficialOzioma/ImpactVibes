<?php

namespace App\Http\Controllers;

use App\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required',
            'contact'=> 'required',
            'category'=> 'required',
            'twitter'=> 'required',
            'linkedin'=> 'required',
            'facebook'=> 'required',
            'image'=> 'required || max: 2000'
        ]);

        $mentor = new Mentor();

        $mentor->name = $request->input('name');
        $mentor->email = $request->input('email');
        $mentor->contact = $request->input('contact');
        $mentor->category = $request->input('category');
        $mentor->twitter = $request->input('twitter');
        $mentor->linkedin = $request->input('linkedin');
        $mentor->facebook = $request->input('facebook');
        $mentor->image = $request->input('image');

        if($request->hasfile('image')){
            
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('storage/', $filename);
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

        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required',
            'contact'=> 'required',
            'category'=> 'required',
            'twitter'=> 'required',
            'linkedin'=> 'required',
            'facebook'=> 'required',
            'image'=> 'required || max: 2000'
        ]);

        $mentor->name = $request->input('name');
        $mentor->email = $request->input('email');
        $mentor->contact = $request->input('contact');
        $mentor->category = $request->input('category');
        $mentor->twitter = $request->input('twitter');
        $mentor->linkedin = $request->input('linkedin');
        $mentor->facebook = $request->input('facebook');
        if($request->hasfile('image')){
            
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('storage/', $filename);
            $mentor->image = $filename;
        }else {
            return $request;
            $mentor->image = "";
        }


        $data =array(
                "name"=> $mentor->name,
                "email"=> $mentor->email,
                "contact"=> $mentor->contact,
                "category"=> $mentor->category,
                "twitter"=> $mentor->twitter,
                "linkedin"=> $mentor->linkedin,
                "facebook"=> $mentor->facebook,
                "image"=> $filename
        );

            Mentor::where('id', $id)->update($data);
            $mentor->update();

            return redirect('/mentors');
            return $id;
    }

    
    public function destroy($id)
    {
       Mentor::where('id', $id)->delete();
       return redirect('/mentors');
    }
}
