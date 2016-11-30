@extends('layout')

@section('content')
  <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
          <div class="top-right links">
              @if (Auth::check())
                  <a href="{{ url('/home') }}">Home</a>
              @else
                  <a href="{{ url('/login') }}">Login</a>
                  <a href="{{ url('/register') }}">Register</a>
              @endif
          </div>
      @endif

      <div class="content row">
          <div class="title m-b-md">
              <h1>Cards</h1>
              <h4 class="text-success">{{ $card->title }}</h4>
              <h3>Hints</h3>
              <ul class="list-group col-md-6">
                @foreach ($card->hints as $hint)
                  <li class="list-group-item">{{$hint->body}}</li>
                @endforeach
              </ul>
          </div>
      </div>
  </div>
@stop
