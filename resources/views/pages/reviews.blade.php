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

    <!-- Single News -->
    <section id="repairs" class="news-single section">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h6> ...with NGS state-of-the-art facilities, modern day equipment, and a team of highly skilled
                        technicians that truly enjoy their work, we are always proud of NGS exceptional services in the
                        following areas:</h6>
                </div>
                <div class="col-md-8" id="review">
                    <div class="supaviews">
                        <div class="supaviews__gradient"></div>
                        <div class="supaviews__add">
                            <div class="supaview">
                                <h1 class="supaview__title" style="text-align: center; color: black; margin-bottom: 10px;">Add a new review</h1>
                                <form id="review" method="POST" action="route({{  }})">
                                    @csrf
                                    <fieldset class="supaview__rating">
                                        <input type="radio" id="star5" name="rate" value="5" /><label for="star5"></label>
                                        <input type="radio" id="star4" name="rate" value="4" /><label for="star4"></label>
                                        <input type="radio" id="star3" name="rate" value="3" /><label for="star3"></label>
                                        <input type="radio" id="star2" name="rate" value="2" /><label for="star2"></label>
                                        <input type="radio" id="star1" name="rate" value="1" /><label for="star1"></label>
                                    </fieldset>
                                    <div class="supaview__copy">
                                        <input type="text" name="name" placeholder="Name"/>
                                        <input type="email" name="email" placeholder="Email Address"/>
                                        <textarea name="message" placeholder="Message" rows="5"></textarea>
                                    </div>
                                    <button class="supaview__submit">Submit review</button>
                                </form>
                            </div>
                        </div>
                        <div class="supaviews__list">
                            <div class="supaview" style="color: black;">Looks empty around here..</div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--/ End Single News -->
@endsection

{{-- <form>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="email">Email Address:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter Email Address">
      </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="message">Ratings</label>
        <textarea class="form-control" id="message" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> --}}