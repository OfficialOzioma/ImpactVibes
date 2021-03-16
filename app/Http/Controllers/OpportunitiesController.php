<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opportunities;

class OpportunitiesController extends Controller
{
   
    public function index()
    {
        $opportunities = Opportunities::orderBy('created_at', 'DESC')->get();
        return view('admin/opportunities/index', compact('opportunities'));
    }

    
    public function create()
    {
        return view('admin/opportunities/create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'required'
        ]);

        $opportunity = new Opportunities();

        $opportunity->title = $request->input('title');
         $opportunity->description = $request->input('description');
         $opportunity->link = $request->input('link');
         $opportunity->image = $request->input('image');

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . "." . $file->getClientOriginalName();
            $file->move('public/opportunities/', $filename);
            $image = $filename;

             $opportunity->image = $image;
        }
         $opportunity->save();

        return redirect('/listOpportunities');
    }

    
    public function show($id)
    {
        $opportunity = Opportunities::find($id);
        return view('admin/opportunities/show', compact('opportunity'));
    }

   
    public function edit($id)
    {
        $opportunity = Opportunities::find($id);
        return view('admin/opportunities/edit', compact('opportunity'));
    }

    public function update(Request $request, $id)
    {
        $opportunity = Opportunities::find($id);

        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'required'
        ]);

        $opportunity->title = $request->input('title');
        $opportunity->description = $request->input('description');
        $opportunity->link = $request->input('link');
        $opportunity->image = $request->input('image');

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . "." . $file->getClientOriginalName();
            $file->move('public/opportunities/', $filename);
            $image = $filename;

             $opportunity->image = $image;
        }
        $data =array(
            "title"=>  $opportunity->title,
            "description"=>  $opportunity->description,
            "link"=>  $opportunity->link,
           "image" => $opportunity->image
            );
            
            Opportunities::where('id', $id)->update($data);
            $opportunity->update($data);

           
        return redirect('/listOpportunities');
    }

    
    public function destroy($id)
    {
        Opportunities::where('id', $id)->delete();
        return redirect('/listOpportunities');
    }
}
