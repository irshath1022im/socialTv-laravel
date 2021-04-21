<div>

    <button type="button" class="btn btn-primary"  wire:click="createCategory">
        Add New Category
      </button>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Category</th>
                <th>Thumbnail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)

            <tr>
                <td scope="row">{{ $item->id}}</td>
                <td>{{ $item->category}}</td>
                {{-- @dump($item->thumbnail) --}}
                <td><img src="{{Storage::url($item->thumbnail)}}"  class="img-fluid w-25"/></td>
                <td class="d-flex">
                    {{-- <a href="{{ route('adminCategory.edit',['adminCategory' => $item->id]) }}" >
                     <button type="button" class="btn btn-primary btn-sm m-1">Edit</button>
                     </a> --}}


                     <button type="button" class="btn btn-primary btn-sm m-1" wire:click="editCategoryRequest({{ $item->id}})">Edit</button>

                     <form method="post"
                     action="{{route('adminCategory.destroy', ['adminCategory' => $item->id])}}" >
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-danger btn-sm m-1">Delete</a>
                         </button>
                     </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

      <!-- Modal for form-->


   <div class="modal fade" id="categoryForm" tabindex="-1" role="dialog" aria-labelledby="categoryForm" aria-hidden="true" data-backdrop="false" >
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">category</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeCategoryForm">
            <span aria-hidden="true">&times;</span>
        </button>

        </div>
        <div class="modal-body">
           @livewire('admin.category-form')
        </div>
    </div>
    </div>
</div>



</div>
