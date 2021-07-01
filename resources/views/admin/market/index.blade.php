{{-- @extends('layouts.sidebar')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
@endsection
@section('pageContent') --}}

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <span class="navbar-brand" href="#">MarketPlace</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('category.index')}}">Add catagories <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('products.index')}}">View Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('shop.index')}}">View shop owners</a>
        </li>

      </ul>
    </div>
  </nav>

    {{-- @foreach ($products as $product)
        {{
            $product
        }}
    @endforeach --}}


{{-- @endsection --}}
