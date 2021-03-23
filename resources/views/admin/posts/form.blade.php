<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Insert post</h1>
                            </div>
                            <form action="@if($action == "posts.update") {{ route($action, $post->id) }} @else {{ route($action) }} @endif" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if($action == "posts.update")
                                    @method('PUT')
                                @endif
                                <div class="form-group">
                                    @if($post->image)
                                        <img class="img-responsive" src="{{asset('storage/assets/images/'.$post->image)}}" alt=""><br/>
                                    @endif
                                    <label class="" for="image">Choose image</label>
                                    <input type="file" class="form-control" id="image" name="image" />
                                    @error('image')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title ?? old('title') }}"/>
                                    @error('title')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="intro">Intro</label>
                                    <textarea class="form-control" id="intro" row="3" name="intro">{{ $post->intro ?? old('intro') }}</textarea>
                                    @error('intro')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="form-control" id="content" row="3" name="content">{{ $post->content ?? old('content') }}</textarea>
                                    @error('content')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="row mx-1">
                                        <select name="category_id" class="form-control">
                                            @foreach($categories as $c)
                                                <option {{ $c->id == $post->category_id ? "selected" : "" }} value="{{ $c->id }}">{{ $c->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('category_id')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div><hr>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">submit</button>
                                </a>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
