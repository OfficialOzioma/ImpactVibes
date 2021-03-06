@extends('layouts.sidebar') 
@section('pageContent')
<div class="venture">
<h1>Venture Deal Image Upload</h1>
@if(count($venturesDeals)  > 0)
@foreach($venturesDeals as $venturesDeal)
<form action="/createVenturesImages/{{$venturesDeal->id}}" method="post" enctype="multipart/form-data" class="message">
    @csrf
    <div class="form-group" style="padding-bottom: 15px">                            
        <label class="col-lg-3">Upload Images</label>
        <input class="btn btn-info"  type="file" name="image[]" multiple > <br/>
    </div>
    <input type="submit" value="Submit">
</form>
@endforeach
@endif
</div>

@endsection
