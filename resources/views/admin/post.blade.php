@extends('layouts.admin')

@section('content')
    @component('components.notification')

    @endcomponent

<section class="">
    <a name="" id="" class="" href="{{ route( 'adminPost.create')}}" role="button">New Post</a>

    <table class="table table-bordered table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>Post Id</th>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>

    @foreach ($posts as $post)
                <tr>
                    <td scope="row">{{ $post->id}}</td>
                    <td><img class ="w-25" src="{{ Storage::url($post->thumbnail)}}"/></td>
                    <td>{{ $post->title}}</td>
                    <td>{{ $post->created_at->diffForHumans()}}</td>
                    <td class="d-flex flex-wrap">
                        <a class="mr-2" href="{{ route('adminPost.edit',['adminPost' => $post->id])}}">
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        </a>

                        <form method="post" action="{{ route('adminPost.destroy',['adminPost' => $post->id])}}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                        </form>


                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>

    {{-- @foreach ($posts as $post)
    <div class="row p-2">
        <div class="col-1">
            <span>{{ $post->id}}</span>
        </div>
        <div class="col-1">
            <span><img class ="w-25" src="{{ Storage::url($post->thumbnail)}}"/></span>
        </div>
        <div class="col">
                <p>{{ $post->title}}</p>
                 <div class="d-flex">
                    <span class="btn btn-primary btn-sm text-muted text-small">{{ $post->subCategory->subCategory }}</span>
                    <span class="bg-info text-muted text-small">{{ $post->created_at->diffForHumans()}}</span>
                    <span class="bg-info text-muted text-small">{{ $post->updated_at ->diffForHumans()}} </span>
                 </div>
        </div>
        <div class="col-1 d-flex">
            <button type="button" class="btn btn-primary btn-sm">Edit</button>
            <button type="button" class="btn btn-danger btn-sm">Remove</button>
        </div>
    </div>
    <hr/>
    @endforeach --}}

    {{ $posts->links()}}


    {{-- <ul class="">

        @foreach ($posts as $post)

        <li class="" >
            <div >
                <p >{{$post->title }}</p>
                <spa>{{$post->created_at->diffForHumans()}}</span>
                <a href="{{ route('adminPost.edit',['adminPost' => $post->id])}}">
                    <i class="fa fa-edit d-inline" style="padding: 8px;width: 30px;color: var(--blue);"></i></a>

                    <form method="post" action="{{ route('adminPost.destroy',['adminPost' => $post->id])}}">
                        @csrf
                        @method('DELETE')

                        <button type="submit">
                          Remove
                        </button>
                    </form>

                    <button>{{ $post->subCategory->subCategory }}</button>

            </div>

        </li>
        @endforeach

        {{ $posts->links()}}

    </ul> --}}
</section>

@endsection
