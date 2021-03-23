@extends('layouts.admin')

@section('content')


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->roleName}}</td>
                            <td> <a href="{{ route("users.edit", [ "user" => $user->id ]) }}" class="btn btn-lg btn-primary btn-block text-uppercase">Edit</a></td>
                            <td> <form action="{{ route("users.destroy", [ "user" => $user->id ]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">Delete</button>
                                </form></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" onclick="location.href='{{route('users.create')}}'">add user</button>
            </div>
        </div>
    </div>

@endsection
