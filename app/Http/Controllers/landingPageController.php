<?php

namespace App\Http\Controllers;
use App\Post;
use App\MarketCategory;
use App\product;
use Illuminate\Http\Request;

class landingPageController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
        return view('index', compact('posts'));
    }



    public function getProfile()
    {
       // $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
        return view('profile' );
    }


    public function getImpact()
    {
       // $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
        return view('impact');
    }


    public function getOpportunity()
    {
       // $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
        return view('opportunities');
    }


    public function getMarketPlace()
    {
        $categories = MarketCategory::get();
        $products = product::get();

        return view('market', compact('categories','products'));
    }

    public function viewProduct($id)
    {
        $product = product::findOrFail($id);
        $category = MarketCategory::findOrFail($product->category_id);
        return view('viewproduct', compact('product', 'category'));
    }

    public function viewProductByCategory($id)
    {
        $products = product::where('category_id', $id)->get();

        return view('viewproductbycategory', compact('products'));
    }

    public function getMentors()
    {
       // $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
        return view('mentors');
    }
}
