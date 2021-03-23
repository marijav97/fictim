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
                            <h4>{{$post->title}}</h4>
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
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="{{asset('storage/assets/images/'.$post->image)}}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>{{$post->title}}</h4>
                                        <ul class="post-info">
                                            <li>{{$post->UserName}}</li>
                                            <li>{{date("F j, Y", strtotime($post->created_at))}}</li>
                                        </ul>
                                        <p>{{$post->intro}}</p>
                                        <p>{{$post->content}}</p>

                                        @if(session()->has('user') && session()->get('user')->IsAdmin)
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="blog-post">
                                                        <a href="{{ route('pages.posts.edit', [ "post" => $post->id ]) }}" class="btn btn-lg btn-primary btn-block text-uppercase">Edit post</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="blog-post">
                                                        <form action="{{ route("pages.posts.destroy", [ "id" => $post->id ]) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">Delete post</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if($comments)
                            <div class="col-lg-12">
                                <div class="sidebar-item comments">
                                    <div class="sidebar-heading">
                                        <h2>Comments</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            @foreach($comments as $comment)
                                            <li>
                                                <div class="right-content">
                                                    <h4>{{$comment->userName}}<span>{{date("F j, Y", strtotime($comment->CommentDate))}}</span></h4>
                                                    <p>{{$comment->comment}}</p>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="col-lg-12">
                                <div class="sidebar-item submit-comment">
                                    <div class="sidebar-heading">
                                        <h2>Your comment</h2>
                                    </div>
                                    @if(session()->has("user"))
                                    <div class="content">
                                        <form id="commentF" action="{{ route("postComment", ['id' => $post->id]) }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="name" type="text" id="name" value="{{ session()->get('user')->name }}" placeholder="Your name">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="email" type="text" id="email" placeholder="Your email">
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <textarea name="comment" rows="6" id="comment" placeholder="Type your comment"></textarea>
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <button type="submit" id="form-submit" class="main-button">Submit</button>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
