@extends('layouts.frontend')

@section('page-content')

<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center" style="padding-bottom: 4rem; padding-top: 12.5rem">
                    <h2 class="font-bold"> {{$blog->title}}</h2>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap mt-n5">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Blog</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">Home</a></li>
                        <li class="breadcrumb-item hover-light">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->

<!-- Our Blogs -->
<!--BLOG SECTION-->
<section id="ourblog" class="padding">
    <div class="container">
        <h2 class="d-none">{{$blog->title}}</h2>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8" id="blog">
                <article class='blog-item heading_space wow fadeIn text-center text-md-left' data-wow-delay='300ms'>
                    <div class='image'><img src='{{$blog->image}}' class='border_radius'></div>
                    <h3 class='darkcolor font-light bottom10 top30'> <a href="{{route('single.blog', Crypt::encrypt($blog->id))}}">{{$blog->title}}</a></h3>
                    <ul class='commment'>
                        <li><a href="{{route('single.blog', Crypt::encrypt($blog->id))}}"><i class='fas fa-calendar'></i>{{$blog->created_at->toDayDateTimeString()}}</a></li>
                    </ul>
                    <br>
                    <div class="">
                        {!! html_entity_decode($blog->description) !!}
                    </div>
                </article>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </div>
</section>
<!--BLOG SECTION END-->
@endsection