@extends('layouts.master')

@section('content')

    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    	<div class="col-xl-12 col-md-12">
                <div class="row">
                    <div class="col-sm-3">
                    	<a href="{{ route('members') }}">
	                        <div class="card prod-p-card bg-primary background-pattern">
	                            <div class="card-body">
	                                <div class="row align-items-center m-b-0">
	                                    <div class="col">
	                                        <h6 class="m-b-5 text-white">Roles</h6>
	                                        <h3 class="m-b-0 text-white">5</h3>
	                                    </div>
	                                    <div class="col-auto">
	                                        <i data-feather="award" class="text-white"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('members') }}">
                        	<div class="card prod-p-card background-pattern">
	                            <div class="card-body">
	                                <div class="row align-items-center m-b-0">
	                                    <div class="col">
	                                        <h6 class="m-b-5">Members</h6>
	                                        <h3 class="m-b-0">4</h3>
	                                    </div>
	                                    <div class="col-auto">
	                                        <i data-feather="users"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('adminProjects') }}">
                        	<div class="card prod-p-card bg-primary background-pattern">
	                            <div class="card-body">
	                                <div class="row align-items-center m-b-0">
	                                    <div class="col">
	                                        <h6 class="m-b-5 text-white">Projects</h6>
	                                        <h3 class="m-b-0 text-white">4</h3>
	                                    </div>
	                                    <div class="col-auto">
	                                        <i data-feather="square" class="text-white"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('adminService') }}">
                        	<div class="card prod-p-card background-pattern">
	                            <div class="card-body">
	                                <div class="row align-items-center m-b-0">
	                                    <div class="col">
	                                        <h6 class="m-b-5">Services</h6>
	                                        <h3 class="m-b-0">6</h3>
	                                    </div>
	                                    <div class="col-auto">
	                                        <i data-feather="layers"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('adminContacts') }}">
                        	<div class="card prod-p-card background-pattern">
	                            <div class="card-body">
	                                <div class="row align-items-center m-b-0">
	                                    <div class="col">
	                                        <h6 class="m-b-5">Contacts</h6>
	                                        <h3 class="m-b-0">1</h3>
	                                    </div>
	                                    <div class="col-auto">
	                                        <i data-feather="phone-incoming"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('adminTestimonies') }}">
                        	<div class="card prod-p-card bg-primary background-pattern">
	                            <div class="card-body">
	                                <div class="row align-items-center m-b-0">
	                                    <div class="col">
	                                        <h6 class="m-b-5 text-white">Testimonies</h6>
	                                        <h3 class="m-b-0 text-white">4</h3>
	                                    </div>
	                                    <div class="col-auto">
	                                        <i data-feather="inbox" class="text-white"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection