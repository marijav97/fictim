<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Edit user</h1>
                                </div>
                                <form class="user" action="@if($action == "users.update") {{ route($action, [ "user" => $user->id ]) }} @else {{ route($action) }} @endif" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        @csrf
                                        @if($action == "users.update")
                                            @method('PUT')
                                        @endif
                                        <div class="form-group ">
                                            <input type="text" class="form-control form-control-user" name="name" id="exampleFirstName"
                                                   value="{{ $user->name ?? old('name') }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail"
                                                   value="{{ $user->email ?? old('email') }}">
                                        </div>
                                        <div class="form-group ">
                                            <input type="password" class="form-control form-control-user"
                                                   id="exampleInputPassword" name="password" value="{{ $user->password ?? old('password') }}">
                                        </div>
                                        <div class="form-label-group">
                                            <select name="role_id" class="form-control">
                                                <label for="inputPassword">Role</label>
                                                @foreach($roles as $r)
                                                    <option {{ $r->id == $user->role_id ? "selected" : "" }} value="{{ $r->id }}">{{ $r->name }}</option>
                                                @endforeach
                                            </select>
                                        </div><hr>
                                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">add user</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
