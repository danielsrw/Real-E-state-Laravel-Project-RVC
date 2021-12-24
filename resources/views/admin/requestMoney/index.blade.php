@extends('layouts.master')

@section('content')

    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Request Money</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Request Money</li>
                    </ul>
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
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Reason</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($requestMoney as $money)
                                    <tr>
                                        <td>{{ $money->id }}</td>
                                        <td>{{ $money->name }}</td>
                                        <td>{{ $money->email }}</td>
                                        <td>+25{{ $money->phone }}</td>
                                        <td>{{ number_format($money->amount) }} RWF</td>
                                        <td>{{ $money->reason }}</td>
                                        <td>
                                            <input type="hidden" name="status" value="{{ $money->status }}">
                                            <a href="{{ route('adminEnableMoneyRequest', $money->id) }}">
                                                <?php if ($money->status == 1): ?>
                                                    <button type="submit" class="badge bg-success border-0">
                                                        Complete
                                                    </button>
                                            </a>
                                                <?php else: ?>
                                            <a href="{{ route('adminDisableMoneyRequest', $money->id) }}">
                                                    <button type="submit" class="badge bg-warning border-0">
                                                        Pending
                                                    </button>
                                                <?php endif ?>
                                            </a>
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
