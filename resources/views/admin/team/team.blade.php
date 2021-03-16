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
                  <h4 class="card-title">Team Members</h4>
                  @if(Session::has('success'))
                  <div class="alert  alert-success alert-dismissible fade show">
                      <span class="badge badge-pill badge-success">Success</span>
                      {{ Session::get('success') }}
                  </div>
                  @endif
                 
                  @if($team->count() > 0)
                  <div class="table-responsive">
                    
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Image
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Rank
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($team as $row)
                        <tr>
                          <td class="py-1">
                            <img src="{{ asset('/img/team/'.$row->img) }}" alt="image"/>
                          </td>
                          <td>
                            {{ $row->name }}
                          </td>
                          <td>
                            {{ $row->email }}
                          </td>
                          <td>
                            {{ $row->rank }}
                          </td>
                          <td>
                            <a href="{{ route('edit.team', ['id' => $row->id]) }}"> Edit |</a><a href="/admin/team/delete/{{ $row->id }}"  onclick="return confirm('Are you sure?')"> Delete</a>
                          </td>
                        </tr>
                         @endforeach
                        
                      </tbody>
                    </table>
                    
                  </div>
                  @else
                        <h6 class="text-center text-danger">No Team Members</h6>
                    @endif
                </div>
              </div>
            </div>
</div>

@endsection