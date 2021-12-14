<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MembersController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    public function index()
    {
        $data = User::all();

        return view('admin.members.index', ['members' => $data]);
    }
}
