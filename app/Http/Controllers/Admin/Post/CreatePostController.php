<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CreatePostController extends Controller
{
    public function create() {
        {
            $categories = Category::all();
            return view('admin.post.create', compact('categories'));
        }
    }
}
