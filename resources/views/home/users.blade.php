@extends('layouts.app-master')

@section('content')
    <div class="bg-light mt-5 p-5 rounded">
        @auth
            <h2>Users List</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Profile Image</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($userslists as $user)
                        <tr>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td><img src="{{ asset('img/'. $user->image) }}" alt="" width="100px" height="100px"></td>
                            <td>
                                <a href="{{ route('edit',$user->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>									
                                <a href="{{ route('destroy',$user->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
