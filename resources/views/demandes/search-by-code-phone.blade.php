@extends('layouts.app')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/balandeJ.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 text-center mb-5">
                    <p class="breadcrumbs">
                        <span class="me-2">
                            <a href="{{ route('home') }}">
                                Accueil 
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </span> 
                        <span>
                            <a href="{{ route('demandes') }}">
                                Vos Démarches
                            </a> 
                            <i class="fa fa-chevron-right"></i>
                        </span>
                    </p>
                    <h1 class="mb-0 bread">Rechercher Vos Démarches</h1>
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
                <div class="col-lg-12 sidebar pl-md-4">
                    {{-- <div class="sidebar-box bg-light rounded"> --}}
                        <div class="mb-5">
                            <h2>Votre temps étant précieux, il vous est possible de suivre votre requête sans vous déplacer. Vous pouvez donc accéder à votre dossier et d’obtenir des informations sur l’état d’avancement de celui-ci. </h2>
                        </div>
                        <form method="POST" action="{{ route('seach.code.role') }}" class="search-form">
                            @csrf
                            <h2>Suivre un dossier</h2>
                            <div class="form-group">
                                <label for="code">Code de la requête</label>
                                <input type="text" id="code" name="role" placeholder="Entrez le code du litige"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Numéro de téléphone</label>
                                <input type="text" id="phone" name="phone"
                                    placeholder="Entrez votre numéro de téléphone" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Rechercher</button>
                        </form>
                    {{-- </div> --}}
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
