@extends('layouts.app')
@section('content')
    <section class="slider-hero">
        <div class="overlay"></div>
        <div class="hero-slider">
            @foreach ($slides as $slide)
                <div class="item">
                    <div class="work">
                        <div class="img img2 d-flex align-items-center js-fullheight"
                            style="background-image: url({{ asset(Voyager::image($slide->image)) }});">
                            <div class="container-xl">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-7">
                                        <div class="text text-center mt-lg-5">
                                            <h1 class="mb-4">{{ $slide->title }}</h1>
                                            <p class="mb-4">{{ $slide->excerpt }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="ftco-section">
        <div class="container-xl">
            <div class="row g-lg-5">
                <div class="col-lg-6 order-lg-last heading-section d-flex align-items-center" data-aos="fade-up"
                    data-aos-delay="200" data-aos-duration="1000">
                    <div class="mt-0 my-lg-5 py-5">
                        <span class="subheading">About Union Corporation</span>
                        <h2 class="mb-4">More than 40M+ Trusted Our Financial &amp; Conusultation Institution</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p class="mt-4"><a href="#" class="btn btn-primary py-3 px-4">Learn More</a></p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch services-wrap">
                            <div class="services">
                                <div class="icon"><span class="flaticon-accountant"></span></div>
                                <div class="text">
                                    <h2>Professional Consultants</h2>
                                    <p class="mb-0">Far far away, behind the word mountains, far from the countries
                                        Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch services-wrap">
                            <div class="services active">
                                <div class="icon"><span class="flaticon-research"></span></div>
                                <div class="text">
                                    <h2>Comprehensive Services</h2>
                                    <p class="mb-0">Far far away, behind the word mountains, far from the countries
                                        Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch services-wrap">
                            <div class="services">
                                <div class="icon"><span class="flaticon-recession"></span></div>
                                <div class="text">
                                    <h2>A Culture that Delivers</h2>
                                    <p class="mb-0">Far far away, behind the word mountains, far from the countries
                                        Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch services-wrap">
                            <div class="services">
                                <div class="icon"><span class="flaticon-money"></span></div>
                                <div class="text">
                                    <h2>Industry Experience</h2>
                                    <p class="mb-0">Far far away, behind the word mountains, far from the countries
                                        Vokalia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-image img" style="background-image: url(images/bg_4.jpg);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">About Union Corporation</span>
                    <h2 class="mb-4">Quality Makes the Belief for Customers</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                    <a href="https://www.youtube.com/watch?v=9ZZ7pq331Dc" class="d-flex glightbox pt-4 align-items-center">
                        <div class="icon">
                            <span class="fa fa-play"></span>
                        </div>
                        <div class="text ps-4">
                            <span>Watch Video</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Services</span>
                    <h2 class="mb-4">Our Exclusive Services We Offer For You</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="flow-wrap flow-wrap-right">
                        <div class="icon">
                            <span class="flaticon-accounting"></span>
                        </div>
                        <div class="text">
                            <h2>Financial Planning</h2>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="flow-wrap">
                        <div class="icon">
                            <span class="flaticon-financial"></span>
                        </div>
                        <div class="text">
                            <h2>Investments Management</h2>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="flow-wrap">
                        <div class="icon">
                            <span class="flaticon-recession"></span>
                        </div>
                        <div class="text">
                            <h2>Business Loan</h2>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="flow-wrap">
                        <div class="icon">
                            <span class="flaticon-tax"></span>
                        </div>
                        <div class="text">
                            <h2>Taxes Consulting</h2>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="flow-wrap">
                        <div class="icon">
                            <span class="flaticon-insurance"></span>
                        </div>
                        <div class="text">
                            <h2>Insurance Consulting</h2>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="flow-wrap">
                        <div class="icon">
                            <span class="flaticon-retirement-plan"></span>
                        </div>
                        <div class="text">
                            <h2>Retirement Planning</h2>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="flow-wrap">
                        <div class="icon">
                            <span class="flaticon-risk"></span>
                        </div>
                        <div class="text">
                            <h2>Risk Management</h2>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="flow-wrap">
                        <div class="icon">
                            <span class="flaticon-technology"></span>
                        </div>
                        <div class="text">
                            <h2>Technology Consulting</h2>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-gallery ftco-no-pb ftco-section">
        <div class="container-xl-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Case Studies</span>
                    <h2 class="mb-4">We Take Every Case Studies Very Seriously</h2>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <a href="images/gallery-1.jpg"
                        class="gallery-wrap img d-flex align-items-end justify-content-center glightbox"
                        style="background-image: url(images/gallery-1.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-search"></span></div>
                        <div class="text">
                            <h2 class="mb-0">Business Finance Consulting</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <a href="images/gallery-1.jpg"
                        class="gallery-wrap img d-flex align-items-end justify-content-center glightbox"
                        style="background-image: url(images/gallery-2.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-search"></span></div>
                        <div class="text">
                            <h2 class="mb-0">Business Finance Consulting</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <a href="images/gallery-3.jpg"
                        class="gallery-wrap img d-flex align-items-end justify-content-center glightbox"
                        style="background-image: url(images/gallery-3.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-search"></span></div>
                        <div class="text">
                            <h2 class="mb-0">Business Finance Consulting</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <a href="images/gallery-4.jpg"
                        class="gallery-wrap img d-flex align-items-end justify-content-center glightbox"
                        style="background-image: url(images/gallery-4.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-search"></span></div>
                        <div class="text">
                            <h2 class="mb-0">Business Finance Consulting</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section-counter img" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 heading-section heading-section-white text-center mb-5" data-aos="fade-up"
                    data-aos-duration="1000">
                    <span class="subheading">Great Reviews for our services</span>
                    <h2 class="mb-0">Technical Statistics</h2>
                </div>
            </div>
            <div class="row section-counter">
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <h2 class="number"><span class="countup">60</span></h2>
                        <span class="caption">Year of Experienced</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <h2 class="number"><span class="countup">9200</span></h2>
                        <span class="caption">Satisfied Customers </span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <h2 class="number"><span class="countup">5800</span></h2>
                        <span class="caption">Project Completed</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2 class="number"><span class="countup">100</span></h2>
                        <span class="caption">Get Awards</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-lg-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Meet Our Brilliant Minds</span>
                    <h2 class="mb-5">Our Leadership Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/staff-1.jpg);">
                            </div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Jason Smith</h3>
                            <span class="position mb-2">President &amp; CEO</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/staff-2.jpg);">
                            </div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Jeffrey Rockenson</h3>
                            <span class="position mb-2">Executive Vice President</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/staff-3.jpg);">
                            </div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Jason Smith</h3>
                            <span class="position mb-2">General Manager</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/staff-4.jpg);">
                            </div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Jason Smith</h3>
                            <span class="position mb-2">Strategic Consultant</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/staff-5.jpg);">
                            </div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Jason Smith</h3>
                            <span class="position mb-2">President &amp; CEO</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/staff-6.jpg);">
                            </div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Jeffrey Rockenson</h3>
                            <span class="position mb-2">Executive Vice President</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/staff-7.jpg);">
                            </div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Jason Smith</h3>
                            <span class="position mb-2">General Manager</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/staff-8.jpg);">
                            </div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Jason Smith</h3>
                            <span class="position mb-2">Strategic Consultant</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center pb-4">
                <div class="col-lg-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-5">Happy Customers</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-testimony">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                        </div>
                                        <div class="ps-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
                                        <div class="ps-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                        </div>
                                        <div class="ps-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_4.jpg)">
                                        </div>
                                        <div class="ps-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
                                        <div class="ps-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container-xl">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Our Blog</span>
                    <h2>Recent From Blog</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                        class="fa fa-calendar me-1"></i>Jan. 27, 2021</span> <span><a href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Incorporation is A Big Milestone for Your
                                    Business</a></h3>
                            <p>A small river named Duden flows by their place.</p>
                            <a href="blog.html" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="fa fa-link"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                        class="fa fa-calendar me-1"></i>Jan. 27, 2021</span> <span><a href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Incorporation is A Big Milestone for Your
                                    Business</a></h3>
                            <p>A small river named Duden flows by their place.</p>
                            <a href="blog.html" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="fa fa-link"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                        class="fa fa-calendar me-1"></i>Jan. 27, 2021</span> <span><a href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Incorporation is A Big Milestone for Your
                                    Business</a></h3>
                            <p>A small river named Duden flows by their place.</p>
                            <a href="blog.html" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="fa fa-link"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_4.jpg');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                        class="fa fa-calendar me-1"></i>Jan. 27, 2021</span> <span><a href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Incorporation is A Big Milestone for Your
                                    Business</a></h3>
                            <p>A small river named Duden flows by their place.</p>
                            <a href="blog.html" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="fa fa-link"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-intro-2 img" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-10">
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-md-8 d-flex align-items-center">
                            <div>
                                <span class="subheading">Prepare for takeoff</span>
                                <h1 class="mb-md-0 mb-4">Looking for business opportunity?</h1>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center">
                            <p class="mb-0"><a href="#" class="btn btn-white py-md-4 py-3 px-md-5 px-4">Get
                                    Started</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
