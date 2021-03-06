@extends('layouts.admin')

@section('content')

    @component('components.notification')

    @endcomponent
    {{-- @dump($subCategory) --}}
    <div>
        <a name="" id="" class="btn btn-primary" href="{{ route('adminSubCategory.create')}}" role="button">Add New Category</a>
    </div>
   <table class="table">
       <thead>
           <tr>
               <th>#</th>
               <th>Sub Category</th>
               <th>Category</th>
               <th>Thumbnail</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($subCategory as $item)

           <tr>
               <td scope="row">{{ $item->id}}</td>
               <td>{{ $item->subCategory}}</td>
               <td>{{ $item->category['category']}}</td>
               <td><img src="{{Storage::url($item->thumbnail)}}"  class="img-fluid w-25"/></td>
               <td class="d-flex">
                   <a href="{{ route('adminSubCategory.edit', ['adminSubCategory' => $item->id]) }}" >
                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                   </a>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </td>

                {{-- <td>
                    <form method="post"
                    action="{{route('adminCategory.destroy', ['adminCategory' => $item->id])}}" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</a>
                        </button>
                    </form>
                </td> --}}

           </tr>
           @endforeach
       </tbody>
   </table>
@endsection
