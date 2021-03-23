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
                            <h4>Recent Posts</h4>
                            <h2>Our Recent Blog Entries</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Banner Ends Here -->
    <section class="blog-posts grid-system">
        <div class="container">
            @if(session()->has('user'))
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-post">
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" onclick="location.href='{{route('pages.posts.create')}}'">Create post</button>
                    </div>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            @foreach($posts as $post)
                            <div class="col-lg-6">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="{{asset('/storage/assets/images/'.$post->image)}}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>{{$post->catName}}</span>
                                        <a href="{{route('post', ["id" => $post->id])}}"><h4>{{$post->title}}</h4></a>
                                        <ul class="post-info">
                                            <li><a href="#">{{$post->userName}}</a></li>
                                            <li><a href="#">{{date("F j, Y", strtotime($post->created_at))}}</a></li>
                                        </ul>
                                        <p>{{$post->intro}}</p>
                                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" onclick="location.href='{{route('post', ["id" => $post->id])}}';">read more</button>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar-item recent-posts">
                                    <div class="sidebar-heading">
                                        <h2>Recent Posts</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            @foreach($topPosts as $one)
                                                <li><a href="#">
                                                        <h5>{{$one->title}}</h5>
                                                        <span>{{date("F j, Y", strtotime($one->created_at))}}</span>
                                                    </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @component("pages.posts.component.search", [
                                "categories" => $categories,
                                "checkedCat" => $checkedCat
                                ]) @endcomponent
                            </div>

                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-8">
                        {{$posts->links('vendor.pagination.bootstrap-4')}}
                    </div>
                </div>
        </div>
    </section>
@endsection
