@extends('layout')

@section('content')
<div class="main container">
  <div class="content row">
    <div class="title m-b-md">
        <h1>Edit Hints</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="title m-b-md">
        <hr>
        <h2>Add New Hint</h2>
      </div>
      <form action="/hints/{{ $hint->id }}" method="post">
        {{ method_field('patch') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <textarea name="body" rows="8" class="form-control">{{$hint->body}}</textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-primary" type="submit" name="add_card">Update Hint</button>
        </div>
      </form>
    </div>
  </div>
</div>
@stop
