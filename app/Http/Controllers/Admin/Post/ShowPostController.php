<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowPostController extends Controller
{
    public function show(Post $post) {
        {
            return view('admin.post.show', compact('post'));
        }
    }
}
