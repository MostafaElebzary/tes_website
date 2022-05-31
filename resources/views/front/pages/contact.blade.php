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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.0707789980365!2d31.330393414957108!3d30.00612398189629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458394aec1582c1%3A0x55ea8b2b038bfbfc!2sAl%20Mokatam%2C%20Al%20Abageyah%2C%20El%20Mokattam%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1654027100628!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- End Map Area -->

@section('js')


@endsection
@endsection
