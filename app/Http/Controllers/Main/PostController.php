<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __invoke($postId, $postUrl)
    {

        $posts = Post::findOrFail($postId);
        return view('main.post', compact('posts'));
    }
}
