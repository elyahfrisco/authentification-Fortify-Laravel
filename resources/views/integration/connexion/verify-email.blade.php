@extends('base')
@section('title', 'verify-email')
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

            <form class="container" method="POST" action="{{ route('verification.send') }}"  >
                @csrf
                <input name="login" id="reset" type="submit" class="btn btn-primary btn-lg btn-block p-2" value="Resend email">
               
            </form>
        </section>
    </main>
@endsection
