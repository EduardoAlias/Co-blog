<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(
                        request(['search', 'category', 'author'])
                    )->paginate(9)->withQueryString()
                    
 /* eloquent method to only show 6 post
            el segundo método nos guarda el query al clicar en la flecha de la siguiente página por ello,
            nos permite guardar la categoría en la que estamos al darle a la flecha */
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
  
   
}
   

        /*
        $posts = Post::latest();
        if(request('search')){
            $posts
               ->where('title', 'like', '%'. request('search') . '%')
               ->orWhere('body', 'like', '%'. request('search') . '%');
           }
           return $posts->get();
          */
