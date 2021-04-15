@extends('layouts.admin')

@section('content')



    <form method="POST" action="{{ route('adminAds.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="">Ads For</label>
          <input type="text" name="adsFor" id="" class="form-control" placeholder="ShopName" value="{{ old('adsFor') }}" >
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" name="image" id="" class="form-control-file" placeholder="ImagePath">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
