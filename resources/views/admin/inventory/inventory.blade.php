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
                  <h4 class="card-title">Activities</h4>
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
                           <h4>name</h5> 
                          </th>
                          <th>
                          </th>
                          <th>
                            <h4>Action</h5>
                          </th>
                        </h4>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($inventory as $row)
                        <tr>
                          <td>
                            <h5> {{ $count++ }} </h5>
                          </td>
                          <td>
                            <h5>{{ $row->name }}</h5>                          
                          </td>                        
                          <td>
                            <a href="{{ route('show.inventory', ['id' => $row->id]) }}"><button type="button" class="btn btn-outline-primary btn-icon-text">
                              <i class="ti-book btn-icon-prepend"></i>
                              Read
                            </button> </a>
                          </td>
                          <td>
                            
                            <a href="{{ route('edit.inventory', ['id' => $row->id]) }}"><button type="button" class="btn btn-outline-warning btn-icon-text">
                              <i class="ti-pencil-alt btn-icon-append"></i> 
                               Edit
                            </button> </a>
                          </td>
              
                          <td>
                            <a href="{{ route('delete.inventory', ['id' => $row->id]) }}"  onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-outline-danger btn-icon-text">
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