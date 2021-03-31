@extends('layouts.app')

@section('content')
    @dump($news)

    @component('components.flashNews', ['category' => $result, 'topNews' => $topNews])

        @endcomponent
@endsection
