<?php

namespace App\Http\Controllers;
use App\Post;
use App\Mentor;
use App\MarketCategory;
use App\product;
use App\Venture;
use App\Opportunity;
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
       $opportunities = Opportunity::where('expired', 0)->get();
        return view('opportunities', compact('opportunities'));
    }


    public function getMarketPlace()
    {
        $categories = MarketCategory::get();
        $products = product::get();

        return view('market', compact('categories','products'));
    }

    public function searchProduct(Request $request) 
    {
        // Get the search value from the request
        $keyword = $request->input('search');

        //Search in the Product table
        $products = product::query()
            ->where('name', 'LIKE', "%{$keyword}%")
            ->orWhere('price', 'LIKE', "%{$keyword}%")
            ->orWhere('units_in_stock', 'LIKE', "%{$keyword}%")
            ->orWhere('details', 'LIKE', "%{$keyword}%")
            ->get();

        //Search in the Category table
        $categories = MarketCategory::query()
        ->where('category_name', 'LIKE', "%{$keyword}%")
        ->get();

        return view('marketSearch', compact('categories','products'));
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
        $category = MarketCategory::find($id);

        return view('viewproductbycategory', compact('products', 'category'));
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
