<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{auth()->user()->prenom}}

    @auth
    <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:text-green-400 " style="font-family: cursive;font-size: 17px"  >Se déconnecter</a></li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    @endauth
</body>
</html>