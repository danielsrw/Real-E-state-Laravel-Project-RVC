@extends('layouts.app')

@section('content')

    <section class="breadcrumb-section spad set-bg" data-setbg="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Our Projects</h4>
                        <div class="bt-option">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="about-text">
                    <div class="at-title text-center">
                        <h3>Our Projects & News</h3>
                        <p>
                            Our Objective is To satisfy customer through better services ;To increase Experience and Professionalism ;To participate in economic growth through job creation and To create value, increase company capital and ensure sustainability The following are Covered Projects :
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="agent-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="agent-search-form">
                        <form action="#">
                            <input type="text" placeholder="Find property">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="as-slider owl-carousel">
                <div class="row">
                    @foreach($projects as $project)
                        <div class="col-lg-4 col-md-6 bg-light">
                            <div class="property-item">
                                <div class="pi-pic set-bg" data-setbg="/storage/{{ $project->image }}">
                                    <?php if ($project->status == 'On Going'): ?>
                                        <div class="label c-red">On Going</div>
                                    <?php else: ?>
                                        <div class="label">Complete</div>
                                    <?php endif ?>
                                </div>
                                <div class="pi-text">
                                    <h5><a href="#">{{ $project->title }}</a></h5>
                                    <p>
                                        {{ $project->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @include('inc/contact')

@endsection
