@extends('layouts.sidebar')

@section('pageContent')
   @include('admin.market.index')
    <br />
    <br />
   <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">s/n</th>
        <th scope="col">Name</th>
        <th scope="col">No of Products</th>
        <th scope="col">View Products</th>
      </tr>
    </thead>
    <tbody>
        @php
            $counter = 0;
        @endphp
        @foreach ($products->unique('user_id') as $product)
            @php
                $counter ++;
                $count = DB::table('products')
                            ->where('user_id', $product->user_id)
                            ->count();
            @endphp
            <tr>
                <th scope="row">{{$counter}}</th>
                <td>{{ $product->user->name ?? 'Anonymous' }}</td>
                <td>
                    <span>{{ $count ?? '0'}}</span>
                </td>
                <td>
                    <button class="btn btn-primary">
                    <a href="{{ route('shop.show', $product->user_id)}}" class="text-decoration-none text-white">
                        View products
                    </a>
                    </button>
                </td>
            </tr>
        @endforeach

    </tbody>
  </table>

@endsection
