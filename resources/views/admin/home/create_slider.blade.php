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
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Slider</h4>
        <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>

        <form action="{{ route('admin.home.store') }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Slide Text</label>        
            
              <textarea id="tiny" name="slide">
                {{ old('slide') }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny'
                });
              </script>
       
          <div class="form-group">
            <label>Slide Image</label>
            <br>
            <div class="col-12 col-md-9"><input type="file" id="img" name="img" class="form-control-file" required></div>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection