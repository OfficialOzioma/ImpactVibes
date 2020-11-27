<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::where('user_id',Auth::user()->id)->paginate(12);

        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new product();
        // request()->validate([
        //     'product_name' => 'required|string',
        //     'product_detail' => 'required',
        //     'product_category' => 'required',
        //     'product_price' => 'required',
        //     'unit_in_stock' => 'required',
        //     'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8048',
        // ]);

        $product->category_id = $request->input('product_category');
        $product->user_id = Auth::user()->id;
        $product->name = $request->input('product_name');
        $product->price = $request->input('product_price');
        $product->units_in_stock = $request->input('unit_in_stock');
        $product->details = $request->input('product_detail');


        if($request->hasfile('product_img')){
            $file = $request->file('product_img');
            $extension = $file->getClientoriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('product_images/', $filename);
            $product->picture = $filename;
        }else {
            return $request;
            $product->picture = "";
        }

        $product->save();

        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        $product_view = product::findOrFail($product->id);
        return view('product.view', compact('product_view'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {

        $product_edit = product::findOrFail($product->id);
        return view('product.edit', compact('product_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $updateProduct = product::findOrFail($product->id);

        $updateProduct->category_id = $request->input('product_category');
        $updateProduct->name = $request->input('product_name');
        $updateProduct->price = $request->input('product_price');
        $updateProduct->units_in_stock = $request->input('unit_in_stock');
        $updateProduct->details = $request->input('product_detail');


        if($request->hasfile('product_img')){
            $file = $request->file('product_img');
            $extension = $file->getClientoriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('product_images/', $filename);
            $updateProduct->picture = $filename;
        }else {
            return $request;
            $updateProduct->picture = "";
        }

        $updateProduct->save();

        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $deleteProduct = product::findOrFail($product->id);
        $deleteProduct->delete();
        return redirect('product');
    }
}
