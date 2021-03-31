

<nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background: rgb(223,220,255);">
    <div class="container"><a class="navbar-brand" href="#">SocailTV</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>

                <li class="nav-item dropdown show">
                    <a aria-expanded="true" data-toggle="dropdown" class="dropdown-toggle nav-link" href="#">Categories</a>
                    <div class="dropdown-menu show">
                        @foreach ($category as $item)
                        <a class="dropdown-item" href="#">News</a>
                        <a class="dropdown-item" href="#">Second Item</a>
                        <a class="dropdown-item" href="#">Third Item</a></div>

                        @endforeach
                </li>

            </ul><span class="navbar-text actions"><a class="login" href="#">Log In</a><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></span>
        </div>
    </div>
</nav>
