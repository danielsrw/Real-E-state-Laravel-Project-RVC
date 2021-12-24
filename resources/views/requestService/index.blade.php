@extends('layouts.app')

@section('content')

    <section class="property-details-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="pd-text">
                        <div class="pd-board">
                            <div class="tab-board">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Personal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Institution</a>
                                    </li>
                                </ul><!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                        <div class="tab-details">
                                            <div class="container">
                                                <div class="property-submit-form spad">
                                                    <p>Doe your request include valuation?</p>

                                                    <div class="d-flex justify-content-between">
                                                        <a href="{{ route('requestServicesWithoutValution') }}" class="btn btn-sm btn-primary w-25">No</a>
                                                        <a href="{{ route('requestServicesWithValution') }}" class="btn btn-sm btn-primary w-25">Yes</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                                        <div class="tab-desc">
                                            <div class="container">
                                                <div class="property-submit-form spad">
                                                    <form action="{{ route('institutionStore') }}" method="POST">
                                                        @csrf

                                                        <input type="hidden" name="category" value="2">
                                                        <div class="pf-name mb-3">
                                                            <input type="text" name="i_name" placeholder="Enter Name*">
                                                        </div>
                                                        <div class="pf-name mb-3">
                                                            <input type="text" name="i_applicant" placeholder="Enter Applicant*">
                                                        </div>
                                                        <div class="pf-name mb-3">
                                                            <input type="text" name="i_address" placeholder="Enter Address*">
                                                        </div>
                                                        <div class="pf-name mb-3">
                                                            <input type="text" name="i_upi" placeholder="Enter UPI*">
                                                        </div>
                                                        <div class="pf-name mb-3">
                                                            <input type="text" name="i_client_name" placeholder="Enter Client Name*">
                                                        </div>
                                                        <div class="pf-name mb-3">
                                                            <input type="text" name="i_client_address" placeholder="Enter Client Address*">
                                                        </div>
                                                        <div class="pf-name mb-3">
                                                            <input type="text" name="i_purpose" placeholder="Enter Purpose of Service*">
                                                        </div>
                                                        <div class="pf-summernote">
                                                            <h6 class="mb-3"><strong>Description</strong></h6>
                                                            <ul class="nav nav-tabs" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link texteditor-switch" data-toggle="tab" href="#tabs-3" role="tab">Text</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link texteditor-switch active" data-toggle="tab" href="#tabs-4" role="tab">Visual</a>
                                                                </li>
                                                            </ul>
                                                            <textarea class="texteditor-content" name="i_description"></textarea>
                                                        </div>
                                                        <button type="submit" class="site-btn w-100">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('inc/contact')

@endsection
