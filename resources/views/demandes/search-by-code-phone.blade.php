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
                                Vos demandes/Demarches
                            </a> 
                            <i class="fa fa-chevron-right"></i>
                        </span>
                    </p>
                    <h1 class="mb-0 bread">Rechercher Vos demandes/Demarches</h1>
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
                        <form method="POST" action="{{ route('seach.code.role') }}" class="search-form">
                            @csrf
                            <h2>Recherche d'un dossier</h2>
                            <div class="form-group">
                                <label for="code">Code du litige</label>
                                <input type="text" id="code" name="role" placeholder="Entrez le code du litige"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Numéro de téléphone</label>
                                <input type="text" id="phone" name="phone"
                                    placeholder="Entrez votre numéro de téléphone" required>
                            </div>
                            <button type="submit" class="btn">Rechercher</button>
                        </form>
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
    .btn-icon {
        background: none;
        border: none;
        padding: 0;
        cursor: pointer;
        display: inline-block;
    }

    .btn-icon .icon {
        font-size: 1.5em;
        /* Ajustez cette taille selon vos besoins */
        color: #333;
        /* Ajustez la couleur selon vos besoins */
    }

    .form-group {
        display: flex;
        align-items: center;
    }

    .form-control {
        flex: 1;
        margin-left: 10px;
        /* Ajustez l'espacement selon vos besoins */
    }

    .text-danger {
        color: red
    }

    .search-form h2 {
        margin-bottom: 20px;
        font-size: 24px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        font-size: 16px;
    }

    .form-group input:focus {
        border-color: #80bdff;
        outline: none;
    }

    .btn {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #0056b3;
    }
</style>
