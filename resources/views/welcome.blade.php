@extends('layouts.frontend')

@section('slider')
@includeIf('layouts.slider')
@endsection

@section('page-content')
<!--Some Feature -->
<!-- <section id="our-feature" class="single-feature padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-12 col-md-7 col-sm-7 text-sm-left text-center wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <div class="flashit">
                        <h2 align="center" class="darkcolor font-normal bottom30">Tech Innovation Challenge on <span class="defaultcolor">INSECURITY</span>.</h2>
                    </div>
                </div>
                <p align="center" class="bottom35">Create a TECHNOLOGICAL INNOVATION that can help solve the problems of INSECURITY both in NIGERIA and AFRICA as a whole. </p><br>
                <p align="center" style="color:green;" class="pass" id="demo"></p><br>
                <div align="center"><img src="{{URL::asset('images/poster2.jpg')}}" width="350px">
                </div><br>
                <br>
                <div align="center" class="flashit"><a href="/register"><button type="button" class="btn btn-success btn-lg">Register Now</button></a></div>
            </div>
        </div>
    </div>
</section> -->

<section id="our-feature" class="single-feature padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-7 text-sm-left text-center wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <h2 class="darkcolor font-normal bottom30">Let Us Take Your <span class="defaultcolor">Inventions</span> To The Next Level.</h2>
                </div>
                <p class="bottom35">The strength of any nation lies in the increase and advancement of her technological base. Without a doubt, technological development is an integral for profound economic growth through increased communication, 
                    easy and fast access to new markets and increase in marketing channels. <br>
                    As I challenge all the great, young and talented minds in Nigeria and in Africa to take up this responsibility for our beloved continent, let's keep on with the good works of initiating and devising new solutions to our common problems, even as we collaborate to put Africa on pedestal of greatness.<br>
                    Nothing hidden is ever celebrated. Every shinning light cannot but be put where it will serve it purpose. We at <b>Luz de Calcio Center for Support of African Innovations</b> bears so much a burden for this continent's advancement and cannot wait to celebrate the greatness of your ideas. We are ever ready to give you a platform to rise and come out of obscurity. 
                    Our core aim is to network you with able institutions that will aid in giving all the necessary support required for your ideas to come to limelight. Likewise with good understanding that innovations are sustained through its exclusive rights, we shall join you in providing required legal aids towards protecting your good concepts from piracy and other forms of misappropriations.<br>
                    Welcome to Luz de Calcio! Welcome to shinning!<br>
                    <br><br>
                    <b>Femi Akinola <br>
                        C.E.O - Luz de Calcio Center for Support of African Innovations</b>
                </p>
                <a href="/project/registration" class="btn btn-success">Register Project</a>
                <br><br>
            </div>

            <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="images/awesome-feature.png"></div>
            </div>
        </div>
    </div>
</section>
<!--Some Feature ends-->

<!-- WOrk Process-->
<section id="our-process" class="padding bgdark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">
                    <h2 class="font-normal">How it Works </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="process-wrapp">
                <a href="#">
                    <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                        <span class="pro-step bottom20">01</span>
                        <!-- <p class="fontbold bottom25">Register</p> -->
                        <p class="mt-n2 mt-sm-0">Registration of projects on LUCSAI platform at www.luzdecalcio.net </p>
                    </li>
                </a>
                <li class="whitecolor wow fadeIn" data-wow-delay="400ms">
                    <span class="pro-step bottom20">02</span>
                    <p class="mt-n2 mt-sm-0">Screening of projects in alignment with project submission criteria.</p>
                </li>
                <a href="#">
                    <li class="whitecolor wow fadeIn" data-wow-delay="500ms">
                        <span class="pro-step bottom20">03</span>
                        <!-- <p class="fontbold bottom25">Training and Mentoring</p> -->
                        <p class="mt-n2 mt-sm-0">Invitation of successful project owners for pre-exhibition meeting.</p>
                    </li>
                </a>
                <li class="whitecolor wow fadeIn" data-wow-delay="600ms">
                    <span class="pro-step bottom20">04</span>
                    <!-- <p class="fontbold bottom25">Get Sponsors and Investors</p> -->
                    <p class="mt-n2 mt-sm-0">Invitation of stakeholders, and investors to the public exhibition of successful projects.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="600ms">
                    <span class="pro-step bottom20">05</span>
                    <!-- <p class="fontbold bottom25">Get Sponsors and Investors</p> -->
                    <p class="mt-n2 mt-sm-0">Creation of access to mentoring and knowledge sharing for young inventors/innovators. </p>
                </li>

            </ul>
        </div>
        <div class="mt-5 text-center">
            <a href="/project/registration" class="btn btn-success">Register Project</a>
        </div>
    </div>
</section>
<!--WOrk Process ends-->

<!-- Mobile Apps -->
<section id="our-apps" class="padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-12">
                <div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <!--<span class="defaultcolor text-center text-md-left">Quisque tellus risus, adipisci viverra</span>-->
                    <h2 class="darkcolor font-normal text-center text-md-left">About Us</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p class="text-center text-md-left"><b>Luz de Calcio Center for Support of African Innovations </b>is a non-governmental organization set to address all impediments affecting African orientated technological innovations being devoid of recognition and adequate support.</p>
            </div>
        </div>
        <div class="row d-flex align-items-center" id="app-feature">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="text-center text-md-right">
                    <div class="feature-item mt-3 wow fadeInLeft" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">
                        <div class="icon"><i class="fa fa-crosshairs"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">Our Vision</span>
                            </h3>
                            <p>“Awakening and unveiling inherent potentials of young Africans in technological inventions and innovations towards Africans’ socio-economic advantage."</p>
                        </div>
                    </div>
                    <div class="feature-item mt-5 wow fadeInLeft" data-wow-delay="350ms" style="visibility: visible; animation-delay: 350ms; animation-name: fadeInLeft;">
                        <div class="icon"><i class="fa fa-crosshairs"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">Our Mission</span>
                            </h3>
                            <p>"To source for promising young and talented Africans with outstanding initiatives in technological inventions and innovations, and giving them platform to come to limelight."</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="app-image top30">
                    <div class="app-slider-lock-btn"></div>
                    <div class="app-slider-lock">
                        <img src="images/iphone-slide-lock.jpg" alt="">
                    </div>
                    <div id="app-slider" class="owl-carousel owl-theme owl-loaded owl-drag">



                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-470px, 0px, 0px); transition: all 0s ease 0s; width: 1645px;">
                                <div class="owl-item cloned" style="width: 235px;">
                                    <div class="item">
                                        <img src="images/iphone-slide2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 235px;">
                                    <div class="item">
                                        <img src="images/iphone-slide1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 235px;">
                                    <div class="item">
                                        <img src="images/iphone-slide2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 235px;">
                                    <div class="item">
                                        <img src="images/iphone-slide1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 235px;">
                                    <div class="item">
                                        <img src="images/iphone-slide2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                        <div class="owl-dots disabled"></div>
                    </div>
                    <img src="images/iphone.png" alt="image">
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="text-center text-md-left">

                    <div class="feature-item mt-5 wow fadeInRight" data-wow-delay="350ms" style="visibility: visible; animation-delay: 350ms; animation-name: fadeInRight;">
                        <div class="icon"><i class="far fa-folder-open"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">Our Core Objectives </span>
                            </h3>
                            <p>
                            <ul>
                                <li> We seek to encourage young and talented African youths through creating a viable system that will help overcome difficulties encountered in bringing their innovations to limelight. </li><br>
                                <li>This we hope to achieve through creating avenues for exposure of such young talents and their intiatives, providing suitable atmosphere for training/mentoring; and giving them platform to grow their talents beyond local and informal markets. </li><br>
                                <li>We strongly believe that Africans has all it takes to make Africa great if only we are able to catch young the best of her minds and secure them from all possible frustrations that may lead to brain drain and lost of discoveries. </li><br>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Mobile Apps ends-->

