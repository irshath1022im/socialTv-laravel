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

                {{-- @dump($post->subCategoryId) --}}
                <div style="height: 30px;background: linear-gradient(92deg, rgb(5,30,162) 16%, rgb(4,13,59) 51%), #2256a6;">
                    <h5 style="color: rgb(255,255,255);font-family: 'Atomic Age', cursive;font-size: 17px;padding: 5px;margin-right: 3px;margin-left: 22px;">Related Posts</h5>
                </div>

                @livewire('sub-category-related-posts',['subCategoryId' => $subCategoryId])
            </div>
        </div>


@endsection
