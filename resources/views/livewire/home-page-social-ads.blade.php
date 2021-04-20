{{-- @dump($ads) --}}
<div>
    <div style="height: 40px;background: linear-gradient(92deg, rgb(5,30,162) 16%, rgb(4,13,59) 51%), #2256a6;padding: -3px;">
        <h5 style="color: rgb(255,255,255);font-family: 'Atomic Age', cursive;font-size: 17px;padding: 4px;margin-right: 3px;margin-left: 22px;">SocialTV Ads......</h5>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($ads as $key => $item)

                <div class="carousel-item {{ $key === 0 ? 'active' : null}}">
                    <img class="d-block img-fluid w-100 " src="{{ Storage::url($item->imagePath) }}" alt="First slide" >
                </div>

                @endforeach
            </div>
        {{-- <div class="carousel-item">
            <img class="d-block w-100" src="img\socialtvads2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img\socialtvads3.jpg" alt="Third slide">
          </div> --}}

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
