<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CompanionCloud') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
    <div id="app">

        <nav class="navbar is-fixed-top" id="nav-nav" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item">
                    <img src="https://imagesharing.com/uploads/20200518/63aace498adb4eaf13509c9e2e63a1494a90b6f1.png" width="230" height="200">
                </a>


            </div>
            @auth

                    <div class="navbar-item has-dropdown is-hoverable navbar-end">
                        <a href="#" class="navbar-link has-text-white" aria-haspopup="true" hidden="true">
                            {{ Auth::user()->name }} </a>

                        <div class="navbar-dropdown" id="dropdown-color">

                                @guest
                                    <a href="{{ route('login') }}" class="dropdown-item">
                                        Login
                                    </a>
                                    <a href="{{ route('register') }}" class="dropdown-item">
                                        Register
                                    </a>
                                @else
                                    <a class="dropdown-item">Notifications

                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Contact Support
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="dropdown-item">
                                        Logout
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        @endguest
                                    </a>
                        </div>
                        @endauth
                    </div>
        </nav>




        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    @yield('extra-js')
</body>
</html>
