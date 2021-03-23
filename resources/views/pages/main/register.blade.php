@extends('layouts.layout')

@section('description') This is the posts page of fictim. blog.@endsection
@section('keywords') fashion, beauty, style, recipes, decor, playlists @endsection
@section('title') fictim. @endsection

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Register</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image">
                        <img src="{{asset('assets/images/girl.jpg')}}" width="100%;"/>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register</h1>
                            </div>
                            <form class="user"  method="post" action="{{route('register')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="name" id="exampleFirstName"
                                           placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail"
                                           placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                           id="exampleInputPassword" name="password" placeholder="Password">
                                </div>
                                <div class="form-label-group">
                                    <select name="role_id" class="form-control">
                                        <label for="inputPassword">Role</label>
                                        @foreach($roles as $r)
                                            <option value="{{ $r->id }}">{{ $r->name }}</option>
                                        @endforeach
                                    </select>
                                </div><hr>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                                </a>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
