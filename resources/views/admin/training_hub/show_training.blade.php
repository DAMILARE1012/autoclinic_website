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
              <a href="{{ route('admin.edit.training', ['id' => $training_data->id]) }}"><button type="button" class="btn btn-outline-warning btn-icon-text btn-sm">
                <i class="ti-pencil-alt btn-icon-append"></i> 
                 Edit
              </button> </a>
              
            </p>
              
              <div class="col-md-12" align="center">
                <img src="{{ asset('img/trainings/'.$training_data->img) }}"style="height:400px; width:900px" class="img-fluid">
                
                <br>
              </div>
           
           <br>
            <div class="table-responsive">
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                             <strong><h4 style="margin-top:.7rem;"> Training Details</h4> </strong> 
                               
                          </div>
                           
                          <div class="col-md-6">
                            @if($training_data->status ==1)
                              <p>
                                <h5><span class="badge badge-pill badge-success">Registration is Ongoing</span></h5></p>
                            @else
                              <p>
                                <h5><span class="badge badge-pill badge-primary">Registration is Onhold</span></h5><br></p>
                            @endif  
                         </div>
                         
                        </div>  
                        <hr>                     
                        <strong><h4> Training Title</h4> </strong> 
                        <div class="card">                   
                          <div class="col-md-12">
                            <div class="card-body my-3"><p>{!! $training_data->title !!}</p>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <strong><h4> Training Description</h4> </strong>     
                          </div>                      
                        </div>                       
                        <div class="card">                   
                          <div class="col-md-8">
                            <div class="card-body my-3">
                              <p>{!! $training_data->description !!} </p>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <strong><h4> Who is the training for?</h4> </strong>     
                          </div>                      
                        </div>                       
                        <div class="card">                   
                          <div class="col-md-8">
                            <div class="card-body my-3">
                              <p>{!! $training_data->training_for !!} </p>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <strong><h4> Training Requirements</h4> </strong>     
                          </div>                      
                        </div>                       
                        <div class="card">                   
                          <div class="col-md-8">
                            <div class="card-body my-3">
                              <p>{!! $training_data->requirement !!} </p>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <strong><h4> Training Courses</h4> </strong>     
                          </div>                      
                        </div>                       
                        <div class="card">                   
                          <div class="col-md-8">
                            <div class="card-body my-3">
                              <p>{!! $training_data->courses !!} </p>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <strong><h4> Training Outline</h4> </strong>     
                          </div>                      
                        </div>                       
                        <div class="card">                   
                          <div class="col-md-8">
                            <div class="card-body my-3">
                              <p>{!! $training_data->outline !!} </p>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <strong><h4> Training Expected Outcome</h4> </strong>     
                          </div>                      
                        </div>                       
                        <div class="card">                   
                          <div class="col-md-8">
                            <div class="card-body my-3">
                              <p>{!! $training_data->expected_outcome !!} </p>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <strong><h4> Training Routine</h4> </strong>     
                          </div>                      
                        </div>                       
                        <div class="card">                   
                          <div class="col-md-8">
                            <div class="card-body my-3">
                              <p>{!! $training_data->routine !!} </p>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <strong><h4> Training Duration</h4> </strong>     
                          </div>                      
                        </div>                       
                        <div class="card">                   
                          <div class="col-md-8">
                            <div class="card-body my-3">
                              <p>{!! $training_data->duration !!} </p>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <strong><h4> External Registration Link</h4> </strong>     
                          </div>                      
                        </div>                       
                        <div class="card">                   
                          <div class="col-md-8">
                            <div class="card-body my-3">
                              <p>{!! $training_data->ext_reg !!} </p>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <strong><h4> In-house Registration Link</h4> </strong>     
                          </div>                      
                        </div>                       
                        <div class="card">                   
                          <div class="col-md-8">
                            <div class="card-body my-3">
                              <p>{!! $training_data->inhouse_reg !!} </p>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <strong><h4> Training Cost</h4> </strong>     
                          </div>                      
                        </div>                       
                        <div class="card">                   
                          <div class="col-md-8">
                            <div class="card-body my-3">
                              <p>{!! $training_data->cost !!} </p>
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