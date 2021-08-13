@extends('master')

@section('title', '| Home')

@section('content')
    <!-- Slider Area -->
    <section class="slider">
        <div class="hero-slider">
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('img/1_slider.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>We Provide <span>Autoclinic</span> Services That You Can <span>Trust!</span></h1>
                                <!-- <p style="color: white;">Auto clinic services including General Repairs Services, Automated Car Wash, Car Make-up,
                                                Full AC Services, Computer Diagnosis, and other Vehicle Miscellaneous Services. <br> We
                                                offer excellent services available at affordable prices to get you back on the road in
                                                no time.</p> -->
                                <div class="button">
                                    <a href="{{ route('services') }}" class="btn">Our Services</a>
                                    <a href="{{ route('about') }}" class="btn primary">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('img/1b_slider.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>We Provide <span>Automated Car Wash</span> Services</h1>
                                <!-- <p > <h4 style="color: #d9dddb;">
                                                Our Automated Car Wash Service includes Interior Cleaning, Exterior Soft Brush Wash, Car
                                                Detailing, Engine Wash and Underneath Wash.</h4>
                                            </p> -->
                                <div class="button">
                                    <a href="{{ route('about') }}" class="btn">About Us</a>
                                    <a href="{{ route('services') }}" class="btn primary">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start End Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('img/1c_slider.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>We Have An Excellent <span>Autoclinic Technical</span> Training Centre</h1>
                                <!-- <p style="color: white;">We offer specialized and general training program and some of our program at AutoClinic
                                                Technical Training Centre include:
                                                Introduction to the Automotive Industry and Shop Safety
                                                Auto-Cosmetics and Auto Beautification
                                                Preventive Maintenance
                                                Service Wheels, Tires, Hubs and Bearings
                                                Operation & Service Hydraulic Brake Systems
                                                Operation and Servicing of Hydraulic Brake Systems etc.
                                            </p> -->
                                <div class="button">
                                    <a href="{{ route('about') }}" class="btn">About Us</a>
                                    <a href="{{ route('services') }}" class="btn primary">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
        </div>
    </section>
    <!--/ End Slider Area -->

    <!-- Start Schedule Area -->
    <section class="schedule">
        <div class="container">
            <div class="schedule-inner">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 ">
                        <!-- single-schedule -->
                        <div class="single-schedule first">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fa fa-history"></i>
                                </div>
                                <div class="single-content">
                                    {{-- <span>Lorem Amet</span> --}}
                                    <h4>History</h4>
                                    <p style="text-align: justify;">NGS Auto Clinic Centre, since 2017. We are the first to
                                        provide comprehensive auto clinic services offering excellent services available at
                                        affordable prices to get you back on the road in no time.</p>
                                    <a href="{{ route('about') }}">READ MORE<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- single-schedule -->
                        <div class="single-schedule middle">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icofont-automation"></i>
                                </div>
                                <div class="single-content">
                                    <!-- <span>Fusce Porttitor</span> -->
                                    <h4>Services</h4>
                                    <p style="text-align: justify;">We provide general repairs services, automated car wash,
                                        car make-up, full AC
                                        services, computer diagnosis, and other vehicle miscellaneous services.<br>You can
                                        always count on us! </p>

                                    <a href="{{ route('services') }}">READ MORE<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- single-schedule -->
                        <div class="single-schedule last">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icofont-ui-clock"></i>
                                </div>
                                <div class="single-content">
                                    {{-- <span>Donec luctus</span> --}}
                                    <h4>Opening Hours</h4>
                                    <ul class="time-sidual">
                                        <li class="day">Monday - Saturday <span>8.00am - 6.00pm</span></li>
                                        <li class="day">Sunday<span>12.00pm - 5.00pm</span></li>
                                        <li class="day">Location<span><a href="https://goo.gl/maps/DNXrSC9rUMTzHQLf6"
                                                    target="_blank" style="display: inline;">Abuja, Nigeria</a></span></li>
                                        <li class="day"> <span> </span></li>
                                        <li class="day">Contact<span>+234 703 711 0944</span></li>
                                        <li class="day">Email<span><a href="mailto:info@ngsautoclinic.com.ng"
                                                    target="_blank" style="display: inline;">info@ngsautoclinic.com.ng</a>
                                            </span></li>
                                    </ul>
                                    <a href="{{ route('contact') }}">CONTACT NGS<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/End Start schedule Area -->

    <!-- Start Why choose -->
    <section class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>NGS Auto Clinic Centre</h2>
                        <img src="{{asset('img/section-img.png')}}" alt="#">
                        <p>NGS Auto Clinic Centre... <em> Your Confort is our Priority.</em>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Left -->
                    <div class="choose-left">
                        <h3>About Us</h3>
                        <p style="text-align: justify;">NGS Auto Clinic Centre is the home for all cars. Since our inception
                            in 2017, we have remained the number one choice for every car users. With our state-of-the-art
                            facilities, modern day equipment, and a team of highly skilled technicians that truly enjoy
                            their work, we are always proud of our exceptional services. We use the latest technology and
                            globally acceptable standard to keep your car humming and healthy all the time.
                        </p>
                        <p>We offer excellent services available at affordable prices to get you back on the road in no
                            time. Our comprehensive auto clinic services includes: </p>
                        <div class="row">
                            <div class="col-lg-5">
                                <ul class="list">
                                    <li><i class="fa fa-caret-right"></i>General Repairs Services </li>
                                    <li><i class="fa fa-caret-right"></i>Automated Car Wash</li>
                                    <li><i class="fa fa-caret-right"></i>Car Make-up</li>
                                </ul>
                            </div>
                            <div class="col-lg-7">
                                <ul class="list">
                                    <li><i class="fa fa-caret-right"></i>Full AC Services</li>
                                    <li><i class="fa fa-caret-right"></i>Computer Diagnosis</li>
                                    <li><i class="fa fa-caret-right"></i>Other Vehicle Miscellaneous Services</li>
                                </ul>

                            </div>
                        </div>
                        <br>
                        <p>
                            <span style="color:#fff" class="btn btn-primary btn-xs"><a
                                    href="{{ route('about') }}"><strong> <em> learn more...</em></strong></a></span>
                        </p>
                    </div>
                    <!-- End Choose Left -->
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Rights -->
                    <div class="choose-right">
                        <!-- <div class="video-image"> -->
                        <!-- Video Animation -->
                        <div class="promo-video">
                            <div class="waves-block">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                        <!--/ End Video Animation -->
                        <!--  <a href="#" class="video mfp-iframe"><i
                                                class="fa fa-play"></i></a> -->
                        <!-- </div> -->
                    </div>
                    <!-- End Choose Rights -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Why choose -->


    <!-- Start Blog Area -->
    <section class="blog section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Services</h2>
                        <img src="{{asset('img/section-img.png')}}" alt="#">
                        <p>NGS Auto Clinic Centre... Do it Once, Do it Right</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{ asset('img/gcr_4.png')}}" alt="img">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">Available</div>
                                <h2><a href="{{ route('services') }}#repairs "><b>General Repairs Services</b></a></h2>
                                <p class="text" style="text-align: justify;">NGS General Repairs Services include but not
                                    limited to Fleet Maintenance Repairs, Oil Change, Brake Pads, Tyre Change, and Wheel
                                    Balancing.
                                    We are capable and reliable!
                                </p>
                                <div style="color:#11db22">
                                    <a href="{{ route('services') }}#repairs"><strong> <em> learn
                                                more...</em></strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{asset('img/gcr_1.jpg')}}" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">Available</div>
                                <h2><a href="{{ route('services') }}#make-up"><b>Car Make-Up</b></a></h2>
                                <p class="text" style="text-align: justify;">NGS Car Make-up Services are Polishing, Paint
                                    Protection, Head Light Restoration, Windscreen/Window Restoration and Glass Restoration.
                                </p>
                                <div style="color: #11db22">
                                    <a href="{{ route('services') }}#make-up"><strong> <em> learn
                                                more...</em></strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{asset('img/slider.jpg')}}" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">Available</div>
                                <h2><a href="{{ route('services') }}#wash"><b>Automated Car Wash</b></a></h2>
                                <p class="text" style="text-align: justify;">
                                    Having noticed subpar washing techniques that produce undesired results such as:
                                    scuffing, scratching, brown stains, water residue, odour and in some cases damage...
                                </p>
                                <div style="color:#11db22">
                                    <a href="{{ route('services') }}#wash"><strong> <em> learn more...</em></strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{asset('img/cd_1.jpg')}}" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">Available</div>
                                <h2><a href="{{ route('services') }}#ac"><b>Full AC Services / Auto Refill</b></a></h2>
                                <p class="text" style="text-align: justify;">NGS AC service covers the following: Car AC
                                    Troubleshooting, AC Diagnose, and Automated AC Vacuum/Refill.

                                    Cooling should never be your problem again.
                                </p>
                                <div style="color:#11db22">
                                    <a href="{{ route('services') }}#ac"><strong> <em> learn more...</em></strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{asset('img/diagnosis.jpg')}}" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">Available</div>
                                <h2><a href="{{ route('services') }}#computer"><b>Computer Diagnosis</b></a></h2>
                                <p class="text" style="text-align: justify;">NGS Computer Diagnosis Services include but not
                                    limited to the following: Brake Diagnosis, Warning Light Diagnosis, Check Engine Light,
                                    and All Kinds of Key Programming.
                                </p>
                                <div style="color: #11db22">
                                    <a href="{{ route('services') }}#computer"><strong> <em> learn
                                                more...</em></strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{asset('img/trc_1.jpg')}}" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">Available</div>
                                <h2><a href="{{ route('services') }}#training"><b>Technical Training Centre</b></a></h2>
                                <p class="text" style="text-align: justify;">NGS offer specialized and general training
                                    program and some of NGD's program at AutoClinic Technical Training Centre include and
                                    introduction to the automotive industry and shop safety and more.
                                </p>
                                <div style="color: #11db22">
                                    <a href="{{ route('services') }}#training"><strong> <em> learn
                                                more...</em></strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->


    <!-- ======= Testimonials Section ======= -->
<!--     
@endsection
