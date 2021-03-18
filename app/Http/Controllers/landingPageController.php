<?php

namespace App\Http\Controllers;
use App\Post;
use App\Mentor;
use App\MarketCategory;
use App\product;
use App\Venture;
use App\Opportunity;
use App\SubmittedOpportunities;

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
       $opportunities = Opportunity::orderBy('created_at', 'DESC')->paginate(16);
        return view('opportunities', compact('opportunities'));
    }

    public function submitOpportunity()
    {
        return view('opportunity_submit');
    }

    public function submittedOpportunity(Request $request)
    {
        $submiitedOpportunity = new SubmittedOpportunities;

        $submiitedOpportunity->name = $request->input('name');
        $submiitedOpportunity->email = $request->input('email');
        $submiitedOpportunity->title = $request->input('title');
        $submiitedOpportunity->category = $request->input('category');
        $submiitedOpportunity->organizer_name = $request->input('organizer_name');
        $submiitedOpportunity->eligible_region = $request->input('eligible_region');
        $submiitedOpportunity->funded = $request->input('funded');
        $submiitedOpportunity->description = $request->input('description');
        $submiitedOpportunity->image = $request->input('image');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $name = $file->getClientoriginalName();
            $filename = time() . '.' . $name;
            $file->move('opportunity_suggested_images/', $filename);
            $submiitedOpportunity->image = $filename;
        }else {
            $file = $request->file('image');
            $submiitedOpportunity->image = "";

            return $file;
        }

        $submiitedOpportunity->save();

        return redirect('opportunity');

    }


    public function searchOpportunity(Request $request) 
    {
        // Get the search value from the request
        $keyword = $request->input('search');

        //Search in the Product table
        $opportunities = Opportunity::query()
            ->where('title', 'LIKE', "%{$keyword}%")
            ->orWhere('category', 'LIKE', "%{$keyword}%")
            ->orWhere('deadline', 'LIKE', "%{$keyword}%")
            ->orWhere('elegible_regions', 'LIKE', "%{$keyword}%")
            ->orWhere('organizer_name', 'LIKE', "%{$keyword}%")
            ->orWhere('funded', 'LIKE', "%{$keyword}%")
            ->get();

        return view('opportunitySearch', compact('opportunities'));
    }

    public function getOpportunityInfo($id)
    {
       $opportunity = Opportunity::find($id);
        return view('opportunityInfo', compact('opportunity'));
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
