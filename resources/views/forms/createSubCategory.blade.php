@extends('layouts.admin')

@section('content')

@component('components.notification')

@endcomponent

{{-- @dump($categoryList) --}}
<div class="container">

<form method="POST"
    action="{{ isset($subCategory) ? route('adminSubCategory.update',['adminSubCategory'=>$subCategory->id]) : route('adminSubCategory.store') }}"
    enctype="multipart/form-data">
    @csrf
    @if (isset($subCategory))
        @method('PUT')
    @else
        @method('POST')
    @endif

    <div class="form-group">
      <label for="">SubCategory</label>
      <input type="text" name="subCategory" id="subCategory" class="form-control" placeholder="SubCategory"
      value="{{ old('subCategory', isset($subCategory) ? $subCategory->subCategory : null) }}">


        <div class="form-group">
          <label for="">Category</label>
          <select class="form-control" name="categoryId" id="">
            <option value="">Select</option>
            @foreach ($categoryList as $item)
            <option value="{{$item->id}}"
                @isset($subCategory)
                    {{ $subCategory -> id === $item->id ? 'selected' : null}}
                @endisset

                {{ old('categoryId') == $item->id ? 'selected' : '' }}
                >
                {{ $item->category }}
            </option>
            @endforeach
          </select>
        </div>


      <div class="form-group">
        <label for="">Thumbnail</label>
        <input type="file" name="thumbnail" id="" class="form-control-file" placeholder="Picture"
            value="{{ old('thumbnail', isset($subCategory) ? $subCategory->thumbnail : null) }}">
      </div>



        @if (isset($subCategory))
        <button type="submit" class="btn btn-primary">Update</button>
        @else
        <button type="submit" class="btn btn-primary">Add</button>
        @endif



    </div>
</form>
</div>
@endsection
