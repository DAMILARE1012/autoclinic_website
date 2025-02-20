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
              <a href="{{ route('admin.edit.option', ['id' => $option_data->id]) }}"><button type="button" class="btn btn-outline-warning btn-icon-text btn-sm">
                <i class="ti-pencil-alt btn-icon-append"></i> 
                 Edit
              </button> </a>
              
            </p>
              
            <div class="col-md-12" align="center">
              <img src="{{ asset('img/options/'.$option_data->img) }}"style="height:400px; width:900px" class="img-fluid">
              
              <br>
            </div>
           
            <br>
            <div class="table-responsive">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                          <strong><h4 style="margin-top:.7rem;"> Option Details</h4> </strong> 
                            
                      </div>
                    </div>  
                    <hr>                     
                    <strong><h4>Title</h4> </strong> 
                    <div class="card">                   
                      <div class="col-md-12">
                        <div class="card-body my-3"><p>{!! $option_data->title !!}</p>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <strong><h4>Introduction</h4> </strong>     
                      </div>                      
                    </div>                       
                    <div class="card">                   
                      <div class="col-md-8">
                        <div class="card-body my-3">
                          <p>{!! $option_data->introduction !!} </p>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <strong><h4>Requirements</h4> </strong>     
                      </div>                      
                    </div>                       
                    <div class="card">                   
                      <div class="col-md-8">
                        <div class="card-body my-3">
                          <p>{!! $option_data->requirements !!} </p>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <strong><h4>Eligibility</h4> </strong>     
                      </div>                      
                    </div>                       
                    <div class="card">                   
                      <div class="col-md-8">
                        <div class="card-body my-3">
                          <p>{!! $option_data->eligibility !!} </p>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <strong><h4>Course Content</h4> </strong>     
                      </div>                      
                    </div>                       
                    <div class="card">                   
                      <div class="col-md-8">
                        <div class="card-body my-3">
                          <p>{!! $option_data->course_content !!} </p>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <strong><h4>Expected Outcomes</h4> </strong>     
                      </div>                      
                    </div>                       
                    <div class="card">                   
                      <div class="col-md-8">
                        <div class="card-body my-3">
                          <p>{!! $option_data->expected_outcomes !!} </p>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <strong><h4>Routine</h4> </strong>     
                      </div>                      
                    </div>                       
                    <div class="card">                   
                      <div class="col-md-8">
                        <div class="card-body my-3">
                          <p>{!! $option_data->routine !!} </p>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <strong><h4>Cost</h4> </strong>     
                      </div>                      
                    </div>                       
                    <div class="card">                   
                      <div class="col-md-8">
                        <div class="card-body my-3">
                          <p>{!! $option_data->cost !!} </p>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <strong><h4>Duration</h4> </strong>     
                      </div>                      
                    </div>                       
                    <div class="card">                   
                      <div class="col-md-8">
                        <div class="card-body my-3">
                          <p>{!! $option_data->duration !!} </p>
                        </div>
                      </div>
                    </div>
                    <br>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
<br>
@endsection