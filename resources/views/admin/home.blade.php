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
            <a href="{{ route('admin.reviews') }}"><h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"> {{ $review->count() }} </h3></a> 
            <i class="ti-pencil-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>  
          <p class="mb-0 mt-2 text-danger">{{ $approved_review->count() }} <span class="text-black ml-1"><small>Approved</small></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Trainings</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <a href="{{ route('admin.training_hub') }}"><h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"> {{ $singletrainings->count() }} </h3></a> 
            <i class="ti-desktop icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>  
          <p class="mb-0 mt-2 text-danger">{{ $archive->count() }} <span class="text-black ml-1"><small>Archived</small></span></p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection