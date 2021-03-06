@extends('layouts.sidebar')
@section('pageContent')

<div class="row">

    <div class="col-lg-4">
        <img src="{{ url('public/opportunities/'. $opportunity->image)}}" style="height:15rem;" class="card-img-top" alt="No Image">
    </div>

    <div class="col-lg-8">
        <div class="card">
            <h4 class="card-header">
                <b><a href="/editOpportunity/{{$opportunity->id}}" style="float:right;" class="btn btn-danger">Edit</a></b>
            </h4>
            <div class="card-body">

                    <table class="table table-striped table-hover">
                            <tr>
                                <th>Title  </th>
                                <td>{{$opportunity->title}}</td>
                            </tr>
                            <tr>
                                <th>Description  </th>
                                <td>{{$opportunity->description}}</td>
                            </tr>
                            <tr>
                                <th>Link  </th>
                                <td>{{$opportunity->link}}</td>
                            </tr>
                            <tr>
                                <th>Posted On  </th>
                                <td>{{$opportunity->created_at->diffForHumans()}}</td>
                            </tr>
                                
                    </table>
            </div>
        </div>
    </div>  
</div>


@endsection