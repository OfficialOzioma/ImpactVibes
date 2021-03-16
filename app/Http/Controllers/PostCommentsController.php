<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Comment;
use App\Post;

class PostCommentsController extends Controller
{
    
    public function index()
    {
        //
        $comments = Comment::all();
        return view('admin.comments.index',compact('comments'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $validatedComment = $this->validate(
            $request,[
                'body' => 'required|max:255',
            ],
            [
                'body.required' => 'Comment body is required',
                'body.max' => 'Maximum allowed characters 255',
            ]
        );
        $comment = $request->all();
        $user = Auth::user();
        $comment['user_id'] = $user->id;
        Comment::create($comment);
        $request->session()->flash('comment_submitted', 'Your comments has been submitted and awaiting moderation ');
        return redirect()->back();
    }

    
    public function show($id)
    {
        //
        $post = Post::findOrFail($id);
        $comments = $post->comment;
        return view('admin.comments.show',compact('comments','post'));
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
        $comment = Comment::findOrFail($id);
        $comment_status = $request->is_active;
        $comment->update(['is_active' => $comment_status]);
        if($comment_status == 0)
            $request->session()->flash('comment_status', 'Comment with ID "'.$comment->id.'" has been successfully unapproved');
        else if($comment_status == 1)
        $request->session()->flash('comment_status', 'Comment with ID "'.$comment->id.'" has been successfully approved');
        return redirect()->route('comments.index');
    }

   
    public function destroy($id)
    {
        $commentToBeDeleted = Comment::findOrFail($id);
        Session::flash('comment_deleted', 'Comment with ID "'.$commentToBeDeleted->id.'" has been successfully deleted');
        $commentToBeDeleted->delete();
        return redirect()->route('comments.index');
        //
    }
    public function createComment(Request $request){
        $validatedComment = $this->validate(
            $request,[
                'body' => 'required|max:255',
            ],
            [
                'body.required' => 'Comment body is required',
                'body.max' => 'Maximum allowed characters 255',
            ]
        );
        $comment = $request->all();
        $user = Auth::user();
        $comment['user_id'] = $user->id;
        Comment::create($comment);
        $request->session()->flash('comment_submitted', 'Your comments has been submitted and awaiting moderation ');
        return redirect()->back();
    }
}
