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
                            <h4>Edit post</h4>
                            <h2>{{$post->title}}</h2>
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
                @include('pages.posts.form', ["action" => "pages.posts.update"])
            </div>
        </div>
    </section>

@endsection
