@extends('master')

@section('title', '| Customer Reviews')

@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Customer Reviews</h2>
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Customer Reviews</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <br>
    <br>
    @if($review->count() > 0)
    <section id="testimonials" class="padd-section text-center" style="margin-bottom: 40px;">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">

                <div class="col-md-8">

                    <div class="testimonials-content">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">

                                <div class="carousel-item  active">
                                    <div class="top-top">

                                        <h2><fieldset class="supaview__rating">
                                        @if($review_one->rate == 1)
                                        <i class="fa fa-star" style="color:#6ecb90;"></i>
                                        @elseif($review_one->rate == 2)
                                        <i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i>
                                        @elseif($review_one->rate == 3)
                                        <i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i>
                                        @elseif($review_one->rate == 4)
                                        <i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i>
                                        @elseif($review_one->rate == 5)
                                        <i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i>
                                        @endif
                                    </fieldset></h2>
                                        <p>{{ $review_one->message }} </p>
                                        <h4>{{ $review_one->name }}<span> {{ \Carbon\Carbon::parse($review_one->created_at)->diffForHumans() }} </span></h4>

                                    </div>
                                </div>

                                @foreach($review as $row)

                                <div class="carousel-item ">
                                    <div class="top-top">

                                        <h2><fieldset class="supaview__rating">
                                        @if($row->rate == 1)
                                        <i class="fa fa-star" style="color:#6ecb90;"></i>
                                        @elseif($row->rate == 2)
                                        <i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i>
                                        @elseif($row->rate == 3)
                                        <i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i>
                                        @elseif($row->rate == 4)
                                        <i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i>
                                        @elseif($row->rate == 5)
                                        <i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i><i class="fa fa-star" style="color:#6ecb90;"></i>
                                        @endif
                                    </fieldset></h2>
                                        <p>{{ $row->message }}</p>
                                        <h4>{{ $row->name }} <span> {{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</span></h4>

                                    </div>
                                </div>
                                @endforeach

                            </div>

                            <div class="btm-btm">

                                <ul class="list-unstyled carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    @foreach($review as $row)
                                    <li data-target="#carousel-example-generic" data-slide-to="{{ $row->id }}"></li>
                                    @endforeach
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --><!-- End Testimonials Section -->
    @else
        <h6 class="text-center text-danger">No Reviews</h6>
    @endif
    

    <!-- Single News -->
    <section id="repairs" class="news-single section">
        <div class="container">
            <div class="row">
                <div class="col-md-8" id="review">
                    <div class="col-12 supaviews">
                        <div class="supaviews__add">
                            <div class="supaview">
                                <h1 class="supaview__title" style="text-align: center; color: black; margin-bottom: 10px;">
                                    Add Your review</h1>
                                @if (Session::has('success'))
                                    <div class="alert  alert-success alert-dismissible fade show">
                                        <span class="badge badge-pill badge-success">Success</span>
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                <form id="review" method="POST" action=" {{ route('store.review') }} ">
                                    @csrf
                                    <fieldset class="supaview__rating">
                                        <input type="radio" id="star5" name="rate" value="5" /><label for="star5"></label>
                                        <input type="radio" id="star4" name="rate" value="4" /><label for="star4"></label>
                                        <input type="radio" id="star3" name="rate" value="3" /><label for="star3"></label>
                                        <input type="radio" id="star2" name="rate" value="2" /><label for="star2"></label>
                                        <input type="radio" id="star1" name="rate" value="1" /><label for="star1"></label>
                                    </fieldset>
                                    <div class="supaview__copy">
                                        <input type="text" name="name" placeholder="Name" / required>
                                        <input type="email" name="email" placeholder="Email Address" / required>
                                        <textarea name="message" placeholder="Message" rows="3" required></textarea>
                                    </div>
                                    <button class="supaview__submit">Submit review</button>
                                </form>
                            </div>
                        </div>

                        <div class="supaviews__list">
                            <div class="supaview" style="color: black;"></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/ End Single News -->
@endsection
