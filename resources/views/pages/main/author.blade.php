@extends('layouts.layout')

@section('description') This is the posts page of fictim. blog.@endsection
@section('keywords') fashion, beauty, style, recipes, decor, playlists @endsection
@section('title') fictim. @endsection

@section('content')
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Author</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <img src="{{asset('assets/images/marija.jpg')}}" width="100%" class="rounded" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="text-center" style="margin-top: 11em;">
                    <h3>Marija Vasic 25/17</h3>
                    <p>
                        Visoka ICT - Internet tehnologije. Modul web programiranje.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
