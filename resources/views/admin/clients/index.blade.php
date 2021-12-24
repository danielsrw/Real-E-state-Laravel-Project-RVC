@extends('layouts.master')

@section('content')

    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Add Client</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Add Client</li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addClient">Add Client</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="modal fade" id="addClient" tabindex="-1" aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4" id="exampleModalFullscreenMdLabel">Add Client</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('adminClientStore') }}">
                                    @csrf

                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control form-control-sm" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Phone</label>
                                            <input type="number" name="phone" class="form-control form-control-sm" placeholder="Enter Phone">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Gender</label>
                                            <select name="gender" class="form-control form-control-sm">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label">UPI Code</label>
                                            <input type="text" name="upi" class="form-control form-control-sm" placeholder="Enter Amount">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Location</label>
                                            <input type="text" name="upi" class="form-control form-control-sm" placeholder="Enter Location">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Amount</label>
                                            <input type="number" name="amount" class="form-control form-control-sm" placeholder="Enter Amount">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label">Reason</label>
                                            <textarea rows="5" name="purpose" class="form-control form-control-sm" placeholder="Enter Reason"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary w-100">Submit</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>UPI Code</th>
                                    <th>Location</th>
                                    <th>Amount</th>
                                    <th>Purpose</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <td>{{ $client->id }}</td>
                                        <td>{{ $client->name }}</td>
                                        <td>{{ $client->phone }}</td>
                                        <td>{{ $client->gender }}</td>
                                        <td>{{ $client->upi }}</td>
                                        <td>{{ $client->location }}</td>
                                        <td>{{ $client->amount }}</td>
                                        <td>{{ $client->purpose }}</td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection