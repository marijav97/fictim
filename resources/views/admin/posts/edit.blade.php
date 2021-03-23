@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            @include('admin.posts.form', ["action" => "posts.update"])
        </div>
    </div>

@endsection
