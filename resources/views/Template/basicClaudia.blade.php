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
  <div >
    <nav class="main-nav">
    <p> 
        nobasic
    </p>
    
    </nav>
    <main>
      @yield('content')
    </main>
    <footer>
        <p>     
        nobasic
        </p>
    
    </footer>
    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
  </div>
</body>
</html>