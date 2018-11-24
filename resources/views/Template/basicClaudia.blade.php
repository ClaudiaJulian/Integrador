<!-- nobasic - ARCHIVO DE TRABAJO DE CLAUDIA  -->

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>nobasic</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/styleClaudia.css')}}">
</head>
<body>
<div class="flex-center position-ref full-height">
  <div class="top-right">
      @if(Auth::check())
          <a href="{{ url('/home') }}">Home</a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
          @else
          <a href="{{ route('login') }}">Login</a>
          <a href="{{ route('register') }}">Register</a>
      @endif
  </div>
 

  <!-- <nav class="">
      <p>nobasic</p>    
  </nav> -->
    
    <main class="container">
      @yield('content')
    </main>
    
    <footer>
        <p>     
        nobasic
        </p>
    </footer>
  </div>
</body>
</html>