<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    @foreach ($relatedPosts as $item)
    @component('components.postBar1',['post'=>$item])
    @endcomponent

    @endforeach

</div>
