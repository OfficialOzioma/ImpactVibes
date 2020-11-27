@extends('layouts.product')

@section('content')

    <div class="container">
        <div class="container tm-mt-big tm-mb-big">
            <div class="row">
                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                    <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="tm-block-title d-inline-block">Add Product</h2>
                            </div>
                        </div>
                        <div class="row tm-edit-product-row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <form action="{{ route('product.store') }}" class="tm-edit-product-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Product Name</label>
                                <input id="name" name="product_name" type="text" class="form-control validate" required />
                            </div>
                            <div class="form-group mb-3">
                                <label for="description" >Details</label>
                                <textarea name="product_detail" class="form-control validate" rows="3" required ></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="category">Category</label>
                                <select name="product_category" class="custom-select tm-select-accounts"id="category" required>
                                    <option >Select category</option>
                                    <option value="1">New Arrival</option>
                                    <option value="2">Most Popular</option>
                                    <option value="3">Trending</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="price" >Price (Naira)</label>
                                    <input id="price"  name="product_price" type="text" class="form-control validate" required />
                                </div>
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="stock" >Units In Stock</label>
                                    <input id="stock" name="unit_in_stock" type="text" class="form-control validate" required />
                                </div>
                            </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                                <div class="tm-product-img-dummy mx-auto">
                                    {{-- <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();" ></i> --}}
                                    <input type="file" id="fileInput" name="product_img"  style="display:none;" onchange="preview_image(event)" required />
                                    <div class="product-img-div">
                                        <img id="product_img"  class="img-responsive product-img" src="" alt="Product Image"   />
                                    </div>

                                </div>
                                <div class="custom-file mt-3 mb-3">
                                    <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD PRODUCT IMAGE" onclick="document.getElementById('fileInput').click();" />
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        function preview_image(event)
        {
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('product_img');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
