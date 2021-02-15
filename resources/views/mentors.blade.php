@extends('layouts.landing')

@section('content')
<br><br><br>
    <div class="col-lg-12 col-md-12" id="mentorContainer">
        <div class="row" id="mentorRow">
  
              @if(count($mentors) > 0) 
              @foreach($mentors as $key => $mentor)
                <div class="col-lg-3" id="mentorProfile">
                    <figure id="figure" class="left marg_right"><img id="mentor_img" src="{{ url('storage/'. $mentor->image)}}" alt=""></figure>
                    <div class="text-body">
                      <p><strong class="color2">{{$mentor->name}}</p>
                      <p>{{$mentor->category}} </p>
                      <p><a href="/profile/{{$mentor->id}}" id="profileButton" class="btn btn-danger">View Profile</a></p>
                    </div>
                </div>
               @endforeach
               @endif
        
        </div>
      </section>
    </div>
                        
                       
@endsection