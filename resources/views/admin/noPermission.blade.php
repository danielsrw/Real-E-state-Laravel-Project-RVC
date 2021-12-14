@extends('layouts.master')

@section('content')

    <div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">
                            	Hi <b>{{ Auth::user()->name }}</b>, you have no right to use this method
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection