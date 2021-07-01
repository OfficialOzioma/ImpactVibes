@extends('layouts.sidebar')
@section('pageContent')
<hr>
<div class="row">
     
    <div class="col-md-10">
        <div class="card">
            <h5 class="card-header">
                <b>{{$opportunity->title}}</b>
                <a href="/editOpportunity/{{$opportunity->id}}" style="float:right;" class="btn btn-default">Edit</a>
            </h5>
            <div class="card-body">
                    <table class="table table-striped table-hover">
                            <tr>
                                <th>Title of the Opportunity  </th>
                                <td>{{$opportunity->title}}</td>
                            </tr>
                            <tr>
                                <th>Category  </th>
                                <td>{{$opportunity->category}}</td>
                            </tr>
                            <tr>
                                <th>Opportunity Deadline</th>
                                <td>{{$opportunity->end_date}}</td>
                            </tr>
                            <tr>
                                <th>Eligible Region</th>
                                <td>{{$opportunity->eligible_region}}</td>
                            </tr>
                            <tr>
                                <th>Link to the Opportunity</th>
                                <td>{{$opportunity->link}}</td>
                            </tr>
                            <tr>
                                <th>Funded</th>
                                <td>{{$opportunity->funded}}</td>
                            </tr>
                            <tr>
                                <th>Organizer Name</th>
                                <td>{{$opportunity->organizer_name}}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{$opportunity->description}}</td>
                            </tr>
                            <tr>
                                <th>The Image  </th>
                                <td>{{$opportunity->image}}</td>
                            </tr>
                            <tr>
                                <th>Created At : </th>
                                @if ($opportunity->created_at == null)
                                <td>{{$opportunity->created_at}}</td>
                                @else
                                <td>{{$opportunity->created_at->diffForHumans()}}</td>
                                @endif
                            </tr>
                                
                    </table>
            </div>
        </div>
    </div>
   
</div>
@endsection