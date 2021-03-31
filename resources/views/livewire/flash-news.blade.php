   {{-- @dump($posts) --}}
<div class="row">

    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4" style="border-style: none;padding-right: 0px;padding-left: 0px;">

        <div data-ride="carousel" class="carousel slide" id="carousel-1" style="height: 200px;border-style: none;padding: 0px;max-height: 200px;">
            <div class="carousel-inner" style="width: 100%;height: 100%;">

                @foreach ($posts as $item)

                <div class="carousel-item " style="height: 100%; ">
                    <h5 class="border rounded-0" style="background: #a6a3a3;padding: 6px;font-family: Raleway, sans-serif;font-size: 18px;position: absolute;bottom: 0;opacity: 0.70;color: rgb(227,0,0); background-image-url="(https://picsum.photos/200/300?random=1)";>{{ $item->title}}</h5>
                </div>
                @endforeach
            </div>

            <div>
                <a href="#carousel-1" role="button" data-slide="prev" class="carousel-control-prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a href="#carousel-1" role="button" data-slide="next" class="carousel-control-next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
            </ol>
        </div>
    </div>
    {{-- colum 2 --}}
    <div class="col-sm-6 col-md-6 offset-md-0" style="border-style: none;border-color: var(--purple);border-right-style: none;">

        @foreach ($posts as $item)
        {{-- @dump($item->created_at->diffForHumans()) --}}
        <div class="d-flex" style="padding: 1px;margin: 1px;border-style: solid;border-top-style: none;border-right-style: none;border-bottom-style: none;border-left-style: none;background: #cedbde;">

            <div style="padding: 8px;background: #1caedc;border-style: none;">
                {{-- <span class="d-block" style="border-style: none;border-bottom: 5px solid rgb(4,40,77);font-family: 'Atomic Age', cursive;">25</span> --}}
                <span class="d-block" style="font-family: Alatsi, sans-serif;font-size: 12px;">{{$item->created_at->diffForHumans()}}</span>
            </div>

            {{-- title --}}
            <div style="padding: 4px;">
                <h5 style="font-family: Alatsi, sans-serif;font-size: 18px;">{{ $item->title}}</h5>
                <h5 style="font-family: Alatsi, sans-serif;font-size: 14px;">{{ $item->content}}</h5>
            </div>

            <div>
                    {{-- <span class="btn btn-success btn-sm"> {{ $item->subCategory->category['category'] }}</span> --}}
                    <a href="{{ route('subCategory', ['category' => $item->subCategoryId ] ) }}" target="_self">
                        <span class="btn btn-info btn-sm">{{ $item->subCategory['subCategory'] }}</span></a>
                        {{-- <span class="btn btn-info btn-sm">PostId:: {{ $item->id }}</span> --}}

            </div>

        </div>
        @endforeach
        {{-- end of posts --}}

        {{-- <div class="d-flex" style="padding: 1px;margin: 1px;border-style: solid;border-top-style: none;border-right-style: none;border-bottom-style: none;border-left-style: none;background: #cedbde;">
            <div style="padding: 8px;background: #1caedc;border-style: none;"><span class="d-block" style="border-style: none;border-bottom: 5px solid rgb(4,40,77);font-family: 'Atomic Age', cursive;">25</span><span class="d-block" style="font-family: 'Atomic Age', cursive;">March</span></div>
            <div style="padding: 4px;">
                <h5 style="font-family: Alatsi, sans-serif;font-size: 18px;">dkikdik dkiekdfoemk dlidkddl fld fosk dlfoiaesrf dski</h5>
            </div>
        </div>
        <div class="d-flex" style="padding: 1px;margin: 1px;border-style: solid;border-top-style: none;border-right-style: none;border-bottom-style: none;border-left-style: none;background: #cedbde;">
            <div style="padding: 8px;background: #1caedc;border-style: none;"><span class="d-block" style="border-style: none;border-bottom: 5px solid rgb(4,40,77);font-family: 'Atomic Age', cursive;">25</span><span class="d-block" style="font-family: 'Atomic Age', cursive;">March</span></div>
            <div style="padding: 4px;">
                <h5 style="font-family: Alatsi, sans-serif;font-size: 18px;">dkikdik dkiekdfoemk dlidkddl fld fosk dlfoiaesrf dski</h5>
            </div> --}}
        {{-- </div> --}}
    </div>
</div>
