<div>

    {{-- @dump($menu); --}}
    <nav class="navbar navbar-dark navbar-expand-md header-navbar" style="background-image: url({{asset('img/abstract-blue-lines.jpg')}})">
        <div class="container-fluid">
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse text-uppercase d-xl-flex justify-content-xl-end" id="navcol-1">
                <ul class="navbar-nav ml-auto ir-navbar-nav">
                    <li class="nav-item ir-navbar-item">
                        <a class="nav-link active ir-nav-link" href="/" style="color: #ffffff;">home</a></li>

                    <li class="nav-item dropdown ir-navbar-item">
                        <a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#" style="color: rgb(255,255,255);">CATEGORY</a>

                        <div class="dropdown-menu">
                            @foreach ($menu as $category)

                            <a class="dropdown-item" href="#">{{$category->category}}</a>
                            @endforeach
                            {{-- <a class="dropdown-item" href="#">Second Item</a>
                            <a class="dropdown-item" href="#">Third Item</a></div> --}}
                    </li>

                    <li class="nav-item ir-navbar-item">
                        <a class="nav-link ir-nav-link" href="#" style="color: rgb(255,255,255);">subscribe</a>
                    </li>
                    <li class="nav-item ir-navbar-item"><a class="nav-link ir-nav-link" href="#" style="color: rgb(255,255,255);">contact</a></li>
                    <li class="nav-item ir-navbar-item"><a class="nav-link ir-nav-link" href="{{route('admin')}}" style="color: rgb(255,255,255);">ADMIN</a></li>
                </ul>
            </div>
        </div>
    </nav>

</div>
