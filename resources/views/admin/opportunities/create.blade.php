@extends('layouts.sidebar') 
@section('pageContent')

<div class="container">
    <a href="/listOpportunities" class="btn btn-danger">Back</a>
    <h1>Add Opportunity</h1>
    
    <form action="/createOpportunity" method="post" enctype="multipart/form-data" class="message">
        @csrf
        <label>Title</label>
        <input type="text" name="title" required>
        <label>Description</label>
        <textarea name="description" placeholder="Briefly tell us about the opportunity (15 Characters Max.)" required></textarea>
        <label>Link</label>
        <input type="text" name="link" required>
        <label>Select Image</label>
        <input name="image" type="file" required>
        <input type="submit" value="Submit">
    </form>
</div>

@endsection
