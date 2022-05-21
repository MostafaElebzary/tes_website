@extends('front.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')


    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-3 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500"
                 data-aos-once="true">
                <h2>About Style Three</h2>

                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start About Area -->
    <div class="about-area border-none pt-100 pb-75">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-wrap-image" data-tilt>
                        <img src="assets/images/about/about-3.jpg" alt="image" data-aos="fade-down" data-aos-delay="80"
                             data-aos-duration="800" data-aos-once="true">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-wrap-content" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                         data-aos-once="true">
                        <div class="about-bg-text">ABOUT US</div>
                        <span>WHO WE ARE</span>
                        <h3>Your Trusted Partner For All IT Solutions <span class="overlay"></span></h3>
                        <p>We are leading technology solutions providing company all over the world doing over 40 years.
                            Lorem ipsum dolor sit amet consetetur sadipscing elitre sed diam non umy eirmod tempor
                            invidunt ut labore.</p>
                    </div>
                </div>
            </div>

            <div class="about-inner-box">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                             data-aos-once="true">
                            <h3>Our Vision</h3>
                            <p>Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et
                                accusam et justo duo.</p>

                            <div class="about-btn">
                                <a href="about-style-1.html" class="default-btn">Know More About Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card" data-aos="fade-down" data-aos-delay="70" data-aos-duration="700"
                             data-aos-once="true">
                            <h3>Our Mission</h3>
                            <p>Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et
                                accusam et justo duo.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                             data-aos-once="true">
                            <div class="card-image" data-tilt>
                                <img src="assets/images/about/about-4.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-circle-shape">
            <img src="assets/images/about/about-circle.png" alt="image">
        </div>
    </div>
    <!-- End About Area -->



    @include('front.pages.testimonials')

    @include('front.pages.team')

    @include('front.pages.talktous')

@endsection
