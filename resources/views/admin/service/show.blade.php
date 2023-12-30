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
                    <p>
                        <a href="{{ route('admin.edit.service', ['id' => $service_data->id]) }}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                      </p>
                    <div class="row">
                        <div class="col-md-6" align="center">
                            <img src="{{ asset('img/services/'.$service_data->img1) }}" style="height: 250px; width: 250px" class="img-fluid">
                            <br>
                        </div>
                        <div class="col-md-6" align="center">
                            <img src="{{ asset('img/services/'.$service_data->img2) }}" style="height: 250px; width: 250px" class="img-fluid">
                            <br>
                        </div>
                    </div>
           
                    <br>
                    <div class="table-responsive">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <strong><h4> Service Title</h4> </strong>     
                                        </div>
                         
                                    </div>                       
                                    <div class="card">                   
                                        <div class="col-md-11">
                                            <div class="card-body my-3">
                                                <p><b>{!! $service_data->title !!}
                                                </b></p>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-11">
                                            <strong><h4> Home Description</h4> 
                                            </strong>     
                                        </div>
                        
                                    </div>                       
                                    <div class="card">                   
                                        <div class="col-md-11">
                                            <div class="card-body my-3">
                                                <p>
                                                    {!! $service_data->home_description !!} 

                                                </p>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-11">
                                            <strong><h4>Description</h4> 
                                            </strong>     
                                        </div>
                        
                                    </div>                       
                                    <div class="card">                   
                                        <div class="col-md-11">
                                            <div class="card-body my-3">
                                                <p>
                                                    {!! $service_data->description !!} 

                                                </p>
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
        
<br>
@endsection