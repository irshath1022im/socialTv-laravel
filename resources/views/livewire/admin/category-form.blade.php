<div>


@if(session()->has('status'))
    <div class="alert alert-success" role="alert">
        {{-- @dump(session()->get('status')) --}}
        <span>{{ session()->get('status')}}</span>
    </div>
@endif



<div class="container">
    {{-- @dump($errors->all()) --}}
    {{-- {{ $formMode}} --}}
    <span class="btn btn-info btn-sm float-right">{{ $formMode}} Mode</span>
<form wire:submit.prevent='saveData'>
    @csrf
    {{-- @if (isset($editCategory))
        @method('PUT')
    @else
        @method('POST')
    @endif --}}

    <div class="form-group">
    <label for="">Category</label>
    <input type="text" name="category" id="category" class="form-control" placeholder="Category"
    {{-- value="{{ old('category', isset($category) ? $category->category : null) }}" --}}
    wire:model.lazy="category"
    >

        @error('category')
            <div class="alert alert-danger" role="alert">
                <strong>{{$message}}</strong>
            </div>
        @enderror

       {{-- @if ($formMode === 'create')

            @if ($thumbnail !== null)
            Photo Preview:
            <img class="w-25" src="{{ $thumbnail->temporaryUrl() }}">
            @endif

       @endif --}}





        {{-- @if (empty($editCategoryId))
            @isset($thumbnail->temporaryUrl() !== null)

            @dump($thumbnail())
            @endisset


        {{-- @else
        <img class="w-25" src="{{Storage::url($thumbnail)}}">
        @endif --}}

        {{ $thumbnail}}


    <div class="border-radios" wire:loading wire:target="thumbnail">Uploading...</div>


    <div class="form-group">
        <label for="">Thumbnail</label>
        <input type="file" name="thumbnail" id="" class="form-control-file" placeholder="Picture"
        wire:model="thumbnail"
        {{-- value="{{ old('thumbnail', isset($category) ? $category->thumbnail : null) }}" --}}
        >
    </div>

    @error('thumbnail')
    <div class="alert alert-danger" role="alert">
        <strong>{{$message}}</strong>
    </div>
@enderror

        {{-- <button type="submit" class="btn btn-primary">Update</button> --}}

        <button type="submit" class="btn btn-primary"  wire:loading.attr="disabled">Add</button>




    </div>
</form>
</div>
</div>
