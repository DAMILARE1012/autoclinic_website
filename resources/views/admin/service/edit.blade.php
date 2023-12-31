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
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
                    <div class="sample">
                        <textarea id="edit" name="title">
                            {{ $service->title }}
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
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Home Description</label>
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
                    <div class="sample">
                   
                        <textarea id="edit2" name="home_description">
                            {{ $service->home_description }}
                        </textarea>
            
                        <script>
                            new FroalaEditor('#edit2', {
                        
                            fileUploadURL: '/UploadFiles',
                        
                            fileUploadParams: {
                            id: 'my_editor'
                            }
                            })
                        </script>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Description</label>
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
                    <div class="sample">
                        <textarea id="edit3" name="description">
                            {{ $service->description }}
                        </textarea>
            
                        <script>
                            new FroalaEditor('#edit3', {
                            
                            fileUploadURL: '/UploadFiles',
                            
                            fileUploadParams: {
                            id: 'my_editor'
                            }
                            })
                        </script>
                    </div>
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