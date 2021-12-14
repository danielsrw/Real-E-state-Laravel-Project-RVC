<?php

namespace App\Http\Controllers;

use App\Models\RequestService;
use Illuminate\Http\Request;

class RequestServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('requestService');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePersonal(Request $request)
    {
        $data = request()->validate([
            'category' => 'required',
            'p_name' => 'required',
            'p_email' => 'required',
            'p_phone' => 'required',
            'p_upi' => 'required',
            'p_address' => 'required',
            'p_institution' => 'required',
            'p_purpose' => 'required',
        ]);

        RequestService::create([
            'category' => $data['p_name'],
            'p_name' => $data['p_name'],
            'p_email' => $data['p_email'],
            'p_phone' => $data['p_phone'],
            'p_upi' => $data['p_upi'],
            'p_address' => $data['p_address'],
            'p_institution' => $data['p_institution'],
            'p_purpose' => $data['p_purpose'],
        ]);

        return redirect()->route('requestServices');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeInstitution(Request $request)
    {
        $data = request()->validate([
            'category' => 'required',
            'i_name' => 'required',
            'i_applicant' => 'required',
            'i_address' => 'required',
            'i_upi' => 'required',
            'i_client_name' => 'required',
            'i_client_address' => 'required',
            'i_purpose' => 'required',
            'i_description' => 'required',
        ]);

        RequestService::create([
            'category' => $data['category'],
            'i_name' => $data['i_name'],
            'i_applicant' => $data['i_applicant'],
            'i_address' => $data['i_address'],
            'i_upi' => $data['i_upi'],
            'i_client_name' => $data['i_client_name'],
            'i_client_address' => $data['i_client_address'],
            'i_purpose' => $data['i_purpose'],
            'i_description' => $data['i_description'],
        ]);

        return redirect()->route('requestServices');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestService  $requestService
     * @return \Illuminate\Http\Response
     */
    public function show(RequestService $requestService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestService  $requestService
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestService $requestService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestService  $requestService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestService $requestService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestService  $requestService
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestService $requestService)
    {
        //
    }
}
