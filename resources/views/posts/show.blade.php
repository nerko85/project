@extends('layouts.master')

@section('content')

  <div class="col-sm-8 blog-main">

      <h1>{{$post->title}}</h1>

      <p>{{$post->body}}</p>

      @if(count($post->comments))

      <hr>

      <div class="comment">

        <ul class="list-group">

          @foreach($post->comments as $comment)

            <li class="list-group-item">
              <strong>
                {{$comment->created_at->diffForHumans()}}: &nbsp;
              </strong>
              {{$comment->body}}
            </li>

          @endforeach

        </ul>

      </div>

     <hr>
      @endif

      <div class="card">
      <div class="card-body">

        <form action="/{{$post->id}}/comments" method="POST">

          {{ csrf_field() }}

          <div class="form-group">
            <textarea name="body" id="body" class="form-control" placeholder="Enter your comment" required></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Comment</button>
          </div>

        @include('layouts.errors')

        </form>

      </div>
    </div>

  </div><!-- /.blog-main -->

@endsection
