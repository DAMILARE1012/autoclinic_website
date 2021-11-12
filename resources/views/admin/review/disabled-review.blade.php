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
                          	{{ $row->rate }} Stars
                          </td>
                          <td>
                            <a href="{{ route('enable.review', ['id' => $row->id]) }}" class="btn btn-link text-danger">Approve review</a>
                          </td>
                          <td>
                            <a href="{{ route('show.review', ['id' => $row->id]) }}" class="btn btn-link text-primary">Read</a>
                          </td>
                          <td><a href="{{ route('delete.review', ['id' => $row->id]) }}" class=""> Delete</a></td>
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