@extends('master')

@section('title', '| Services')

@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay" style="background-image:url('img/trc_2.jpg')">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Our Trainings</h2>
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Our Trainings</li>
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
                <!-- <div class="section-title">
                    <h6> ...with NGS state-of-the-art facilities, modern day equipment, and a team of highly skilled
                        technicians that truly enjoy their work, we are always proud of NGS exceptional services in the
                        following areas:</h6>
                </div> -->
                @forelse ($ourTrainings as $key => $item)
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-main">
                                <!-- Meta -->
                                <div class="meta">
                                    <a href="{{ route('show_training', $item['id']) }}"><h6 class="news">{{ $item['title'] }}</h6></a> 
                                </div>
                                <!-- News Text -->
                                <div class="news-text">
                                    <div class="image-gallery">
                                        <div class="single-image">
                                            <a href="{{ asset('/img/trainings/'.$item['img'] ) }}" data-lightbox="mygallery" data-title="{{$item['title'] }} ">
                                            <img src="{{ asset('/img/trainings/'.$item['img'] ) }}" alt="flyer" style="height:363px; width:1400px" class="img-fluid"></a>
                                        </div>
                                        
                                        <!-- <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="single-image">
                                                    <img src="{{ asset('img/gcr_4.png')}}" alt="#">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="single-image">
                                                    <img src="{{ asset('img/gcr_4_2.png')}}" alt="#">
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <p style="text-align: justify"> {{ $item['description'] }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                @empty
                <div class="container">
                    <div class="row justify-content-center align-item-center">
                            <h5><strong>Training Coming soon!!</strong></h5>
                    </div>
                </div>
                @endforelse             
            </div>
        </div>
    </section>
    <!--/ End Single News -->
@endsection
