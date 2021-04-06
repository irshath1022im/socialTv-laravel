<div>
    <div class="p-5 bg-white rounded shadow mb-5">
        <!-- Rounded tabs -->
        {{-- {{ $activeTap}} --}}
        <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">

            <li class="nav-item flex-sm-fill" wire:click="getPosts('ourproduct')">
                <a id="ourproduct-tab" data-toggle="tab" href="#ourproduct" role="tab" aria-controls="ourproduct" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold {{ $activeTap === 'ourproduct' ? 'active' : ''}}">ourproduct</a>
              </li>

            <li class="nav-item flex-sm-fill" wire:click="getPosts('trending')">
            <a id="trending-tab" data-toggle="tab" href="#trending" role="tab" aria-controls="trending" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold {{ $activeTap === 'trending' ? 'active' : ''}}">Trending</a>
          </li>

          <li class="nav-item flex-sm-fill" wire:click="getPosts('mostfocus')">
            <a id="mostfocus-tab" data-toggle="tab" href="#mostfocus" role="tab" aria-controls="mostfocus" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold {{ $activeTap === 'mostfocus' ? 'active' : ''}}">mostfocus</a>
          </li>

          <li class="nav-item flex-sm-fill" wire:click="getPosts('alert')">
            <a id="alert-tab" data-toggle="tab" href="#alert" role="tab" aria-controls="alert" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold {{ $activeTap === 'alert' ? 'active' : ''}}">alert</a>
          </li>

          <li class="nav-item flex-sm-fill" wire:click="getPosts('mostvisited')">
            <a id="mostvisited-tab" data-toggle="tab" href="#mostvisited" role="tab" aria-controls="mostvisited" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold {{ $activeTap === 'mostvisited' ? 'active' : ''}}">mostvisited</a>
          </li>
        </ul>

        <div id="myTabContent" class="tab-content">

            {{-- {{$activeTap}} --}}
            {{-- @dump($posts) --}}

          <div id="{{$activeTap}}" role="tabpanel" aria-labelledby="{{$activeTap}}-tab" class="tab-pane fade px-4 py-5 show
           active">
              {{-- @foreach ($posts as $post)

              @component('components.postBar', ['post' => $post ])

              @endcomponent

              @endforeach --}}

              <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4" style="border-style: none;padding-right: 0px;padding-left: 0px;">

                            <div data-ride="carousel" class="carousel slide" id="carousel-1" style="height: 200px;border-style: none;padding: 0px;max-height: 200px;">
                                <div class="carousel-inner" style="width: 100%;height: 100%;">

                                    @foreach ($posts as $key=>$post)

                                    <div class="carousel-item {{ $key == 1 ? 'active' : '' }} " style="height: 100%; background: url('{{ Storage::url($post->thumbnail) }}') center / contain no-repeat;">
                                        <h5 class="border rounded-0" style="background: #a6a3a3;padding: 6px;font-family: Raleway, sans-serif;font-size: 18px;position: absolute;bottom: 0;opacity: 0.70;color: rgb(227,0,0);">{{ $post->title}} </h5>
                                    </div>
                                   @endforeach

                                </div>

                                <div><a href="#carousel-1" role="button" data-slide="prev" class="carousel-control-prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a href="#carousel-1" role="button" data-slide="next" class="carousel-control-next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-1" data-slide-to="1"></li>
                                    <li data-target="#carousel-1" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>




                        <div class="col-sm-6 col-md-6 offset-md-0" style="border-style: none;border-color: var(--purple);border-right-style: none;">
                            @foreach ($posts as $key=>$post)

                            <div class="d-flex" style="padding: 1px;margin: 1px;border-style: solid;border-top-style: none;border-right-style: none;border-bottom-style: none;border-left-style: none;background: #cedbde;">
                                <div style="padding: 8px;background: #1caedc;border-style: none;">
                                    <span class="d-block" style="border-style: none;border-bottom: 5px solid rgb(4,40,77);font-family: 'Atomic Age', cursive;">25</span><span class="d-block" style="font-family: 'Atomic Age', cursive;">March</span></div>
                                <div style="padding: 4px;">
                                    <h5 style="font-family: Alatsi, sans-serif;font-size: 18px;">
                                    {{$post->content}}</h5>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </section>
          </div>


        </div>
        <!-- End rounded tabs -->
      </div>
</div>

