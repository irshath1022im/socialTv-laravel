<div>

    {{-- @dump($categoryId) --}}
    {{-- <p class="read">Category ID: {{ $categoryName }}</p> --}}

    @foreach ($posts as $category)

    @foreach ($category->posts as $item)

    <div class="d-flex" style="padding: 1px;margin: 1px;border-style: solid;border-top-style: none;border-right-style: none;border-bottom-style: none;border-left-style: none;background: #cedbde;">

        {{-- @dump($posts) --}}



            @component('components.postBar', ['post' => $item ])

            @endcomponent



    </div>
    @endforeach
    @endforeach



</div>
