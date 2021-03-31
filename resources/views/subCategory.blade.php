{{-- @dump($subCategoryPosts) --}}
@extends('layouts.app')


@section('content')
<div>

@forelse ($subCategoryPosts as $item)


    <figure class="snip1253">
        <div class="image">
            {{-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample52.jpg" alt="sample52"/> --}}
            <img src={{ $item->thumbnail}} alt="sample52"/>
        </div>

        <figcaption>
        <div class="date"><span class="day">28</span><span class="month">Oct</span></div>
        <h3>{{ $item->title}}</h3>
        <p>
            {{ $item->content}}
        </p>
        </figcaption>

  </figure>
</div>
    @empty
        <div>No Data Found....</div>
    @endforelse

  {{-- <figure class="snip1253 hover">
    <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample66.jpg" alt="sample66"/></div>
    <figcaption>
      <div class="date"><span class="day">17</span><span class="month">Nov</span></div>
      <h3>An Abstract Post Heading</h3>
      <p>
        Sometimes the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us.
      </p>
    </figcaption>
    <footer>
      <div class="views"><i class="ion-eye"></i>1,870</div>
      <div class="love"><i class="ion-heart"></i>973</div>
      <div class="comments"><i class="ion-chatboxes"></i>85</div>
    </footer><a href="#"></a>
  </figure>
  <figure class="snip1253">
    <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample59.jpg" alt="sample59"/></div>
    <figcaption>
      <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
      <h3>Down with this sort of thing</h3>
      <p>
        I don't need to compromise my principles, they don't have the slightest bearing on what happens to me anyway.
      </p>
    </figcaption>
    <footer>
      <div class="views"><i class="ion-eye"></i>928</div>
      <div class="love"><i class="ion-heart"></i>198</div>
      <div class="comments"><i class="ion-chatboxes"></i>23</div>
    </footer><a href="#"></a>
  </figure> --}}
  <hr/>
  <div>
  {{ $subCategoryPosts->links()}}
  </div>
@endsection
