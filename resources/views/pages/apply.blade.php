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
                                {!! $apply->procedure  !!}
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
