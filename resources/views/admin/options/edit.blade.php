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
        <h4 class="card-title">Edit Options</h4>
        <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>

        <form action="{{ route('admin.update.option', ['id' => $option->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
          @csrf
          <div class="form-group">
            <label>Program</label>
            <select name="program_id" id="program_id" class="form-control" required>
                <option value="{{ $option->program_id }}" selected>{{ $option->program->name }}</option>
                @foreach($programs as $program)
                    @if($program->id != $option->program_id)
                        <option value="{{ $program->id }}">{{ $program->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>

          <div class="form-group">
            <label for="exampleInputName1">Option Title</label>
            <input type="text" class="form-control" value="{{ $option->title }}" name="title" id="exampleInputName1" placeholder="Title" required>
          </div>

          <label for="exampleInputName1">Introduction</label>
            
              <textarea id="tiny01" name="introduction">
                {{ $option->introduction }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny01'
                });
              </script>

              <label for="exampleInputName1">Requirements</label>
            
              <textarea id="tiny02" name="requirements">
                {{ $option->requirements }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny02'
                });
              </script>

              <label for="exampleInputName1">Eligibility</label>
              <textarea id="tiny03" name="eligibility">
                {{ $option->eligibility }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny03'
                });
              </script>

              <label for="exampleInputName1">Course Content</label>
              <textarea id="tiny04" name="course_content">
                {{ $option->course_content }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny04'
                });
              </script>

              <label for="exampleInputName1">Expected Outcomes</label>
              <textarea id="tiny05" name="expected_outcomes">
                {{ $option->expected_outcomes }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny05'
                });
              </script>

              <label for="exampleInputName1">Routine</label>
              <textarea id="tiny06" name="routine">
                {{ $option->routine }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny06'
                });
              </script>

              <label for="exampleInputName1">Cost</label>
              <textarea id="tiny07" name="cost">
                {{ $option->cost }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny07'
                });
              </script>

              <label for="exampleInputName1">Duration</label>
              <textarea id="tiny08" name="duration">
                {{ $option->duration }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny08'
                });
              </script>
          
          <div class="form-group">
            <div class="row">
              <div class="col-6">
                <label>Image upload</label>
                <br>
                <div class="col-12 col-md-9"><input type="file" id="img" name="img" class="form-control-file"></div>
                <small class="form-text text-success">Only if you want to update the current Image</small>
              </div>
              <div class="col-6">
                <img src="{{ asset('img/options/'.$option->img) }}" style="height: 100px; width: 240px" alt="image" class="img-fluid">
              </div>
            </div>
            
          </div>
          <button type="submit" class="btn btn-primary mr-2">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection