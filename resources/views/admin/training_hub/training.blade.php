@extends ('admin.layouts.master')
@section('content')

<div class="content-wrapper">
<br>
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
                  <h4 class="card-title">Trainings</h4>
                  @if(Session::has('success'))
                  <div class="alert  alert-success alert-dismissible fade show">
                      <span class="badge badge-pill badge-success">Success</span>
                      {{ Session::get('success') }}
                  </div>
                  @endif
                  <div class="table-responsive">
                    
                    <table class="table table-striped">
                      <thead>
                        <tr> 
                          <th>
                           <h4>#</h5>
                          </th>
                          <th>
                           <h4>Title</h5> 
                          </th>
                          
                          <th>
                            <h4>Status</h4>
                          </th>
                          <th>
                          </th>
                          <th>
                            <h4>Actions</h5>
                          </th>
                        </h4>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($singletraining as $row)
                        <tr>
                          <td>
                            <h5> {{ $count++ }} </h5>
                          </td>
                          <td>
                            <h6>{!! $row->title !!}</h6>                          
                          </td>  
                          <td>
                            @if( $row->archive == 0  )
                            <a href="{{ route('admin.archive', ['id' => $row->id]) }}"><button type="button" class="btn btn-outline-success btn-icon-text btn-sm">
                              <i class="ti-archive btn-icon-prepend"></i>
                              Archive
                            </button> </a>
                            @else
                            <a href="{{ route('admin.unarchive', ['id' => $row->id]) }}"><button type="button" class="btn btn-outline-secondary btn-icon-text btn-sm">
                              <i class="ti-eraser btn-icon-prepend"></i>
                              Unarchive
                            </button> </a>
                            @endif
                            
                          </td>                      
                          <td>
                            <a href="{{ route('admin.show.training', ['id' => $row->id]) }}"><button type="button" class="btn btn-outline-primary btn-icon-text btn-sm">
                              <i class="ti-book btn-icon-prepend"></i>
                              Read
                            </button> </a>
                          </td>
                          
                          <td>
                            
                            <a href="{{ route('admin.edit.training', ['id' => $row->id]) }}"><button type="button" class="btn btn-outline-warning btn-icon-text btn-sm">
                              <i class="ti-pencil-alt btn-icon-append"></i> 
                               Edit
                            </button> </a>
                          </td>
              
                          <td>
                            <a href="{{ route('admin.training.delete', ['id' => $row->id]) }}"  onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-outline-danger btn-icon-text btn-sm">
                              <i class="ti-trash btn-icon-prepend"></i>                                                    
                              Delete
                            </button></a>
                          </td>
                        </tr>
                         @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                  
                </div>
              </div>
            </div>
</div>

@endsection