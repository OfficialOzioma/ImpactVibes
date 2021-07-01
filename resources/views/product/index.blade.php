@extends('layouts.product')

@section('content')
    <div class="container">
        <div class="container tm-mt-big tm-mb-big ">
            <div class="row">
                @if(count($products) > 0)
                    @foreach ($products as $key => $product)
                        <div class="col-md-3 mt-1">
                            <div class="card products">
                                <div class="card-header">
                                    <div class="card-body">
                                        <div class="card-img">
                                            <img  class="img-responsive product-img" src="product_images/{{$product->picture}}" alt="image">
                                        </div>
                                        <div class="p-2">
                                            <span class="text-white text-capitalize text-justify font-weight-bold">
                                                {{ $product->name }}
                                            </span>
                                        </div>
                                        <hr />
                                        <div class="p-2">
                                            <span class="text-white text-capitalize font-weight-light w-100">
                                                {{ $product->details }}
                                            </span>
                                        </div>
                                        <div class="card-footer d-inline-flex w-100">
                                            <button class="btn btn-success p-2 m-1">
                                                <a href="product/{{$product->id }}" class=" text-white">
                                                    <i class="fas fa-eye"></i>view
                                                </a>

                                            </button>
                                            <form action="product/{{$product->id }}" method="post">
                                                {{ method_field('DELETE') }}
                                                @csrf
                                                <button type="submit" class="btn btn-danger p-2 m-1">
                                                    <i class="fas fa-trash"></i> delete
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Pagination -->
                    <div class="row">
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-center"> {{ $products->links() }}</div>
                        </div>
                    </div>
                @else
                    <div class="NoDataMessage">
                        <h2><b>No Product to Show!!</b></h2>
                    </div>
                @endif




            </div>

        </div>
    </div>
@endsection
