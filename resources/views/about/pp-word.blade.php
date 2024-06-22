@extends('layouts.app')
@section('content')
    <section class="hero-wrap hero-wrap-2 mb-2" style="background-image: url({{ asset('images/justice.webp') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 text-center mb-5">
                    <p class="breadcrumbs"><span class="me-2"><a href="{{ route('home') }}">Acceuil <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Mot du premier président
                            <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Mot du premier président</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-xl">
            <div class="row g-lg-5">
                <div class="col-lg-6 d-flex align-items-stretch mb-2" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="img w-100" style="background-image: url({{ asset(Voyager::image($mot->image)) }});">
                    </div>
                </div>
                <div class="col-lg-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="mt-0 my-lg-5 py-5">
                        <span class="subheading"> {{ $mot->name }} </span>
                        <p>
                            {!! $mot->body !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
