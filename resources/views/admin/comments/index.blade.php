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
                        <th>Comment</th>
                        <th>User</th>
                        <th>Post</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $comm)
                        <tr>
                            <td>{{$comm->id}}</td>
                            <td>{{$comm->comment}}</td>
                            <td>{{$comm->userName}}</td>
                            <td>{{$comm->postTitle}}</td>
                            <td> <form action="{{ route("comments.destroy", [ "id" => $comm->id ]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">Delete</button>
                                </form></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
