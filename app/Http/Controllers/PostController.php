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
        $result = Post::findOrFail($id);
        return view('post', ['post' => $result]);

    }
}
