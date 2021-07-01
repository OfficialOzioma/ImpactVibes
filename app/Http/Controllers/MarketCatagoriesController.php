<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\MarketCategory;
use Illuminate\Routing\Route;

class MarketCatagoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = MarketCategory::orderBy('id', 'desc')->get();

        return view('admin.market.catagory.index', compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new MarketCategory();

        request()->validate([
            'category_name' => 'required|string|unique:market_categories|min:3',
        ]);

        $category->category_name = $request->category_name;

        $category->save();

        Session::flash('category_added','Category "'.$category->category_name.'" has been successfully Added');

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = MarketCategory::findOrFail($id);
        return view('admin.market.catagory.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'category_name' => 'required|string|min:3',
        ]);

        $category = MarketCategory::findOrFail($id);
        $category->category_name = $request->category_name;
        $category->save();

        Session::flash('category_updated','Category "'.$category->category_name.'" has been successfully Updated');

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = MarketCategory::findOrFail($id);
        Session::flash('category_deleted','Category "'.$category->category_name.'" has been successfully deleted');
        $category->delete();
        return redirect()->route('category.index');
    }
}
