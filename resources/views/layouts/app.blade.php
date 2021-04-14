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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="{{ asset('fonts/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/Navigation-Clean.css')}}">
        <link rel="stylesheet" href="{{asset('css/Navigation-with-Button.css')}}">
        <link rel="stylesheet" href="{{ asset('css/Social-Icons.css')}}">
        <link rel="stylesheet" href="{{ asset('css/Style.css')}}">
        <link rel="stylesheet" href="{{ asset('css/newBar1.css')}}">
        <link rel="stylesheet" href="{{ asset('css/untitled-1.css')}}">
        <link rel="stylesheet" href="{{ asset('css/header.css')}}">
        {{-- <link rel="stylesheet" href="{{ asset('css/Pretty-Footer.css')}}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/Responsive-footer.css')}}"> --}}

<!-- Global site tag (gtag.js) - Google Analytics -->
<script data-ad-client="ca-pub-9931371849873169" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135001405-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135001405-1');
</script>

        @livewireStyles
        @livewireScripts



    </head>
    <body class="container">


       {{-- @livewire('nav-bar') --}}
       @component('components.header')

       @endcomponent

        {{-- @component('components.covid19bar')

        @endcomponent --}}

            @yield('content')

       @component('components.footer')

       @endcomponent

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>

        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

    </body>
</html>
