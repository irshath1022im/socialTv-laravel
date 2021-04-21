@extends('layouts.admin')

    @section('content')

    @component('components.notification')

@endcomponent

    @livewire('admin.categories')


@endsection
