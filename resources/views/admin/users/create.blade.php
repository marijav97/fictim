@extends('layouts.admin')

@section('content')

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add user</h1>
                            </div>
                            <form class="user"  method="post" action="{{route('users.store')}}">
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
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">add user</button>
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
