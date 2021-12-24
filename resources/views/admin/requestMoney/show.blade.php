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
                <div class="card-body">
                    <div class="row">
                        @foreach($requestMoney as $money)
                            <h5><b>Names:</b> {{ $money->name }} </h5>
                            <h5><b>Email:</b> {{ $money->email }} </h5>
                            <h5><b>Amount:</b> {{ $money->amount }} </h5>
                            <h5><b>Date:</b> {{ $money->created_at }} </h5>
                            <h5>
                                <b>Status:</b> 
                                <?php if ($money->status == 1): ?>
                                    <button type="submit" class="badge bg-success border-0">
                                        Completed
                                    </button>
                                <?php else: ?>
                                    <button type="submit" class="badge bg-warning border-0">
                                        Stil on Pending
                                    </button>
                                <?php endif ?>
                            </h5>
                        @endforeach
                        <h5><b>Cancel:</b> <button class="badge bg-danger border-0">Delete</button> </h5>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
