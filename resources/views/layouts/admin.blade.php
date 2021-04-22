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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
        <link rel="stylesheet" href="{{ asset('css/Login-Form-Clean.css')}}">
        <link rel="stylesheet" href="{{ asset('css/postForm.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        </script>

        @livewireStyles
        @livewireScripts
    </head>
    <body style="background: linear-gradient(-156deg, rgb(75,104,254) 0%, rgb(51,0,255) 100%, rgb(5,0,255) 100%), var(--purple);height: 0; font-family: Raleway">

        <div class="container" style="margin-top: 33px;background: #ffffff;">

                @component('admin.leftMenu')

                @endcomponent

                @yield('content')

        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
            <script>
                CKEDITOR.replace( 'summary-ckeditor', {
                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
});
            </script>

        <script src="{{ asset('js/jquery.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script>
            // document.addEventListener('showEditCategoryForm', event => {
            //     $('#editCategoryForm').modal('show');
            // })
            document.addEventListener('showCategoryForm', event =>{
                $('#categoryForm').modal('show');
            })

            document.addEventListener('showDeleteModal', event =>{
                $('#deleteModal').modal('show');
            })

            document.addEventListener('closeDeleteModal', event =>{
                $('#deleteModal').modal('hide');
            })
        </script>


<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    </body>
</html>


