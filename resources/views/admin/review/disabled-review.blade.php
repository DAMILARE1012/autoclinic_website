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
                  <h4 class="card-title">Customer Reviews AWaiting Approval</h4>
                  @if(Session::has('success'))
                  <div class="alert  alert-success alert-dismissible fade show">
                      <span class="badge badge-pill badge-success">Success</span>
                      {{ Session::get('success') }}
                  </div>
                  @endif
                 
                  @if($review->count() > 0)
                  <div class="table-responsive">
                    
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Name
                          </th>
                          <th>email</th>
                          <th>
                            Rate
                          </th>
                          <th></th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($review as $row)
                        <tr>
                          <td>
                            {{ $count++ }}
                          </td>
                          <td class="py-1">
                            {{ $row->name }}
                          </td>
                          <td>
                            {{ $row->email }}
                          </td>
                          <td>
                          	{{ $row->rate }} <i class="ti-star btn-icon-append"></i>
                          </td>
                          <td>
                            <a href="{{ route('admin.enable.review', ['id' => $row->id]) }}"><button type="button" class="btn btn-outline-warning btn-icon-text btn-sm">
                              <i class="ti-archive btn-icon-append"></i> 
                               Approve
                            </button> </a>
                          </td>
                          <td>
                            <a href="{{ route('admin.show.review', ['id' => $row->id]) }}"><button type="button" class="btn btn-outline-primary btn-xs"> <i class="ti-book btn-icon-prepend"></i> Read
                            </button> </a>  
                          </td>
                          <td>
                            <a href="{{ route('admin.delete.review', ['id' => $row->id]) }}" class="btn btn-outline-danger btn-xs" onclick="return confirm('Are you sure?')"> <i class="ti-trash btn-icon-prepend"></i>Delete</a>
                          </td>
                        </tr>
                         @endforeach
                        
                      </tbody>
                    </table>
                    
                  </div>
                  @else
                        <h6 class="text-center text-danger">No Reviews!</h6>
                    @endif
                </div>
              </div>
            </div>
</div>

@endsection