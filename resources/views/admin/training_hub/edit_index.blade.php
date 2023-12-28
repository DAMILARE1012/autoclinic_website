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
            <h4 class="card-title">Edit Training Hub Index</h4>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>

            <form action="{{ route('admin.update.index', ['id' => $training_hub->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
                    <div class="sample">
                        <textarea id="edit" name="title">
                            {{ $training_hub->title }}
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
                    <label for="exampleInputName1">Background</label>
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
                    <div class="sample">
                   
                        <textarea id="edit2" name="training_hub">
                            {{ $training_hub->training_hub }}
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
                    <label for="exampleInputName1">Facilities</label>
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
                    <div class="sample">
                        <textarea id="edit3" name="facilities">
                            {{ $training_hub->facilities }}
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

                <div class="form-group">
                    <label for="exampleInputName1">Expectations</label>
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
                    <div class="sample">
                        
                        <textarea id="edit4" name="expectations">
                            {{ $training_hub->expectations }}
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
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Image upload</label>
                            <br>
                            <div class="col-12 col-md-9"><input type="file" id="img" name="img" class="form-control-file"></div>
                            <small class="form-text text-success">Only if you want to update the current Image</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('img/trainings/'.$training_hub->img) }}" style="height: 100px; width: 240px" class="img-fluid">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection