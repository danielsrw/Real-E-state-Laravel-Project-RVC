<?php

namespace App\Http\Controllers;

use App\Models\RequestService;
use Illuminate\Http\Request;

class RequestServiceController extends Controller
{
    public function index()
    {
        return view('requestService.index');
    }

    public function withoutValution()
    {
        return view('requestService.createPersonalWithoutValuation');
    }

    public function withoutValutionStore()
    {
        $data = request()->validate([
            'p_name' => 'required',
            'p_email' => 'required',
            'p_phone' => 'required',
            'p_description' => 'required',
        ]);

        RequestService::create([
            'p_name' => $data['p_name'],
            'p_email' => $data['p_email'],
            'p_phone' => $data['p_phone'],
            'p_description' => $data['p_description'],
        ]);

        return redirect()->route('requestServices');
    }

    public function withValuation()
    {
        return view('requestService.createPersonalWithValuation');
    }

    public function withValutionStore()
    {
        $data = request()->validate([
            'p_name' => 'required',
            'p_email' => 'required',
            'p_phone' => 'required',
            'p_upi' => 'required',
            'p_address' => 'required',
            'p_institution' => 'required',
            'p_description' => 'required',
        ]);

        RequestService::create([
            'p_name' => $data['p_name'],
            'p_email' => $data['p_email'],
            'p_phone' => $data['p_phone'],
            'p_upi' => $data['p_phone'],
            'p_address' => $data['p_phone'],
            'p_institution' => $data['p_phone'],
            'p_description' => $data['p_description'],
        ]);

        return redirect()->route('requestServices');
    }
}
