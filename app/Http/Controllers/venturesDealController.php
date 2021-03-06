<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VenturesDeal;
use App\VenturesDealImages;
//use Alpha\Console\Console;

class venturesDealController extends Controller
{
    
    public function index()
    {
        $venturesDeals = VenturesDeal::paginate(12);

        return view('/admin/ventures/index',compact('venturesDeals'));
    }

   
    public function create()
    {
        return view('/admin/ventures/create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'deal' => 'required',
            'email' => 'required',
            'description' => 'required',
            'image' => 'required | max:5000'
        ]);

        $venturesDeal = new VenturesDeal();

        $venturesDeal->name = $request->input('name');
        $venturesDeal->deal = $request->input('deal');
        $venturesDeal->email = $request->input('email');
        $venturesDeal->description = $request->input('description');
        $venturesDeal->image = $request->input('image');

        if($request->hasfile('image')){ 
            $file = $request->file('image');
         
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('public/venture/', $filename);
            $image = $filename;
           
         $venturesDeal->image = $image;
          
        }

        $venturesDeal->save();

        return redirect('/ventures');
        
    }

    
    public function show($id)
    {
        $venturesDeal = VenturesDeal::find($id);
        return view('/admin/ventures/show', compact('venturesDeal'));
    }

    
    public function edit($id)
    {
        $venturesDeal = VenturesDeal::find($id);
        return view('admin/ventures/edit', compact('venturesDeal'));
    }

   
    public function update(Request $request, $id)
    {
       $venturesDeal = VenturesDeal::find($id);

        $this->validate($request, [
            'name' => 'required',
            'deal' => 'required',
            'email' => 'required',
            'description' => 'required',
            'image'=> 'required || max: 2000'
        ]);
               
        $venturesDeal->name = $request->input('name');
        $venturesDeal->deal = $request->input('deal');
        $venturesDeal->email = $request->input('email');
        $venturesDeal->description = $request->input('description');
        $venturesDeal->images = $request->input('image');

        if($request->hasfile('image')){ 
            $file = $request->file('image');
         
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('public/venture/', $filename);
            $image = $filename;

            $venturesDeal->image = $image;
          
        }

        $data =array(
            "name"=>  $venturesDeal->name,
            "deal"=>  $venturesDeal->deal,
            "email"=>  $venturesDeal->email,
            "description"=>  $venturesDeal->description,
            "image"=> $venturesDeal->image
            );

            VenturesDeal::where('id', $id)->update($data);
            $venturesDeal->update();

            return redirect('/ventures');
            return $id;
    }

    
    public function destroy($id)
    {
       VenturesDeal::where('id', $id)->delete();
       return redirect('/ventures');
    }

}
