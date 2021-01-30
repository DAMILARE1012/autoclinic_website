
<header class="header" >
    <!-- Topbar -->
    {{-- <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12">
                    <!-- Contact -->
                    <ul class="top-link">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Doctors</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                    <!-- End Contact -->
                </div>
                <div class="col-lg-6 col-md-7 col-12">
                    <!-- Top Contact -->
                    <ul class="top-contact">
                        <li><i class="fa fa-phone"></i>+880 1234 56789</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">support@yourmail.com</a></li>
                    </ul>
                    <!-- End Top Contact -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                            <span>NGS-AUTOCLINIC</span>
                            {{-- <a href="{{ route('home') }}"><img src="img/logo.png" alt="#"></a> --}}
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-lg-9 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li class="{{ (Request()->is('/')) ? 'active':"" }}"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="{{ (Request()->is('about')) ? 'active':"" }}"><a href="{{ route('about') }}">About Us</a></li>
                                    <li class="{{ (Request()->is('inventory')) ? 'active':"" }}"><a href="{{ route('inventory') }}">Inventory</a></li>
                                    <li class="{{ (Request()->is('dealers')) ? 'active':"" }}"><a href="{{ route('dealers') }}">Dealers</a></li>
                                    <li class="{{ (Request()->is('services')) ? 'active':"" }}"><a href="{{ route('services') }}">Services</a></li>
                                    {{-- <li><a href="#">Blogs <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="blog-single.html">Blog Details</a></li>
                                        </ul>
                                    </li> --}}
                                    <li class="{{ (Request()->is('contact')) ? 'active':"" }}"><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!-- End Header Area -->