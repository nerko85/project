<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
      $this->validate(request(),[
        'body' => 'required|min:5'
      ]);


      // Comment::create([
          //   'body' => request('body'),
          //   'post_id' => $post->id;
          // ]);

    // $post->publish(request('body'));

    $post->publish(new Comment(request(['body'])));


    // Comment::create([
    //   'body' => request('body'),
    //   'post_id' => $post->id
    // ]);

    return back();

    }
}
