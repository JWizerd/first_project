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
                  <li class="list-group-item">
                    {{$hint->body}}
                    <a href="#"> - {{$hint->user->username}}</a>
                    <a class="text-right" href="/hints/{{$hint->id}}/edit">edit</a>
                  </li>
                @endforeach
              </ul>
          </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="title m-b-md">
              <hr>
              <h2>Add New Hint</h2>
          </div>
          <form action="/cards/{{$card->id}}/hints" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <textarea name="body" rows="8" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit" name="add_card">Add Hint</button>
            </div>
          </form>
          @if (count($errors))
            <ul>
              @foreach ($errors->all() as $error)
                <li class="text-danger">{{$error}}</li>
              @endforeach
            </ul>
          @endif
        </div>
      </div>
  </div>
@stop
