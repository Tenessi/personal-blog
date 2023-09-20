<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class UpdateCategoryController extends Controller
{
    public function edit(Request $request, Category $category) {
        {
            $data = $request->validate([
                'title' => ['required', 'string']
            ]);

            $category->update($data);

            return view('admin.category.show', compact('category'));
        }
    }
}
