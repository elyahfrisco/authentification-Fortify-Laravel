@extends('base')
@section('title', 'Login')
@section('content')
    <h1>HELLO FRISCO</h1>

    @auth
    <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:text-green-400 " style="font-family: cursive;font-size: 17px"  >Se déconnecter</a></li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    @endauth


 

   

@endsection
