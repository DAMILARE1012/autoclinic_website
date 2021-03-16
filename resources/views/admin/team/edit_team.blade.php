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
      <h4 class="card-title">Edit Member</h4>
      @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach

      <form action="{{ route('update.team', ['id' => $team->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" name="name" value="{{ $team->name }}" id="exampleInputName1" placeholder="Name" required>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Email</label>
          <input type="email" class="form-control" name="email" value="{{ $team->email }}" id="exampleInputName1" required>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Phone No.</label>
          <input type="text" class="form-control" name="phone_number" value="{{ $team->phone_number }}" id="exampleInputName1" placeholder="Rank" required>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Rank</label>
          <input type="text" class="form-control" name="rank" value="{{ $team->rank }}" id="exampleInputName1" placeholder="Rank" required>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Website</label>
          <input type="text" class="form-control" name="website" id="exampleInputName1" value="{{ $team->website }}" placeholder="Website" required>
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select name="category" id="category" class="form-control-sm form-control" required>
              <option value="{{ $team->category }}" hidden>{{ $team->category }}</option>
              <option value="top">Top</option>
              <option value="others">Others</option>
          </select>
        </div>

        <div class="form-group">
          <label>File upload</label>
          <br>
                <div class="col-12 col-md-9"><input type="file" id="img" name="img" class="form-control-file"></div>
                <small class="form-text text-success">Only if you want to update the current image</small>
            </div>

        
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection