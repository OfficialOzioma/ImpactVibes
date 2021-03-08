@extends('layouts.sidebar')
@section('pageContent')
<div class="container">
    <a href="/admin/categories" class="btn btn-danger">Back</a>
<h2>Edit Category</h2>
<hr>
    {!! Form::model($category,['method' => 'PATCH','action'=> ['AdminCategoriesController@update',$category->id]]) !!}
    <div class="form-group">
        {!! Form::label('name','Category Title:') !!}
        {!! Form::text('name',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Category',['class'=>'btn btn-success']) !!}
    </div>
    {!! Form::close() !!}
@include('layouts.messages')
</div>
@endsection