@extends('layouts.app')


@section('content')

    {{-- @foreach ($data as $item)
      @foreach ($item as $post)
          @dump($post->full_picture)
      @endforeach

    @endforeach --}}

    @foreach ($data as $key=>$item)

        @dump($item[])
  @endforeach

@endsection
