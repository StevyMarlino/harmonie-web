@extends('layouts.app')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/balandeJ.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 text-center mb-5">
                    <p class="breadcrumbs"><span class="me-2"><a href="{{ route('home') }}">Accueil <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Vos demandes/Demarches <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Vos demandes/Demarches</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row g-lg-5">
                {{-- <div class="col-lg-8">
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
                </div> --}}
                <div class="col-lg-4 sidebar pl-md-4">
                    <div class="sidebar-box bg-light rounded">
                        {{-- <form method="POST" action="{{ route('demandes.demarches') }}" class="search-form">
                            @csrf
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form> --}}
                        <form method="POST" action="{{ route('demandes.demarches') }}">
                            @csrf

                            <input class="form-control" name="signature" placeholder="Recherche ..."
                                type="search">
                            <button class="btn" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path
                                        d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                                </svg>
                            </button>
                        </form>
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
