<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRegisterController extends Controller
{
    public function create() {
        {
            return view('admin/auth/register');
        }
    }

    public function store(Request $request) {
        {
            $request->validate([
                'name' => ['required', 'string'],
                'email' => ['required', 'string', 'email', 'unique:users'],
                'password' => ['required', 'confirmed', 'min:8']
            ]);

            $admin = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);

            Auth::login($admin);

            return redirect()->route('admin.post.index');
        }
    }
}
