@extends('base')
@section('title', 'reset-password')
@section('content')
    <main class="d-flex h-auto">
        <section class="w-50 bloc-logo">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo Yuppie">
            <img src="{{ asset('images/logo-login.PNG') }}" alt="Slogant Yuppie">
        </section>
        <section class="w-50 bloc-main-connexion">

            @if(session('status'))
               <div class="alert alert-success" role="alert">

                {{session('statut')}}

               </div>
            @endif
            <form class="container" method="POST" action="{{ route('password.update') }}"  >
                @csrf
                 
                <input type="hidden" name="token" value="{{$request->route('token')}}">
                <div class="form-group w-100">
                    <input type="email" class="form-control form-control-lg text-center p-2" id="exampleInputPassword"
                        aria-describedby="email" placeholder="Email" name="email" value="{{ $request->email }}" required>
                    @error('email')
                        <span class="text-red-400 text-sm text-danger">{{ $message }}</span>
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
                {{-- <button type="submit" class="btn btn-primary btn-lg btn-block p-2">Reset</button> --}}
                <input name="reset" id="reset" type="submit" class="btn btn-primary btn-lg btn-block p-2" value="Update">

                <hr class="w-100">
                <p class="accountNok">
                    Vous n'avez pas de compte ?
                </p>
                <a href="{{ route('register') }}" class="btn btn-success btn-lg btn-block p-2">S'inscrire</a>
            </form>
        </section>
    </main>
@endsection