@extends('layouts.admin')

@section('content')
    <div clas="container">
        <div class="card shadow mb-4">
        <h1 class="h3 mb-2 text-gray-800">Welcome</h1>
        @if(session()->has("user"))
            <p class="mb-4">{{session()->get('user')->name}}</p>
        @endif

        <div class="card mb-4">
            <div class="card-header">
                Users
            </div>
            <div class="card-body">
                See all users.<br/>
                Insert new, edit or delete.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                Posts
            </div>
            <div class="card-body">
                See all posts.<br/>
                Insert new, edit or delete.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                Comments
            </div>
            <div class="card-body">
                See all comments.
            </div>
        </div>
        </div>
    </div>

@endsection


