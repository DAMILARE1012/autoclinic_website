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
                  <h4 class="card-title">Training Hub</h4>
                  @if(Session::has('success'))
                  <div class="alert  alert-success alert-dismissible fade show">
                      <span class="badge badge-pill badge-success">Success</span>
                      {{ Session::get('success') }}
                  </div>
                  @endif
                  @if(Session::has('off'))
                  <div class="alert  alert-warning alert-dismissible fade show">
                      <span class="badge badge-pill badge-warning">Warning</span>
                      {{ Session::get('off') }}
                  </div>
                  @endif

                 @if($register->status ==0)
                <a href="{{ route('enable.reg', ['id' => $register->id]) }}"><button type="button" class="btn btn-success btn-icon-text btn-rounded">Enable Registration Session</button> </a>
                <span class="btn btn text-warning">Registration is Presently On hold</span>
                
                @else
                <a href="{{ route('disable.reg', ['id' => $register->id]) }}"><button type="button" class="btn btn-warning btn-icon-text btn-rounded">
                       Disable Registration Session
                    </button></a>
                <span class="btn btn text-success">Registration is Presently Ongoing</span>

                @endif

                  @if($training->count() > 0)
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>Name</th>
                          <th>Code</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($training as $row)
                        <tr>
                          <td>
                            {{ $count++ }}
                          </td>
                          <td class="py-1">
                            {{ $row->name }}
                          </td>
                          <td>
                            {{ $row->code }}
                          </td>
                          <td>
                            {{$row->created_at->diffForHumans()}}
                          </td>
                          <td><a href="{{ route('delete.training', ['id' => $row->id]) }}" class="btn btn-link text-danger"> Delete</a></td>
                        </tr>
                         @endforeach
                        
                      </tbody>
                    </table>
                    
                  </div>
                  @else
                        <h6 class="text-center text-danger">No Students yet!</h6>
                    @endif
                </div>
              </div>
            </div>
</div>

@endsection