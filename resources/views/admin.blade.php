
@extends('layouts.admin')


@section('content')


    @component('components.notification')

    @endcomponent

    <div class="row">


        <div class="col">
          @guest
              <section class="login-clean" style="padding-top: 31px;">
                  <form method="post" action="{{ route('login') }}">
                      @csrf
                      <h2 class="sr-only" style="color: rgb(0,128,255);">Login Form</h2>
                      <div class="illustration"><img src="{{ asset('img/Logo.jpg')}}" style="width: 115px;height: 133px;"></div>
                      <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                      <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                      <div class="form-group">
                          <button class="btn btn-primary btn-block" type="submit">Log In</button></div>
                          <a class="forgot" href="#">Forgot your email or password?</a>
                  </form>
              </section>
          @endguest

          @auth
              <div class="alert alert-info" role="alert">
                  <strong class="text-uppercase">Loged As : {{ Auth::user()->name }}</strong>
              </div>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-sm">LogOut</button>
            </form>

          @endauth

        </div>
    </div>
    @endsection



