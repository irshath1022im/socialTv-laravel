
@extends('layouts.admin')


@section('content')


    @component('components.notification')

    @endcomponent

    <div class="row">
        <div class="col">
            <section class="login-clean" style="padding-top: 31px;">
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <h2 class="sr-only" style="color: rgb(0,128,255);">Register Form</h2>
                    <div class="illustration">
                        <img src="{{ asset('img/Logo.jpg')}}" style="width: 115px;height: 133px;"></div>

                    <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Name"></div>

                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email"></div>

                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Register</button></div>
                </form>
            </section>
        </div>
    </div>
    @endsection
