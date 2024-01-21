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
            <h4 class="card-title">Edit Service</h4>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>

            <form action="{{ route('admin.update.service', ['id' => $service->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputName1" value="{{ $service->title }}" required>
                    
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Home Description</label>
                    
                        <textarea id="tiny" name="home_description">
                            {{ $service->home_description }}
                        </textarea>
                        <script>
                            tinymce.init({
                              selector: 'textarea#tiny'
                            });
                          </script>

                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Description</label>
                    
                        <textarea id="tiny2" name="description">
                            {{ $service->description }}
                        </textarea>
                        <script>
                            tinymce.init({
                              selector: 'textarea#tiny2'
                            });
                          </script>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>first Image upload</label>
                            <br>
                            <div class="col-12 col-md-9"><input type="file" id="img1" name="img1" class="form-control-file"></div>
                            <small class="form-text text-success">Only if you want to update the current Image</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('img/services/'.$service->img1) }}" style="height: 100px; width: 240px" class="img-fluid">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>second Image upload</label>
                            <br>
                            <div class="col-12 col-md-9"><input type="file" id="img2" name="img2" class="form-control-file"></div>
                            <small class="form-text text-success">Only if you want to update the current Image</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('img/services/'.$service->img2) }}" style="height: 100px; width: 240px" class="img-fluid">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection