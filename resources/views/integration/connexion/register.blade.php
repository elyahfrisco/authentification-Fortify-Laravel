@extends('base')
@section('title', 'Login')
@section('content')
    <main class="d-flex h-auto">
        <section class="w-50 bloc-logo">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo Yuppie">
            <img src="{{ asset('images/logo-login.PNG') }}" alt="Slogant Yuppie">
        </section>
        <section class="w-50 bloc-main-connexion">
            <i class="fa-solid fa-circle-arrow-left" style="color: #c7c7c7;"></i>
            <form class="container form-register" method="POST" action="{{route('register')}}" >
                @csrf
                <div class="form-group w-100">
                    <input type="text" class="form-control form-control-lg text-center p-2" id="exampleInput" value="{{ old('nom') }}" placeholder="Nom" name="nom" required>
                        @error('nom')
                        <span class="invalid-feedback text-danger" role="alert">
                       <strong>{{$message}}</strong>
                        @enderror
                </div>
                <div class="form-group w-100">
                    <input type="text" class="form-control form-control-lg text-center p-2" id="exampleInput"
                        placeholder="Prénom" name="prenom" value="{{ old('prenom') }}" required >
                        @error('prenom')
                        <span class="invalid-feedback text-danger" role="alert">
                       <strong>{{$message}}</strong>
                        @enderror
                </div>
                <div class="form-group w-100">
                    <input type="email" class="form-control form-control-lg text-center p-2" id="exampleInputEmail"
                        placeholder="Adresse email" name="email" value="{{ old('email') }}" required >
                        @error('email')
                        <span class="invalid-feedback text-danger" role="alert">
                       <strong>{{$message}}</strong>
                        @enderror

                </div>

                <div class="form-group w-100">
                    <input type="password" class="form-control form-control-lg text-center p-2" id="exampleInputPassword"
                        aria-describedby="password" placeholder="Mot de passe" name="password"  required  value="{{ old('password') }}" >
                   
                        @error('password')
                        <span class="invalid-feedback text-danger"  role="alert">
                       <strong>{{$message}}</strong>
                        @enderror


                </div>
                <div class="form-group w-100">
                    <input type="password" class="form-control form-control-lg text-center p-2" id="exampleInputPassword"
                        aria-describedby="password" placeholder="Confirmer mot de passe" name="password_confirmation" value="{{ old('password_confirmation') }}"  required >
                        @error('password_confirmation')
                        <span class="invalid-feedback text-danger" role="alert">
                       <strong>{{$message}}</strong>
                        @enderror 
                </div>
                
                <p class="accountNok">
                    S'inscrire en tant que
                </p>

                <div class="typeAcount d-flex">
                    <div class="custom">
                        <input type="radio" class="btn-check" id="btn-check1" name="role_id" value="1"  />
                        <label class="btn btn-success p-3" for="btn-check1">Assistant</label>
                    </div>
                    <div class="custom">
                        <input type="radio" class="btn-check" id="btn-check2" name="role_id" value="2"  />
                        <label class="btn btn-success p-3" for="btn-check2">Client</label>
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="contract" id="defaultCheck" required>
                    <label class="form-check-label" for="defaultCheck">
                        J'ai lu et accepté <span>les conditions d'utilisation</span> et <span>les politiques de confidentialité</span>.
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block p-2">S'inscrire</button>
            </form>
        </section>
    </main>
@endsection
