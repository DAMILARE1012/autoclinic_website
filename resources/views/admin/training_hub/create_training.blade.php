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
        <h4 class="card-title">Add Training</h4>
        <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>

        <form action="{{ route('admin.store.training') }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Training Title</label>
            <input type="text" class="form-control" value="{{ old('title') }}" name="title" id="exampleInputName1" placeholder="Training Title" required>
            <label for="exampleInputName1">Training Requirements</label>
            <input type="text" class="form-control" value="{{ old('requirement') }}" name="requirement" id="exampleInputName1" placeholder="Training Requirements" required>
            <label for="exampleInputName1">Training Routine</label>
            <input type="text" value="{{ old('routine') }}" class="form-control" name="routine" id="exampleInputName1" placeholder="Training Routine" required>
            <label for="exampleInputName1">Training Description</label>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
            <div class="sample">
              <textarea id="description" name="description">
                {{ old('description') }}
              </textarea>

              <script>
                new FroalaEditor('#description', {
                
                fileUploadURL: '/UploadFiles',
                
                fileUploadParams: {
                id: 'my_editor'
                }
                })
              </script>
            </div>
            
            <label for="exampleInputName1">Who is the training for?</label>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
            <div class="sample">
              <textarea id="training_for" name="training_for">
                {{ old('training_for') }}
              </textarea>

              <script>
                new FroalaEditor('#training_for', {
                
                fileUploadURL: '/UploadFiles',
                
                fileUploadParams: {
                id: 'my_editor'
                }
                })
              </script>
            </div>
    
            <label for="exampleInputName1">Training Courses</label>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
            <div class="sample">
              <textarea id="edit" name="courses">
                {{ old('courses') }}
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
            
            <label>Training Eligibility</label>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
            <div class="sample">
              <textarea id="edit4" name="eligibility">
                {{ old('eligibility') }}
              </textarea>

              <script>
                new FroalaEditor('#edit4', {
                
                fileUploadURL: '/UploadFiles',
                
                fileUploadParams: {
                id: 'my_editor'
                }
                })
              </script>
            </div>
            <label for="exampleInputName1">Training Expected Outcome</label>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
            <div class="sample">
              <textarea id="edit5" name="expected_outcome">
                {{ old('expected_outcome') }}
              </textarea>

              <script>
                new FroalaEditor('#edit5', {
                
                fileUploadURL: '/UploadFiles',
                
                fileUploadParams: {
                id: 'my_editor'
                }
                })
              </script>
            </div>
            <div class="row">
              <div class="col-6">
                  <label>Flyer Image Upload</label>
                  <div class="col-12 col-md-9">
                    <input type="file" id="img" name="img" class="form-control-file" multiple  required>
                  </div>
                </div>
            
              <div class="col-6">
                <label for="exampleInputName1">Training Duration</label>
                <input type="text" class="form-control" name="duration" value="{{ old('duration') }}" id="exampleInputName1" placeholder="Training Duration" required>
              </div>
            </div>

            <div class="row">
              <div class="col-6">
                <label for="exampleInputName1">External Registration Link</label>
                <input type="text" class="form-control" value="{{ old('ext_reg') }}" name="ext_reg" id="exampleInputName1" placeholder="External Registration Link" required>
              </div>
            
              <div class="col-6">
                <label for="exampleInputName1">In-house Registration Link</label>
                <input type="text" class="form-control" value="{{ old('inhouse_reg') }}" name="inhouse_reg" id="exampleInputName1" placeholder="In-house Registration Link" required>
              </div>
            </div>

            <div class="row">
              <div class="col-6">
                <label for="exampleInputName1">Training Cost</label>
                <input type="text" class="form-control" value="{{ old('cost') }}" name="cost" id="exampleInputName1" placeholder="Training Cost" required>
              </div>
            
              <div class="col-6">
                <fieldset>
              
                  <label for="exampleInputName1">Training Status</label><br>
                  <input type="radio" id="red" name="status" value="1" checked>
                  <label for="On" style="margin-top:0;">ON</label><br>
                  <input type="radio" id="green" name="status" value="0">
                  <label for="off" style="margin-top:0;">OFF</label><br>
                  
                </fieldset>
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary mr-2">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection