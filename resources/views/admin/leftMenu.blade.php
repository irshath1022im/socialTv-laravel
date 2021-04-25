

<div x-data="{open:false}">
    <div class="d-flex justify-content-between">
        <div>
            <svg x-on:click = "open = !open" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="blue" class="bi bi-toggle-on" viewBox="0 0 16 16">
                <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>

            </svg>
            <span>Menu</span>
        </div>

        <div class="d-flex p-2">
        @auth
                <div class="alert alert-info mr-2" role="alert">
                    <strong class="text-uppercase">Loged As : {{ Auth::user()->name }}</strong>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="flex ">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm">LogOut</button>
                </form>

            @endauth
        </div>
    </div>


<hr/>

<div x-show.transition.opacity="open">
    <ul class="list-group" style="box-shadow: 3px 4px 1px rgb(205,216,228);">
        <a href="{{ route('admin') }}" >
            <li class="list-group-item" style="border-bottom: 4px solid rgba(146,144,234,0.61) ;"><i class="fa fa-home" style="font-size: 22px;width: 30px;color: rgb(241,130,0);"></i>
            <span style="font-family: Alatsi, sans-serif;font-size: 18px;">Home</span></li></a>

            <a href="{{route('adminCategory') }}">
                <li class="list-group-item" style="border-bottom: 4px solid rgba(146,144,234,0.61) ;"><i class="fa fa-book" style="font-size: 22px;width: 30px;color: rgb(241,130,0);"></i><span style="font-family: Alatsi, sans-serif;font-size: 18px;">Category</span></li>
            </a>

            <a href="{{route('adminSubCategory.index') }}">
                <li class="list-group-item" style="border-bottom: 4px solid rgba(146,144,234,0.61) ;"><i class="fa fa-tag" style="font-size: 22px;width: 30px;color: rgb(241,130,0);"></i><span style="font-family: Alatsi, sans-serif;font-size: 18px;">SubCategory</span></li></a>

        <a href="{{ route('adminPost.index') }}" >
            <li class="list-group-item" style="background: rgb(255, 255, 255);"><i class="material-icons" style="font-size: 22px;width: 30px;color: rgb(241,130,0);">airline_seat_flat</i><span style="font-family: Alatsi, sans-serif;font-size: 18px;">Post</span></li></a>
        <a href="{{ route('adminAds.index') }}" >
                <li class="list-group-item" style="background: rgb(255, 255, 255);"><i class="material-icons" style="font-size: 22px;width: 30px;color: rgb(241,130,0);">airline_seat_flat</i><span style="font-family: Alatsi, sans-serif;font-size: 18px;">Ads</span></li></a>
        <a href="{{ route('adminPost.index') }}" >
                    <li class="list-group-item" style="background: rgb(255, 255, 255);"><i class="material-icons" style="font-size: 22px;width: 30px;color: rgb(241,130,0);">airline_seat_flat</i><span style="font-family: Alatsi, sans-serif;font-size: 18px;">Videos</span></li></a>
    </ul>
</div>

</div>

{{-- <a href="/" class="list-group-item list-group-item-action">HOME</a>
<a href="{{route('adminCategory.index') }}" class="list-group-item list-group-item-action">CATEGORY</a>

<a href="{{route('adminSubCategory.index') }}" class="list-group-item list-group-item-action">SUB CATEGORY</a>
<a href="#" class="list-group-item list-group-item-action disabled">Disabled item</a> --}}
