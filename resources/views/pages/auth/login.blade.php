@extends('layouts.main')

@section('sectionContent')
    <section class="vh-100" style="background: #e3f0ff">
        <div class="container py-5 h-100">

            <div class="row d-flex align-items-center justify-content-center h-100">

                <div class="col-md-8 col-lg-7 col-xl-5">
                    <img src="https://secure.newdream.net/newpanel/images/spot_illo-login.png" class="img-fluid"
                        alt="Phone image">
                </div>

                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 bg-white p-5 border">

                    <form method="POST" class="py-5 px-3" action="{{ route('auth.login') }}">

                        @csrf

                        <h2 class="mb-5"><strong>Iniciar sesión en su cuenta</strong></h2>

                        <div class="row mb-3">
                            <label class="form-label" for="form1Example13">Correo electrónico</label>
                            <div class="form-outline mb-4">
                                <input type="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="form-label" for="form1Example23">Contraseña</label>
                            <div class="form-outline mb-4">
                                <input type="password" id="form1Example23"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @if (session('message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Revisa tus credenciales!!!</strong><br> {{ session('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <button type="submit" class="btn btn-lg btn-primary btn-block mt-4 w-100">Iniciar sesión</button>

                        <div class="mt-4 text-center">
                            <a href="#!">¿Olvidaste tu contraseña?</a>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </section>
@endsection