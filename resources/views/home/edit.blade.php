@extends('layouts.app-master')

@section('content')
    <div class="bg-light mt-5 p-5 rounded">
        @auth
            <h2>Users List</h2>
            <form method="post" action="{{ route('update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
        
                <h1 class="h3 mb-3 fw-normal">Edit Register</h1>

                <div class="form-group form-floating mb-3">
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="name@example.com" required="required" autofocus>
                    <label for="floatingEmail">Email address</label>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="username" value="{{ $user->username }}" placeholder="Username" required="required" autofocus>
                    <label for="floatingName">Username</label>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <img src="{{ asset('img/'.$user->image) }}" width="100px">
                    <input type="file" class="form-control" name="image" value="{{ $user->image }}" autofocus>
                    <label for="floatingName">Image</label>
                    @if ($errors->has('image'))
                        <span class="text-danger text-left">{{ $errors->first('image') }}</span>
                    @endif
                </div>
        
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                
                @include('auth.partials.copy')
            </form>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
