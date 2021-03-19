@extends('layouts.sidebar')
@section('pageContent')

<div class="row justify-content-center">
    <div class="col-lg-12 col-md-8">
        <div class="d-flex align-items-center justify-content-center">
            <a href="/submitted_opportunities" class="btn btn-secondary">Back</a>
        </div>
        <div class="single-product-items">
            <p>{!! $submitted_opportunity->description !!}</p>         
        </div> 
    </div>
</div>
@endsection