@extends('master')

@section('title', '| Services')

@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay" style="background-image:url('img/video-bg.jpg')">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Our Services</h2>
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Our Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Single News -->
    <section id="repairs" class="news-single section">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h6> ...with NGS state-of-the-art facilities, modern day equipment, and a team of highly skilled
                        technicians that truly enjoy their work, we are always proud of NGS exceptional services in the
                        following areas:</h6>
                </div>
                @foreach($service as $row)
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-main">
                                <!-- Meta -->
                                <div class="meta">
                                    <h1 class="news-title">{!! $row->title !!} </h1>
                                </div>
                                <!-- News Text -->
                                <div class="news-text">
                                    <div class="image-gallery">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="single-image">
                                                    <img src="{{ asset('img/services/'.$row->img1) }}" alt="#">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="single-image">
                                                    <img src="{{ asset('img/services/'.$row->img2) }}" alt="#">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {!! $row->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--/ End Single News -->
@endsection
