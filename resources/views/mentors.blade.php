@extends('layouts.landing')

@section('content')
<br><br><br><br><br><br><br><br>

<div class="mentors">
    <div class="mentors_main">
      <section id="mentors_content">
        <div class="wrapper" id="wrapper">
          <article class="mentor_col1">
            <div class="mentor_pad1">
              <h2 id="h2">Available Mentors</h2>
              @if(count($mentors) > 0) 
              @foreach($mentors as $key => $mentor)
                <div class="wrapper pad_bot3">
                    <figure id="figure" class="left marg_right1"><img id="mentor_img" src="{{ asset('assets/images/blog/b-4.jpg')}}" alt=""></figure>
                    <p class="pad_bot1"><strong class="color2">{{$mentor->name}} <br>
                        <span class="color1">{{$mentor->email}}</span></strong></p>
                    <p class="pad_bot2">{{$mentor->category}} </p>
                </div>
               @endforeach
               @endif
            </div>
          </article>

          <article class="mentor_col2">
            <div class="mentor_pad1">
              <h3 id="h3">Impact Views Updates</h3>
              <div class="wrapper pad_bot3">
                <figure id="figure2" class="left marg_right2">
                    <p class="pad_bot1"><strong class="color3">AGRICULTURE</strong></p>
                    <p class="pad_bot2">Prof. E.C.M is a qualified consultant in Software Engineering... <a href="#">More</a></p>
                </figure>
               </div>
                
                <div class="wrapper pad_bot3">
                    <figure id="figure2" class="left marg_right2">
                        <p class="pad_bot1"><strong class="color3">Software Engineering</strong></p>
                        <p class="pad_bot2">Prof. E.C.M is a qualified consultant in Software Engineering... <a href="#">More</a></p>
                    </figure>
                </div>

                <div class="wrapper pad_bot3">
                    <figure id="figure2" class="left marg_right2">
                        <p class="pad_bot1"><strong class="color3">Enterpreneurship</strong></p>
                        <p class="pad_bot2">Prof. E.C.M is a qualified consultant in Software Engineering... <a href="#">More</a></p>
                    </figure>
                </div>

                <div class="wrapper pad_bot3">
                    <figure id="figure2" class="left marg_right2">
                        <p class="pad_bot1"><strong class="color3">Bussinness</strong></p>
                        <p class="pad_bot2">Prof. E.C.M is a qualified consultant in Software Engineering... <a href="#">More</a></p>
                    </figure>
                </div>

              
            </div>
          </article>
          
        </div>
      </section>
    </div>
  </div>
                        
                       
@endsection