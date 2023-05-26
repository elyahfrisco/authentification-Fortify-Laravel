@extends('base')
@section('title', 'Login')
@section('content')
    <main class="d-flex h-auto">
        <section class="w-50 bloc-logo">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo Yuppie">
            <img src="{{ asset('images/logo-login.PNG') }}" alt="Slogant Yuppie">
        </section>
        <section class="w-50 bloc-main-connexion">
            <form class="container" method="POST" action="{{ route('login') }}"  >
                @csrf
                <div class="form-group w-100">
                    <input type="text" class="form-control form-control-lg text-center p-2" id="exampleInput"
                        placeholder="Nom d'utilisateur" name="email" value="{{ old('email') }}"  required>
                    @error('email')
                        <span class="text-red-400 text-sm">
                            <span>{{ $message }}</span>
                        </span>
                    @enderror
                </div>
                <div class="form-group w-100">
                    <input type="password" class="form-control form-control-lg text-center p-2" id="exampleInputPassword"
                        aria-describedby="password" placeholder="Mot de passe" name="password" value="{{ old('password') }}" required>
                    @error('password')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <p>
                    <a href="{{route('password.request')}}">Mot de passe oublié ?</a>
                </p>
                <button type="submit" class="btn btn-primary btn-lg btn-block p-2">Se connecter</button>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  id="defaultCheck"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="defaultCheck">
                        Se souvenir de moi
                    </label>
                </div>
                <hr class="w-100">
                <p class="accountNok">
                    Vous n'avez pas de compte ?
                </p>
                <a href="{{ route('register') }}" class="btn btn-success btn-lg btn-block p-2">S'inscrire</a>
            </form>
        </section>
    </main>
@endsection
