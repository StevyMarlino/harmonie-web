<nav class="navbar navbar-expand-lg ftco-navbar-light">
    <div class="container-xl">
        <a class="navbar-brand" href="{{ route('home') }}">
            Conseil<small> d'état.</small>
            <span>Libreville &amp; Gabon</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('home') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Qui sommes-nous?
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Mot du PP</a></li>
                        <li><a class="dropdown-item" href="#">Missions</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="about.html">Nos Décisions</a></li>
                <li class="nav-item"><a class="nav-link" href="work.html">Vos Demandes/Démarches</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('publications') || request()->routeIs('publication-details') ? 'active' : '' }}" href="{{ route('publications') }}">Publications</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
