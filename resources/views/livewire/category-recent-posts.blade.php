<div>

    {{-- @dump($categoryId) --}}
    <p class="read">Category ID: {{ $categoryName }}</p>

    @foreach ($posts as $category)

    @foreach ($category->posts as $item)

    <div class="d-flex" style="padding: 1px;margin: 1px;border-style: solid;border-top-style: none;border-right-style: none;border-bottom-style: none;border-left-style: none;background: #cedbde;">

        {{-- @dump($posts) --}}



            <div style="padding: 8px;background: #1caedc;border-style: none;">
                <span class="d-block" style="border-style: none;border-bottom: 5px solid rgb(4,40,77);font-family: 'Atomic Age', cursive;">25</span>
                <span class="d-block" style="font-family: Alatsi, sans-serif;font-size: 12px;">
                    {{$item->created_at->diffForHumans()}}
                </span>
            </div>

        {{-- title --}}
                <div style="padding: 4px;">
                    <h5 style="font-family: Alatsi, sans-serif;font-size: 18px;">
                        {{ $item->title}}
                    </h5>
                    <h5 style="font-family: Alatsi, sans-serif;font-size: 14px;">
                        {{ $item->content}}
                    </h5>
                </div>

                <div>
                        {{-- <span class="btn btn-success btn-sm"> {{ $item->subCategory->category['category'] }}</span> --}}
                        <a
                        {{-- href="{{ route('subCategory', ['category' => $item->subCategoryId ] ) }}" target="_self" --}}
                        >
                            <span class="btn btn-info btn-sm">
                                {{-- {{ $item->subCategory['subCategory'] }} --}}
                            </span></a>
                            {{-- <span class="btn btn-info btn-sm">PostId:: {{ $item->id }}</span> --}}

                </div>



    </div>
    @endforeach
    @endforeach



</div>
