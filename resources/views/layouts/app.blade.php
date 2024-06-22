<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gabon site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @vite(['resources/css/app.css'])
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
    <nav class="navbar navbar-expand-lg  ftco-navbar-light">
        <div class="container-xl">
            <a class="navbar-brand" href="index-2.html">
                Conseil<small> d'état.</small>
                <span>Libreville &amp; Gabon</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="index-2.html"> Qui sommes-nous? </a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">Nos  Décisions</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li> --}}
                    <li class="nav-item"><a class="nav-link" href="work.html">Vos Demandes/Démarches</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li> --}}
                    <li class="nav-item"><a class="nav-link" href="blog.html">Publications</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="ftco-footer img" style="background-image: url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row mb-5 justify-content-between">
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 logo d-flex">
                            <a class="navbar-brand" href="index-2.html">
                                Union<small>corp.</small>
                                <span>Finance &amp; Consultation</span>
                            </a>
                        </h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                        <ul class="ftco-footer-social mt-4">
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <div class="d-md-flex">
                            <ul class="list-unstyled w-100">
                                <li><a href="#"><span
                                            class="ion ion-ios-arrow-round-forward me-2"></span>Financial Planning</a>
                                </li>
                                <li><a href="#"><span
                                            class="ion ion-ios-arrow-round-forward me-2"></span>Investments
                                        Management</a></li>
                                <li><a href="#"><span
                                            class="ion ion-ios-arrow-round-forward me-2"></span>Business Loan</a></li>
                                <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Taxes
                                        Consulting</a></li>
                            </ul>
                            <ul class="list-unstyled w-100">
                                <li><a href="#"><span
                                            class="ion ion-ios-arrow-round-forward me-2"></span>Insurance
                                        Consulting</a></li>
                                <li><a href="#"><span
                                            class="ion ion-ios-arrow-round-forward me-2"></span>Retirement Planning</a>
                                </li>
                                <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Risk
                                        Management</a></li>
                                <li><a href="#"><span
                                            class="ion ion-ios-arrow-round-forward me-2"></span>Technology
                                        Consulting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Recent Posts</h2>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img img rounded" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <div class="meta">
                                    <div><a href="#"><span class="fa fa-calendar"></span> Jan. 27, 2021</a>
                                    </div>
                                    <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                                </div>
                                <h3 class="heading"><a href="#">Incorporation is a big milestone for
                                        business</a></h3>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img img rounded" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <div class="meta">
                                    <div><a href="#"><span class="fa fa-calendar"></span> Jan. 27, 2021</a>
                                    </div>
                                    <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                                </div>
                                <h3 class="heading"><a href="#">Incorporation is a big milestone for
                                        business</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St.
                                        Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2
                                            392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                                            class="text"><span class="__cf_email__"
                                                data-cfemail="b2dbdcd4ddf2cbddc7c0d6dddfd3dbdc9cd1dddf">[email&#160;protected]</span></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 py-5 bg-darken">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mb-0" style="font-size: 14px;">Copyright &copy;
                            <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="fa fa-heart color-danger" aria-hidden="true"></i> by <a
                                href="https://colorlib.com/" target="_blank" rel="nofollow noopener">Colorlib</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>


</html>
