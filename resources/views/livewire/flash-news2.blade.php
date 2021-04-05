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
              @foreach ($posts as $post)

              @component('components.postBar', ['post' => $post ])

              @endcomponent

              @endforeach
          </div>


        </div>
        <!-- End rounded tabs -->
      </div>
</div>

