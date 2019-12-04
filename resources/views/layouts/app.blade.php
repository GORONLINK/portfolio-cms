<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('aos/aos.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


        <nav class="mb-4 navbar navbar-expand-lg nav-background">
            <div class="mx-auto" id="navbarSupportedContent-4">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link px-4" href="/">work</a>
                    </li>                
                    <li class="nav-item">
                        <a class="nav-link px-4" href="/about-me">about me</a>
                    </li>
                </ul>
            </div>
        </nav>

            
            <div class="mw-100">
                @yield('content')
            </div>
        <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
            <div class="container text-center">
                <div class="row">                
                    <div class="col-md-4 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/logo.png') }}" class="img-fluid img-footer" width="60px">
                        </div>                    
                    </div>                
                </div>
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <ul class="footer-list text-center">
                            <li><i class="fa fa-phone"></i> 0424 111 1111</li>
                            <li><i class="fa fa-envelope"></i> example@mail.com</li>
                            <li>@NelaVivas</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex mx-auto">
                        <i style="font-size: 30px" class="fa fa-instagram p-1"></i>
                        <i style="font-size: 30px" class="fa fa-behance-square p-1"></i>
                    </div>            
                </div>
                <br>
                <small>Copyright &copy; Nela Vivas</small>
            </div>
        </footer>   

            {{-- SCRIPTS --}}
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="{{ asset('js/aos.js') }}"></script>
    </div>
</body>
</html>
