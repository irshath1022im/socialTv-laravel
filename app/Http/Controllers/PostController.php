<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    // single post

    public function post($id)
    {
    //    Post::findOrFail($id);
    //    $result = Post::with(['subCategory' => function($query)
    //         {
    //             return $query->with('posts')->take(2);
    //         }])
    //         ->findOrFail($id);

            $post = Post::findOrFail($id);

        return view('post', ['post' => $post]);

    }
}
