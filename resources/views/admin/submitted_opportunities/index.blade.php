@extends('layouts.sidebar')
@section('pageContent')

<h2 class="headingTag">Submitted Opportunities </h2>
@if(count($submitted_opportunities) > 0)
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th scope="col">#Id</th>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Submitter</th>
        <th scope="col">Submitter Email</th>
        <th scope="col">Category</th>
        <th scope="col">Organizer/Organization</th>
        <th scope="col">Eligible Region</th>
        <th scope="col">Is it funded?</th>
        <th scope="col">Submitted</th>
        <th scope="col">Operations</th>
    </tr>
    </thead>
    <tbody>
        @foreach($submitted_opportunities as $key => $submitted_opportunity)
            <tr>
                <th scope="row">{{$submitted_opportunity->id}}</th>
            <td><a title="View Submitted Opportunity" class="title-redirect" href="/submitted_opportunities/{{$submitted_opportunity->id}}">{{str_limit($submitted_opportunity->title,70)}}</a></td>
                <td><img alt="" src="{{ url('opportunity_suggested_images/'. $submitted_opportunity->image)}}" class="indexImgDimension"></td>
                <td>{{$submitted_opportunity->name}}</td>
                <td>{{$submitted_opportunity->email}}</td>
                <td>{{$submitted_opportunity->category}}</td>
                <td>{{$submitted_opportunity->organizer_name}}</td>
                <td>{{$submitted_opportunity->eligible_region}}</td>
                <td>{{$submitted_opportunity->funded}}</td>
                @if ($submitted_opportunity->created_at == null)
                <td>{{$submitted_opportunity->created_at}}</td>
                @else
                <td>{{$submitted_opportunity->created_at->diffForHumans()}}</td>
                @endif
                <td>
                    <a href="/submitted_opportunities/{{$submitted_opportunity->id}}" class="fas fa-eye icon-pad" title="View Opportunity"></a>
                    <a class="fas fa-trash icon-pad" data-toggle="modal" data-target="#exampleModal<?php echo $key?>" title="Delete Post"></a>
                </td>
            </tr>
            <!-- Modal for deleting user confirmation-->
            <div class="modal fade" id="exampleModal<?php echo $key?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <div class="col imgAlignment">
                            <img alt="" src="{{ url('opportunity_suggested_images/'. $submitted_opportunity->image)}}" class="indexImgDimension">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col textAlignment">
                        Are you sure you want to delete this suggested opportunity - <b>{{ $submitted_opportunity->title }}</b>?
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                    {!! Form::open(['method' => 'DELETE','action'=> ['OpportunityController@destroySubmittedOpportunity',$submitted_opportunity->id]]) !!}
                        {!! Form::submit('Delete Opportunity', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </tbody>
</table><hr>
@else
    <div class="NoDataMessage">
        <h2><b>No Opportunities Submitted Yet!!</b></h2>
    </div>
@endif
@endsection
