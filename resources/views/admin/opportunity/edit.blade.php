@extends('layouts.userDashboard')

@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/venturesForm.css') }} ">
@endsection

@section('content')
<br>
    <div class="container">
        <div class="m-3">
            <div class="">
                <form action="/updateOpportunity/{{$opportunity->id}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="page-wrapper bg-dark p-t-100 p-b-50">
                        <div class="wrapper wrapper--w900">
                            <div class="card card-6 p-3">
                                <div class="card-heading">
                                    <h2 class="title">Opportunity</h2>
                                </div>
                                <div class="card-body">
                                        <div class="form-row">
                                            <div class="name">Title</div>
                                            <div class="value">
                                            <input class="input--style-6 form-control-lg" value="{{$opportunity->title}}" type="text" name="title" placeholder="Title of the Opportunity">
                                            </div>
                                        </div>
                                    
                                        <div class="form-row">
                                            <div class="name">Description</div>
                                            <div class="value">
                                                <div class="input-group">
                                                    <textarea class="textarea--style-6" name="description" placeholder="Briefly explain what the opportunity is about (100 Characters Max.)">{{$opportunity->description}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="name">The Link</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" value="{{$opportunity->link}}" type="text" name="link" placeholder="The link to the opportunity">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="name">Upload Image</div>
                                            <div class="value">
                                                <label for="formFileLg" class="form-label">Select Picture</label>
                                                <input type="file" class="form-control form-control-lg" id="formFileLg" name="image" required />
                                                <div class="label--desc">Upload image. Max file size 50 MB</div>
                                            </div>
                                        </div>

                                <div class="card-footer">
                                    <button class="btn btn--radius-2 btn-dark" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/ventureForm.js') }}"></script>
@endsection
