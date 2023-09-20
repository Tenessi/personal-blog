<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowMainPostController extends Controller
{
    public function show(Post $post) {
        {
            $randomPosts = Post::get()->random(4);
            return view('main.post', compact('post', 'randomPosts'));
        }
    }
}
