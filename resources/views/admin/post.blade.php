@extends('layouts.admin')

@section('content')
    @component('components.notification')

    @endcomponent

<section class="post">
    <a name="" id="" class="btn btn-primary" href="{{ route( 'adminPost.create')}}" role="button">New Post</a>

    <ul class="list-group post-lists">

        @foreach ($posts as $post)

        <li class="list-group-item post-list" style="background: rgb(224,224,224);">
            <div class="flex-wrap">
                <p style="font-family: Raleway, sans-serif;font-size: 15PX;padding: 4px;">{{$post->title }}</p>
                <span style="color: rgb(0,95,197);font-family: Raleway, sans-serif;font-size: 14px;text-align: center;">{{$post->created_at->diffForHumans()}}</span>
                <a href="{{ route('adminPost.edit',['adminPost' => $post->id])}}">
                    <i class="fa fa-edit d-inline" style="padding: 8px;width: 30px;color: var(--blue);"></i></a>

                    <form method="post" action="{{ route('adminPost.destroy',['adminPost' => $post->id])}}">
                        @csrf
                        @method('DELETE')

                        <button>
                            <i class="fa fa-remove border-danger" style="padding: 8px;width: 30px;color: var(--red);"></i>
                        </button>
                    </form>

                    <button>{{ $post->subCategory->subCategory }}</button>

            </div>

        </li>
        @endforeach

        {{ $posts->links()}}
        {{-- <li class="list-group-item" style="background: rgb(224,224,224);">
            <div class="flex-wrap">
                <p style="font-family: Raleway, sans-serif;font-size: 15PX;padding: 4px;">Welcome kdto idpost 21kdodsakif lsierkldj ldifdkls dlkdfoakd dlsahfoiek sdkoaskire odskijrfoei dk sjlisdhjfowesi rhjklsdjfowerikdfjoewrjofijewodjnofsk dlesfoiweldksfjaoqakld osawei rewojdlskolkdhjsfow qaekd solharwpoqweirh[ OID POQKF JPJDEIKASI  </p><span style="color: rgb(0,95,197);font-family: Raleway, sans-serif;font-size: 14px;text-align: center;">2021-02-25</span><i class="fa fa-edit d-inline" style="padding: 8px;width: 30px;color: var(--blue);"></i><i class="fa fa-remove border-danger" style="padding: 8px;width: 30px;color: var(--red);"></i>
            </div>
        </li>
        <li class="list-group-item" style="background: rgb(224,224,224);">
            <div class="flex-wrap">
                <p style="font-family: Raleway, sans-serif;font-size: 15PX;padding: 4px;">Welcome kdto idpost 21kdodsakif lsierkldj ldifdkls dlkdfoakd dlsahfoiek sdkoaskire odskijrfoei dk sjlisdhjfowesi rhjklsdjfowerikdfjoewrjofijewodjnofsk dlesfoiweldksfjaoqakld osawei rewojdlskolkdhjsfow qaekd solharwpoqweirh[ OID POQKF JPJDEIKASI  </p><span style="color: rgb(0,95,197);font-family: Raleway, sans-serif;font-size: 14px;text-align: center;">2021-02-25</span><i class="fa fa-edit d-inline" style="padding: 8px;width: 30px;color: var(--blue);"></i><i class="fa fa-remove border-danger" style="padding: 8px;width: 30px;color: var(--red);"></i>
            </div>
        </li> --}}
    </ul>
</section>

@endsection
