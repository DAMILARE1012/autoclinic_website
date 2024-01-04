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
                            <li class="active">Our Training Hub </li>
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
                	{!! $traininghub->title !!}
                    
                    @if(Session::has('success'))
                  <div class="alert  alert-success alert-dismissible fade show">
                      <span class="badge badge-pill badge-success">Success</span>
                      {{ Session::get('success') }}
                  </div>
                  @endif
                	<div class="row">
                		<div class="col-md-6">
                			
                            <!-- <p style="text-align: justify;">
                                The NGS Auto Mechanic Training program provides learners with organized learning experiences along with actual shop training with the sole aim of equipping them with the necessary knowledge and experience required for diagnosis and repairing automobiles.<br>
                                The combination of both classroom theory (25%) and hands-on training (75%) offers the learners the experiences that are required for entry-level Auto Mechanic Jobs.<br> 
                                This Auto Mechanic Pre-Apprenticeship program prepares learners in the art of servicing and maintenance of all types and brands of cars. The NGS Automotive Training Centre Instructors all have relevant field experiences and provide practical and knowledgeable sources of education to our learners.

                            </p> -->
                            {!! $traininghub->training_hub !!}
                		</div>
                		<div class="col-md-6">
                		<div class="news-head">
                            
                			<img src="{{ asset('img/trainings/'.$traininghub->img) }}" alt="training image">
                    	</div>
                		</div>
                	</div>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Our Facilities</h3>
                                <!-- <p style="text-align: justify;">
                                    In addition to our relatively serene and conducive environment, the classrooms are equipped with modern day learning facilities and our workshop is next to none in terms of sophisticated mechanical tools, machines and gadgets.

                                </p> -->
                                {!! $traininghub->facilities !!}
                       
                        </div>
                        <div class="col-md-6">
                            <h3>Our Expectations</h3>
                                <!-- <p style="text-align: justify;">
                                    At the end of the training you will come out as competent Auto diagnostician and as well as Auto Service Technician, you will also have the skills to use any modern diagnostic tool to communicate with and retrieve codes from any Onboard Diagnostics Compliant vehicle. <br><br>
                                    Furthermore you would be able to interpret the codes retrieved from the vehicle’s computer, use the codes with the vehicles manufacturers' e-repair manuals to fix the vehicle or to design maintenance and repair work schedule for other technicians.
                                </p> -->
                                {!! $traininghub->expectations !!}
                        </div>
                    </div>
                    <br>
                    <h3>Our Trainings</h3> 
                    <div class="row">
                        
                        @forelse ($ourTrainings as $key => $item)
                            <div class="col-sm-4">
                                <div class="card mb-4" style="width: 20rem; box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;">
                                    <a href="{{ asset('/img/trainings/'.$item['img'] ) }}" data-lightbox="mygallery" data-title="{{$item['title'] }} "><img class="card-img-top" src="{{ asset('/img/trainings/'.$item['img'] ) }}" alt="Card image cap" style="height: 200px; object-fit: cover;"></a>
                                    <div class="card-body">
                                        <a href="{{ route('show_training', $item['id']) }}"><h5 class="card-title">{!! $item['title'] !!}</h5></a>
                                        <p class="card-text">{!! \Illuminate\Support\Str::limit($item['description'], 100, $end='...') !!} 
                                            <a href="{{ route('show_training', $item['id']) }}" class="btn btn-primary btn-xs" style="padding: 3px 5px; color:white;">Learn More</a>
                                        </p>
                                  
                                            
                                                                               
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div>
                                <h4>No record</h4>
                            </div>
                        @endif
                    </div>
                    
                    <h3>Trainings/Faculty Members</h3>
                    <br>
                    <div class="row">
                        @forelse ($trainer as $key => $item)
                		<div class="col-md-4">
                			<div class="news-head">
                			
                			<img src="{{ asset('/img/trainings/'.$item['img'] ) }}" alt="training image" width="">
                			<p>{{ $item['title'] }}</p>
                    	</div>
                		</div>
                        @empty
                            <div>
                                <h4>No record</h4>
                            </div>
                        @endif
                	</div>
                	<br>
                    <h3>Past Organized Trainings</h3>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="news-head">
                                <a href="img/training1.png "><img src="img/training1.png" alt="training image" width=""></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news-head">
                                <a href="img/training2.png"><img src="img/training2.png" alt="training image"></a>
                            
                            <p></p>
                        </div>
                        </div>
                        <div class="col-md-4">
                           <div class="news-head">
                            <a href="img/training3.png"><img src="img/training3.png" alt="training image"></a>
                            
                            <p></p>
                        </div> 
                        </div>
                        
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="news-head">
                                <a href="img/training4.png "><img src="img/training1.png" alt="training image" width=""></a>
                            
                            <p></p>
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news-head">
                                <a href="img/training5.png"><img src="img/training5.png" alt="training image"></a>
                            
                            <p></p>
                        </div>
                        </div>
                        <div class="col-md-4">
                           <div class="news-head">
                            <a href="img/training6.png"><img src="img/training6.png" alt="training image"></a>
                            
                            <p></p>
                        </div> 
                        </div>
                            
                    </div>
                    <h3>Trainees/Students</h3>
					<br>
                	<div class="row">
                        @forelse ($student as $key => $item)
                		<div class="col-md-4">
                			<div class="news-head">
                                <img src="{{ asset('/img/trainings/'.$item['img'] ) }}" alt="training image" width="">
                                <p>{{ $item['title'] }}</p>
                                
                    	    </div>
                		</div>
                        @empty
                            <div>
                                <h4>No record</h4>
                            </div>
                        @endif                		
                	</div>
                    
                </div>
                <!-- End Choose Left -->
            </div>
        </div>
    </section>
    
@endsection
