<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreCategoryController extends Controller
{
    public function store(Request $request) {
        {
            $data = $request->validate([
                'title' => ['required', 'string']
            ]);

            Category::firstOrCreate($data);

            return redirect()->route('admin.category.index');
        }
    }
}
