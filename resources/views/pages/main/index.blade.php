@extends('layouts.layout')

@section('description') This is the main page of fictim. blog.@endsection
@section('keywords') fashion, beauty, style, recipes, decor, playlists @endsection
@section('title') fictim. @endsection

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
        <div class="container-fluid">
            <div class="owl-banner owl-carousel">
                @foreach($carousels as $item)
                <div class="item">
                    <img src="{{asset('assets/images/'.$item->image)}}" alt="{{$item->title}}">
                    <div class="item-content">
                        <div class="main-content">
                            <div class="meta-category">
                                <span class='titleCat' id="{{$item->category_id}}">{{$item->catName}}</span>
                            </div>
                            <h4>{{$item->title}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <!-- Banner Ends Here -->


    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">

                        <div class="row">
                            @foreach($posts as $post)
                                @component("pages.posts.component.post",["post"=>$post]) @endcomponent
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
