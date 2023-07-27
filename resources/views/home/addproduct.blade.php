@extends('layouts.app-master')

@section('content')
    <div class="bg-light mt-5 p-5 rounded">
        @auth
            <h2>Add Product</h2>
            <form method="post" action="{{ route('addproductdetail') }}" enctype="multipart/form-data">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="name" required="required" autofocus>
                    <label for="floatingName">name</label>
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>                

                <div class="form-group form-floating mb-3">
                    <input type="file" class="form-control" name="image" value="{{ old('image') }}" required="required" autofocus>
                    <label for="floatingName">Image</label>
                    @if ($errors->has('image'))
                        <span class="text-danger text-left">{{ $errors->first('image') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="price" required="required" autofocus>
                    <label for="floatingPrice">price</label>
                    @if ($errors->has('price'))
                        <span class="text-danger text-left">{{ $errors->first('price') }}</span>
                    @endif
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Add Product</button>

                @include('auth.partials.copy')
            </form>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
