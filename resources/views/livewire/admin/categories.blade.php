<div>

    <button type="button" class="btn btn-primary"  wire:click="createCategory" wire:loading.attr="disabled">
        Add New Category
      </button>


      <div wire:loading wire:target="closeCategoryForm">
        <div class="alert alert-info" role="alert">
            <strong>Updating Categories....</strong>
        </div>
      </div>


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
                     <button type="button" class="btn btn-primary btn-sm m-1"
                     wire:click="editCategoryRequest({{ $item->id}})">
                     Edit</button>

                     <button type="submit" class="btn btn-danger btn-sm m-1"
                     wire:click='deleteCategoryRequest({{$item->id}})'>Delete</button>
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

     <!-- Modal for delete-->


   <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true" data-backdrop="false" >
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeCategoryForm">
            <span aria-hidden="true">&times;</span>
        </button>

        </div>
        <div class="modal-body">

           Do You want process ? {{ $deleteCategoryId}}
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-primary" wire:click="deleteCategory">Delete</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="closeCategoryForm">Close</button>
          </div>
    </div>
    </div>
    </div>

</div>

