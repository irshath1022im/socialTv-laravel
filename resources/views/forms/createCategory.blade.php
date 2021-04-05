@extends('layouts.admin')

@section('content')

@component('components.notification')

@endcomponent

<div class="container">

<form method="POST" action="{{ isset($category) ? route('adminCategory.update',['adminCategory'=>$category->id]) : route('adminCategory.store') }}" enctype="multipart/form-data">
    @csrf
    @if (isset($category))
        @method('PUT')
    @else
        @method('POST')
    @endif
    <div class="form-group">
      <label for="">New Category</label>
      <input type="text" name="category" id="category" class="form-control" placeholder="New Category" value="{{ old('category', isset($category) ? $category->category : null) }}">


      <div class="form-group">
        <label for="">Thumbnail</label>
        <input type="file" name="thumbnail" id="" class="form-control-file" placeholder="Picture"
        value="{{ old('thumbnail', isset($category) ? $category->thumbnail : null) }}">
      </div>



        @if (isset($category))
        <button type="submit" class="btn btn-primary">Update</button>
        @else
        <button type="submit" class="btn btn-primary">Add</button>
        @endif



    </div>
</form>
</div>
@endsection
