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
                <div class="col-lg-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch services-wrap">
                            <div class="services active">
                                <div class="icon"><span class="flaticon-accountant"></span></div>
                                <div class="text">
                                    <h2>Total des visiteurs : {{ \App\Models\Visitor::distinct('ip')->count(); }} </h2>
                                    <p class="mb-0">Le nombre de visiteurs sur la page depuis le début du site</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch services-wrap">
                            <div class="services">
                                <div class="icon"><span class="flaticon-research"></span></div>
                                <div class="text">
                                    <h2>Total requêtes : {{$nombre_requete}}</h2>
                                    <p class="mb-0">Nombre de requêtes reçues depuis la création.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch services-wrap">
                            <div class="services">
                                <div class="icon"><span class="flaticon-recession"></span></div>
                                <div class="text">
                                    <h2>Nombre de décisions : {{$nombre_decisions}}</h2>
                                    <p class="mb-0">Nombre de décisions rendues.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch services-wrap">
                            <div class="services">
                                <div class="icon"><span class="flaticon-money"></span></div>
                                <div class="text">
                                    <h2>Nombre de requêtes : {{$nombre_requete_traitee}} </h2>
                                    <p class="mb-0">Nombre de requêtes traitées cette année.</p>
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
                    <span class="subheading">Nos Publications</span>
                    <h2>Publications récentes</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($posts as $post)
                    <div class="col-md-6 col-lg-3 d-flex">
                        <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="100">
                            <a href="{{ route('publication-details', $post->slug) }}" class="block-20 img"
                                style="background-image: url({{ asset(Voyager::image($post->image)) }});">
                            </a>
                            <div class="text">
                                <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                            class="fa fa-calendar me-1"></i>{{ $post->created_at->isoFormat('DD, MMMM. Y') }}</span>
                                    <span></span></p>
                                <h3 class="heading mb-3"><a href="#"> {{ $post->title }} </a></h3>
                                <p> {{ $post->excerpt }} </p>
                                <a href="{{ route('publication-details', $post->slug) }}"
                                    class="btn-custom d-flex align-items-center justify-content-center"><span
                                        class="fa fa-link"></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
