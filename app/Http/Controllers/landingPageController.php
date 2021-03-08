<?php

namespace App\Http\Controllers;
use App\Post;
use App\Mentor;
use App\MarketCategory;
use App\product;
use App\Venture;
use App\Opportunities;
use Illuminate\Http\Request;

class landingPageController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
        return view('index', compact('posts'));
    }



    public function getVentures()
    {
        $ventures = Venture::where('status','Approve')->get();
        return view('ventures', compact('ventures'));
    }

    public function getVenturesDetails($id)
    {
        $venturesDetails = Venture::findOrFail($id);

        return view('venturesDetails', compact('venturesDetails'));
    }

    public function getImpact()
    {
       // $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
        return view('impact');
    }


    public function getOpportunity()
    {
       $opportunities = Opportunities::orderBy('created_at', 'DESC')->get();
        return view('opportunities', compact('opportunities'));
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
        $mentors = Mentor::orderBy('created_at', 'DESC')->paginate(15);
        return view('mentors', compact('mentors'));
    }

    public function mentorProfile($id)
    {
        $mentor = Mentor::find($id);
        return view('mentorProfile', compact('mentor'));
    }

}
