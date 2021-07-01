@extends('layouts.sidebar')

@section('pageContent')
    @include('admin.market.index')

    <div class="col-sm-6 mt-3">
        <div class="card">
        <div class="card-img">
            <img class="card-img-top img-responsive product-img" src="/product_images/{{$product->picture}}" alt="Product Image" height="400" width="300">
        </div>
        <div class="card-body">
            <h5 class="card-title text-capitalize">
                <strong>{{$product->name}} </strong>
                <span class=" float-right"><strong>$ {{$product->price}}</strong></span>
            </h5>
            <hr>
            <p class="card-text"> {{ $product->details }}</p>
            <hr >
            <h5 class="card-title text-capitalize">
               <i class="fas fa-user"> Owner:</i> <strong> <a href="{{route('users.show', $user->id)}}" class=" text-decoration-none"> {{$user->name}} </a>  </strong>
                <span class="float-right"> Date: <strong> {{$product->updated_at->diffForHumans()}}</strong></span>
            </h5>
            <hr>
            {{-- <a href="" class="btn btn-danger">Delete this Product</a> --}}
            <button type="button" class="btn btn-danger p-2 m-1" data-toggle="modal" data-target="#exampleModal<?php echo $product->id; ?>">
                <i class="fas fa-trash"></i> Delete this Product
            </button>
              <!-- Modal for deleting user confirmation-->
              <div class="modal fade" id="exampleModal<?php echo $product->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirm Action!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class="col textAlignment">
                        Are you sure you want to delete Product - <b>{{ $product->name }}</b>?
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                        <form method="post" action="{{route('products.destroy',$product->id)}}">
                            {{ method_field('DELETE') }}
                            @csrf
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <button type="submit" class="btn btn-danger p-2 m-1">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection
