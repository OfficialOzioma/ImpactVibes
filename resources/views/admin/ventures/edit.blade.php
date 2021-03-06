@extends('layouts.sidebar') 
@section('pageContent')

<div class="venture">
    <h1>Venture Deal</h1>
    <h2>Edit Venture Deal</h2>

    <form action="/updateVenture/{{$venturesDeal->id}}" method="post" class="message" enctype="multipart/form-data>
        @csrf
        <label>Venture Name</label>
        <input type="text" name="name" value="{{$venturesDeal->name}}" required>
        <label>Deal</label>
        <input type="text" name="deal" value="{{$venturesDeal->deal}}" required>
        <label>Email Address</label>
        <input type="email" name="email" value="{{$venturesDeal->email}}" required>
        <label>Description</label>
        <textarea name="description" required>{{$venturesDeal->description}}</textarea>
        <input type="submit" value="Submit">
    </form>
</div>

@endsection
