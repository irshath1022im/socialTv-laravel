@extends('layouts.app')

@section('content')

        <h3>{{$post->title}}</h3>
        <div>
           <img class="img-fluid w-50" src="{{ Storage::url($post->thumbnail) }}" />
        </div>

        <div>

      {!! $post->content !!}
        </div>

        <div class="fb-share-button"
        data-href=" {{ url('http://www.socialtv24.info/adminPost/'.$post->id)}}"
        data-layout="button_count">
        </div>

        <example-component></example-component>
@endsection
