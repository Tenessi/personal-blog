<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create() {
        {
            return view('auth/login');
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

            return redirect(RouteServiceProvider::HOME);
        }
    }

    public function destroy(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('main.index');
    }
}
