@extends('layouts.admin')


@section('content')
@component('components.notification')
@endcomponent
    <div>
        <div><a href="{{ route('adminAds.create') }}" class="btn btn-primary active" role="button">New Ads</a></div>

        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Ads For</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ads as $item)

                <tr>
                    <td scope="row">{{ $item->adsFor }}</td>
                    <td><img class="w-25 img-fluid" src="{{ Storage::url($item->imagePath) }}" /></td>
                    <td class="d-flex">
                        <button type="button" class="btn btn-primary btn-sm mr-2">Edit</button>
                        <form method="post" action="{{ route('adminAds.destroy',['adminAd'=>$item->id])}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
