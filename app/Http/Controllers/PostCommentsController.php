<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
  //Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);
    //we are finding the {post:slug} so we pass that on the parameters
    //add a comment to the post
class PostCommentsController extends Controller
{
    public function store(Post $post)
    {
        request()->validate([
            'body' => 'required'
        ]);

        $post->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        return back();
    }
}
 

     //redirect