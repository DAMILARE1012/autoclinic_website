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
          <textarea class="form-control" id="editor" name="description" rows="4" cols="50">
            {{ old('description') }}
          </textarea>
        
            <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
            </script>
          <label for="exampleInputName1">Who is the training for?</label>
          <textarea class="form-control" id="editor1" name="training_for" rows="4" cols="50">
            {{ old('training_for') }}
          </textarea>
      
        <script>
         ClassicEditor
             .create( document.querySelector( '#editor1' ) )
             .catch( error => {
                 console.error( error );
             } );
         </script>
          <label for="exampleInputName1">Training Courses</label>
          <textarea class="form-control" id="editor2" name="courses" rows="4" cols="50">
            {{ old('courses') }}
          </textarea>
        
        <script>
         ClassicEditor
             .create( document.querySelector( '#editor2' ) )
             .catch( error => {
                 console.error( error );
             } );
         </script>
          <label for="exampleInputName1">Training Outline</label>
          <textarea class="form-control" id="editor3" name="outline" rows="4" cols="50">
            {{ old('outline') }}
          </textarea>
       
        <script>
         ClassicEditor
             .create( document.querySelector( '#editor3' ) )
             .catch( error => {
                 console.error( error );
             } );
         </script>
          <label>Training Eligibility</label>
          <textarea class="form-control" name="eligibility" id="editor4" rows="4" cols="50">
            {{ old('eligibility') }}
       </textarea>
       <script>
        ClassicEditor
            .create( document.querySelector( '#editor4' ) )
            .catch( error => {
                console.error( error );
            } );
        </script>

          <label for="exampleInputName1">Training Expected Outcome</label>
          <textarea class="form-control" id="editor5" name="expected_outcome" rows="4" cols="50">
            {{ old('expected_outcome') }}
          </textarea>
     
        <script>
         ClassicEditor
             .create( document.querySelector( '#editor5' ) )
             .catch( error => {
                 console.error( error );
             } );
         </script>
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

        <a href="{{ URL:: previous() }}" style="padding-left: 20px;"><button type="submit" class="btn btn-secondary mr-2">Back</button></a>
      </form>
    </div>
  </div>
</div>

@endsection