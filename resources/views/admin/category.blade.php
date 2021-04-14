@extends('layouts.admin')

@section('content')

    @component('components.notification')

    @endcomponent

    <div>
        <a name="" id="" class="btn btn-primary" href="{{ route('adminCategory.create')}}" role="button">Add New Category</a>
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
               <td><img src="{{Storage::url($item->thumbnail)}}"  class="img-fluid w-25"/></td>
               <td class="d-flex">
                   <a href="{{ route('adminCategory.edit',['adminCategory' => $item->id]) }}" >
                    <button type="button" class="btn btn-primary btn-sm m-1">Edit</button>
                    </a>

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
@endsection
