<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class RegisterController extends Controller
{
    public function create()
    {
        $data = Role::all();
        return view('admin.auth.register', ['roles' => $data]);
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'role_id' => 'required',
            'name' => 'required',
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
            'active' => 'required',
        ]);

        User::create([
            'role_id' => $data['role_id'],
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'active' => $data['active'],
        ]);

        return redirect()->route('signin');
    }
}
