<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexMainController extends Controller
{
    public function create() {
        {
            $posts = Post::all();

            return view('main.index', compact('posts'));
        }
    }
}
