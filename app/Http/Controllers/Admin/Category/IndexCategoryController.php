<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexCategoryController extends Controller
{
    public function create() {
        {
            $categories = Category::all();

            return view('admin.category.index', compact('categories'));
        }
    }
}
