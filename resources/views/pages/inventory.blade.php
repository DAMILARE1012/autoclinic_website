@extends('master')

@section('title', '| Inventory')

@section('content')
<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay" style="background-image:url('img/inventory.jpg')">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Inventory</h2>
							<ul class="bread-list">
								<li><a href="{{ route('home') }}">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Inventory</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->

        <section class="courses section">
        <div class="container">
            <div class="single-head">
                <div class="row">
                    @if($inventory->count() > 0)
                    @foreach($inventory as $row)
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Course -->
                        
                        <div class="single-course wow fadeInUp" data-wow-delay=".2s">
                            <div class="course-image">
                                <img src="{{ asset('img/inventoryz/'.$row->img) }}"
                                        alt="#">
                                <p class="price">₦{{ $row->price }}</p>
                            </div>
                            <div class="content">
                                <h3><a href="javascript:void(0)" style="pointer-events:note">{{ $row->name }}</a></h3>
                                <p>{!! $row->description !!}</p>
                            </div>
                           
                        </div>
                        
                        <!-- End Single Course -->
                    </div>
                   @endforeach
                            @else
                                <div class="section-title">
                                    <h1 style="color: red">Inventory Coming Soon!!!</h1> 
                                    
                                </div>
                            @endif
                </div>
            </div>
        </div>
    </section>
@endsection
