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
      <h4 class="card-title">Edit Footer</h4>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

      <form action="{{ route('admin.footer.update', ['id' => $footer->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
        <div class="form-group">

          <div class="form-group">
            <label for="exampleInputName1">Footer</label>
            <textarea name="footer" id="elm1" rows="3" class="form-control">{{ $footer->footer }}</textarea required>
          </div>

          <div class="form-group">
              <label for="exampleInputName1">Instagram</label>
              <input type="text" class="form-control" value="{{ $footer->instagram }}" name="instagram" id="exampleInputName1" placeholder="Phone Number" required>
          </div>

          <div class="form-group">
              <label for="exampleInputName1">Twitter</label>
              <input type="text" class="form-control" value="{{ $footer->twitter }}" name="twitter" id="exampleInputName1" required>
          </div>

          <div class="form-group">
              <label for="exampleInputName1">Facebook</label>
              <input type="text" class="form-control" value="{{ $footer->facebook }}" name="facebook" id="exampleInputName1" placeholder="Email" required>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection