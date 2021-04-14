<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SOCIAL TV-Admin</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+SC">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Atomic+Age">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
        <link rel="stylesheet" href="{{ asset('css/Login-Form-Clean.css')}}">
        <link rel="stylesheet" href="{{ asset('css/postForm.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

        @livewireStyles
        @livewireScripts
    </head>
    <body style="background: linear-gradient(-156deg, rgb(75,104,254) 0%, rgb(51,0,255) 100%, rgb(5,0,255) 100%), var(--purple);height: 0; font-family: Raleway">

        <div class="container" style="margin-top: 33px;background: #ffffff;">
            <div class="row" style="margin-right: 0px;margin-left: 0px;">
                <div class="col" style="padding: 0px 0px;">

                    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="height: 147px;">
                        <div class="container"><a class="navbar-brand" href="#">
                            <img src="{{ asset('img/Logo.jpg')}}" style="width: 180px;height: 126px;padding: 3px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </nav>
                </div>

            </div>


            <div class="row" style="margin: 0px 0px;">

             @component('admin.leftMenu')

             @endcomponent

             <div class="col-sm-8 col-md-8" style="padding-left: 10px;background: #ffffff;">

                @yield('content')

            </div>




        </div>

        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
            <script>
                CKEDITOR.replace( 'summary-ckeditor' );
            </script>
        <script src="{{ asset('js/jquery.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>


