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
                                <label for="code">Code du litige</label>
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
                        {{-- <form method="POST" action="{{ route('demandes.demarches') }}">
                            @csrf
                            <div class="form-group">
                            <input class="form-control" name="signature" placeholder="Recherche ..." type="search">
                            <button class="btn" type="submit">
                                <span class="icon fa fa-search"></span>
                            </button>
                        </div>
                        </form> --}}
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
