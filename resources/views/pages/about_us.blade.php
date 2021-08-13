@extends('master')

@section('title', '| About Us')

@section('content')
<!-- Breadcrumbs -->
    <div class="breadcrumbs overlay"  style="background-image:url('img/about_us.jpg')">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                        <ul class="bread-list">
                            <li><a href=" {{ route('home') }} ">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End Breadcrumbs -->
    <!-- Start Why choose -->
    <section class="why-choose section">
        <div class="container">
                <div class="col-md-12 col-12">
                    <!-- Start Choose Left -->
                    <div class="choose-left">
                        <h3>About Us</h3>
                        <em><h6>Download our <a href="{{ asset('autoclinic_brochure.pdf') }} " target="_blank"><span style="color: blue;">Brochure</span> </a></h6></em>
                        <br>
                        <p style="text-align: justify;">Founded in 2017, NGS Autoclinic is the brain child of Nathaniel Okwesiri.
                            “The passion lies in our concern for our people and how they’re being treated with their cars” – Nathaniel Okwesiri.
                            
                            Having gained exposure studying in Europe for over 2 decades, he realised how backwards Nigeria and Africa as a whole is in the automobile industry. His approach looks into understanding the foundation of how the car functions and interacts with its ecosystem.
                             We all know that we are in a digital age. And at the forefront of automobile technology is Autotronics. Autotronics synergises the technology of automobile as well as electronics in order to create lightweight, robust, environmentally-friendly and convenient vehicles.
                            <br>
                            
                            “We have noticed a disparity in the normal roadside mechanics who aren’t literate and those who are literates do not even know what a spanner is. Out goal is to marry both. To get the best of both worlds” – Nathaniel Okwesiri.
                            <br><br>
                            
                            We as seek to extend our reach for the entire nation as a whole to place more emphasis on the automobile industry. As the populace relies heavily on vehicular transportation of all forms, it has become more integral in daily affairs. This shows the power that a mechanic has. A faulty part of the body can cause little or no damage to others around him. A faulty vehicle on the other hand, not only puts the passengers at risk but largely affects others as well. 
                            <br><br>
                            We also aim to raise awareness and to educate properly in line with the reality we are faced with in our contemporary society. There is a disparity between the demand for education and certificates and the actual implementation of the required knowledge.
                            
                            Additionally, we seek to create a platform and environment where the populace can be empowered in diverse capacities. This in turn goes to aid the government in alleviating crime and boosting economic growth and capacity. 
                            
                            Nothing built to last is ever built on a faulty foundation. That is the reason why we have gained expert, first-hand professional and hands-on experience from institutions and industrialists alike. This is to set a quality standard that can pave the way for posterity and further innovation. 
                            <br><br>
                            Furthermore, we have partners who we work with hand in hand to bring this vision to reality. One of such is the tertiary institution of the Federal University of Technology, Minna.
                            
                            The vision is to become a hub for professional automobile services, an institution of quality learning and a system of empowerment.
                            
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
                        
                    </div>
                    <!-- End Choose Left -->
                </div>
        </div>
    </section>

@endsection
