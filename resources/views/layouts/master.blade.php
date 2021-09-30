<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    

    <style>
        body{
            margin-top: 60px;
        }
    </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm fixed-top">

            <div class="container">

                <img src="{{ asset('local/max.jpg') }}" style="width: 50px;height:50px" alt="">

                <a class="navbar-brand" href="{{ url('/') }}">
                    <i style="color: rgb(32, 124, 178)"> <b>Max Highway</b> </i>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
    </div>

    @yield('content')

    <div class="container" style="padding-top: 20px">
        <div class="row">
            <div class="col-md-2">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action list-group-item-info" style="text-align: center">
                        <i class="fas fa-user"></i>&nbsp;<b>User</b>
                    </a>
                    <a href="{{ url('/') }}" class="list-group-item list-group-item-action "><i class="fas fa-list"></i>&nbsp;<b>Job Listing</b></a>
                    <a href="{{ url('/income') }}" class="list-group-item list-group-item-action "><i class="fas fa-funnel-dollar"></i>&nbsp;<b>Income</b> </a>
                    <a href="{{ url('/cashup') }}" class="list-group-item list-group-item-action "><i class="fas fa-cash-register"></i>&nbsp;<b>Cash Up</b></a>
                    <a href="{{ url('/summary') }}" class="list-group-item list-group-item-action "><i class="fas fa-align-justify"></i>&nbsp;<b>Summary</b></a>
                </div>
                <br>

                @foreach (Auth::user()->roles as $role)
                    @if ($role->name == 'manager')
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger" style="text-align: center">
                            <i class="fas fa-user-tie"></i>&nbsp;<b>Admin</b>
                        </a>
                        <a href="{{ url('/add') }}" class="list-group-item list-group-item-action "><i class="fas fa-folder-plus"></i>&nbsp;<b>Add Data</b></a>
                        <a href="{{ url('/edit_user') }}" class="list-group-item list-group-item-action "><i class="fas fa-user-edit"></i>&nbsp;<b>Edit User</b></a>
                        <a href="{{ url('/create') }}" class="list-group-item list-group-item-action "><i class="fas fa-user-plus"></i>&nbsp;<b>Create user</b></a>
                    </div>
                    @endif
                @endforeach
                



            </div>
            <div class="col-md-10">
                        
                @yield('action')
                        
            </div>
        </div>
    </div>

    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
