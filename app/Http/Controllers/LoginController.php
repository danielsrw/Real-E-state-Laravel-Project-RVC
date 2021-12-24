<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $username = 'username';
    protected $redirectTo = '/admin/dashboard';
    protected $guard = 'web';

    public function getLogin()
    {
        if (Auth::guard('web')->check()) {
            return redirect()->route('dashboard');
        }

        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $data = request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $auth = Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password, 'active' => 1]);

        if ($auth) {
            return redirect()->route('dashboard')->with('success', 'Welcome');
        }

        return redirect()->route('signin');
    }

    public function getLogout()
    {
        Auth::guard('web')->logout();

        return redirect()->route('signin');
    }
}
