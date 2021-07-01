@extends('layouts.sidebar')

@section('pageContent')
    @include('admin.market.index')

    <div class="row">
        @foreach ($products as $product)
            <div class="col-sm-6 mt-3">
                <div class="card">
                <div class="card-img">
                    <img class="card-img-top img-responsive product-img" src="/product_images/{{$product->picture}}" alt="Product Image" height="400" width="300">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-capitalize">
                        <strong>{{$product->name}} </strong>
                        <span class=" float-right"><strong>N {{$product->price}}</strong></span>
                    </h5>
                    <hr>
                    <p class="card-text"> {{ $product->details }}</p>
                    <a href="{{route('products.show',$product->id)}}" class="btn btn-primary">See this Product</a>
                </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
