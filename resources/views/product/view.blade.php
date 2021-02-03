@extends('layouts.product')

@section('content')

    <div class="container">

        <div class="container tm-mt-big tm-mb-big">
            <div class="row">
                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                    <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="tm-block-title d-inline-block">View Product</h2>
                            </div>
                        </div>
                        <div class="row tm-edit-product-row">
                    <div class="col-xl-6 col-lg-6 col-md-12">

                        <div class="form-group mb-3">
                            <label for="name">Product Name</label>
                        <h4 class="form-control font-weight-bold">{{$product_view->name}}</h4>
                        </div>
                        <div class="form-group mb-3">
                            <label for="description" >Details</label>
                            <h4 class="form-control font-weight-bold">
                                <div style="height: 100%">
                                    {{$product_view->details}}
                                </div>
                            </h4>
                        </div>
                        <div class="form-group mb-3">
                            <label for="category">Category</label>
                            <h4 class="form-control font-weight-bold">{{$product_view->category_id}}</h4>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                                <label for="price" >Price (Naira)</label>
                                <h4 class="form-control font-weight-bold ">{{$product_view->price}}</h4>
                            </div>
                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                                <label for="stock" >Units In Stock</label>
                                <h4 class="form-control font-weight-bold ">{{$product_view->units_in_stock}}</h4>
                            </div>
                        </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                                <div class="tm-product-img-dummy mx-auto">
                                    <div class="product-img-div">
                                    <img id="product_img"  class="img-responsive product-img" src="/product_images/{{$product_view->picture}}" alt="Product Image"   />
                                    </div>

                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block text-uppercase">
                                <a href="{{$product_view->id}}/edit" class="text-white">
                                        <i class="fas fa-edit text-white"></i> Edit Product
                                    </a>

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
