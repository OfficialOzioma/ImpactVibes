<?php

namespace App\Http\Controllers;
use App\Post;

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
       // $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
        return view('market');
    }
}
