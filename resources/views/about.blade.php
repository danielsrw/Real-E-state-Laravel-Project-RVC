@extends('layouts.app')

    <style>
        .c_testimony .c_input {
            width: calc(33.33% - 20px);
            float: left;
            height: 46px;
            font-size: 12px;
            color: #888888;
            padding-left: 20px;
            border: 1px solid #e1e1e1;
            margin-right: 20px;
            margin-bottom: 20px;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .c_testimony input::placeholder {
            color: #888888;
        }

        .c_testimony input:focus, .c_testimony select:focus {
            border-color: #0d6efd;
        }
    </style>

@section('content')

    <section class="breadcrumb-section spad set-bg" data-setbg="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>About us</h4>
                        <div class="bt-option">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>About</span>
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
                        <h3>About Us</h3>
                        <p>
                            REAL VALUE CORPORATION LTD is a private company registered in RDB for undertaking consultancy activities. The registered main activity is ‘’Real estate activities on a fee or contract basis’’. Therefore, this consists of: Real property valuation, Valuation of plants and machineries, Real estate management and agency, Real estate Investment advisory, Mortgage loan advisory, Real estate research, Mortgage market research We also undertake Business Valuation, Valuation of stocks and shares, valuation of bonds and debentures, Investment appraisal, business plans and feasibility studies. It is also a professional company in Real estate industry working in Rwanda. It started in 2016 with a principle of providing a good quality services to both national and foreigner’s customers who come seeking for Real Estate activities from it. Our clients include the local government, financial institutions, and mainly individuals.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="at-feature">
                            <div class="af-item">
                                <div class="af-icon">
                                    <img src="assets/img/chooseus/chooseus-icon-1.png" alt="">
                                </div>
                                <div class="af-text">
                                    <h6>Our Vision</h6>
                                    <p>To become a Real Estate leading company in East Africa</p>
                                </div>
                            </div>
                            <div class="af-item">
                                <div class="af-icon">
                                    <img src="assets/img/chooseus/chooseus-icon-2.png" alt="">
                                </div>
                                <div class="af-text">
                                    <h6>Our Mission</h6>
                                    <p>To become a world class Real Estate Company in Rwanda with affordable high-quality services that satisfy needs of consumers and stakeholders, while maximizing profit and sustainable professionalism</p>
                                </div>
                            </div>
                            <div class="af-item">
                                <div class="af-icon">
                                    <img src="assets/img/chooseus/chooseus-icon-3.png" alt="">
                                </div>
                                <div class="af-text">
                                    <h6>Our Values</h6>
                                    <p><b>Our values serve as a guide for our actions and describe how we behave in the industry.</b></p>
                                    <p>Integrity, Excellence</p>
                                    <p>Professionalism, Creativity</p>
                                    <p>Flexibility, Collaboration</p>
                                    <p>Accountability, Passion</p>
                                    <p>Diversity, Quality</p>
                                </div>
                            </div>
                            <div class="af-item">
                                <div class="af-icon">
                                    <img src="assets/img/chooseus/chooseus-icon-4.png" alt="">
                                </div>
                                <div class="af-text">
                                    <h6>Our Objectives</h6>
                                    <p>To satisfy customer through better services</p>
                                    <p>To increase Experience and Professionalism</p>
                                    <p>To participate in economic growth through job creation</p>
                                    <p>To create value, increase company capital and ensure sustainability</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic set-bg" data-setbg="assets/img/about-us.jpg">
                        <a href="https://www.youtube.com/watch?v=8EJ3zbKTWQ8" class="play-btn video-popup">
                            <i class="fa fa-play-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4>What our client says?</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <div class="testimonial-slider owl-carousel">
                            @foreach($testimonies as $testimony)
                                <div class="col-lg-6">
                                    <div class="testimonial-item">
                                        <div class="ti-text">
                                            <p>
                                                {{ $testimony->description }}
                                            </p>
                                        </div>
                                        <div class="ti-author">
                                            <div class="ta-pic">
                                                <img src="{{ asset('assets/img/testimonial-author/ta-1.jpg') }}" alt="">
                                            </div>
                                            <div class="ta-text">
                                                <h5>{{ $testimony->name }}</h5>
                                                <span>{{ $testimony->title }}</span>
                                                <div class="ta-rating">
                                                    <?php if ($testimony->rate == 1): ?>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    <?php elseif ($testimony->rate == 2) : ?>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    <?php elseif ($testimony->rate == 3) : ?>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    <?php elseif ($testimony->rate == 4) : ?>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    <?php else: ?>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="cf-content">
                            <form action="{{ route('testimonyStore') }}" method="POST" class="cc-form">
                                @csrf

                                <div class="d-flex c_testimony">
                                    <input type="text" class="c_input" name="name" placeholder="Name">
                                    <input type="text" class="c_input" name="title" placeholder="Title">
                                    <select name="rate" class="c_input">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <textarea name="description" placeholder="Message" required>{{ old('description') }}</textarea>
                                <button type="submit" class="site-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('inc/contact')

@endsection
