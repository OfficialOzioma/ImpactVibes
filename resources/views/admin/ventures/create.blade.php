@extends('layouts.sidebar') 
@section('pageContent')

<div class="venture">
    <h1>Venture Deal</h1>
    <h2>Register your venture here</h2>
    <p>
        You can remove any link to our website from this website template, you're free to use this website template without linking back to us.If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.
    </p>
    <form action="/createVentures" method="post" enctype="multipart/form-data" class="message">
        @csrf
        <label>Venture Name</label>
        <input type="text" name="name" required>
        <label>Deal</label>
        <input type="text" name="deal" required>
        <label>Email Address</label>
        <input type="email" name="email" required>
        <label>Description</label>
        <textarea name="description" required></textarea>
        <label>Select Images</label>
        <input name="image" type="file" multiple required>
        <input type="submit" value="Submit">
    </form>
</div>

@endsection
