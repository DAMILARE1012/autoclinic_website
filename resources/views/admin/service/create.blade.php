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
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
            <div class="sample">
                <textarea id="title" name="title">
                {{ old('title') }}
                </textarea>

                <script>
                    new FroalaEditor('#title', {
                    
                    fileUploadURL: '/UploadFiles',
                    
                    fileUploadParams: {
                    id: 'my_editor'
                    }
                    })
                </script>
            </div>

            <label for="exampleInputName1">Home Description</label>        
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
            <div class="sample">
                <textarea id="home" name="home_description">
                {{ old('home_description') }}
                </textarea>

                <script>
                    new FroalaEditor('#home', {
                    
                    fileUploadURL: '/UploadFiles',
                    
                    fileUploadParams: {
                    id: 'my_editor'
                    }
                    })
                </script>
            </div>

            <label for="exampleInputName1">Description</label>        
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
            <div class="sample">
                <textarea id="desc" name="description">
                {{ old('description') }}
                </textarea>

                <script>
                    new FroalaEditor('#desc', {
                    
                    fileUploadURL: '/UploadFiles',
                    
                    fileUploadParams: {
                    id: 'my_editor'
                    }
                    })
                </script>
            </div>
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

        <a href="{{ URL:: previous() }}" style="padding-left: 20px;"><button type="submit" class="btn btn-secondary mr-2">Back</button></a>
      </form>
    </div>
  </div>
</div>

@endsection