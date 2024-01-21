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
                    
                        <textarea id="tiny" name="title">
                            {{ $training_hub->title }}
                        </textarea>
                        <script>
                            tinymce.init({
                              selector: 'textarea#tiny'
                            });
                          </script>
                        
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Background</label>
                    
                        <textarea id="tiny2" name="training_hub">
                            {{ $training_hub->training_hub }}
                        </textarea>
                        <script>
                            tinymce.init({
                              selector: 'textarea#tiny2'
                            });
                          </script>
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Facilities</label>
                    
                        <textarea id="tiny3" name="facilities">
                            {{ $training_hub->facilities }}
                        </textarea>
                        
                        <script>
                            tinymce.init({
                              selector: 'textarea#tiny3'
                            });
                          </script>
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Expectations</label>
                   
                        <textarea id="tiny4" name="expectations">
                            {{ $training_hub->expectations }}
                        </textarea>
            
                        <script>
                            tinymce.init({
                              selector: 'textarea#tiny4'
                            });
                          </script>
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