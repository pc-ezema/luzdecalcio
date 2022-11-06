<footer id="site-footer" class=" bgdark padding_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <a href="/" class="footer_logo bottom25"><img src="{{URL::asset('images/logo.png')}}" style="width: 150px; height: 50px;"></a>
                    <div class="d-table w-100 address-item whitecolor bottom25">
                        <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                        <p class="d-table-cell align-middle bottom0">
                            +2348167538943 <br> +2349093073106 <br>+2349055085393 <br>
                            +2347019941901<a class="d-block" href="mailto:support@luzdecalcio.net">support@luzdecalcio.net</a>
                        </p>
                    </div>
                    <ul class="social-icons white wow fadeInUp" data-wow-delay="300ms">
                        <li><a href="https://www.facebook.com/luzdecalciosupport" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                        <li><a href="https://www.twitter.com/LuzDeCalcio/" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                        <li><a href="https://www.instagram.com/luz_de_calcio/" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Latest News</h3>
                    <ul class="latest_news whitecolor">
                        @foreach($latestblogs as $blog)
                        <li> <a href="{{route('single.blog', Crypt::encrypt($blog->id))}}" class='post'>
                                <img src='{{$blog->image}}' width='100px'></a>
                                <a href="{{route('single.blog', Crypt::encrypt($blog->id))}}">
                                {{$blog->title}}
                            </a> 
                            <span class=date defaultcolor>2018-11-24</span> 
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20 pl-0 pl-lg-5">
                    <h3 class="whitecolor bottom25">Our Services</h3>
                    <ul class="links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/blog">Latest News</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Support</h3>
                    <p class="whitecolor bottom25">No. 17, E Street, Shagari Estate, Federal Bus-stop, Ipaja Road, Lagos, Nigeria</p>
                    <p class="whitecolor bottom25">Our support available to help you 24 hours a day, seven days week</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer ends-->

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn animated" data-wow-delay="300ms">
                <p class="m-0 py-3">Copyright © {{ date('Y') }} <a href="#" class="hover-default">Luz de Calcio</a>. All Rights Reserved. <br>Luz de Calcio & InnovatorsTV are registered Trademark.</p>
            </div>
        </div>
    </div>
</div>