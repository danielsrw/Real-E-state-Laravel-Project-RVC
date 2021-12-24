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
                <div class="col-md-2">
					<a href="{{ route('adminRequestMoneyShow', Auth::user()->id) }}">
                        <button class="btn btn-sm btn-primary">Show</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('adminRequestMoneyStore') }}">
                        @csrf

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="inputName4">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName4" value="{{ Auth::user()->name }}" readonly>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="inputEmail4">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail4" value="{{ Auth::user()->email }}" readonly>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="inputPhone4">Phone</label>
                                <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="inputPhone4" placeholder="Enter Phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="inputAmount4">Amount</label>
                                <input type="number" name="amount" class="form-control @error('amount') is-invalid @enderror" id="inputAmount4" placeholder="Enter Amount">
                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label class="form-label" for="inputReason4">Reason</label>
                                <textarea rows="5" name="reason" class="form-control" placeholder="Enter Reason"></textarea>
                                @error('reason')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="status" value="0">
                        <button type="submit" class="btn btn-sm btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
