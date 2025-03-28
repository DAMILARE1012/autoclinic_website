<footer id="footer" class="footer ">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Our Social Media Handles</h2>
                        <p>You can also reach us on our social media handles</p>
                        <!-- Social -->
                        <ul class="social">
                            <li><a href="{{ $footerData->facebook }}"><i class="icofont-facebook"></i></a></li>
                            <li><a href="{{ $footerData->twitter }}" target="blank_"><i class="icofont-twitter"></i></a></li>
                            <li><a href="{{ $footerData->instagram }}" target="blank_"><i class="icofont-instagram"></i></a></li>
                        </ul>
                        <!-- End Social -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-footer f-link">
                        <h2>Quick Links</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href="{{ route('home') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
                                    <li><a href="{{ route('about') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
                                    <li><a href="{{ route('inventory') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>Inventory</a></li>
                                    <li><a href="{{ asset('/brochure/'.$aboutData->brochure) }}" target="_blank"><i class="fa fa-caret-right" aria-hidden="true"></i>Brochure</a></li>
                                    
                                    	
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href="{{ route('training') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Training Hub</a></li>
                                    <li><a href="{{ route('services') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Services</a></li>
                                    <li><a href="{{ route('contact') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>
                                    <li><a href="{{ $contactData->whatsapp_link }}" target="_blank"><i class="fa fa-caret-right" aria-hidden="true"></i>WhatsApp Us</a></li>
                                    
                                    	
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Open Hours</h2>
                        <p>{{ $footerData->footer }}</p>
                        <ul class="time-sidual">
                            <li class="day">Call Us <span>{{ $contactData->phone }}</span></li>
                            <li class="day">Monday - Saturday <span>{{ $contactData->mon_open }}</span></li>
                            @if($contactData->sun_status == 0)
                            <li class="day">Sunday <span>{{ $contactData->sun_open }}</span></li>
                            @else 
                            <li class="day">Sunday <span>Closed</span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        <p>© Copyright <script type="text/javascript">document.write( new Date().getFullYear() );</script> <strong> NGS autoclinic. </strong>All Rights Reserved. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->




{{-- <!-- Footer Area -->
<footer id="footer" class="footer ">
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
<!--/ End Footer Area --> --}}