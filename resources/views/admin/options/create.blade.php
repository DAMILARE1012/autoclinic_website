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
        <h4 class="card-title">Add Options</h4>
        <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>

        <form action="{{ route('admin.store.option') }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Program</label>
            <select name="program_id" id="program_id" class="form-control" required>
                <option value="">Select a Program</option>
                @foreach($programs as $program)
                    <option value="{{ $program->id }}">{{ $program->name }}</option>
                @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Option Title</label>
            <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Title" required>
          </div>

          <label for="exampleInputName1 px-1">Introduction</label>
            
              <textarea id="tiny01" name="introduction">
                {{ old('introduction') }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny01'
                });
              </script>

              <label class="py-1" for="exampleInputName1">Requirements</label>
            
              <textarea id="tiny02" name="requirements">
                {{ old('requirements') }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny02'
                });
              </script>

              <label class="py-1" for="exampleInputName1">Eligibility</label>
              <textarea id="tiny03" name="eligibility">
                {{ old('eligibility') }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny03'
                });
              </script>

              <label class="py-1" for="exampleInputName1">Course Content</label>
              <textarea id="tiny04" name="course_content">
                {{ old('course_content') }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny04'
                });
              </script>

              <label class="py-1" for="exampleInputName1">Expected Outcomes</label>
              <textarea id="tiny05" name="expected_outcomes">
                {{ old('expected_outcomes') }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny05'
                });
              </script>

              <label class="py-1" for="exampleInputName1">Routine</label>
              <textarea id="tiny06" name="routine">
                {{ old('routine') }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny06'
                });
              </script>

              <label class="py-1" for="exampleInputName1">Cost</label>
              <textarea id="tiny07" name="cost">
                {{ old('cost') }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny07'
                });
              </script>

              <label class="py-1" for="exampleInputName1">Duration</label>
              <textarea class="pt-1" id="tiny08" name="duration">
                {{ old('duration') }}
              </textarea>
              <script>
                tinymce.init({
                  selector: 'textarea#tiny08'
                });
              </script>
          
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
</div>

@endsection