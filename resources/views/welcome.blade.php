
@extends('layouts.app')

    @section('content')



        {{-- @livewire('flash-news') --}}
        {{-- @livewire('flash-news2') --}}

        {{-- @livewire('home-category-posts') --}}

        @livewire('home-recent-post')

        @component('components.Home.socialtvAds')

        @endcomponent

        <socialtv-ads >

        </socialtv-ads>


        {{-- @component('components.buySale')

        @endcomponent --}}







    @endsection
