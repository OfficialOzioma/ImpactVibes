@extends('layouts.sidebar')
@section('pageContent')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h4 class="card-header">
                <b>VENTURE DEAL</b>
                <a href="/editVenture/{{$venturesDeal->id}}" style="float:right;" class="btn btn-danger">Edit</a>
            </h4>
            <div class="card-body">

                    <table class="table table-striped table-hover">
                            <tr>
                                <th>Venture Name  </th>
                                <td>{{$venturesDeal->name}}</td>
                            </tr>
                            <tr>
                                <th>Deal/Field  </th>
                                <td>{{$venturesDeal->deal}}</td>
                            </tr>
                            <tr>
                                <th>Email  </th>
                                <td>{{$venturesDeal->email}}</td>
                            </tr>
                            <tr>
                                <th>Describe the Venture  </th>
                                <td>{{$venturesDeal->description}}</td>
                            </tr>
                            <tr>
                                <th><a href="/showVenturesImages/{{$venturesDeal->id}}" class="btn btn-success">View Images</a> </th>
                                <td></td>
                            </tr>
                                
                    </table>
            </div>
        </div>
    </div>  
</div>

<div class="row" style="margin: 10px">
    <div class="col-lg-12 col-md-12">
        <div class="d-flex align-items-center justify-content-center">
            <a href="/createVenturesImages/{{$venturesDeal->id}}" class="btn btn-danger">Upload Image</a>
        </div>
    </div>
</div>

@endsection