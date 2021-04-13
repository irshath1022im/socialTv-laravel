{{-- <ul class="list-group" style="box-shadow: 3px 4px 1px rgb(205,216,228);">

    <a href="{{route('adminCategory.index') }}" >

    <li class="list-group-item" style="border-bottom: 4px solid rgba(0,0,0,0.125) ;">
        <i class="fa fa-home" style="font-size: 22px;width: 30px;color: rgb(241,130,0);"></i>
        <span style="font-family: Alatsi, sans-serif;font-size: 18px;">Home</span>
    </li></a>

    <li class="list-group-item" style="border-bottom: 4px solid rgba(4,17,86,0.19) ;"><i class="fa fa-book" style="font-size: 22px;width: 30px;color: rgb(241,130,0);"></i><span style="font-family: Alatsi, sans-serif;font-size: 18px;">Category</span></li>
    <li class="list-group-item"><i class="fa fa-tag" style="font-size: 22px;width: 30px;color: rgb(241,130,0);"></i><span style="font-family: Alatsi, sans-serif;font-size: 18px;">SubCategory</span></li>
    <li class="list-group-item"><i class="material-icons" style="font-size: 22px;width: 30px;color: rgb(241,130,0);">airline_seat_flat</i><span style="font-family: Alatsi, sans-serif;font-size: 18px;">Post</span></li>
</ul> --}}

<div class="col-sm-4 col-md-4" style="padding-right: 0px;padding-left: 0px;">
    <ul class="list-group" style="box-shadow: 3px 4px 1px rgb(205,216,228);">
        <a href="{{ route('admin') }}" >
            <li class="list-group-item" style="border-bottom: 4px solid rgba(146,144,234,0.61) ;"><i class="fa fa-home" style="font-size: 22px;width: 30px;color: rgb(241,130,0);"></i>
            <span style="font-family: Alatsi, sans-serif;font-size: 18px;">Home</span></li></a>

            <a href="{{route('adminCategory.index') }}">
                <li class="list-group-item" style="border-bottom: 4px solid rgba(146,144,234,0.61) ;"><i class="fa fa-book" style="font-size: 22px;width: 30px;color: rgb(241,130,0);"></i><span style="font-family: Alatsi, sans-serif;font-size: 18px;">Category</span></li>
            </a>

            <a href="{{route('adminSubCategory.index') }}">
                <li class="list-group-item" style="border-bottom: 4px solid rgba(146,144,234,0.61) ;"><i class="fa fa-tag" style="font-size: 22px;width: 30px;color: rgb(241,130,0);"></i><span style="font-family: Alatsi, sans-serif;font-size: 18px;">SubCategory</span></li></a>

        <a href="{{ route('adminPost.index') }}" >
            <li class="list-group-item" style="background: rgb(255, 255, 255);"><i class="material-icons" style="font-size: 22px;width: 30px;color: rgb(241,130,0);">airline_seat_flat</i><span style="font-family: Alatsi, sans-serif;font-size: 18px;">Post</span></li></a>
    </ul>
</div>

{{-- <a href="/" class="list-group-item list-group-item-action">HOME</a>
<a href="{{route('adminCategory.index') }}" class="list-group-item list-group-item-action">CATEGORY</a>

<a href="{{route('adminSubCategory.index') }}" class="list-group-item list-group-item-action">SUB CATEGORY</a>
<a href="#" class="list-group-item list-group-item-action disabled">Disabled item</a> --}}
