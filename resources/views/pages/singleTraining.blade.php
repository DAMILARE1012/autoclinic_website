@extends('master')
@section('title', '| Training_hub')

@section('content')
<!-- Breadcrumbs -->
    <div class="breadcrumbs overlay"  style="background-image:url('img/trc_2.jpg')">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Our Training Hub </h2>
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }} ">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li><a href="{{ route('our_training') }} ">Our Training Hub</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">{{ $training_data->title }}</li>
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
                    <div class="col-md-12 col-12">
                        <h4>{{ $training_data->title }}</h4>
                    </div>
                    <div class="col-md-12 col-12">
                        @if($training_data->status ==1)
                            <p style="text-align: justify;">
                                <h5><span class="badge badge-pill badge-success"><a href="{{ $training_data->ext_reg }}"> Registration is Ongoing</a></span></h5><br><a href="{{ $training_data->ext_reg }}"> Click to register now to join the training!</a>
                            </p>
                            @else
                                <p style="text-align: justify;">
                                <h5><span class="badge badge-pill badge-primary">Registration is Onhold</span></h5>
                            </p>
                            @endif 
                    </div>
                	
                    <div class="col-md-12" align="center">
                        <img src="{{ asset('img/trainings/'.$training_data->img) }}"style="height:400px; width:900px" class="img-fluid">
                        
                        <br>
                        <hr>
                      </div>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>About the Training</h3>
                                <p style="text-align: justify;">
                                    {!! $training_data->description !!}
                                </p>
                        
                        </div>
                        <div class="col-md-6">
                            <h3>Training Requirements</h3>
                                <p style="text-align: justify;">
                                    {!! $training_data->requirement !!}
                                </p>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Who is the Training For?</h3>
                                <p style="text-align: justify;">
                                    {!! $training_data->training_for !!}
                                </p>
                        
                        </div>
                        <div class="col-md-6">
                            <h3>Training Routine</h3>
                                <p style="text-align: justify;">
                                    {!! $training_data->routine !!}
                                </p>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Training Outline</h3>
                                <p style="text-align: justify;">
                                    {!! $training_data->outline !!}
                                </p>
                        
                        </div>
                        <div class="col-md-6">
                            <h3>Training Courses</h3>
                                <p style="text-align: justify;">
                                    {!! $training_data->courses !!}
                                </p>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Training Cost</h3>
                                <p style="text-align: justify;">
                                    {!! $training_data->cost !!}
                                </p>
                        
                        </div>
                        <div class="col-md-6">
                            <h3>Training Expected Outcomes</h3>
                                <p style="text-align: justify;">
                                    {!! $training_data->expected_outcome !!}
                                </p>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Training Duration</h3>
                                <p style="text-align: justify;">
                                    {!! $training_data->duration !!}
                                </p>
                        
                        </div>
                        <!-- <div class="col-md-6">
                            <h3>Training Courses</h3>
                                <p style="text-align: justify;">
                                    {{ $training_data->courses }}
                                </p>
                        </div> -->
                    </div>
                    <br>
                </div>
                <!-- End Choose Left -->
            </div>
        </div>
    </section>

@endsection
