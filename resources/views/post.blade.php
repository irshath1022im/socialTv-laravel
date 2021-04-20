@extends('layouts.app')

@section('content')

        <div class="row">

            {{-- post colum--}}

            <div class="col-md-8">
                {{-- @dump($subCategoryId) --}}

                @livewire('single-post', ['postId' => $postId])

            </div>

   {{-- sub-category-related-posts --}}



            <div class="col-md-4">

                @component('components.titleBar', ['title' => 'Related Post'])

                @endcomponent

                @livewire('sub-category-related-posts',['subCategoryId' => $subCategoryId])

            </div>
        </div>


@endsection
