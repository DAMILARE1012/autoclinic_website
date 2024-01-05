@extends ('admin.layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">Admin Dashboard</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">  
                <div class="table-responsive">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <strong><h4> About</h4> </strong>
                                        
                                    </div>
                                    <div class="col-6">
                                        
                                        <p>
                                            <a href="{{ route('admin.about.edit', ['id' => $about->id]) }}"><button type="button" class="btn btn-outline-warning btn-icon-text btn-sm">
                                                <i class="ti-pencil-alt btn-icon-append"></i> 
                                                 Edit
                                              </button> </a>
                                            
                                          </p>
                                    </div>
                                </div>
                                @if(Session::has('success'))
                                <div class="alert  alert-success alert-dismissible fade show">
                                    <span class="badge badge-pill badge-success">Success</span>
                                    {{ Session::get('success') }}
                                </div>
                                @endif
                                
                                        <hr>     

                                <div class="col-md-6">
                                    <p> 
                                        <a href="{{ asset('/brochure/'.$about->brochure) }}" class="btn btn-primary btn-sm">Download Brochure</a> 
                                    </p>
                                    <strong><h4> About</h4> </strong> 
                                    
                                </div>
                                <div class="card">                   
                                    <div class="col-md-11">
                                        <div class="card-body my-3"><p>{!! $about->about_us !!}</p>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-11">
                                        <strong><h4> History (Home Page)</h4> </strong>     
                                    </div>
                                </div>                       
                                <div class="card">                   
                                    <div class="col-md-11">
                                        <div class="card-body my-3">
                                            <p>{!! $about->history !!} </p>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-md-11">
                                        <strong><h4> About (Home Page)</h4> </strong>     
                                    </div>
                                </div>                       
                                <div class="card">                   
                                    <div class="col-md-11">
                                        <div class="card-body my-3">
                                            <p>{!! $about->home_about !!} </p>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                             
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection