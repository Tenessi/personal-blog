<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class StorePostController extends Controller
{
    public function store(Request $request) {
        {
            $data = $request->validate([
                'title' => ['required', 'string'],
                'content' => ['required', 'string'],
                'category_id' => ['required', 'exists:categories,id']
            ]);

            Post::firstOrCreate($data);

            return redirect()->route('admin.post.index');
        }
    }
}
