@extends('layouts.app')

@section('content')

    <section class="breadcrumb-section spad set-bg" data-setbg="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Our Services</h4>
                        <div class="bt-option">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="section-title">
                        <h4>Our services</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-4 mb-4">
                        <div class="ts-item">
                            <div class="ts-text">
                                <img src="/storage/{{ $service->image }}" alt="">
                                <h5>{{ $service->name }}</h5>
                                <p style="font-size: 12px;">
                                    {{ $service->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('inc/contact')

@endsection
