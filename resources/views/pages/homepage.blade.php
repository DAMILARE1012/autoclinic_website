@extends('master')

@section('title', '| Homepage')

@section('content')
    <!-- Slider Area -->
    <section class="slider">
        <div class="hero-slider">
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('img/slider2.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>We Provide <span>Autoclinic</span> Services That You Can <span>Trust!</span></h1>
                                <p>Auto clinic services including General Repairs Services, Automated Car Wash, Car Make-up, Full AC Services, Computer Diagnosis, and other Vehicle Miscellaneous Services. <br> We offer excellent services available at affordable prices to get you back on the road in no time.</p>
                                <div class="button">
                                    <a href="#" class="btn">Services</a>
                                    <a href="#" class="btn primary">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('img/slider.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>We Provide <span>Automated Car Wash</span> Services</h1>
                                <p>
                                Our Automated Car Wash Service includes Interior Cleaning, Exterior Soft Brush Wash, Car Detailing, Engine Wash and Underneath Wash.
                                     </p>
                                <div class="button">
                                    <a href="#" class="btn">About Us</a>
                                    <a href="#" class="btn primary">Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start End Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('img/slider3.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>We Have An Excellent <span>Autoclinic Technical</span> Training Centre</h1>
                                <p>We offer specialized and general training program and some of our program at AutoClinic Technical Training Centre include:
                                    Introduction to the Automotive Industry and Shop Safety    
                                    Auto-Cosmetics and Auto Beautification
                                    Preventive Maintenance
                                    Service Wheels, Tires, Hubs and Bearings
                                    Operation & Service Hydraulic Brake Systems
                                    Operation and Servicing of Hydraulic Brake Systems etc.
                                     </p>
                                <div class="button">
                                    <a href="#" class="btn">About Us</a>
                                    <a href="#" class="btn primary">Services</a>
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
                                    <i class="fa fa-ambulance"></i>
                                </div>
                                <div class="single-content">
                                    {{-- <span>Lorem Amet</span>
                                    --}}
                                    <h4>Our History</h4>
                                    <p>NGS Auto Clinic Centre is the home for all cars. Since our inceptions in 2017, we
                                        have remained the number one choice for every car users.</p>
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
                                    <i class="icofont-prescription"></i>
                                </div>
                                <div class="single-content">
                                    {{-- <span>Fusce Porttitor</span>
                                    --}}
                                    <h4>Our Services</h4>
                                    <p>We provide general repairs services, automated car wash, car make-up, full AC
                                        services, computer diagnosis, and other vehicle miscellaneous services.</p>
                                    <a href="#">READ MORE<i class="fa fa-long-arrow-right"></i></a>
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
                                    {{-- <span>Donec luctus</span>
                                    --}}
                                    <h4>Opening Hours</h4>
                                    <ul class="time-sidual">
                                        <li class="day">Monday - Friday <span>8.00-20.00</span></li>
                                        <li class="day">Saturday <span>9.00-18.30</span></li>
                                        <li class="day">Sunday<span>9.00-15.00</span></li>
                                    </ul>
                                    <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
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
                        <h2>Welcome to NGS Auto Clinic Centre</h2>
                        <img src="img/section-img.png" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Left -->
                    <div class="choose-left">
                        <h3>Who We Are</h3>
                        <p>NGS Auto Clinic Centre is the home for all cars. Since our inception in 2017, we have remained the number one choice for every car users. With our state-of-the-art facilities, modern day equipment, and a team of highly skilled technicians that truly enjoy their work, we are always proud of our exceptional services. We use the latest technology and globally acceptable standard to keep your car humming and healthy all the time.
                        </p>
                        <p>We offer excellent services available at affordable prices to get you back on the road in no time. Our comprehensive auto clinic services includes: </p>
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
                    </div>
                    <!-- End Choose Left -->
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Rights -->
                    <div class="choose-right">
                        <div class="video-image">
                            <!-- Video Animation -->
                            <div class="promo-video">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>
                            <!--/ End Video Animation -->
                            <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i
                                    class="fa fa-play"></i></a>
                        </div>
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
                        <h2>Keep up with Our Services</h2>
                        <img src="img/section-img.png" alt="#">
                        <p>With our state-of-the-art facilities, modern day equipment, and a team of highly skilled technicians that truly enjoy their work, we are always proud of our exceptional services in the following areas:</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/blog1.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">Available</div>
                                <h2><a href="blog-single.html"><b>General Repairs Services.</b></a></h2>
                                <p class="text" style="text-align: justify;">Our General Repairs Services include but not limited to Fleet Maintenance Repairs, Oil Change, Brake Pads, Tyre Change, and Wheel Balancing.

                                    We are capable and reliable!
                                    </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/blog2.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">Available</div>
                                <h2><a href="blog-single.html"><b>Car Make-Up</b></a></h2>
                                <p class="text" style="text-align: justify;">Our Car Make-up Services are Polishing, Paint Protection, Head Light Restoration, Windscreen/Window Restoration and Glass Restoration.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/blog3.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">Available</div>
                                <h2><a href="blog-single.html"><b>Automated Car Wash</b></a></h2>
                                <p class="text" style="text-align: justify;">Our Automated Car Wash Service includes Interior Cleaning, Exterior Soft Brush Wash, Car Detailing, Engine Wash and Underneath Wash.

                                    Patronize us today as you see the clean that goes into your car. 
                                    </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/blog2.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">Available</div>
                                <h2><a href="blog-single.html"><b>Full AC Services / Auto Refill</b></a></h2>
                                <p class="text" style="text-align: justify;">our AC service covers the following: Car AC Troubleshooting, AC Diagnose, and Automated AC Vacuum/Refill.

                                    Cooling should never be your problem again.
                                    </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/blog3.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">Available</div>
                                <h2><a href="blog-single.html"><b>Computer Diagnosis</b></a></h2>
                                <p class="text" style="text-align: justify;">Our Computer Diagnosis Services include but not limited to the following: Brake Diagnosis, Warning Light Diagnosis, Check Engine Light, and All Kinds of Key Programming.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/blog3.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">Available</div>
                                <h2><a href="blog-single.html"><b>Technical Training Centre</b></a></h2>
                                <p class="text" style="text-align: justify;">We offer specialized and general training program and some of our program at AutoClinic Technical Training Centre include: Introduction to the Automotive Industry and Shop Safety  etc.  
                                    
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection
