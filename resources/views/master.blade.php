<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('partials._head')
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Get Pro Button -->
    <ul class="pro-features">
        <a class="get-pro" href="#">Contact Us</a>
        <li>Hi there!</li>
        <li>How can we help you ?</li>
        <div class="button">
            <a href="{{ route('contact') }}" target="_blank" class="btn">Request an appointment ?</a>
            <a href="{{ route('contact') }}" target="_blank" class="btn">Contact the shop ?</a>
            <a href="{{ route('home') }}#testimonials" class="btn">Read our reviews ?</a>
        </div>
    </ul>
    {{-- End of Get Pro Button --}}




    <!-- Header Area -->
    @include('partials._navbar')
    <!--End of  Header Area -->


    @yield('content')


    <!-- Footer Area -->
    @include('partials._footer')
    <!--/ End Footer Area -->

    @include('partials._javascript')
</body>

</html>
