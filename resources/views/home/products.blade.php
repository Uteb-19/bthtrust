@extends('layouts.app-master')

@section('content')
    <div class="bg-light mt-5 p-5 rounded">
        @auth
            <a href="{{ route('addproduct') }}" class="btn btn-primary">Add Product</a>
            <h2>Products List</h2>           
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>                          
                            <td><img src="{{ asset('img/'. $product->image) }}" alt="" width="100px" height="100px"></td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <a href="{{ route('editproduct',$product->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>									
                                <a href="{{ route('destroyproduct',$product->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
