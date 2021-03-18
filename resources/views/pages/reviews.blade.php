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
    <section id="testimonials" class="padd-section text-center" style="margin-bottom: 40px;">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                @if($review->count() > 0)
                        @foreach($review as $row)
                <div class="col-md-4">

                    <div class="testimonials-content">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <div class="top-top">

                                <fieldset class="supaview__rating">
                                        <input type="radio" id="star5" name="rate" value="5" / active><label for="star5"></label>
                                        <input type="radio" id="star4" name="rate" value="4" /><label for="star4"></label>
                                        <input type="radio" id="star3" name="rate" value="3" /><label for="star3"></label>
                                        <input type="radio" id="star2" name="rate" value="2" /><label for="star2"></label>
                                        <input type="radio" id="star1" name="rate" value="1" /><label for="star1"></label>
                                    </fieldset>
                                <p>{{ $row->message }}</p>
                                <h4>{{ $row->name }}<span>{{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</span></h4>

                                    </div>
                        
                        </div>
                    </div>
                </div>
                 @endforeach
                        @else
                        <h6 class="text-center text-danger">No Reviews!</h6>
                    @endif
                       
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Single News -->
    <section id="repairs" class="news-single section">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8" id="review">
                    <div class="supaviews">
                        <div class="supaviews__gradient"></div>
                        <div class="supaviews__add">
                            <div class="supaview">
                                <h1 class="supaview__title" style="text-align: center; color: black; margin-bottom: 10px;">Add Your review</h1>
                                @if(Session::has('success'))
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
                                        <input type="text" name="name" placeholder="Name"/ required>
                                        <input type="email" name="email" placeholder="Email Address"/ required>
                                        <textarea name="message" placeholder="Message" rows="5" required></textarea>
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