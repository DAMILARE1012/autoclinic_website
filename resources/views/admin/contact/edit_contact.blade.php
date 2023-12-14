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
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Contact</h4>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

      <form action="{{ route('admin.contact.update', ['id' => $contact->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
        <div class="form-group">
            <label for="exampleInputName1">Address</label>
            <input type="text" class="form-control" name="address" value="{{ $contact->address }}" id="exampleInputName1" placeholder="Address" required>
        </div>

        <div class="form-group">
            <label for="exampleInputName1">Email</label>
            <input type="text" class="form-control" value="{{ $contact->email }}" name="email" id="exampleInputName1" placeholder="Email" required>
        </div>

        <div class="form-group">
            <label for="exampleInputName1">Phone Number</label>
            <input type="text" class="form-control" value="{{ $contact->phone }}" name="phone" id="exampleInputName1" placeholder="Phone Number" required>
        </div>

        <div class="form-group">
            <label for="exampleInputName1">Open Date (Mon - Fri)</label>
            <input type="text" class="form-control" value="{{ $contact->mon_open }}" name="mon_open" id="exampleInputName1" required>
        </div>

        <div class="form-group">
            <label for="exampleInputName1">Open Date (Sun)</label>
            <input type="text" class="form-control" value="{{ $contact->sun_open }}" name="sun_open" id="exampleInputName1" placeholder="Price" required>
        </div>
        
        <button type="submit" class="btn btn-primary mr-2">Send</button>
      </form>
    </div>
  </div>
</div>

@endsection