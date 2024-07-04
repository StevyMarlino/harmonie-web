<!DOCTYPE html>
<html lang="en">

<head>
    <title> {{ setting('site.title') . ' | ' . $title }} </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ setting('site.description') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Conseil d'Etat Gabon">
    <meta name="keywords" content="Conseil d'Etat Gabon.">

    <link rel="shortcut icon" type="image/x-icon" href="{{ Voyager::image(setting('site.logo')) }}" />
    <link rel="stylesheet" href="{{ URL::asset('build/assets/app-DLwTvEU5.css') }}">   
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    {{-- @vite(['resources/css/app.css']) --}}

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>

<body>
    <div class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex align-items-center mb-2 mb-md-0">
                    <div class="con">
                        <p class="mb-0"><span class="fa fa-phone"></span> Nous joindre: {{ setting('site.join') }}</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center mb-2 mb-md-0">
                    <div class="con">
                        <p class="mb-0"><span class="fa fa-map-o"></span> Location: {{ setting('site.location') }}
                        </p>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-start justify-content-md-end align-items-center">
                    <p class="ftco-social d-flex">
                        <a href="{{ setting('site.twitter') }}"
                            class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-twitter"></span></a>
                        <a href="{{ setting('site.facebook') }}"
                            class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-facebook"></span></a>
                        <a href="{{ setting('site.google') }}"
                            class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-google"></span></a>
                        <a href="{{ setting('site.instagram') }}"
                            class="d-flex align-items-center justify-content-center"><span
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

    <script>
        @if (session()->has('message'))
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "showDuration": "1000",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (session()->has('erreur'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "showDuration": "1000",
            }
            toastr.error("{{ session('message') }}");
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                @if (session('error'))
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "positionClass": "toast-bottom-right",
                        "showDuration": "1000",
                    }
                    toastr.error($error);
                @endif
            @endforeach
        @endif
    </script>

</body>


</html>
