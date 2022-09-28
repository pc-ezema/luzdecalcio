@extends('layouts.frontend')

@section('page-content')
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center" style="padding-bottom: 4rem; padding-top: 12.5rem">
                    <h2 class="font-xlight">Investment</h2>
                    <h2 class="font-bold">May Crash,</h2>

                    <h3 class="font-light pt-2">But An Invention Will See The Next Generation.</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Success Message</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">Home</a></li>
                        <li class="breadcrumb-item hover-light">Success</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->

<section id="our-feature" class="single-feature padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-12 col-md-7 col-sm-7 text-sm-left text-center wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <div class="flashit">
                        <h2 align="center" class="darkcolor font-normal bottom30">Form Submitted Successfully</h2>
                    </div>
                </div>
                <h3 align="center">Congratulation {{$registeredinvention->fullname}}!</h3>
                <br>
                <h3 align="center">You have completely registered your invention.</h3>
                <br>
                <h3 align="center">A message has been sent to your mail!</h3>
                <br>
                <h3 align="center">Please kindly wait while our support team gets back to you.</h3>
            </div>
        </div>
    </div>
</section>
@endsection