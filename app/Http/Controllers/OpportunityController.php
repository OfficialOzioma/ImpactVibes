<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Opportunity;

class OpportunityController extends Controller
{
    
    public function index()
    {
        $opportunities = Opportunity::orderBy('id', 'desc')->get();

        return view('admin.opportunity.index', compact('opportunities'));
    }

    
    public function create()
    {
       return view('admin.opportunity.create');
    }

    
    public function store(Request $request)
    {
        $opportunity = new Opportunity;

        $opportunity->user_id = Auth::user()->id;
        $opportunity->title = $request->input('title');
        $opportunity->category = $request->input('category');
        $opportunity->organizer_name = $request->input('organizer_name');
        $opportunity->eligible_region = $request->input('eligible_region');
        $opportunity->funded = $request->input('funded');
        $opportunity->description = $request->input('description');
        $opportunity->link = $request->input('link');
        $opportunity->image = $request->input('image');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $name = $file->getClientoriginalName();
            $filename = time() . '.' . $name;
            $file->move('opportunity_images/', $filename);
            $opportunity->image = $filename;
        }else {
            $file = $request->file('image');
            $opportunity->image = "";

            return $file;
        }

        $opportunity->save();

        return redirect('opportunities');

    }

    
    public function show($id)
    {
        $opportunity = Opportunity::find($id);
        return view('admin.opportunity.show', compact('opportunity'));
    }

   
    public function edit($id)
    {
        $opportunity = Opportunity::find($id);
        return view('admin.opportunity.edit', compact('opportunity'));
    }

    public function update(Request $request, $id)
    {
        $opportunity = Opportunity::find($id);

        $opportunity->user_id = Auth::user()->id;
        $opportunity->title = $request->input('title');
        $opportunity->category = $request->input('category');
        $opportunity->organizer_name = $request->input('organizer_name');
        $opportunity->eligible_region = $request->input('eligible_region');
        $opportunity->funded = $request->input('funded');
        $opportunity->description = $request->input('description');
        $opportunity->link = $request->input('link');
        $opportunity->image = $request->input('image');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $name = $file->getClientoriginalName();
            $filename = time() . '.' . $name;
            $file->move('opportunity_images/', $filename);
            $opportunity->image = $filename;
        }else {
            $file = $request->file('image');
            $opportunity->image = "";

            return $file;
        }

        $opportunity->update();

        return redirect('opportunities');

    }

    public function destroy($id)
    {
        $opportunity = Opportunity::find($id);
        $opportunity->delete();
        Session::flash('Deleted',"The record has been successfully Deleted");
        return redirect('opportunities');
    }


}