<!-- Counters -->
<section id="bg-counters" class="padding bg-counters parallax">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters whitecolor  top10 bottom10">
                    <span class="count_nums font-light" data-to="2018" data-speed="2500"> </span>
                </div>
                <h3 class="font-light whitecolor top20">Since We Started</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p class="whitecolor top20 bottom20 font-light title">In recent past, we held the maiden edition of our Inventors' Party where young and talented minds from various schools were in attendance.

                    <br> The strength and development of any nation or economy lies in the strength of its technological base and advancement.
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters whitecolor top10 bottom10">
                    <span class="count_nums font-light" data-to="895" data-speed="2500"> </span>
                </div>
                <h3 class="font-light whitecolor top20">People reached</h3>
            </div>
        </div>
        <br><br>
        <a href="https://paystack.com/pay/-htn0-qfys" class="btn btn-success">Donate towards this course</a>

    </div>
</section>

<section id="our-testimonial" class="bglight padding_bottom">
    <div class="container">
        <div class="owl-carousel" id="testimonial-slider">
            @foreach($inventions as $invention)
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-center">
                        <div>
                            <img src="{{$invention->image}}" style="height: 300px; width: 350px">
                        </div>
                        <div class="bulletin_upload">
                            <h4 class="defaultcolor font-light top15"><a href="#.">{{$invention->name}}</a></h4>
                            <p>{{$invention->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Counters ends-->

<!-- <section id="our-team" class="padding_top half-section-alt teams-border">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="heading-title heading_space wow fadeInUp" data-wow-delay="300ms">
                    <span class="defaultcolor text-center text-md-left">Our Young Inventors</span>
                    <h2 class="darkcolor font-normal text-center text-md-left">GALLERY</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="heading_space mt-n3 mt-sm-0 text-center text-md-left">Celebrating African Indigenous Technological Inventions. (SLIDE LEFT TO SEE OUR GALLERY)</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="ourteam-slider" class="owl-carousel">
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="gallery/WebPhoto1.jpg" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="gallery/WebPhoto2.jpg" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box single">
                            <div class="image">
                                <img src="gallery/WebPhoto3.jpg" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="gallery/WebPhoto4.jpg" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="gallery/WebPhoto6.jpg" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="gallery/WebPhoto7.jpg" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="gallery/WebPhoto8.jpg" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="gallery/WebPhoto9.jpg" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="gallery/WebPhoto10.jpg" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="gallery/WebPhoto11.jpg" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="gallery/WebPhoto5.jpg" alt="">
                            </div>
                           <div class="team-content">
                                <h4 class="darkcolor">Sample Project </h4>
                                <p>Name</p>
                                
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Our Team ends -->

<section id="our-partners" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="heading-title darkcolor wow fadeInUp" data-wow-delay="300ms">
                    <h2 class="font-normal bottom40"> Sponsors </h2>
                </div>
            </div>
            <div class="col-12">
                <div id="partners-slider" class="owl-carousel">
                    <div class="item">
                        <div><img alt="" style="width: 100px" src="images/logo-2.png"></div>
                    </div>
                    <div class="item">
                        <div><img alt="" style="width: 100px" src="images/logo-3.jpg"></div>
                    </div>
                    <div class="item">
                        <div><img alt="" style="width: 100px" src="images/logo-4.png"></div>
                    </div>
                    <div class="item">
                        <div><img alt="" style="width: 100px" src="images/logo-5.jpg"></div>
                    </div>
                    <div class="item">
                        <div><img alt="" style="width: 100px" src="images/logo-6.png"></div>
                    </div>
                    <div class="item">
                        <div><img alt="" style="width: 100px" src="images/logo-7.png"></div>
                    </div>
                    <div class="item">
                        <div><img alt="" style="width: 100px" src="images/logo-8.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partners ends-->

<!--Site Footer Here-->
<section id="our-partners" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-sm-left text-center wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <h2 align="center" class="darkcolor font-normal bottom30">Our Downloadable Materials</span>.</h2>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="row">
                    @foreach($bulletins as $bulletin)
                    <div class="col-12">
                        <a href="{{route('download', Crypt::encrypt($bulletin->id))}}">
                            <img src="{{$bulletin->image}}" alt="" style="width: 100px">
                        </a>
                        <p style="font-weight: 600; margin-left: 1rem;">
                            {{$bulletin->name}}
                        </p>
                        <br>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection