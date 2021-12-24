@extends('layouts.app')

@section('content')

    <section class="property-details-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="pd-text">
                        <div class="pd-board">
                            <div class="tab-board">
                                <div class="property-submit-form spad">
                                    <form action="{{ route('requestServiceWithoutValuationStore') }}" method="POST">
                                        @csrf
                                        
                                        <div class="pf-name mb-3">
                                            <input type="text" name="p_name" placeholder="Enter Name*">
                                        </div>
                                        <div class="pf-name mb-3">
                                            <input type="text" name="p_email" placeholder="Enter Email*">
                                        </div>
                                        <div class="pf-name mb-3">
                                            <input type="text" name="p_phone" placeholder="Enter Phone*">
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
                                            <textarea class="texteditor-content" name="p_description"></textarea>
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
    </section>

@endsection
