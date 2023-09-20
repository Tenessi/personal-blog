<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function create() {
        {
            return view('admin/auth/login');
        }
    }

    public function store(Request $request) {
        {
            $credentials = $request->validate([
                'email' => ['required', 'string', 'email'],
                'password' => ['required', 'string']
            ]);

            if (! Auth::attempt($credentials)) {
                return back()
                    ->withInput()
                    ->withErrors([
                        'email' => 'Неверный адрес почты.'
                    ]);
            }

            return redirect()->route('admin.post.index');
        }
    }

    public function destroy(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('main.index');
    }
}
