@extends('layouts.admin')

@section('content')

@component('components.notification')

@endcomponent

<section>
    <h4 class="text-center">Post Form</h4>
    <form class="postForm" method="POST" action="{{  isset($post) ? route('adminPost.update', ['adminPost' =>$post->id]) : route('adminPost.store')}}" enctype="multipart/form-data">
        @csrf
        @isset($post)
            @method('PUT')
        @endisset

        <input type="text" class="form-control" name="title" placeholder="Title"
            value="{{ old('title', isset($post) ? $post->title : '') }}" />


        <select class="form-control" name="subCategoryId">
            <option value="" selected>selected</option>
            @foreach ($subCategory as $item)
            <option value="{{ $item->id}}"
                @isset($post)
                  {{ $post->subCategoryId  == $item->id ? 'selected' : '' }}
                @endisset

              {{ old('subCategoryId') == $item->id ? 'selected' : '' }}

                >
                {{$item->subCategory}}</option>
            @endforeach
        </select>

        {{-- @if(old('subCategoryId'))
            @dump(old())
        @endif --}}

        <label>Where you want display this post ?</label>

        <div class="form-check">
            {{-- {{  $post->postType}} --}}



        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="postType" id="" value="post"
            @isset($post)
            {{ $post->postType === 'post' ? 'checked' : ''}}
        @endisset

        {{ old('postType') == 'post' ? 'checked' : '' }}
            >
       Post
        </label>
    </br>
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="postType" id="" value="trending"
                @isset($post)
                    {{ $post->postType === 'trending' ? 'checked' : ''}}
                @endisset

                {{ old('postType') == 'trending' ? 'checked' : '' }}
                >
            Trending
          </label>
          <br/>
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="postType" id="" value="mostvisited"
            @isset($post)
            {{ $post->postType === 'mostvisited' ? 'checked' : ''}}
        @endisset
        {{ old('postType') == 'mostvisited' ? 'checked' : '' }}
        >
        Most Visited
      </label>
    </br>
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="postType" id="" value="alert"
        @isset($post)
            {{ $post->postType === 'alert' ? 'checked' : ''}}
        @endisset
        {{ old('postType') == 'alert' ? 'checked' : '' }}
         >
   Alert
  </label>
</br>

<label class="form-check-label">
    <input type="radio" class="form-check-input" name="postType" id="" value="mostfocused"
    @isset($post)
    {{ $post->postType === 'mostfocused' ? 'checked' : ''}}
@endisset
{{ old('postType') == 'mostfocused' ? 'checked' : '' }}
    >
Most Focus
</label>

</div>

    </br>

        <div class="form-group">
          <label for="">Content</label>
          <textarea class="form-control" name="content" id="" rows="15">{{ old('content', isset($post) ? $post->content : '')}}</textarea>
        </div>



        <input type="file" name="thumbnail" class="form-control-file" style="padding: 6px;padding-bottom: 7px;" />

        <button class="btn btn-primary" type="submit">Submit</button></form>
</section>
@endsection
