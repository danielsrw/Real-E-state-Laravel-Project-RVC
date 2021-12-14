@extends('layouts.app')

@section('content')

    <section class="feature-property-section">
        <div class="row">
            <div class="col-lg-8 p-0">
                <div class="fp-slider owl-carousel">
                    <div class="fp-item set-bg" data-setbg="{{ ('assets/img/hero/hero-1.jpg') }}">
                    </div>
                    <div class="fp-item set-bg" data-setbg="{{ ('assets/img/hero/hero-2.jpg') }}">
                    </div>
                    <div class="fp-item set-bg" data-setbg="{{ ('assets/img/hero/hero-3.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="feature-property-left">
                    <div class="section-title">
                        <h4>Welcome to RVC</h4>
                    </div>
                    <ul>
                        <li>
                            Real Value Corporation LTD is a private company registered in RDB for undertaking consultancy activities. The registered main activity is "Real estate activities on a fee or contract basis". Therefore, this consists of: Real property valuation, Valuation of plants and machineries, Real estate management and agency, Real estate Investment advisory, Mortgage loan advisory, Real estate research, Mortgage market research We also undertake Business Valuation, Valuation of stocks and shares,...
                        </li>
                    </ul>
                    <a href="/about">More About us</a>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4>About Us</h4>
                    </div>
                </div>
            </div>
            <div class="row testimonial-slider owl-carousel">
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-text">
                            <p>
                                To become a Real Estate leading company in East Africa
                            </p>
                        </div>
                        <div class="ti-author">
                            <div class="ta-text">
                                <h5>Our Vision</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-text">
                            <p>
                                To become a world class Real Estate Company in Rwanda with affordable high-quality services that satisfy needs of consumers and stakeholders, while maximizing profit and sustainable professionalism
                            </p>
                        </div>
                        <div class="ti-author">
                            <div class="ta-text">
                                <h5>Our Mission</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-text">
                            <p>
                                Our values serve as a guide for our actions and describe how we behave in the industry, Integrity, Excellence, Professionalism, Creativity, Flexibility, Collaboration, Accountability, Passion, Diversity, Quality.
                            </p>
                        </div>
                        <div class="ti-author">
                            <div class="ta-text">
                                <h5>Our Values</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-text">
                            <p>
                                To satisfy customer through better services, To increase Experience and Professionalism, To participate in economic growth through job creation, To create value, increase company capital and ensure sustainability.
                            </p>
                        </div>
                        <div class="ti-author">
                            <div class="ta-text">
                                <h5>Our Objectives</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

    <!-- <section class="testimonial-section spad">
        <div class="container">

        </div>
    </section> -->

    <section class="chooseus-section spad set-bg" data-setbg="{{ ('assets/img/chooseus/chooseus-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="chooseus-text">
                        <div class="section-title">
                            <h4>Our Services</h4>
                        </div>
                    </div>
                    <div class="chooseus-features">
                        <div class="cf-item">
                            <div class="cf-text">
                                <p>Real property Valuation/ Expertise</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-text">
                                <p>Business valuation</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-text">
                                <p>Valuation of stocks and shares</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-text">
                                <p>Business consultancy</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-text">
                                <p>Construction consultancy</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-text">
                                <p>Real estate management and agency</p>
                            </div>
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
                        <h4>Our team</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="team-btn">
                        <a href="#"><i class="fa fa-user"></i> We're all here to serve you</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="ts-item">
                        <div class="ts-text">
                            <img src="{{ asset('assets/img/team/team-1.jpg') }}" alt="">
                            <h5>Ashton Kutcher</h5>
                            <span>123-455-688</span>
                            <p>Ipsum dolor amet, consectetur adipiscing elit, eiusmod tempor incididunt lorem.</p>
                            <div class="ts-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ts-item">
                        <div class="ts-text">
                            <img src="{{ asset('assets/img/team/team-2.jpg') }}" alt="">
                            <h5>Ashton Kutcher</h5>
                            <span>123-455-688</span>
                            <p>Ipsum dolor amet, consectetur adipiscing elit, eiusmod tempor incididunt lorem.</p>
                            <div class="ts-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ts-item">
                        <div class="ts-text">
                            <img src="{{ asset('assets/img/team/team-3.jpg') }}" alt="">
                            <h5>Ashton Kutcher</h5>
                            <span>123-455-688</span>
                            <p>Ipsum dolor amet, consectetur adipiscing elit, eiusmod tempor incididunt lorem.</p>
                            <div class="ts-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="categories-section">
        <div class="cs-item-list">
            <div class="cs-item set-bg" data-setbg="{{ asset('assets/img/categories/cat-1.jpg') }}">
                <div class="cs-text">
                    <h5>Apartment</h5>
                    <span>230 property</span>
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="{{ asset('assets/img/categories/cat-2.jpg') }}">
                <div class="cs-text">
                    <h5>Villa</h5>
                    <span>230 property</span>
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="{{ asset('assets/img/categories/cat-3.jpg') }}">
                <div class="cs-text">
                    <h5>House</h5>
                    <span>230 property</span>
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="{{ asset('assets/img/categories/cat-4.jpg') }}">
                <div class="cs-text">
                    <h5>Restaurent</h5>
                    <span>230 property</span>
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="{{ asset('assets/img/categories/cat-5.jpg') }}">
                <div class="cs-text">
                    <h5>Office</h5>
                    <span>230 property</span>
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
            <div class="row testimonial-slider owl-carousel">
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-text">
                            <p>Lorem ipsum dolor amet, consectetur adipiscing elit, seiusmod tempor incididunt ut labore
                                magna aliqua. Quis ipsum suspendisse ultrices gravida accumsan lacus vel facilisis.</p>
                        </div>
                        <div class="ti-author">
                            <div class="ta-pic">
                                <img src="{{ asset('assets/img/testimonial-author/ta-1.jpg') }}" alt="">
                            </div>
                            <div class="ta-text">
                                <h5>Arise Naieh</h5>
                                <span>Designer</span>
                                <div class="ta-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-text">
                            <p>Lorem ipsum dolor amet, consectetur adipiscing elit, seiusmod tempor incididunt ut labore
                                magna aliqua. Quis ipsum suspendisse ultrices gravida accumsan lacus vel facilisis.</p>
                        </div>
                        <div class="ti-author">
                            <div class="ta-pic">
                                <img src="{{ asset('assets/img/testimonial-author/ta-2.jpg') }}" alt="">
                            </div>
                            <div class="ta-text">
                                <h5>Arise Naieh</h5>
                                <span>Designer</span>
                                <div class="ta-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-text">
                            <p>Lorem ipsum dolor amet, consectetur adipiscing elit, seiusmod tempor incididunt ut labore
                                magna aliqua. Quis ipsum suspendisse ultrices gravida accumsan lacus vel facilisis.</p>
                        </div>
                        <div class="ti-author">
                            <div class="ta-pic">
                                <img src="{{ asset('assets/img/testimonial-author/ta-1.jpg') }}" alt="">
                            </div>
                            <div class="ta-text">
                                <h5>Arise Naieh</h5>
                                <span>Designer</span>
                                <div class="ta-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="logo-carousel">
        <div class="container">
            <div class="lc-slider owl-carousel">
                <a href="#" class="lc-item">
                    <div class="lc-item-inner">
                        <img src="{{ asset('assets/img/logo-carousel/lc-1.png') }}" alt="">
                    </div>
                </a>
                <a href="#" class="lc-item">
                    <div class="lc-item-inner">
                        <img src="{{ asset('assets/img/logo-carousel/lc-2.png') }}" alt="">
                    </div>
                </a>
                <a href="#" class="lc-item">
                    <div class="lc-item-inner">
                        <img src="{{ asset('assets/img/logo-carousel/lc-3.png') }}" alt="">
                    </div>
                </a>
                <a href="#" class="lc-item">
                    <div class="lc-item-inner">
                        <img src="{{ asset('assets/img/logo-carousel/lc-4.png') }}" alt="">
                    </div>
                </a>
                <a href="#" class="lc-item">
                    <div class="lc-item-inner">
                        <img src="{{ asset('assets/img/logo-carousel/lc-5.png') }}" alt="">
                    </div>
                </a>
                <a href="#" class="lc-item">
                    <div class="lc-item-inner">
                        <img src="{{ asset('assets/img/logo-carousel/lc-6.png') }}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection
