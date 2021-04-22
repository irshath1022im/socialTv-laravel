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

    <div class="form-group">
    <label for="">Category</label>
    <input type="text" name="category" id="category" class="form-control" placeholder="Category"
    wire:model.lazy="category"
    >

        @error('category')
            <div class="alert alert-danger" role="alert">
                <strong class="text-small">{{$message}}</strong>
            </div>
        @enderror

       @if ($formMode === 'create')
            @if ($thumbnail)
            Photo Preview:
            <img class="w-25" src="{{ $thumbnail->temporaryUrl() }}">
            @endif
       @endif

       @if ($formMode === 'edit')
            @if ($oldThumbnail)
            Previous Thumbnail:
            <img class="w-25" src="{{ Storage::url($oldThumbnail)}}">
            @endif

            {{-- @dump($thumbnail) --}}

            @if ($thumbnail !== $oldThumbnail)
            <br/>
                New Thumbnail
                <img class="w-25" src="{{ $thumbnail->temporaryUrl() }}">
                @endif
        @endif

    <div class="border-radios" wire:loading wire:target="thumbnail">
        <div class="alert alert-light" role="alert">
            <strong class="text-small">Uploading</strong>
        </div>
    </div>

    <div class="form-group">
        <label for="">Thumbnail</label>
        <input type="file" name="thumbnail" id="" class="form-control-file" placeholder="Picture"
        wire:model="thumbnail"
        >
    </div>

    @error('thumbnail')
    <div class="alert alert-danger" role="alert">
        <strong class="text-small">{{$message}}</strong>
    </div>
@enderror

        {{-- <button type="submit" class="btn btn-primary">Update</button> --}}

        <button type="submit" class="btn btn-primary"
        wire:loading.attr="disabled">{{ $formMode === 'create' ? 'Add' : 'Update'}}</button>

    </div>
</form>
</div>
</div>
