@extends('layouts.sidebar') 
@section('pageContent')

<div class="row">
<div class="col-lg-12 col-md-12">
    @if(count($mentors) > 0) 
    <div class="row">
        @foreach($mentors as $key => $mentor)
        <div class="col-lg-4 col-md-6">
            <div class="single-blog mt-30"  style="height: 20rem;">
                <div class="blog-image">
                    <a href="/showMentor/{{$mentor->id}}">
                        <img style="height: 14rem;" src="{{ url('mentor_images/'. $mentor->image)}}" style="height:5rem;" alt="Mentor">
                    </a>
                </div>
                <div class="blog-content">
                    <div class="content">
                        <h4 class="title">{{$mentor->name}}</h4>
                    </div>
                    <div class="meta d-flex justify-content-between align-items-center">
                        <div class="meta-admin d-flex align-items-center">
                            <div class="admin-title">
                                <h5 class="title">Category:  <b>{{$mentor->category}}<b></h5>
                                <a href="{{$mentor->linkedin}}"><i class="lni lni-linkedin-original"></i></a>
                            </div>
                        </div>  <!-- meta admin -->
                        
                    </div> <!-- meta -->
                </div>
            </div> <!-- single blog -->
        </div>

        @endforeach
    </div>

    @else
    <div class="NoDataMessage">
        <h2><b>No mentors to Show!!</b></h2>
    </div>
    @endif

</div>

<div class="row align-items-center justify-content-center">
    <div class="col-lg-12 col-md-12">
        <a href="/createMentor" class="btn btn-danger">Create Mentors</a>
    </div>
</div>

@endsection

