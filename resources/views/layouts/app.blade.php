<!DOCTYPE html>
<html lang="en">
<head>
    <title> {{ setting('site.title') . ' | ' . $title }} </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/app-BRNvwAmS.css') }}">   
    {{-- @vite(['resources/css/app.css']) --}}

</head>

<body>
    <div class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex align-items-center mb-2 mb-md-0">
                    <div class="con">
                        <p class="mb-0"><span class="fa fa-phone"></span> Nous joindre: +2 392 3929 210</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center mb-2 mb-md-0">
                    <div class="con">
                        <p class="mb-0"><span class="fa fa-map-o"></span> Location: Libreville, Gabon</p>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-start justify-content-md-end align-items-center">
                    <p class="ftco-social d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-twitter"></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-facebook"></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-google"></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-instagram"></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    @include('layouts.nav')

    @yield('content')
    
    @include('layouts.footer')

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.ftco-navbar-light');
            const topWrapHeight = document.querySelector('.top-wrap').offsetHeight;
    
            function stickyMenu() {
                if (window.scrollY > topWrapHeight) {
                    navbar.classList.add('sticky-menu');
                    document.body.classList.add('sticky-offset');
                } else {
                    navbar.classList.remove('sticky-menu');
                    document.body.classList.remove('sticky-offset');
                }
            }
            window.addEventListener('scroll', stickyMenu);
        });
    </script>
    
</body>


</html>
