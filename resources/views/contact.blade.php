@extends('layouts.frontend')

@section('page-content')

<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center" style="padding-bottom: 4rem; padding-top: 12.5rem">
                    <h2 class="font-bold"> Contact Us</h2>
                    <h3 class="font-light py-3">We'd Love To Here From You.</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap mt-n5">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Contact Us</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">Home</a></li>
                        <li class="breadcrumb-item hover-light">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Contact US -->
<section id="stayconnect1" class="bglight position-relative padding noshadow">
    <div class="container whitebox">
        <div class="widget py-5">
            <div class="row">
                <div class="col-md-12 text-center wow fadeIn mt-n3" data-wow-delay="300ms">
                    <h2 class="heading bottom30 darkcolor font-light2 pt-1"><span class="font-normal">Contact</span> Us
                        <span class="divider-center"></span>
                    </h2>

                </div>
                <div class="col-md-6 col-sm-6 order-sm-2">
                    <div class="contact-meta px-2 text-center text-md-left">
                        <div class="heading-title">
                            <span class="defaultcolor mb-3">Luz De Calcio Center for Support of African Innovations</span></span>
                            <h2 class="darkcolor font-normal mb-4"><span class="d-none d-md-inline-block">Our</span> Address</h2>
                        </div>
                        <p class="bottom10">Address: No. 17, E Street, Shagari Estate, Federal Bus-stop, Ipaja Road, Lagos, Nigeria</p>
                        <p class="bottom10">+2347019941901 <br>+2349093073106 <br> +2348092377861
                        <p class="bottom10"><a href="mailto:support@luzdecalcio.net">support@luzdecalcio.net</a></p>
                        <p class="bottom10">Mon-Sat: 8am-6pm</p>
                        <ul class="social-icons mt-4 mb-4 mb-sm-0 wow fadeInUp" data-wow-delay="300ms">
                            <li><a href="https://www.facebook.com/luzdecalciosupport"><i class="fab fa-facebook-f"></i> </a> </li>
                            <li><a href="https://www.twitter.com/LuzDeCalcio/"><i class="fab fa-twitter"></i> </a> </li>
                            <li><a href="https://www.instagram.com/luz_de_calcio/"><i class="fab fa-instagram"></i> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="heading-title  wow fadeInUp" data-wow-delay="300ms">
                        <form class="getin_form wow fadeInUp" data-wow-delay="400ms" method="post" action="/contact-us">
                            @csrf
                            <div class="row px-2">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="name1" class="d-none"></label>
                                        <input class="form-control" id="name1" type="text" placeholder="Name:" required name="name">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="email1" class="d-none"></label>
                                        <input class="form-control" type="email" id="email1" placeholder="Email:" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="pno" class="d-none"></label>
                                        <input class="form-control" type="tel" id="pno" placeholder="Phone Number:" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="subject" class="d-none"></label>
                                        <input class="form-control" type="text" id="subject" placeholder="Subject:" required name="subject">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="message1" class="d-none"></label>
                                        <textarea class="form-control" id="message1" placeholder="Message:" required name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" class="button gradient-btn w-100">Send </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="fas fa-mobile-alt"></i></span>
                        <p class="bottom0"><a href="tel:+2348167538943">+2348167538943</a></p>
                        <!--  <p class="d-block"><a href="tel:+2348038311174">+2348038311174</a></p>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="fas fa-map-marker-alt"></i></span>
                        <p class="bottom0">No. 17, E Street, Shagari Estate, Federal Bus-stop, Ipaja Road, Lagos, Nigeria</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="far fa-envelope"></i></span>
                        <p class="bottom0"><a href="mailto:support@luzdecalcio.net">support@luzdecalcio.net</a></p>
                        <p class="d-block"><a href="mailto:info@luzdecalcio.net">info@luzdecalcio.net</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="far fa-clock"></i></span>
                        <p class="bottom15">UTC-05:00 <span class="d-block">UTC+01:00</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection