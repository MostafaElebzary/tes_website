@extends('front.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')



    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-5 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500"
                 data-aos-once="true">
                <h2>Contact</h2>

                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Overview Area -->
    <div class="overview-area pt-100 pb-75">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>Call Us</h3>
                        <span>
                                <a href="tel:9901234567">+990-123-4567</a>
                            </span>

                        <div class="overview-shape">
                            <img src="assets/images/overview/overview-shape.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>Email Us</h3>
                        <span>
                                <a href="mailto:hicoze@gmail.com">hicoze@gmail.com</a>
                            </span>

                        <div class="overview-shape">
                            <img src="assets/images/overview/overview-shape.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>Tech Support</h3>
                        <span>
                                <a href="tel:15143125678">+1 (514) 312-5678</a>
                            </span>

                        <div class="overview-shape">
                            <img src="assets/images/overview/overview-shape.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>Visit Us</h3>
                        <span>413 North Las Vegas, NV 89032</span>

                        <div class="overview-shape">
                            <img src="assets/images/overview/overview-shape.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview Area -->




    @include('front.pages.talktous')



    <!-- Start Map Area -->
    <div class="container ptb-100">
        <div class="map-location" id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102948.35266648312!2d-115.15540073403864!3d36.26047650441708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8c2b00ad43d33%3A0x22c7fa13f5acf526!2sNorth%20Las%20Vegas%2C%20NV%2C%20USA!5e0!3m2!1sen!2sbd!4v1639919075838!5m2!1sen!2sbd"></iframe>

        </div>
    </div>
    <!-- End Map Area -->

@section('js')


@endsection
@endsection
