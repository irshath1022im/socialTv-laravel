{{-- @dump($posts) --}}
<div>
    <section class="container, postBar1-section" style="border-style: none;">

            @component('components.titleBar', ['title' => 'RecentPosts'])

            @endcomponent
            {{-- <div id="fb-root">

            </div> --}}



            <div class="d-flex flex-wrap justify-content-around" style="border-style: none;padding: 0px;padding-right: 0px;padding-left: 0px;">

                @foreach ($posts as $post)

                    @component('components.postBar1',['post'=>$post])

                    @endcomponent


                @endforeach

            </div>

        {{$posts->links()}}
    </section>
</div>
