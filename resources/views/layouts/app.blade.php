<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SOCIAL TV</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+SC">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Metamorphous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Metrophobic">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Atomic+Age">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kavivanar&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('fonts/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/Article-List.css')}}">
        <link rel="stylesheet" href="{{asset('css/Navigation-Clean.css')}}">
        <link rel="stylesheet" href="{{asset('css/Navigation-with-Button.css')}}">
        <link rel="stylesheet" href="{{ asset('css/Social-Icons.css')}}">
        <link rel="stylesheet" href="{{ asset('css/Style.css')}}">
        <link rel="stylesheet" href="{{ asset('css/untitled-1.css')}}">
        <link rel="stylesheet" href="{{ asset('css/Article-Cards.css')}}">
        <link rel="stylesheet" href="{{ asset('css/Bold-BS4-Cards-with-Hover-Effect-74.css')}}">
        <link rel="stylesheet" href="{{ asset('css/header.css')}}">
        <link rel="stylesheet" href="{{ asset('css/Responsive-footer.css')}}">
        @livewireStyles
        @livewireScripts
    </head>
    <body class="container">


       {{-- @livewire('nav-bar') --}}
       @component('components.header')

       @endcomponent

        @component('components.covid19bar')

        @endcomponent

            @yield('content')

       @component('components.footer')

       @endcomponent

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
