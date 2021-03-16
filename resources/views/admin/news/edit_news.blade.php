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
      <h4 class="card-title">Edit News</h4>
      @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach

      <form action="{{ route('update.news', ['id' => $news->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Title</label>
          <input type="text" class="form-control" name="title" value="{{ $news->title }}" id="exampleInputName1" placeholder="Name" required>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Author</label>
          <input type="text" class="form-control" name="author" value="{{ $news->author }}" id="exampleInputName1" required>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">News</label>
          <textarea name="news" id="editor1" rows="10" cols="80">
            {{ $news->news }}
        </textarea>
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
        </div>

        <div class="form-group">
          <label>File upload</label>
          <br>
                <div class="col-12 col-md-9"><input type="file" id="img" name="img" class="form-control-file"></div>
                <small class="form-text text-success">Only if you want to update the current image</small>
            </div>

        
        <button type="submit" class="btn btn-primary mr-2">Send</button>
      </form>
    </div>
  </div>
</div>

@endsection