<div style="padding: 5px; width:430px">
    <div class="d-flex flex-row" style="padding: 0px; width=130px;">
        <img class="img-fluid postBar1-img"
            @if ($post->thumbnail !== null)
            src="{{ Storage::url($post->thumbnail)}}"
            @else
                src="{{ asset('img/Logo.jpg') }}"
            @endif
    >
    <div style="padding: 2px;margin-left: 5px;background: #fefbfb; width=200px"><button class="btn btn-success btn-sm" type="button" style="font-size: 10px;">{{ $post->created_at->diffForHumans()}}</button>
            <h5 style="font-family: 'Arima Madurai', cursive;font-size: 15px;margin-top: 5px;">{{$post->title}}</h5>
            <div class="float-right">

                <a class="btn btn-success btn-sm text-uppercase" role="button" style="font-size: 10px;" href="#">
                    {{ $post->subCategory->category->category}}
                </a>
                <a class="btn btn-success btn-sm text-uppercase" role="button" style="font-size: 10px;margin-left: 4px;" href="#" >
                    {{ $post->subCategory->subCategory}}
                </a>


                {{-- @dump(Str::contains(Request::path(), 'posts' )) --}}
                <a class="btn btn-info btn-sm" role="button" style="font-size: 10px;"
                    @if (Str::contains(Request::path(), 'posts' ))
                        wire:click="$emit('getThePost', {{$post->id }})"
                    @else
                    href="{{ route('post', ['id' => $post->id])}}" target="_blank"
                    @endif
                    >மேலும் படிக்க&nbsp;</a></div>



            {{-- {{ url('/adminPost/'.$post->id)}} --}}

        </div>
    </div>


</div>
