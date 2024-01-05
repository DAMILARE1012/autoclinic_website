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
                                        <strong><h4> Training Hub</h4> </strong>
                                        
                                    </div>
                                    <div class="col-6">
                                        
                                        <p>
                                            <a href="{{ route('admin.edit.index', ['id' => $training_hub->id]) }}"><button type="button" class="btn btn-outline-warning btn-icon-text btn-sm">
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
                                        <div class="row">
                                            <div class="col-md-11">
                                                <strong><h4>Title</h4> </strong>     
                                            </div>
                                        </div>                       
                                        <div class="card">                   
                                            <div class="col-md-11">
                                                <div class="card-body my-3">
                                                    <p>{!! $training_hub->title !!} </p>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <br>
                                        <strong><h4>Image</h4> </strong> 
                                        <div class="col-md-12" align="center">
                                            
                                            <img src="{{ asset('img/trainings/'.$training_hub->img) }}" style="height: 360px; width: 540px" class="img-fluid">
                                            
                                            <br>
                                            <br>
                                          </div>

                                <div class="col-md-11">
                                    
                                    <strong><h4>Background</h4> </strong> 
                                    
                                </div>
                                <div class="card">                   
                                    <div class="col-md-11">
                                        <div class="card-body my-3"><p>{!! $training_hub->training_hub !!}</p>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-11">
                                        <strong><h4> Facilities</h4> </strong>     
                                    </div>
                                </div>                       
                                <div class="card">                   
                                    <div class="col-md-11">
                                        <div class="card-body my-3">
                                            <p>{!! $training_hub->facilities !!} </p>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-md-11">
                                        <strong><h4> Expectations</h4> </strong>     
                                    </div>
                                </div>                       
                                <div class="card">                   
                                    <div class="col-md-11">
                                        <div class="card-body my-3">
                                            <p>{!! $training_hub->expectations !!} </p>
                                        </div>
                                    </div>
                                    <br>
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
@endsection