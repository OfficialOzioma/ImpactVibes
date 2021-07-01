@extends('layouts.sidebar')

@section('pageContent')
    @include('admin.market.index')
    <br /> <br />

    <form class="form-inline" method="POST" action="{{route('category.update',$category->id)}}">
        {{ method_field('PUT') }}
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <label for="category_name" class="sr-only">category_name</label>
            <input type="text" name="category_name" class="form-control form-control-lg @error('category_name') is-invalid @enderror" placeholder="Enter Category" value="{{ $category->category_name }}">
        </div>
        <button type="submit" class="btn btn-dark mb-2">Update Category</button>
    </form>
    <div class="w-50">
        @error('category_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

@endsection
