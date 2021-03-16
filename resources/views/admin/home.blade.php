@extends ('admin.layouts.master')
@section('content')

<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h4 class="font-weight-bold mb-0">Admin Dashboard</h4>
        </div> 
      </div>
    </div>
  </div>
  <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Gallery</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <a href="{{ route('admin.gallery') }} "><h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$gallery->count()}}</h3></a>
                    
                     <i class="ti-gallery icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Inventory</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <a href="{{ route('admin.inventory') }} "> <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$inventory->count()}}</h3></a>
                    <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Customer Review</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <a href="# "><h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"># </h3></a> 
                    <i class="ti-pencil-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                </div>
              </div>
            </div>
          </div>
@endsection