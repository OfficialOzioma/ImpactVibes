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
                                <th>Description  </th>
                                <td>{{$opportunity->email}}</td>
                            </tr>
                            <tr>
                                <th>Link to the Opportunity</th>
                                <td>{{$opportunity->link}}</td>
                            </tr>
                            {{-- <tr>
                                <th>Uploaded By</th>
                                <td>{{$opportunity->twitter}}</td>
                            </tr> --}}
                            <tr>
                                <th>Opportunity Expired</th>
                                <td>{{$opportunity->expired}}</td>
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