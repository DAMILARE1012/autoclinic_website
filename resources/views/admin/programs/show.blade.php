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
                    <img src="{{ asset('img/programs/'.$program_data->img) }}" style="height: 50%; width: 50%" class="img-fluid">
                    <br>
                </div>
                <br>
                <div class="table-responsive">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong><h4> {{ $program_data->name }}</h4> </strong>     
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.edit.program',['id' => $program_data->id]) }}"><button type="button" class="btn btn-outline-warning btn-icon-text btn-sm">
                                        <i class="ti-pencil-alt btn-icon-append"></i>
                                        Edit
                                        </button> </a>

                                        <a href="{{ route('admin.option.create') }}"><button type="button" class="btn btn-outline-primary btn-icon-text btn-sm">
                                            <i class="ti-plus"></i>
                                            Create Option
                                            </button> </a>
                                    </div>
                         
                                </div> 
                                <hr> 
                                <br> 
                                <h4>Options</h4>
                                @if(Session::has('success'))
                                    <div class="alert  alert-success alert-dismissible fade show">
                                        <span class="badge badge-pill badge-success">Success</span>
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Actions</th>
                                      </tr>
                                    </thead>

                                    @php
                                    $count = 1;
                                    @endphp
                                    
                                    <tbody>
                                        @foreach($program_data->options as $option)
                                      <tr>
                                        <th scope="row">{{$count++}}</th>
                                        <td>{{ $option->title }}</td>
                                        <td><a href="{{ route('admin.show.option', ['id' => $option->id]) }}"><span class="badge badge-info">Read</span></a> 
                                            <a href="{{ route('admin.edit.option', ['id' => $option->id]) }}"><span class="badge badge-warning">Edit</span></a> 
                                            <a href="{{ route('admin.delete.option', ['id' => $option->id]) }}" onclick="return confirm('Are you sure you want to delete this option?')">
                                                <span class="badge badge-danger">Delete</span> </td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                    
                                  </table>
                                 
                                
                                <br>
                                
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection