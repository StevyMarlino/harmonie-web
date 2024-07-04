<section class="ftco-intro-2 img" style="background-image: url({{ asset('images/footer-1.jpg') }});">
    <div class="overlay"></div>
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-10">
                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-md-8 d-flex align-items-center">
                        <div>
                            <span class="subheading">SE PRÉPARER AU DÉCOLLAGE</span>
                            <h1 class="mb-md-0 mb-4">À la recherche d'une opportunité commerciale ?</h1>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <p class="mb-0"><a href="#" class="btn btn-white py-md-4 py-3 px-md-5 px-4">Commencez
                                Ici.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer img" style="background-image: url({{ asset('images/footer.webp') }});">
    <div class="overlay"></div>
    <div class="container-xl">
        <div class="row mb-5 justify-content-between">
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 d-flex">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('images/conseil-etat-logo.png') }}" alt="conseil etat logo">
                        </a>
                    </h2>
                    <p>Votre temps étant précieux, il vous est possible de suivre votre requête sans vous déplacer.
                    </p>
                    <ul class="ftco-footer-social mt-4">
                        <li><a href="{{ setting('site.twitter') }}"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="{{ setting('site.facebook') }}"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="{{ setting('site.instagram') }}"><span class="fa fa-instagram"></span></a></li>
                        <li><a href="{{ setting('site.google') }}"><span class="fa fa-google"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <div class="d-md-flex">
                        <ul class="list-unstyled w-100">
                            <li><a href="{{ route('mot.pp') }}"><span
                                        class="ion ion-ios-arrow-round-forward me-2"></span>Mot du PP</a>
                            </li>
                            <li><a href="{{ route('mission') }}"><span
                                        class="ion ion-ios-arrow-round-forward me-2"></span>Nos missions</a></li>
                            <li><a href="{{ route('demandes') }}"><span
                                        class="ion ion-ios-arrow-round-forward me-2"></span>Vos Démarches</a></li>
                            <li><a href="{{ route('publications') }}"><span
                                        class="ion ion-ios-arrow-round-forward me-2"></span>Publications</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Publications récentes</h2>
                    @foreach ($posts as $post)
                        <div class="block-21 mb-4 d-flex">
                            <a href="{{ route('publication-details', $post->slug) }}" class="blog-img img rounded"
                                style="background-image: url({{ asset(Voyager::image($post->image)) }});"></a>
                            <div class="text">
                                <div class="meta">
                                    <div><a href="#"><span class="fa fa-calendar"></span>
                                            {{ $post->created_at->isoFormat('DD, MMMM. Y') }}</a></div>
                                    <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                                </div>
                                <h3 class="heading"><a
                                        href="{{ route('publication-details', $post->slug) }}">{{ $post->title }}</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Une Question?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map marker"></span><span
                                    class="text">{{ setting('site.location') }}</span></li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span
                                        class="text">{{ setting('site.join') }}</span></a></li>
                            <li><a href="{{ route('contact') }}"><span class="icon fa fa-user"></span><span
                                        class="text">Contactez-nous</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 py-5 bg-darken">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0" style="font-size: 14px;">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | <i class="fa fa-heart color-danger"
                            aria-hidden="true"></i> by <a href="https://endaman-stevy-portfolio.vercel.app/"
                            target="_blank">SM</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
