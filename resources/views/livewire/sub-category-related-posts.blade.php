<div>
    {{-- Care about people's approval and you will be their prisoner. --}}



    @foreach ($relatedPosts as $item)
        @component('components.postBar1',['post'=>$item])

        {{-- @livewire('post-card', ['post' => $item]) --}}
     {{-- <div class="p-2">
            <h4>{{ $item->title}}</h4>
            <p>{{ str_limit($item->content, 50)}}</p>
              <button type="button" class="btn btn-primary btn-sm" wire:click="$emit('getThePost', {{ $item->id}})">Read Here{{ $item->id }}</button>

        </div> --}}

        {{-- @component('components.postBar1',['post'=>$item])
        @endcomponent --}}

    @endcomponent


    @endforeach

    {{-- <button type="button" class="btn btn-outline-primary">Load More</button> --}}
    {{ $relatedPosts->links()}}

</div>
