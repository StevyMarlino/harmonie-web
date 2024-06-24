@extends('layouts.app')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/balandeJ.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 text-center mb-5">
                    <p class="breadcrumbs"><span class="me-2"><a href="{{ route('home') }}">Accueil <i
                                    class="fa fa-chevron-right"></i></a></span> <span> <a href="{{ route('demandes') }}"> Vos demandes/Demarches </a><i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Vos demandes/Demarches</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row g-lg-5">
                @if ($errors->any())
                    <div class="text-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-lg-6 sidebar pl-md-4">
                    <div class="sidebar-box bg-light rounded">
                        
                        <form method="POST" action="{{ route('demandes.demarches') }}" class="search-form">
                            @csrf
                            <h2>Recherche d'un dossier</h2>
                            <div class="form-group">
                                <label for="code">Code de la requête</label>
                                <input type="text" name="signature" class="form-control" placeholder="Search...">
                            </div>
                            
                            <button type="submit" class="btn">Rechercher</button>
                        </form>
                        <div>
                            <strong>Code oublié ?</strong>
                            <a href="{{ route('code.role') }}">
                                  Autre methode
                            </a>
                        </div>
                    </div>

                    {{-- <div class="sidebar-box">
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
                    </div> --}}
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
@endsection