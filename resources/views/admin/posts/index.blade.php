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
                        <th>Title</th>
                        <th>Intro</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->intro}}</td>
                            <td>{{$post->content}}</td>
                            <td>{{$post->catName}}</td>
                            <td><img src="{{asset('storage/assets/images/'.$post->image)}}" class="img-thumbnail"/></td>
                            <td> <a href="{{ route("posts.edit", [ "post" => $post->id ]) }}" class="btn btn-lg btn-primary btn-block text-uppercase">Edit</a></td>
                            <td> <form action="{{ route("posts.destroy", [ "post" => $post->id ]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">Delete</button>
                                </form></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" onclick="location.href='{{route('posts.create')}}'">insert post</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                {{$posts->links('vendor.pagination.bootstrap-4')}}
            </div>
        </div>
    </div>

@endsection
