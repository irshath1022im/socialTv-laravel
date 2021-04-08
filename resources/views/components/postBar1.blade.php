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
            <div class="float-right"><a class="btn btn-success btn-sm" role="button" style="font-size: 10px;" href="#" target="_blank">CATEGORY</a><a class="btn btn-success btn-sm" role="button" style="font-size: 10px;margin-left: 4px;" href="#" target="_blank">{{ $post->subCategoryId}}</a><a class="btn btn-info btn-sm" role="button" style="font-size: 10px;" href="{{ route('adminPost.show' ,['adminPost'=>$post->id])}}" target="_blank">மேலும் படிக்க&nbsp;</a></div>

            <div class="fb-share-button"
            data-href="http://localhost:8000/adminPost/106"
            data-layout="button_count">
            </div>

        </div>
    </div>


</div>
