{{-- @dump($posts) --}}
<div>
    <section class="container, postBar1-section" style="border-style: none;">
        <div style="height: 30px;background: linear-gradient(92deg, rgb(5,30,162) 16%, rgb(4,13,59) 51%), #2256a6;">
            <h5 style="color: rgb(255,255,255);font-family: 'Atomic Age', cursive;font-size: 17px;padding: 5px;margin-right: 3px;margin-left: 22px;">Recent Posts</h5>
        </div>

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
