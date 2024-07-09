@extends('layouts.app')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/balandeJ.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 text-center mb-5">
                    <p class="breadcrumbs"><span class="me-2"><a href="{{ route('home') }}">Accueil <i
                                    class="fa fa-chevron-right"></i></a></span> <span> <a href="{{ route('demandes') }}"> Vos Démarches </a><i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Vos Démarches</h1>
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
                    <div class="mb-5">
                        <h2>Votre temps étant précieux, il vous est possible de suivre votre requête sans vous déplacer. Vous pouvez donc accéder à votre dossier et d’obtenir des informations sur l’état d’avancement de celui-ci. </h2>
                    </div>
                    <form method="POST" action="{{ route('demandes.demarches') }}" class="search-form">
                        @csrf
                        <h2>Suivre un dossier</h2>
                        <label for="code" class="custum-label">Code de la requête</label>
                        <div class="form-group">
                            <input type="text" name="signature" class="form-control" placeholder="Suivre un dossier a partir d'une signature...">
                        </div>
                        <div class="custum-btn col-md-3 align-items-end form-group justify-content-center">
                            <button type="submit" class="btn custom-btn">Rechercher</button>
                        </div>
                    </form>
                    <div class="mt-3">
                        <strong>Code oublié ?</strong>
                        <a href="{{ route('code.role') }}">Autre méthode</a>
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
@endsection

<style>
    .custum-btn{
        position: relative !important;
        left: 40%;
        margin-top: 3% !important;
    }

    .custum-label {
        position: relative;
        left: 1%;
        margin-bottom: 1%;
    }
</style>