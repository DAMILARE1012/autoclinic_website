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
                <div class="table-responsive">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <strong><h4> Contacts</h4> </strong>
                                        
                                    </div>
                                    <div class="col-6">
                                        
                                        <p>
                                            <a href="{{ route('admin.contact.edit', ['id' => $contact->id]) }}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                          </p>
                                    </div>
                                </div>
                                @if(Session::has('success'))
                                <div class="alert  alert-success alert-dismissible fade show">
                                    <span class="badge badge-pill badge-success">Success</span>
                                    {{ Session::get('success') }}
                                </div>
                                @endif
                                
                                        <hr>     

                                <div class="col-md-6">
                                    <strong><h4> Address</h4> </strong>     
                                </div>          
                                <div class="card">                   
                                    <div class="col-md-11">
                                        <div class="card-body my-3"><p>{{ $contact->address }}</p>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-11">
                                        <strong><h4> Email</h4> </strong>     
                                    </div>
                                </div>                       
                                <div class="card">                   
                                    <div class="col-md-11">
                                        <div class="card-body my-3">
                                            <p>{{ $contact->email }} </p>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="col-md-11">
                                    <strong><h4> Phone Number</h4> </strong>     
                                </div>          
                                <div class="card">                   
                                    <div class="col-md-11">
                                        <div class="card-body my-3"><p>{{ $contact->phone }}</p>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="col-md-11">
                                    <strong><h4> Open Date (Mon - Fri)</h4> </strong>     
                                </div>          
                                <div class="card">                   
                                    <div class="col-md-11">
                                        <div class="card-body my-3"><p>{{ $contact->mon_open }}</p>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="col-md-11">
                                    <strong><h4> Open Date (Sun)</h4> </strong>     
                                </div>          
                                <div class="card">                   
                                    <div class="col-md-11">
                                        <div class="card-body my-3"><p>{{ $contact->sun_open }}</p>
                                        </div>
                                    </div>
                                    <br>
                                </div>
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