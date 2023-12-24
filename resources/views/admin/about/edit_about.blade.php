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
      <h4 class="card-title">Edit About</h4>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

      <form action="{{ route('admin.about.update', ['id' => $about->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
        <div class="form-group">
            <label for="exampleInputName1">About</label>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
          <div class="sample">
            <textarea id="edit" name="about_us">
              {{$about->about_us}}
            </textarea>

            <script>
              new FroalaEditor('#edit', {
              
              fileUploadURL: '/UploadFiles',
              
              fileUploadParams: {
              id: 'my_editor'
              }
              })
            </script>
          </div>
        </div>
        <div class="form-group">
            <label for="exampleInputName1">History (Home Page)</label>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
          <div class="sample">
            <textarea id="edit1" name="history">
              {{$about->history}}
            </textarea>

            <script>
              new FroalaEditor('#edit1', {
              
              fileUploadURL: '/UploadFiles',
              
              fileUploadParams: {
              id: 'my_editor'
              }
              })
              </script>
          </div>
        </div>

        <div class="form-group">
            <label for="exampleInputName1">About (Home Page)</label>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
          <div class="sample">
            <textarea id="edit2" name="home_about">
              {{$about->home_about}}
            </textarea>

            <script>
              new FroalaEditor('#edit2', {
              
              fileUploadURL: '/UploadFiles',
              
              fileUploadParams: {
              id: 'my_editor'
              }
              })
              </script>
          </div>
        </div>

        <div class="form-group">
            <label>Brochure</label>
            <br>
                  <div class="col-12 col-md-9"><input type="file" id="img" name="brochure" class="form-control-file"></div>
                  <small class="form-text text-success">Only if you want to update the current Brochure</small>
          </div>
        
        <button type="submit" class="btn btn-primary mr-2">Send</button>
      </form>
    </div>
  </div>
</div>

@endsection