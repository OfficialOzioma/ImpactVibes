<<<<<<< HEAD
@extends('layouts.sidebar') 
@section('pageContent')

<div class="venture">
    <h1>Venture Deal</h1>
    <h2>Edit Venture Deal</h2>

    <form action="/updateVenture/{{$venturesDeal->id}}" method="post" class="message" enctype="multipart/form-data>
        @csrf
        <label>Venture Name</label>
        <input type="text" name="name" value="{{$venturesDeal->name}}" required>
        <label>Deal</label>
        <input type="text" name="deal" value="{{$venturesDeal->deal}}" required>
        <label>Email Address</label>
        <input type="email" name="email" value="{{$venturesDeal->email}}" required>
        <label>Description</label>
        <textarea name="description" required>{{$venturesDeal->description}}</textarea>
        <input type="submit" value="Submit">
    </form>
</div>

=======
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
>>>>>>> 53a23f7e249a3ef310795a50cae23c68ce1cfc48
@endsection
