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
        <h4 class="card-title">Edit Slide</h4>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach

        <form action="{{ route('admin.home.update', ['id' => $slider->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
          @csrf
            <div class="form-group">
              <label for="exampleInputName1">Slide Text</label>
              
                <textarea id="tiny" name="slide">
                  {{ $slider->slide }}
                </textarea>
                <script>
                  tinymce.init({
                    selector: 'textarea#tiny'
                  });
                </script>
    
            </div>
          <div class="form-group">
            <label>Image upload</label>
            <br>
                  <div class="col-12 col-md-9"><input type="file" id="img" name="img" class="form-control-file"></div>
                  <small class="form-text text-success">Only if you want to update the current Image</small>
              </div>

          
          <button type="submit" class="btn btn-primary mr-2">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>  

@endsection