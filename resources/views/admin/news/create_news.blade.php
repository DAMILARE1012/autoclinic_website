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
      <h4 class="card-title">Add News</h4>
      <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>

      <form action="{{ route('store.news') }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Title</label>
          <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Title" required>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Author</label>
          <input type="text" class="form-control" name="author" id="exampleInputName1" placeholder="Author" required>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">News</label>
          <textarea name="news" id="editor1" rows="10" cols="80">
            {{ old('news') }}
        </textarea>
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
        </div>
        <div class="form-group">
          <label>Image upload</label>
          <br>
                <div class="col-12 col-md-9"><input type="file" id="img" name="img" class="form-control-file" required></div>
            </div>

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection