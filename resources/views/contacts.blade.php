@extends('layouts.app')

@section('content')

    <section class="breadcrumb-section spad set-bg" data-setbg="assets/img/breadcrumb-contact-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Contact Us</h4>
                        <div class="bt-option">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Form Section Begin -->
    <section class="contact-form-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cf-content">
                        <div class="cc-title">
                            <h4>Contact form</h4>
                            <p>
                                If you plan us to make valuation of your properties or other related services, Feel free to contact us here!
                            </p>
                        </div>
                        <form action="{{ route('contactStore') }}" method="POST" class="cc-form">
                            @csrf

                            <div class="group-input">
                                <input type="text" name="name" placeholder="Name">
                                <input type="text" name="email" placeholder="Email">
                                <input type="text" name="phone" placeholder="Phone Number">
                            </div>
                            <textarea name="message" placeholder="Message"></textarea>
                            <button type="submit" class="site-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('inc/contact')

@endsection
