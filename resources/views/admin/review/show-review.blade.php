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
      
              
              
           <br>
            <div class="table-responsive">
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                             <strong><h4> Review Details</h4> </strong>     
                          </div>
                         
                        </div>                       

                              <div class="card">                   
                                <div class="col-md-8">
                                <div class="card-body my-3"><p> <b>Name: </b>{{ $review_data->name }}</p>
                                  <br>
                                  <p> <b> Email: </b>{{ $review_data->email }} </p>
                                  <br>

                                  <p> <b> Rate: </b>{{ $review_data->rate }} </p>

                              </div>
                            </div>
                            <br>
                            </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                             <strong><h4>Review</h4> </strong>     
                          </div>
                         
                        </div>                       

                              <div class="card">                   
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  <p></p>
                                  <p>{{ $review_data->message }}</p>

                              </div>
                            </div>
                            <br>
                            </div>
            </div>
        </div>
    </div>
    <br>
</div>

@endsection