<form action="@if($action == "pages.posts.update") {{ route($action, $post->id) }} @else {{ route($action) }} @endif" method="POST" enctype="multipart/form-data">
    @csrf
    @if($action == "pages.posts.update")
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
        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title ?? old('title') }}" />
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
        <textarea class="form-control" id="content" row="5" name="content">{{ $post->content ?? old('content') }}</textarea>
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
    </div>
    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Submit</button>
</form>

