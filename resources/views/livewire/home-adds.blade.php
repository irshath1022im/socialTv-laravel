
{{-- @dump($homeAdds) --}}
<div>

    <div class="p6 bg-primary text-uppercase">
        <h6>Category Bar</h6>
    </div>

    <div class="row">
        @foreach($homeAdds as $item)

        <div class="col-sm-6 col-md-4">
            <div class="box">
                <img src="https://source.unsplash.com/daily/300x300" alt="Desmond" wire:click="$emit('getCategoryPosts', {{ $item->id}})"/>
                <div class="box-heading">
                    <h4 class="title text-uppercase" style="color:#333333;">{{ $item->category}}</h4>
                    {{-- <span class="post" style="color:#333333;">web designer</span> --}}
                </div>

                <div class="boxContent">
                   @livewire('category-recent-posts')
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
        {{-- <div class="col-sm-6 col-md-4">
            <div class="box"><img src="img-2.jpg" alt="Lee-Ann" />
                <div class="box-heading">
                    <h4 class="title" style="color:#333333;">Lee-Ann</h4><span class="post" style="color:#333333;">Sales Manager</span>
                </div>
                <div class="boxContent">
                    <p class="description" style="color:#333333;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae libero orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed vestibulum.</p><a class="read" href="#">Read more<i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="box"><img src="img-3.jpg" alt="John-John" />
                <div class="box-heading">
                    <h4 class="title" style="color:#333333;">John-John</h4><span class="post" style="color:#333333;">web developer</span>
                </div>
                <div class="boxContent">
                    <p class="description" style="color:#333333;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae libero orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed vestibulum.</p><a class="read" href="#">Read more<i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div> --}}

