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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <style>
        .btn-info{
            color:#fff;
        }
        .card-header{
            background-color: #6359b6 !important;
            border-color:  #5844ad !important;
            color:#ffffff !important;
            }

        ul.main-menu >li > a {
            color: #6359b6 !important;
        }

        a.dropdown-item:active{
            background-color: #6359b6 !important;
            color:#ffffff !important;
        }
    </style>

    @yield('css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md ">
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

        @auth
        <header id="header">
            <div class="container pt-4">
                <div class="row ">
                    <div class="col-md-10">
                        @yield('header_title')
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown create">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Create content
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              
                              <a class="dropdown-item" href="{{route('posts.create')}}">Add Post</a>
                              <a class="dropdown-item" href="{{route('tags.create')}}">Add Tag</a>
                              <a class="dropdown-item" href="{{route('categories.create')}}">Add Category</a>
                            </div>
                          </div>
                    </div>
    
                </div>
            </div>
        </header>
        @endauth
        
      {{--   <nav class="navbar navbar-expand-md navbar-light ">
        
       
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Dashboard<span class="sr-only">(current)</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages.html">Pages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="posts.html">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.html">Users</a>
                    </li>
                </ul>
                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item "><a class="nav-link" href="#">Welcome Matt</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.html">Logout</a></li>
                    </ul>
            </div>
           
        
    </nav>
 --}}
        <main class="py-4">

         

            @auth

                <div class="container">
                            
                    @if (session()->has('success'))
                
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
    
                    @endif

                    @if (session()->has('error'))
                
                    <div class="alert alert-danger">
                        {{session()->get('error')}}
                    </div>
    
                    @endif
                            <div class="row">
                            
                                <div class="col-md-4">
                                
                                    <ul class="list-group main-menu">
                                        <li class="list-group-item active main-color-bg "> <span>

                                            <a href="{{route('home')}}" class="text-white"><i class="fa fa-gear mr-1"></i>Dashboard</li></a>
                                        </span>
                                            

                                        @if (auth()->user()->isAdmin())

                                            <li class="list-group-item ">
                                            
                                                <a href="{{route('users.index')}}"><i class="fa fa-users mr-1"></i>Users</li></a>
                
                                            </li>
                                            
                                        @endif
                                    
                                        <li class="list-group-item">
                                        
                                            <a href="{{route('posts.index')}}"><i class="fa fa-sticky-note-o mr-1"></i>Posts</li></a>
            
                                        </li>
            
                                        <li class="list-group-item">
                                        
                                            <a href="{{route('categories.index')}}"><i class="fa fa-book mr-1"></i>Categories</li></a>
            
                                        </li>

                                        <li class="list-group-item">
                                        
                                            <a href="{{route('tags.index')}}"><i class="fa fa-hashtag mr-1"></i>Tags</li></a>
            
                                        </li>
            
                                    </ul>

                                    <ul class="list-group mt-5 main-menu">
                                    
                                        <li class="list-group-item">
                                            
                                            <a href="{{route('trashed-posts.index')}}"><i class="fa fa-trash mr-1"></i>Trashed Posts</li></a>
            
                                        </li>
            
            
                                    </ul>


                                    {{-- <div class="card mt-5">
                                        <div class="card-header">Disk Space</div>
                                        <div class="card-body">
                                            {{round(((disk_total_space(app_path()))/1024)/1024/1024 , 2)}}
                                        </div>
                                    </div> --}}
            
                                </div>
            
                                <div class="col-md-8">
                                    
                                    @yield('content')
                                    
                                </div>
            
                            </div>
                        
                </div>

            @else
            
                @yield('content')

            @endauth

        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    @yield('scripts')

</body>
</html>
