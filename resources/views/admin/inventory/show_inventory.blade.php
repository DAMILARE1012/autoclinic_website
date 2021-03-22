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
      
              
              <div class="col-md-12" align="center">
                <img src="{{ asset('img/inventoryz/'.$inventory_data->img) }}" style="height: 250px; width: 250px" class="img-fluid">
                
                <br>
              </div>
           
           <br>
            <div class="table-responsive">
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                             <strong><h4> Inventory Details</h4> </strong>     
                          </div>
                         
                        </div>                       

                              <div class="card">                   
                                <div class="col-md-8">
                                <div class="card-body my-3"><p> <b>Name: </b>{{ $inventory_data->name }}</p>
                                  <p> <b> Price: </b>{{ $inventory_data->price }} </p>

                              </div>
                            </div>
                            <br>
                            </div>
                            <br>
                            <div class="row">
                          <div class="col-md-6">
                             <strong><h4> Inventory Description</h4> </strong>     
                          </div>
                         
                        </div>                       

                              <div class="card">                   
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  <p>{{ $inventory_data->description }} </p>
                              </div>
                            </div>
                            <br>
                            </div>
            </div>
        </div>
    </div>
</div>
</div>
<br>
@endsection