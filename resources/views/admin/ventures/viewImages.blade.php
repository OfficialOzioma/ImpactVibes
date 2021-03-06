@extends('layouts.sidebar')
@section('pageContent')
<div class="container">
    <h1>IMAGES</h1>

<div class="row">
    @if($img > 0 )
    @foreach($img as $image)
<div class="col-xl-4 col-md-6">
    <div class="image" >
        <img src="{{ url('public/venture/'. $image)}}" style="height:15rem; margin:5px; width: 15rem;">
    </div>
</div>
    @endforeach 
    @endif
</div>

<div class="row">
    <div class="col-xl-6 col-md-6">
        <div class="image" >
            <img src="{{ url('public/venture/'. $venture->image)}}" style="height:25rem; margin:5px; width: 35rem;">
        </div>
    </div>
</div>

</div>

@endsection