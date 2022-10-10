<!-- header -->
<header class="site-header">
    <nav class="navbar navbar-expand-lg padding-nav static-nav">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{URL::asset('images/logo.png')}}" alt="logo" style="width: 150px; height: 50px;">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="/"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('about')) ? 'active' : '' }}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('project/registration')) ? 'active' : '' }}" href="/project/registration" >Project Registration</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ (request()->is('blog')) ? 'active' : '' }}" href="/blog"> Blog </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('galleries')) ? 'active' : '' }}" href="/galleries">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://paystack.com/pay/-htn0-qfys" >Donate</a>
                    </li>
                </ul>
            </div>
           
        </div>
        <!--side menu open button-->
        <a href="#" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span class="gradient-bg"></span> <span class="gradient-bg"></span> <span class="gradient-bg"></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu opacity-0 gradient-bg">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  {{ (request()->is('/')) ? 'active' : '' }}"  href="/">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ (request()->is('about')) ? 'active' : '' }}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ (request()->is('project/registration')) ? 'active' : '' }}" href="/project/registration">Project Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ (request()->is('blog')) ? 'active' : '' }}"  href="/`blog">
                            Blogs 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ (request()->is('galleries')) ? 'active' : '' }}" href="/gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ (request()->is('contact')) ? 'active' : '' }}" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://paystack.com/pay/-htn0-qfys">Donate</a>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
<!-- header -->