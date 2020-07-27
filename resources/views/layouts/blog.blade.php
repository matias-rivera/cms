<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>
        @yield('title')
    </title>

    <!-- Styles -->
    {{-- <link href="{{asset('css/page.min.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('css/app.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @yield('css')

    <!-- Favicons -->
{{--     <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset('img/favicon.png')}}"> --}}
    <style>

      .masthead {
    height: 20vh;
    min-height: 300px;
    background-image: url('{{asset('img/logo.jpg')}}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
  
  img{
    max-width: 750px;
    max-height: 300px
  }
      </style>
  </head>

  <body class="bg-white">
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
              {{ config('app.name', 'Laravel') }}
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">

              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <a class="dropdown-item" href="{{ route('users.edit-profile') }}">
                                 My Profile
                              </a>

                              @if (auth()->user()->isWriter())                                        
                                    <a class="dropdown-item" href="{{route('home')}}">Panel</li></a>
                              @endif

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>
              
          </div>
      </div>
      
  </nav>


    
  

    <!-- Header -->
    @yield('header')


    <!-- Main Content -->
    @yield('content')


    <!-- Footer -->
 {{--    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">

          <div class="col-6 col-lg-3">
            <a href="/"><img src="{{asset('img/logo-dark.png')}}" alt="logo"></a>
          </div>

          <div class="col-6 col-lg-3 text-right order-lg-last">
            <div class="social">
              <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
              <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
              <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
              <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>

          <div class="col-lg-6">
  
          </div>

        </div>
      </div>
    </footer> --}}
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Matias Rivera 2020</p>
      </div>
      <!-- /.container -->
    </footer>
    
    <!-- /.footer -->


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    @yield('js')
{{--     <script src="{{asset('js/page.min.js')}}"></script> --}}


  </body>
</html>
