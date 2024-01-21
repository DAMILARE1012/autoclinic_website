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
        <h4 class="card-title">Add Service</h4>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>

        <form action="{{ route('admin.store.service') }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Servie Title</label>   
              <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Service Title" required>
          </div>     

            <label for="exampleInputName1">Home Description</label>        
            
              <textarea id="tiny" name="home_description">
              {{ old('home_description') }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny'
                });
              </script>

            <label for="exampleInputName1">Description</label>        
            
              <textarea id="tiny2" name="description">
              {{ old('description') }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny2'
                });
              </script>

            <br>
          
          <div class="row">
              <div class="col-6">
                  <div class="form-group">
                      <label>Service Image 1</label>
                      <br>
                      <div class="col-12 col-md-9"><input type="file" id="img1" name="img1" class="form-control-file" required></div>
                    </div>
              </div>
              <div class="col-6">
                  <div class="form-group">
                      <label>Service Image 2</label>
                      <br>
                      <div class="col-12 col-md-9"><input type="file" id="img2" name="img2" class="form-control-file" required></div>
                    </div>
              </div>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection