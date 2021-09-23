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
                	<h3>AUTOCLINIC TECHNICAL TRAINING CENTRE</h3>
                    
                    @if(Session::has('success'))
                  <div class="alert  alert-success alert-dismissible fade show">
                      <span class="badge badge-pill badge-success">Success</span>
                      {{ Session::get('success') }}
                  </div>
                  @endif
                	<div class="row">
                		<div class="col-md-6">
                			{{-- <p style="text-align: justify;">At Autoclinic Technical Training Centre (ATTC), we aim to equip people with knowledge, know-how, skills and/or competences required in handling today’s information communication technology (ICT) and artificial intelligence enabled automobile system. <br>
                    		Therefore, at ATTC, we shall provide high quality automobile education and training that have a strong work-based learning element that will facilitate young people’s transition to work and contribute to reducing unemployment and supporting economic development. <br>
                    		Thus, we are at ATTC, we shall provide means of empowering people to develop their full capabilities, enabling them to seize social and employment opportunities, and increasing their productivity and their enterprises. This will be done through the use of formal, non-formal and informal vocational learning, workplace and work-based learning, and other learning opportunities in the formal and informal economies. Hence, we shall be committed to supporting life-long learning approach to economic growth, and good employment and social objectives of Nigeria. 
                        
                    		</p> --}}
                            <p style="text-align: justify;">
                                The NGS Auto Mechanic Training program provides learners with organized learning experiences along with actual shop training with the sole aim of equipping them with the necessary knowledge and experience required for diagnosis and repairing automobiles.<br>
                                The combination of both classroom theory (25%) and hands-on training (75%) offers the learners the experiences that are required for entry-level Auto Mechanic Jobs.<br> 
                                This Auto Mechanic Pre-Apprenticeship program prepares learners in the art of servicing and maintenance of all types and brands of cars. The NGS Automotive Training Centre Instructors all have relevant field experiences and provide practical and knowledgeable sources of education to our learners.

                            </p>
                		</div>
                		<div class="col-md-6">
                		<div class="news-head">
                		
                			<img src="img/training.png" alt="training image">
                    	</div>
                		</div>
                	</div>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Who is This Training For?</h3>
                            <p style="text-align: justify;">
                            <strong>This training is for the following categories of learners:</strong>
                            <br><br>
                            <i class="fas fa-hand-point-right" aria-hidden="true"></i> Experienced Auto technicians (Mechanic or Electrician) who have already completed apprenticeship training but want to learn how to use the computerized auto-diagnostics tools & techniques for effective diagnosis & repairs modern computerized vehicles.
                            <br>
                            <i class="fas fa-hand-point-right" aria-hidden="true"></i> The none Auto-technicians who want to learn how to use the computerized auto-diagnostics tools & techniques to diagnose the modern computerized vehicles but not interested in complex repairs.
                            <br>
                            <i class="fas fa-hand-point-right" aria-hidden="true"></i> The vehicle users who just want to know about their vehicle performance and maintenance routine requirements.

                            </p>   
                        </div>
                        <div class="col-md-6">
                            <h3>Our Expectations</h3>
                                <p style="text-align: justify;">
                                    At the end of the training you will come out as competent Auto diagnostician and as well as Auto Service Technician, you will also have the skills to use any modern diagnostic tool to communicate with and retrieve codes from any Onboard Diagnostics Compliant vehicle. <br><br>
                                    Furthermore you would be able to interpret the codes retrieved from the vehicle’s computer, use the codes with the vehicles manufacturers' e-repair manuals to fix the vehicle or to design maintenance and repair work schedule for other technicians.
                                </p>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Requirement / Qualification</h3>
                            <p style="text-align: justify;">
                            Eligibility and admission preference for the training program is given to candidates who can read, write and passion for the field.
                            </p>   
                        </div>
                        <div class="col-md-6">
                            <h3>Program Outline</h3>
                                <p style="text-align: justify;">
                                    The program is a full–time comprehensive program taught through daily lectures as well as extensive practical trainings with modern vehicles in our workshop setting under the supervision of trained and highly experienced instructors.<br>
                                    Our instructors are German trained with decades of hands-on experience in the automobile industry.

                                </p>
                        </div>
                    </div>
                    <br>

                     <div class="row">
                        <div class="col-md-6">
                            <h3>Routine</h3>
                            <p style="text-align: justify;">
                            Class lectures run from Monday through to Friday between 10am-12pm while practical on-the job training takes effect from 1.00pm through the rest of the days.
                            </p>   
                        </div>
                        <div class="col-md-6">
                            <h3>Our Facilities</h3>
                                <p style="text-align: justify;">
                                    In addition to our relatively serene and conducive environment, the classrooms are equipped with modern day learning facilities and our workshop is next to none in terms of sophisticated mechanical tools, machines and gadgets.

                                </p>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                             <h3>New Session</h3>
                             @if($register->status ==1)
                            <p style="text-align: justify;">
                                <h5><span class="badge badge-pill badge-success">Registration is Ongoing</span></h5><br>Register now to join the new training session!
                            </p>
                            @else
                                <p style="text-align: justify;">
                                <h5><span class="badge badge-pill badge-primary">Registration is Onhold</span></h5><br>Kindly check back later!
                            </p>
                            @endif   

                        </div>
                        <div class="col-md-4"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Training Fee/Payment</h3>
                            <p style="text-align: justify;">
                            The training fee is for the entire program based on categories. However, NVQ category includes overall kits (overall coat, boot and helmet), comprehensive and self-explanatory e-learning materials and manuals you need for the training.<br><br>
                            ALL prospective learners are required to pay at least 60% of their training fee on or before resumption date and to pay-up the outstanding fee before end of second semester exams/evaluation.<br><br>
                            However, 20% discount of the total training fee is awarded to the FIRST TWENTY (20) students to be admitted.

                            </p>   
                            <br>
                            <h3>Downlaod Forms</h3>
                            @if(Session::has('bad'))
                                <div class="alert  alert-danger alert-dismissible fade show">
                                    <span class="badge badge-pill badge-danger">Error</span>
                                    {{ Session::get('bad') }}
                                </div>
                            @endif
                                <form action="{{ route('download.form') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                                    @csrf
                                    <div class="form-group" style="text-align:center;">
                                      
                                      <div class="row">
                                      <div class="col-md-6">
                                        <label for="exampleInputName1">Name</label>
                                          <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Name" required>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="exampleInputName1">Unique Code</label>
                                        <input type="text" class="form-control" name="code" id="exampleInputName1" placeholder="Unique Code" required>
                                      </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary mr-1" style="margin: auto;">Download</button>
                                </div>
                                    
                                  </form>
                        </div>
                        <div class="col-md-6">
                            <h3>Registration Procedure</h3>
                            {{-- <span class="badge badge-pill badge-success">Registration is Ongoing </span>
                            <span class="badge badge-pill badge-danger">Registration is On Hold </span> --}}
                                <p style="text-align: justify;">
                                   <strong>You can register for the program by:</strong>
                                   <br><br>
                                <i class="fas fa-hand-point-right" aria-hidden="true"></i> Visiting our Admission Department at the training center in person
                                <br>
                                <i class="fas fa-hand-point-right" aria-hidden="true"></i> Obtain APPLICATION/REGISTRATION FORM for N5, 000.00
                                <br>
                                <i class="fas fa-hand-point-right" aria-hidden="true"></i> Complete the registration forms and submit the form at the training center before the training commencement date.<br>
                                <strong>Or</strong> 
                                <br>
                                <i class="fas fa-hand-point-right" aria-hidden="true"></i> Make the sum of N5,000.00 payment for APPLICATION/REGISTRATION FORM to the following Account details:<br><strong><br>
                                Account Name:AUTO CLINIC CENTRE LTD<br> 
                                Account Number:0087195294<br>
                                Bank:Diamond-Access  </strong><br><br>
                                <i class="fas fa-hand-point-right" aria-hidden="true"></i> Contact the <strong>School Admin</strong> on <strong>07037110944</strong>  for <strong>Application Number</strong><br>
                                <i class="fas fa-hand-point-right" aria-hidden="true"></i> Download the <strong>APPLICATION/REGISTRATION FORM</strong> from the Training Hub of the company website using your application number.<br>
                                <i class="fas fa-hand-point-right" aria-hidden="true"></i> Complete the Forms and submit to Admission Department at the training center before the training commencement date.<br>
                                <i class="fas fa-hand-point-right" aria-hidden="true"></i> Present your proof of payment to the account department at the institute.<br>

                                <strong>Upon completion of this process, you will receive a notification/confirmation and call from the Academic Advisor of the institute detailing your admission status, advice, resumption date and other vital information.</strong>
 
                                </p>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Duration</h3>
                            <p style="text-align: justify;">
                            The Duration for each program is as shown in the duration table below, this is to cover the whole syllabus both class-room and practical trainings.<br>
                            At the expiration of the training duration, graduants are at the liberty to either go and establish. 
                            </p>   
                        </div>
                        <div class="col-md-6">
                            <h3>Programmes, Courses and Duration</h3>
                                <div class="news-head">
                            <br>
                            <img src="img/program.jpg" alt="program image">
                        </div>
                        </div>
                    </div>
                    <br>

                   {{--  <div class="row">
                        <div class="col-md-4">
                            <h3>Vision</h3>
                            <p style="text-align: justify;">
                            To be the preferred Centre of Excellence in provision of life-Long learning approach for the development of Autotronics Skills in Nigeria</p>   
                        </div>
                        <div class="col-md-4">

                            <h3>Mission</h3>
                            <p style="text-align: justify;">ATTC will provide conducive Autotronics skill acquisition learning environment driven by ICT in enshrining long life learning approach through the use of formal, non-formal and informal vocational learning, workplace and work-based learning, and other learning opportunities.</p>
                        </div>
                        <div class="col-md-4">

                            <h3>ATTC Overview</h3>
                            <p style="text-align: justify;"> Knowing fully well that ATTC is a section in Autoclinic Centre, the relationship that will exist between ATTC and other business are as shown herewith. ATTC will have sufficient theoretical knowledge in additional to autoronics related skills.</p>
                        </div>
                    </div> --}}
                        
                    {{-- <div class="row">
                    	<div class="col-md-6">
                            <h3>Growth Plan</h3>
							<p style="text-align: justify;">Our growth plan activities shall be divided into short-term, mid-term and long term activities. The short-term program shall majorly focus on having funds to keep ATTC afloat with little return on investment (ROI) while the Mid-term and long-term shall focus on generating ROI and expansion. <br><br>
                            The shorter programs or activities shall basically consist of specialized training and skill acquisition program such as weekend training and skill acquisition, Holiday program etc. The short-term and long-term are as shown.</p>
                		
                    		
                    	</div>
                    	<div class="col-md-6">
                    		<div class="news-head">
                			<img src="img/growth_plan.png" alt="training image">
                    	</div>
                    	</div>
                    </div> --}}

                  {{--   <div class="row">
                    	
                        <div class="col-lg-6">
                        	<p  style="text-align: justify;"><h3>Facilities</h3>
                        	<br>
					        To effectively function, ATTC should have the following: </p>
                            <ul class="list">
                                <li><i class="fa fa-caret-right"></i>Multimedia Enabled Classrooms: ICT Facilities in each classroom, Projectors or Smart Screen, Wall chart,Loudspeaker, etc</li>
                                <li><i class="fa fa-caret-right"></i>Teachers/Lecturers/Instructors</li>
                                <li><i class="fa fa-caret-right"></i>Library both Physical And E-Library with internet enabled computers </li>
                                <li><i class="fa fa-caret-right"></i>Boardroom/Meeting Room/Lecturers room</li>
                                <li><i class="fa fa-caret-right"></i>Curriculum</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                                <p  style="text-align: justify;"><h3>Requirements and Needs</h3>
                                </p>
                            <ul class="list">
                                <li><i class="fa fa-caret-right"></i>List of tools available </li>
                                <li><i class="fa fa-caret-right"></i>Dept/Sections</li>
                                <li><i class="fa fa-caret-right"></i>Documentations</li>
                                <li><i class="fa fa-caret-right"></i>Contact officer to discuss with</li>
                                <li><i class="fa fa-caret-right"></i>PR/Marketing officer</li>
                                <li><i class="fa fa-caret-right"></i>Organogram</li>
                                <li><i class="fa fa-caret-right"></i>Pictures</li>
                            </ul>
                        </div>
                    </div> --}}
                    {{-- <br> --}}	 
                    <h3>Trainings/Faculty Members</h3>
                    <br>
                    <div class="row">
                		<div class="col-md-4">
                			<div class="news-head">
                			
                			<img src="img/facilitator1.png" alt="training image" width="">
                			<p>Engr. Prof. A. M. Aibinu</p>
                    	</div>
                		</div>
                		<div class="col-md-4">
                			<div class="news-head">
                			<img src="img/facilitator2.png" alt="training image">
                			<p>Engr. B. S. Ajagun</p>
                    	</div>
                		</div>
                		<div class="col-md-4">
                			<div class="news-head">
                			<img src="img/facilitator3.png" alt="training image">
                			<p>Engr. Dr. A. T. Folorunso</p>
                    	</div>
                		</div>
                	</div>
                	<br>
                    <h3>Past Organized Trainings</h3>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="news-head">
                                <a href="img/training1.png "><img src="img/training1.png" alt="training image" width=""></a>
                            
                            <p></p>
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
                		<div class="col-md-4">
                			<div class="news-head">
                			<img src="img/student1.png" alt="training image" width="">
                			<p></p>
                    	</div>
                		</div>
                		<div class="col-md-4">
                			<div class="news-head">
                			<img src="img/student2.png" alt="training image">
                			<p></p>
                    	</div>
                		</div>
                        <div class="col-md-4">
                           <div class="news-head">
                            <img src="img/student3.png" alt="training image">
                            <p></p>
                        </div> 
                        </div>
                		
                	</div>
                    
                </div>
                <!-- End Choose Left -->
            </div>
        </div>
    </section>

@endsection
