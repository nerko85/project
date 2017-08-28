@extends('layouts.master')

@section('content')

<div class="col-sm-8 blog-main">

  <form action="/posts/new" method="POST">

    {{ csrf_field() }}

    <div class="form-group">
      <label for="title">Title: </label>
      <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="form-group">
      <label for="body">Body: </label>
      <textarea name="body" id="body" class="form-control" required></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Publish</button>
    </div>

  @include('layouts.errors')

  </form>

</div><!-- /.blog-main -->

@endsection
