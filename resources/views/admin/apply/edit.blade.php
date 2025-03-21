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
      <h4 class="card-title">Program's Application</h4>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

      <form action="{{ route('admin.apply.update', ['id' => $apply->id]) }}" method="POST" class="forms-sample" >
        @csrf
        <div class="form-group">
            <label for="exampleInputName1">Registration Procedure</label>

            <textarea id="tiny3" name="procedure">
              {{$apply->procedure}}
            </textarea>

            <script>
              tinymce.init({
                selector: 'textarea#tiny3'
              });
            </script>
        </div>
        <div class="form-group">
            <label for="exampleInputName1">Link</label>
            <input type="text" class="form-control" name="link" value="{{ $apply->link }}" id="exampleInputName1" required>
        </div>
        <button type="submit" class="btn btn-primary mr-2">Send</button>
      </form>
    </div>
  </div>
</div>

@endsection