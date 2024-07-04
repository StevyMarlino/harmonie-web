@extends('layouts.app')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/balandeJ.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 text-center mb-5">
                    <p class="breadcrumbs"><span class="me-2"><a href="{{ route('home') }}">Accueil <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Contactez nous
                            <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Contactez nous</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container-xl">
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-10">
                    <div class="wrapper">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3>Contactez nous</h3>
                                    <p class="mb-4">Vous avez des questions ? Ou juste besoin d'éclaicissement, contactez
                                        nous.</p>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Addresse:</span> {{ setting('site.location') }} </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Email:</span> <a href="#"><span>
                                                                {{ setting('site.email') }} </span></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Téléphone:</span> <a
                                                            href="tel://{{ setting('site.join') }}">{{ setting('site.join') }}</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('send') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                                        placeholder="Votre nom et prénom" value="{{ old('name') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                                        placeholder="Votre addresse email" value="{{ old('email') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject"
                                                        placeholder="Object du message" value="{{ old('subject') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" cols="30" rows="7"
                                                        placeholder="Le corps de votre message."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Envoyez votre message"
                                                        class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
