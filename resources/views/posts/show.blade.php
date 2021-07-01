@extends('layouts.landing')

@section('content')
<br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
            <div class="section-title pb-30">
                <h3 class="title mb-15">{{$post->title}}</h3>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4">
                        <button role="button" class="btn btn-dark addButtonAdminPanel" onclick="window.location='{{ route('blogposts.index') }}'">Back</button>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <span class="regular-price">Category-{{ $post->category->name }}</span>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <span class="regular-price">By-{{$post->user->name }}</span>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <p>On-{{ $post->created_at ? $post->created_at->toFormattedDateString() : 'Date unavailable'}}</p>
                    </div>
                </div>              
            </div> <!-- section title -->           
        </div>
    </div>
    <div class="row justify-content-center">     
        <div class="col-lg-8 col-md-6">
            <div class="single-product-items">
              <div class="product-item-image">
              @if ($post->photo == null)
              <img style="height: 25rem;" alt="" src="{{ asset('images/avatar.png' ) }}">
              @else 
              <img style="height: 25rem; width: 100%;" src="{{ $post->photo ? $post->photo->file : '/images/placeholder_blog.png'}}" alt="Blog Image">
             @endif   
              </div>                
            </div> 
        </div>              
    </div>
<br><br>
    <div class="row justify-content-center">     
        <div class="col-lg-12 col-md-8">
            <div class="single-product-items">
                <p>{!! $post->body !!}</p>         
            </div> 
        </div>              
    </div>
<br><br>
    <div class="row justify-content-center">     
        <div class="col-lg-12 col-md-8">
                <h3>Comments</h3> 
                @if(Session::has('comment_submitted'))
            <div class="alert alert-dismissible alert-success fade show">
                {{ session('comment_submitted')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif 
<br><br>
            @if(Auth::check())
            <div class="comments-container">
                <ul id="comments-list" class="comments-list">
                    <div class="comment-main-level">
                        <!-- Avatar -->
                        <div class="comment-avatar">
                            <img src="{{ Auth::user()->photo_id ? Auth::user()->photo->file : '/images/placeholder.png' }}" alt="">
                        </div>
                        <!-- Comment Box -->
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name">{{ Auth::user()->name }}</h6>
                            </div>
                            <div class="comment-content">
                                @if(Auth::user()->checkRole() == 'Admin')
                                {!! Form::open(['method' => 'POST','action'=>'PostCommentsController@store']) !!}
                                    {!! Form::hidden('post_id',$post->id) !!}
                                    <div class="form-group">
                                    {!! Form::textarea('body',null,['placeholder' => 'What are your thoughts?','class' => 'form-control','rows' => 3, 'required']) !!}
                                    </div>
                                    {!! Form::submit('Submit Comment', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close()!!}
                                <div class="display-error">@include('layouts.messages')</div>
                                @elseif(Auth::check())
                                {!! Form::open(['method' => 'POST','action'=>'PostCommentsController@createComment']) !!}
                                    {!! Form::hidden('post_id',$post->id) !!}
                                    <div class="form-group">
                                    {!! Form::textarea('body',null,['placeholder' => 'What are your thoughts?','class' => 'form-control','rows' => 3, 'required']) !!}
                                    </div>
                                    {!! Form::submit('Submit Comment', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close()!!}
                                @endif
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
            @else
            <p>Login/Register to comment on the post.</p>
            @endif
            <!-- Displaying all the comments and its reply-->
            <div class="comments-container">
                <ul id="comments-list" class="comments-list">
                    @foreach ($comments as $key => $comment)
                        @if($comment->is_active == 1)
                            <li>
                                <div class="comment-main-level">
                                    <!-- Avatar -->
                                    <div class="comment-avatar">
                                        <img src="{{$comment->user->photo_id ? $comment->user->photo->file : '/images/placeholder.png'}}" alt="">
                                    </div>
                                    <!-- Contenedor del Comentario -->
                                    <div class="comment-box">
                                        <div class="comment-head">
                                            <h6 class="comment-name {{ $comment->user_id == $comment->post->user_id ? 'by-author' : ''}}">{{ $comment->user->name }}</h6>
                                            <span>{{ $comment->created_at ? $comment->created_at->diffForHumans() : 'Date unavailable'}}</span>
                                                <i data-index="{{ $key }}" class="fa fa-reply replyToggle"></i>
                                            <!--<i class="fa fa-heart"></i>-->
                                        </div>
                                        <div class="comment-content">
                                            {{ $comment->body }}
                                        </div>
                                    </div>
                                </div>
                            </li>
                                <!-- Replies for the comment -->
                                <ul class="comments-list reply-list ">
                                    <!-- Put foreach here after ul-->
                                    @if(count($comment->replies) > 0)
                                        @foreach($comment->replies as $reply)
                                            @if($reply->is_active == 1)
                                                <li>
                                                    <!-- Avatar -->
                                                    <div class="comment-avatar">
                                                            <img src="{{ $reply->user->photo_id ? $reply->user->photo->file : '/images/placeholder.png'}}" alt="">
                                                    </div>
                                                    <div class="comment-box">
                                                        <div class="comment-head">
                                                            <h6 class="comment-name {{ $reply->user->id == $post->user_id ? 'by-author' : '' }}">{{ $reply->user->name }}</h6>
                                                            <span>{{ $reply->created_at ? $reply->created_at->diffForHumans() : 'Date unavailable'}}</span>
                                                             <!--<i class="fa fa-reply"></i>-->
                                                            <!--<i class="fa fa-heart"></i>-->
                                                        </div>
                                                        <div class="comment-content">
                                                            {{ $reply->body }}
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                    @if(Auth::check())
                                    <div class="comment-reply-container" id="{{ $key }}">
                                        <li>
                                            <!-- Avatar -->
                                            <div class="comment-avatar">
                                                    <img src="{{ Auth::user()->photo_id ? Auth::user()->photo->file : '/images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name">{{ Auth::user()->name }}</h6>
                                                </div>
                                                <div class="comment-content">
                                                    {!! Form::open(['method' => 'POST','action'=>'CommentRepliesController@createReply']) !!}
                                                        {!! Form::hidden('comment_id',$comment->id) !!}
                                                        <div class="form-group">
                                                        {!! Form::textarea('body',null,['placeholder' => 'What are your thoughts?','class' => 'form-control','rows' => 3, 'required']) !!}
                                                        </div>
                                                        {!! Form::submit('Submit Reply', ['class' => 'btn btn-primary']) !!}
                                                    {!! Form::close()!!}
                                                    <div class="display-error">@include('layouts.messages')</div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    @endif
                                    <!-- ends foreach here before ul -->
                                </ul>
                                <!-- Reply section for a comment ends -->
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div> <!--Comments-Container ends -->
        </div>              
    </div>
    
</div>
@endsection
