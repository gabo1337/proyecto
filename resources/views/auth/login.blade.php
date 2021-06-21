@extends('layouts.logeo')
@extends('layouts.app')

@section('content_logeo')
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Iniciar Sesion</h3>
            </div>
            <div class="card-body">
                <div class="card-header">{{ ('Login') }}</div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Nombre de Usuario" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row align-items-center remember">
                        <input type="checkbox" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Login" class="btn float-right login_btn">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ ('Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection