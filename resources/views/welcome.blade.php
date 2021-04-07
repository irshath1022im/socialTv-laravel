
@extends('layouts.app')

    @section('content')



        {{-- @livewire('flash-news') --}}
        {{-- @livewire('flash-news2') --}}

        {{-- @livewire('home-category-posts') --}}

        @livewire('home-recent-post')

        @component('components.Home.socialtvAds')

        @endcomponent

        {{-- @component('components.buySale')

        @endcomponent --}}







    @endsection
