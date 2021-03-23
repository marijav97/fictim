@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            @include('admin.users.form', ["action" => "users.update"])
        </div>
    </div>

@endsection
