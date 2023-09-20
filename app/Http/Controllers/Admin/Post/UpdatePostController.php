<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdatePostController extends Controller
{
    public function edit(Request $request, Post $post) {
        {
            $data = $request->validate([
                'title' => ['required', 'string'],
                'content' => ['required', 'string'],
                'category_id' => ['required', 'exists:categories,id']
            ]);

            $post->update($data);

            return view('admin.post.show', compact('post'));
        }
    }
}
