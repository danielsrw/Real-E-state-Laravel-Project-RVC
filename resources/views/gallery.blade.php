@extends('layouts.app')

@section('content')

    <section class="breadcrumb-section spad set-bg" data-setbg="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Our Gallery</h4>
                        <div class="bt-option">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>Gallery</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="property-section latest-property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h4>Our Gallery</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="property-controls">
                        <ul>
                            <li data-filter="all">All</li>
                            <li data-filter=".commercial">Commercial</li>
                            <li data-filter=".residential">Residential</li>
                            <li data-filter=".pool">Pool</li>
                            <li data-filter=".industrial">Industrial</li>
                            <li data-filter=".land">Land</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row property-filter">
                <div class="col-lg-4 col-md-6 mix all residential">
                    <div class="property-item">
                        <a href="{{ ('assets/img/property/h1.jpg') }}">
                            <div class="pi-pic set-bg" data-setbg="{{ ('assets/img/property/h1.jpg') }}">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix all commercial">
                    <div class="property-item">
                        <a href="{{ ('assets/img/property/h2.jpg') }}">
                            <div class="pi-pic set-bg" data-setbg="{{ ('assets/img/property/h2.jpg') }}">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix all residential">
                    <div class="property-item">
                        <a href="{{ ('assets/img/property/h3.jpg') }}">
                            <div class="pi-pic set-bg" data-setbg="{{ ('assets/img/property/h3.jpg') }}">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix all industrial">
                    <div class="property-item">
                        <a href="{{ ('assets/img/property/h4.jpg') }}">
                            <div class="pi-pic set-bg" data-setbg="{{ ('assets/img/property/h4.jpg') }}">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix all residential">
                    <div class="property-item">
                        <a href="{{ ('assets/img/property/h5.jpg') }}">
                            <div class="pi-pic set-bg" data-setbg="{{ ('assets/img/property/h5.jpg') }}">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix all pool">
                    <div class="property-item">
                        <a href="{{ ('assets/img/property/h6.jpg') }}">
                            <div class="pi-pic set-bg" data-setbg="{{ ('assets/img/property/h6.jpg') }}">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix all industrial">
                    <div class="property-item">
                        <a href="{{ ('assets/img/property/h7.jpg') }}">
                            <div class="pi-pic set-bg" data-setbg="{{ ('assets/img/property/h7.jpg') }}">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix all land">
                    <div class="property-item">
                        <a href="{{ ('assets/img/property/h8.jpg') }}">
                            <div class="pi-pic set-bg" data-setbg="{{ ('assets/img/property/h8.jpg') }}">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('inc/contact')

@endsection
