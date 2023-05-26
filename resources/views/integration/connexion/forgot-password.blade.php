@extends('base')
@section('title', 'forgout-password')
@section('content')
    <main class="d-flex h-auto">
        <section class="w-50 bloc-logo">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo Yuppie">
            <img src="{{ asset('images/logo-login.PNG') }}" alt="Slogant Yuppie">
        </section>
        <section class="w-50 bloc-main-connexion">

            @if(session('status'))
               <div class="alert alert-success" role="alert">

                {{session('status')}}

               </div>
            @endif
            <form class="container" method="POST" action="{{ route('password.request') }}"  >
                @csrf
             
                <div class="form-group w-100">
                    <input type="email" class="form-control form-control-lg text-center p-2" id="exampleInputPassword"
                        aria-describedby="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="text-red-400 text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{-- <button type="submit" class="btn btn-primary btn-lg btn-block p-2">Reset</button> --}}
                <input name="reset" id="reset" type="submit" class="btn btn-primary btn-lg btn-block p-2" value="Reset">

                <hr class="w-100">
                <p class="accountNok">
                    Vous n'avez pas de compte ?
                </p>
                <a href="{{ route('register') }}" class="btn btn-success btn-lg btn-block p-2">S'inscrire</a>
            </form>
        </section>
    </main>
@endsection