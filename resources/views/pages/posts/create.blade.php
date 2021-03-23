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
                            <h4>Create new post</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Banner Ends Here -->
    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <form action="{{route('pages.posts.store')}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
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
                        <input type="text" class="form-control" id="title" name="title"/>
                        @error('title')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="intro">Intro</label>
                        <textarea class="form-control" id="intro" row="3" name="intro"></textarea>
                        @error('intro')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" row="3" name="content"></textarea>
                        @error('content')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="row mx-1">
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
            </div>
        </div>
    </section>
@endsection
