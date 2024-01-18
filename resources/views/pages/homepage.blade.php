@extends('master')

@section('title', '| Home')

@section('content')
    <!-- Slider Area -->
    <section class="slider">
        <div class="hero-slider">
            <!-- Start Single Slider -->
            @forelse ($slider as $key => $item)
            <div class="single-slider" style="background-image: linear-gradient(rgba(0, 0, 0, 0.250), rgba(0, 0, 0, 0.250)), url('/img/slider/{{ $item['img'] }}')">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>{!! $item['slide'] !!}</h1> 
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
            @empty
            @endforelse      

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
                                    <h4>History</h4>
                                        {!! $about->history !!}
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
                                    <h4>Our Services</h4>
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
                                        <li class="day">Monday - Saturday <span>{{ $contact->mon_open }} </span></li>
                                        <li class="day">Sunday<span>{{ $contact->sun_open }} </span></li>
                                        <li class="day">Location<span><a href="{{ $contact->google_link }} "
                                                    target="_blank" style="display: inline;">Abuja, Nigeria</a></span></li>
                                        <li class="day"> <span> </span></li>
                                        <li class="day">Contact<span>{{ $contact->phone }} </span></li>
                                        <li class="day">Email<span><a href="mailto:{{ $contact->email }}"
                                                    target="_blank" style="display: inline;">{{ $contact->email }} </a>
                                            </span></li>
                                    </ul>
                                    <a href="{{ route('contact') }}">CONTACT US<i class="fa fa-long-arrow-right"></i></a>
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
                        <p>NGS Auto Clinic Centre... <em> Do it Once, Do it Right.</em>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Left -->
                    <div class="choose-left">
                        <h3>About Us</h3>
                        {!! $about->home_about !!}
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
                @forelse ($service as $key => $item)
                <div class="col-lg-4 col-md-6 col-12" style="padding-bottom: 20px;">
                    <!-- Single Blog -->
                    
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{ asset('img/services/'.$item['img1']) }}" alt="img">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">Available</div>
                                <a href="{{ route('services') }}"> <h4 class="news-title">{{ $item['title'] }}</h4></a>
                                
                                {!! $item['home_description'] !!}
                                <div style="color:#11db22">
                                    <a href="{{ route('services') }}"><strong> <em> learn
                                                more...</em></strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- End Single Blog -->
                </div>
                
                @empty
                @endforelse    
               
                
            </div>
        </div>
    </section>
    <!-- End Blog Area -->


    <!-- ======= Testimonials Section ======= -->
<!--     
@endsection
