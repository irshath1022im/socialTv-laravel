{{-- @dump($posts) --}}
<div>
    <section class="container, postBar1-section" style="border-style: none;">

            @component('components.titleBar', ['title' => 'RecentPosts'])

            @endcomponent
            {{-- <div id="fb-root">

            </div> --}}


            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div class="d-flex flex-wrap justify-content-around" style="border-style: none;padding: 0px;padding-right: 0px;padding-left: 0px;">

                        @foreach ($posts as $post)

                            @component('components.postBar1',['post'=>$post])

                            @endcomponent


                        @endforeach

                    </div>

                {{$posts->links()}}
                </div>

                <div class="col-sm-12 col-md-4">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSocial-TV-100534564952329&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                </div>
            </div>

    </section>
</div>
