@extends('master')

@section('title', '| Contact NGS')
     
@section('content')
    <!-- Breadcrumbs -->
		<div class="breadcrumbs overlay" style="background-image:url('img/contact.jpg')">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Contact</h2>
							<ul class="bread-list">
								<li><a href="{{ route('home') }} ">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Contact</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div class="inner">
					<div class="row"> 
						<div class="col-lg-6">
							<div class="contact-us-left">
								<!--Start Google-map -->
								<div class="mapouter"><div class="gmap_canvas"><iframe width="549" height="515" id="gmap_canvas" src="https://maps.google.com/maps?q=NGS%20Auto%20Clinic%20Centre,%20Abuja&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://yggtorrent-fr.com"></a><br><style>.mapouter{position:relative;text-align:right;height:515px;width:549px;}</style><a href="https://google-map-generator.com"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:515px;width:549px;}</style></div></div>
								</div>
								<!--/End Google-map -->
						</div>
						<div class="col-lg-6 col-offset-3">
							<div class="contact-us-form">
								<h2>Book an Appointment</h2>
								<!-- Form -->
								@foreach ($errors->all() as $error)
					            	<li>{{ $error }}</li>
					            @endforeach
					            @if(session('info'))
	                            <div class="alert alert-success">
	                            {{ session('info') }}
	                            </div>
	                            @endif
								<form class="form" method="post" action="{{ route('sendmail') }}">
									@csrf
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="subject" placeholder="Appointment Date" value="{{ old('subject') }}" required>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" rows="6" cols="70" placeholder="Reason for Request">{{ old('message') }}</textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group login-btn">
												<button class="btn" type="submit">Send</button>
											</div>
											
										</div>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="row">
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>+234 703 711 0944</h3><p>
									<h3> <a href="https://wa.me/message/ZFHWKAVH4HMIP1" target="_blank">WhatsApp Us</a> </h3></p>
									<p> <a href="mailto:info@ngsautoclinic.com.ng">info@ngsautoclinic.com.ng</a> </p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont-google-map"></i>
								<div class="content">
									<p> <a href="https://goo.gl/maps/DNXrSC9rUMTzHQLf6" target="_blank">Plot CP-129A, ONEX Along Dei-Dei Zuba Road by Dantata Junction Abuja, Nigeria</a> </p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-wall-clock"></i>
								<div class="content">
									<p>Mon - Sat: 8am - 6pm</p>
									<p>Sunday 12am - 5pm</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->
@endsection