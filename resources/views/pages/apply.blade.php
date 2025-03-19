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
                            <li class="active">Our Program</li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Register</li>
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
                    
                	<div class="row mb-2">
                        
                        <div class="col-md-8">
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
                    <div class="row">
                        <div class="card" style="width: 45rem;" >
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h3>Continue Application</h3>
                                        @if($errors->any())
                                            <div class="alert  alert-danger alert-dismissible fade show">
                                                <span class="badge badge-pill badge-danger">Error</span>
                                                @foreach ($errors->all() as $error)
                                                    {{ $error }}
                                                @endforeach
                                            </div>
                                        @endif
                                            <form action="{{ route('apply.form') }}" method="POST" class="forms-sample">
                                                @csrf
                                                <div class="form-group">
                                                  
                                                  <div class="row">
                                                  <div class="col-md-6">
                                                    <label>Name</label>
                                                      <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Name" required>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <label for="exampleInputName1">Unique Code</label>
                                                    <input type="text" class="form-control" name="code" id="exampleInputName1" placeholder="NGS_******" required>
                                                  </div>
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-primary mr-1" style="margin: auto;">Proceed</button>
                                            </div>
                                                
                                            </form>
            
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>

                    
                    
                    <br>
                    <br>

                   
                   
                </div>
                <!-- End Choose Left -->
            </div>
        </div>
    </section>
    
@endsection
