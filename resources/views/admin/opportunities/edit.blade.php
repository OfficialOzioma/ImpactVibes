@extends('layouts.sidebar') 
@section('pageContent')
<div class="container">
<a href="/showOpportunity/{{$opportunity->id}}" class="btn btn-danger">Back</a>
<div class="venture">
    <h2>Edit Opportunity</h2>

    <form action="/updateOpportunity/{{$opportunity->id}}" method="post" class="message" enctype="multipart/form-data">
        @csrf
        <label>Title</label>
        <input type="text" name="title" value="{{$opportunity->title}}" required>
        <label>Description</label>
        <textarea name="description" required>{{$opportunity->description}}</textarea>
        <label>Link</label>
        <input type="text" name="link" value="{{$opportunity->link}}" required>
        <label>Select Image</label>
        <input name="image" type="file" value="{{ ('/public/opportunities/' . $opportunity->image) }}" required>
        <input type="submit" value="Update">
    </form>
</div>
</div>
@endsection
