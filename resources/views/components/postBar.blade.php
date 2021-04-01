<div style="padding: 8px;background: #1caedc;border-style: none;">
    <span class="d-block" style="border-style: none;border-bottom: 5px solid rgb(4,40,77);font-family: 'Atomic Age', cursive;">
    Post-{{$post->id}}
</span>
    <span class="d-block" style="font-family: Alatsi, sans-serif;font-size: 12px;">
        {{$post->created_at->diffForHumans()}}
    </span>
</div>

{{-- title --}}
    <div style="padding: 4px; " class="bg-info">
        <h5 style="font-family: Alatsi, sans-serif;font-size: 18px;">
            {{ $post->title}}
        </h5>
        <p style="font-family: Alatsi, sans-serif;font-size: 18px;">
            {{ $post->content}}
        </p>
    </div>

    <div>
            {{-- <span class="btn btn-success btn-sm"> {{ $item->subCategory->category['category'] }}</span> --}}
            <a
            href="{{ route('subCategory', ['category' => $post->subCategoryId ] ) }}" target="_self"
            >
                <span class="btn btn-success btn-sm">
                    {{ $post->subCategory['subCategory'] }}
                </span></a>

                {{-- <span class="btn btn-info btn-sm">PostId:: {{ $item->id }}</span> --}}

    </div>
