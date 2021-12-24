<?php

namespace App\Http\Controllers;

use App\Models\RequestMoney;
use App\Models\User;
use Illuminate\Http\Request;

class RequestMoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requestMoney = RequestMoney::all();
        return view('admin.requestMoney.index', compact('requestMoney'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = User::findOrfail($id);

        return view('admin.requestMoney.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->validate([
            'user_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'amount' => 'required',
            'reason' => 'required',
            'status' => 'required',
        ]);

        RequestMoney::create([
            'user_id' => $data['user_id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'amount' => $data['amount'],
            'reason' => $data['reason'],
            'status' => $data['status'],
        ]);

        return back()->with('success', "We'll let you know when admin approve your request");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requestMoney = RequestMoney::all();

        return view('admin.requestMoney.show', compact('requestMoney'));
    }

    public function enableMoneyRequest($id)
    {
        $data = RequestMoney::findOrFail($id);
        $data->status = 0;
        $data->save();
        return back()->with('success','Money rejected successfully!');
    }

    public function disableMoneyRequest($id)
    {
        $data = RequestMoney::findOrFail($id);
        $data->status = 1;
        $data->save();
        return back()->with('success','Money approved successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
