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
      <h4 class="card-title">Edit Trainer/Student</h4>
      @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach

      <form action="{{ route('admin.update.trainer_student', ['id' => $trainer_student->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Title</label>
          <input type="text" class="form-control" name="title" value="{{ $trainer_student->title }}" id="exampleInputName1" required>
        </div>
        
        <label>Category</label>
        <div class="col-md-4">
            <select id = "type" class="form-control" name="who">
                <option value="{{ $trainer_student->who }}">{{ ($trainer_student->who == 0 ? 'Faculty Member': 'Students') }} </option>
                <option value = "{{ ($trainer_student->who == 0 ? '1': '0') }}">{{ ($trainer_student->who == 0 ? 'Students': 'Faculty Member') }}</option>
            </select>
        </div>
          <br>
          <br>
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

@endsection