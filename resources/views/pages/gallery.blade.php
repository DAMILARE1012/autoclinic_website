@extends('master')

@section('title', '| Gallery')

@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay" style="background-image:url('img/gallery.jpg')">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Gallery</h2>
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Single News -->
    <section id="repairs" class="news-single section">
        <div class="container">
            <div class="row">
                <!-- <div class="section-title">
                    <h6> ...with NGS state-of-the-art facilities, modern day equipment, and a team of highly skilled
                        technicians that truly enjoy their work, we are always proud of NGS exceptional services in the
                        following areas:</h6>
                </div> -->
                <div class="col-12">
                    <div class="row" id="img_gallery">
                        <div class="image_gallery" style="display: flex;">
                            @if($gallery->count() > 0)
                            @foreach($gallery as $row)
                            <a href="{{ asset('/img/galleryz/'.$row->img) }}" data-lightbox="mygallery" data-title="{{ $row->description }} "><img src="{{ asset('/img/galleryz/'.$row->img) }}" alt="image" style="max-height:300px; max-width:300px;"/> 
                            <p>{{ $row->description }}</p>
                            </a><br>
                            

                            @endforeach
                            @else
                                <h6 class="text-center text-danger">No Picture in Gallery</h6>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Single News -->
@endsection
