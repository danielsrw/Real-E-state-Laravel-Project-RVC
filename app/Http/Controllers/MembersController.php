<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class MembersController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    public function index()
    {
        $members = User::all();
        $roles = Role::all();

        return view('admin.members.index', compact('members', 'roles'));
    }

    public function enableMember($id)
    {
        $data = User::findOrFail($id);
        $data->active = 0;
        $data->save();
        return back()->with('success','User rejected successfully!');
    }

    public function disableMember($id)
    {
        $data = User::findOrFail($id);
        $data->active = 1;
        $data->save();
        return back()->with('success','User approved successfully!');
    }

    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return back()->with('success','User deleted successfully!');
    }
}
