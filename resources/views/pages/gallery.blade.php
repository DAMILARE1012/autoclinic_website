@extends('master')

@section('title', '| Gallery')

@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
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
                <div class="section-title">
                    <h6> ...with NGS state-of-the-art facilities, modern day equipment, and a team of highly skilled
                        technicians that truly enjoy their work, we are always proud of NGS exceptional services in the
                        following areas:</h6>
                </div>
                <div class="col-12">
                    <div class="row" id="img_gallery">
                        <div class="image_gallery">
                            <a href="{{ asset('img/galleryz/gcr_1.jpg') }}" data-lightbox="mygallery" data-title="Image-1"><img src="{{ asset('img/galleryz/gcr_1.jpg') }}" alt="#"></a>
                            <a href="{{ asset('img/galleryz/gcr_1.jpg') }}" data-lightbox="mygallery" data-title="Image-2"><img src="{{ asset('img/galleryz/gcr_1.jpg') }}" alt="#"></a>
                            <a href="{{ asset('img/galleryz/gcr_1.jpg') }}" data-lightbox="mygallery" data-title="Image-3"><img src="{{ asset('img/galleryz/gcr_1.jpg') }}" alt="#"></a>
                            <a href="{{ asset('img/galleryz/gcr_1.jpg') }}" data-lightbox="mygallery" data-title="Image-4"><img src="{{ asset('img/galleryz/gcr_1.jpg') }}" alt="#"></a>
                            <a href="{{ asset('img/galleryz/gcr_1.jpg') }}" data-lightbox="mygallery" data-title="Image-5"><img src="{{ asset('img/galleryz/gcr_1.jpg') }}" alt="#"></a>
                            <a href="{{ asset('img/galleryz/gcr_1.jpg') }}" data-lightbox="mygallery" data-title="Image-6"><img src="{{ asset('img/galleryz/gcr_1.jpg') }}" alt="#"></a>
                            <a href="{{ asset('img/galleryz/gcr_1.jpg') }}" data-lightbox="mygallery" data-title="Image-6"><img src="{{ asset('img/galleryz/gcr_1.jpg') }}" alt="#"></a>

                            <a href="{{ asset('img/galleryz/gcr_1.jpg') }}" data-lightbox="mygallery" data-title="Image-6"><img src="{{ asset('img/galleryz/gcr_1.jpg') }}" alt="#"></a>

                            <a href="{{ asset('img/galleryz/gcr_1.jpg') }}" data-lightbox="mygallery" data-title="Image-6"><img src="{{ asset('img/galleryz/gcr_1.jpg') }}" alt="#"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Single News -->
@endsection
