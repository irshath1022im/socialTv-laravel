<div>

    {{-- @dump($menu); --}}
    <section>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background: rgb(59,108,129);">
            <div class="container"><img src="{{ asset('img/Banner.jpg') }}" style="width: 500px;height: 150px;border-radius: 27px;"><a class="navbar-brand" href="#"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1" style="background: rgba(189,192,194,0.79);color: rgb(241,236,236);">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item" style="color: rgb(97,255,0);">
                            <a class="nav-link" href="{{route('home')}}" style="color: rgb(255,255,255);font-size: 19px;font-family: 'Alegreya Sans SC', sans-serif;text-align: left;font-weight: bold;">HOME</a>
                        </li>

                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#" style="color: rgb(254,254,254);font-size: 18px;font-family: 'Alegreya Sans SC', sans-serif;font-weight: bold;">CATEGORIES</a>
                            <div class="dropdown-menu" style="background: rgb(59,108,129);color: rgb(224,25,25);font-size: 15px;font-family: 'Alegreya Sans SC', sans-serif;">
                                @foreach ($menu as $item)

                                <a class="dropdown-item" href="#">{{ $item->category}}</a>

                                @endforeach
                            </div>
                        </li>

                        <li class="nav-item" style="color: rgb(97,255,0);">
                            <a class="nav-link" href="{{route('admin')}}" style="color: rgb(255,255,255);font-size: 19px;font-family: 'Alegreya Sans SC', sans-serif;text-align: left;font-weight: bold;">ADMIN</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>

</div>
