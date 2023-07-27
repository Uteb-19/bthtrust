@extends('layouts.app-master')

@section('content')
    <div class="bg-light mt-5 p-5 rounded">
        @auth
            <h2>Edit Product</h2>
            <form method="post" action="{{ route('updateproduct') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
        
                <h1 class="h3 mb-3 fw-normal">Edit Product</h1>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="name" value="{{ $product->name }}" placeholder="name" required="required" autofocus>
                    <label for="floatingName">name</label>
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>                

                <div class="form-group form-floating mb-3">
                    <img src="{{ asset('img/'.$product->image) }}" width="100px">
                    <input type="file" class="form-control" name="image" value="{{ $product->image }}" autofocus>
                    <label for="floatingName">Image</label>
                    @if ($errors->has('image'))
                        <span class="text-danger text-left">{{ $errors->first('image') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="price" value="{{ $product->price }}" placeholder="price" required="required" autofocus>
                    <label for="floatingPrice">Price</label>
                    @if ($errors->has('price'))
                        <span class="text-danger text-left">{{ $errors->first('price') }}</span>
                    @endif
                </div>

                
        
                <button class="w-100 btn btn-lg btn-primary" type="submit">Update</button>
                
                @include('auth.partials.copy')
            </form>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
