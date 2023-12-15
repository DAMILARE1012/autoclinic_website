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
                        {!! $about->about_us !!}
                        
                    </div>
                    <!-- End Choose Left -->
                </div>
        </div>
    </section>

@endsection
