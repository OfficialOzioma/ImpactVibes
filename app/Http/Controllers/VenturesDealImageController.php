<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VenturesDeal;
use App\VenturesDealImages;

class VenturesDealImageController extends Controller
{
    
    public function index()
    {
    //    $ventureImage = VenturesDealImages::where('venture_id', $id);
    //    $venture = VenturesDeal::find($id);
    //    return view()
    }

    
    public function create($venturesDeal_id)
    {
        $venturesDeals = VenturesDeal::where('id', $venturesDeal_id)->get();
        return view('admin/ventures/imagesUpload', compact('venturesDeals'));
    }

    
    public function store(VenturesDeal $venturesDeal)
    {
    
        if(request()->hasfile('image')){ 
            $files = request()->file('image');
            $images = [];
          foreach($files as $file) {
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('public/venture/', $filename);
            $images[] = $filename;
          }
        }
          
        
        VenturesDealImages::create([
            'image' => implode(",", $images),
                       
            'venturesDeal_id' => $venturesDeal->id   
        ]);

        return redirect('/ventures');
    }

    
    public function show($id)
    {
        $images = VenturesDealImages::where('venturesDeal_id', $id)->pluck('image');
        $img = [];
        $venture = VenturesDeal::find($id);
        foreach($images as $key) {
            $img = array_merge($img,explode(",", $key));
        }
       
        return view('admin/ventures/viewImages', compact('img', 'venture'));
    }

    
    public function destroy($id)
    {
        //
    }
}
