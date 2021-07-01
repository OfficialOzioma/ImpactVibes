@extends('layouts.sidebar')

@section('pageContent')
    <div class="container">
        <form action="/adminVentures/{{$venturesRecord->id}}" method="post">
            {{ method_field('PATCH') }}
            @csrf
            <div class="table-responsive bg-dark">
                <table id="example" class="table table-striped table-bordered text-white" style="width:100%">
                    <tbody>
                        <tr>
                            <td><strong>Business Name</strong> </td>
                            <td>{{$venturesRecord->startup_name}}</td>
                        </tr>
                        <tr>
                            <td><strong>Venture Type</strong> </td>
                            <td>{{$venturesRecord->venture_type}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%"><strong>About the Business</strong> </td>
                            <td>{{$venturesRecord->about_startup}}</td>
                        </tr>
                        <tr>
                            <td>
                                Status
                            </td>
                            <td>

                                <div class="form-group text-black">
                                    <select class="form-control" name="status" >
                                        <option selected disabled>{{$venturesRecord->status}}</option>
                                        <option value="Approve">Approve</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Not Approve">Not Approved</option>
                                    </select>
                                </div>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-success w-100 p-2 mt-2"> <h4> update status</h4></button>
                </div>
            </div>
        </form>
    </div>
@endsection