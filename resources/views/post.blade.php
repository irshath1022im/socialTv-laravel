@extends('layouts.app')

@section('content')

        <h3>{{$post->title}}</h3>
        <div>
           <img class="img-fluid w-50" src="{{ Storage::url($post->thumbnail) }}" />
        </div>
        <div>

      {!! $post->content !!}
        </div>
@endsection
