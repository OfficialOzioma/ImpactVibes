@extends('layouts.sidebar') 
@section('pageContent')

<div class="container">
    <h1>Add Opportunity</h1>
    
    <form action="/createOpportunity" method="post" enctype="multipart/form-data" class="message">
        @csrf
        <label>Title</label>
        <input type="text" name="title" required>
        <label>Description</label>
        <textarea name="description" required></textarea>
        <label>Link</label>
        <input type="text" name="link" required>
        <label>Select Image</label>
        <input name="image" type="file" required>
        <input type="submit" value="Submit">
    </form>
</div>

@endsection
