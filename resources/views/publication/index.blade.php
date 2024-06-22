@extends('layouts.app')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/balandeJ.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 text-center mb-5">
                    <p class="breadcrumbs"><span class="me-2"><a href="{{ route('home') }}">Accueil <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Publications <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Publications</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row g-lg-5">
                <div class="col-lg-8">
                    <div class="row justify-content-center">
                        @foreach ($posts as $post)
                            <div class="col-md-12">
                                <div class="blog-entry d-flex justify-content-end" data-aos="fade-up"
                                    data-aos-duration="1000" data-aos-delay="100">
                                    <a href="{{ route('publication-details', $post->slug) }}" class="block-20 img"
                                        style="background-image: url({{ asset(Voyager::image($post->image)) }});">
                                    </a>
                                    <div class="text">
                                        <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                                    class="fa fa-calendar me-1"></i>{{ $post->created_at->isoFormat('DD, MMMM. Y') }}</span>
                                            <span></span>
                                        </p>
                                        <h3 class="heading mb-3"><a href="{{ route('publication-details', $post->slug) }}">
                                                {{ $post->title }} </a></h3>
                                        <p> {{ $post->excerpt }} </p>
                                        <a href="{{ route('publication-details', $post->slug) }}"
                                            class="btn-custom d-flex align-items-center justify-content-center"><span
                                                class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 sidebar pl-md-4">
                    <div class="sidebar-box bg-light rounded">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>

                    <div class="sidebar-box">
                        <h3>Publications récente</h3>
                        @foreach ($publications as $publication)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img me-4"
                                    style="background-image: url({{ asset(Voyager::image($publication->image)) }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="{{ route('publication-details', $publication->slug) }}"> {{ $publication->title }} </a></h3>
                                    <div class="meta">
                                        <div><a href="{{ route('publication-details', $publication->slug) }}"><span
                                                    class="fa fa-calendar"></span>
                                                {{ $publication->created_at->isoFormat('MMMM DD, Y') }}</a></div>
                                        <div><a href="{{ route('publication-details', $publication->slug) }}"><span
                                                    class="fa fa-user"></span>
                                                Admin</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="sidebar-box">
                        <h3>Tag</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">justice</a>
                            <a href="#" class="tag-cloud-link">gabon</a>
                            <a href="#" class="tag-cloud-link">conseil</a>
                            <a href="#" class="tag-cloud-link">état</a>
                            <a href="#" class="tag-cloud-link">juge</a>
                            <a href="#" class="tag-cloud-link">accusé</a>
                            <a href="#" class="tag-cloud-link">défendeur</a>
                            <a href="#" class="tag-cloud-link">plaignant</a>
                            <a href="#" class="tag-cloud-link">avocat</a>
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
                                <h1 class="mb-md-0 mb-4">Looking for business
                                    opportunity?</h1>
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
