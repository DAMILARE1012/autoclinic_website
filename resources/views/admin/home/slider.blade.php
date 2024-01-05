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
                  <h4 class="card-title">Home Front</h4>
                  @if(Session::has('success'))
                  <div class="alert  alert-success alert-dismissible fade show">
                      <span class="badge badge-pill badge-success">Success</span>
                      {{ Session::get('success') }}
                  </div>
                  @endif
                 
                  @if($slider->count() > 0)
                  <div class="table-responsive">
                    
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Image
                          </th>
                          <th>
                            Slide Text
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($slider as $row)
                        <tr>
                          <td>
                            {{ $count++ }}
                          </td>
                          <td class="py-1">
                            <img src="{{ asset('/img/slider/'.$row->img) }}" alt="image"/>
                          </td>
                          <td>
                            {{ strip_tags($row->slide) }}
                          
                          </td>
                          <td>
                            <a href="{{ route('admin.home.edit', ['id' => $row->id]) }}" class="btn btn-outline-warning btn-xs"><i class="ti-pencil-alt btn-icon-append"></i> Edit</a>                            
                          </td>
                          <td>
                            <a href="{{ route('admin.home.delete', ['id' => $row->id]) }}" class="btn btn-outline-danger btn-xs" onclick="return confirm('Are you sure?')"> <i class="ti-trash btn-icon-prepend"></i>Delete</a>
                          </td>
                        </tr>
                         @endforeach
                        
                      </tbody>
                    </table>
                    
                  </div>
                  @else
                        <h6 class="text-center text-danger">No Slide in Home Page</h6>
                    @endif
                </div>
              </div>
            </div>
</div>

@endsection