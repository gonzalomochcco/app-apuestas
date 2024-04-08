<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('pageTitle','Titulo')</title>
  
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
        
    
    @auth     
        <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
            
            @include('layouts.sidebar')
            
            <div class="body-wrapper">  

                @include('layouts.header')  

                @yield('sectionContent','¡Página no encontrada!')

            </div>
            
        </div>
    @else

        @yield('sectionContent','¡Página no encontrada!')

    @endauth
    
    <!--<a class="navbar-brand" href="{{--url('/')--}}">
        Panel Administrativo
    </a>-->    
    
    <!-- Jquery es necesario para correr el pequeño dashboard -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
                                    
</body>
</html>