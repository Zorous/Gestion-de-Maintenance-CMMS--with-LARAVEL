<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.theme.default.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{url('/assets/css/templatemo-digital-trend.css')}}">

    <link rel="stylesheet" href="{{url('/dist/css/landingPage.css')}}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">

     <!-- MENU BAR -->
     <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
              <i class="fa fa-line-chart"></i>
              Gestion de maintenance
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                                          <!-- Authentication Links -->
                                          @guest
                                          @if (Route::has('login'))
                                              <li class="nav-item">
                                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                              </li>
                                          @endif

                                          @if (Route::has('register'))
                                              <li class="nav-item">
                                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                              </li>
                                          @endif
                                      @else
                                          <li class="nav-item dropdown">
                                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                  {{ Auth::user()->name }}
                                              </a>

                                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                                                   document.getElementById('logout-form').submit();">
                                                      {{ __('Logout') }}
                                                  </a>

                                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                      @csrf
                                                  </form>
                                              </div>
                                          </li>
                                      @endguest
                </ul>
            </div>
        </div>
    </nav>



        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
