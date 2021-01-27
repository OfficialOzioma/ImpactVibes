@extends('layouts.sidebar')

@section('pageContent')
    @include('admin.market.index')
    <br /> <br />
    <form class="form-inline" method="POST">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <label for="category_name" class="sr-only">category_name</label>
            <input type="text" name="category_name" class="form-control form-control-lg @error('category_name') is-invalid @enderror" placeholder="Enter Category" value="{{ old('category_name') }}">
        </div>
        <button type="submit" class="btn btn-dark mb-2">Add Category</button>
    </form>
    <div class="w-50">
        @error('category_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
        <br /> <br />
        @if(Session::has('category_added'))
            <div class="alert alert-dismissible alert-success fade show">
                {{ session('category_added')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(Session::has('category_updated'))
            <div class="alert alert-dismissible alert-success fade show">
                {{ session('category_updated')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(Session::has('category_deleted'))
            <div class="alert alert-dismissible alert-success fade show">
                {{ session('category_deleted')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">s/n</th>
            <th scope="col">Catagories</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @php
                $counter = 0;
            @endphp
            @foreach ($category as $cat)
                @php
                    $counter ++;
                @endphp

                <tr>
                    <th scope="row">{{ $counter }}</th>
                    <td>{{ $cat->category_name }}</td>
                    <td>
                        <button class="btn btn-primary">
                            <a href="{{route('category.edit',$cat->id)}}" class="text-white text-decoration-none">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger p-2 m-1" data-toggle="modal" data-target="#exampleModal<?php echo $counter?>">
                            <i class="fas fa-trash"></i> Delete
                        </button>

                         <!-- Modal for deleting user confirmation-->
                        <div class="modal fade" id="exampleModal<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <div class="col textAlignment">
                                    Are you sure you want to delete category - <b>{{ $cat->category_name }}</b>?
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                    <form method="post" action="category/{{$cat->id }}">
                                        {{ method_field('DELETE') }}
                                        @csrf
                                        <input type="hidden" name="id" value="{{$cat->id}}">
                                        <button type="submit" class="btn btn-danger p-2 m-1">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

@endsection
