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
                <h2>Services Style Two</h2>

                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>Services Style Two</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Services Area -->
    <div class="services-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>SERVICES</span>
                <h2>We Provide the Best Quality <b>Services</b> <span class="overlay"></span></h2>
                <p>We are technology solutions providing company all over the world doing over 40 years. lorem ipsum
                    dolor sit amet.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <div class="services-image">
                            <img src="assets/images/services/services-1.jpg"
                                 alt="image">
                        </div>
                        <div class="services-content">
                            <h3>
                                Software Development
                            </h3>
                            <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <div class="services-image">
                            <img src="assets/images/services/services-2.jpg"
                                 alt="image">
                        </div>
                        <div class="services-content">
                            <h3>
                                App Development
                            </h3>
                            <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <div class="services-image">
                            <img src="assets/images/services/services-3.jpg"
                                 alt="image">
                        </div>
                        <div class="services-content">
                            <h3>
                                Web Development
                            </h3>
                            <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <div class="services-image">
                            <img src="assets/images/services/services-4.jpg"
                                 alt="image">
                        </div>
                        <div class="services-content">
                            <h3>
                                Analytic Solutions
                            </h3>
                            <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <div class="services-image">
                            <img src="assets/images/services/services-5.jpg"
                                 alt="image">
                        </div>
                        <div class="services-content">
                            <h3>
                                Database Administrator
                            </h3>
                            <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <div class="services-image">
                            <img src="assets/images/services/services-6.jpg"
                                 alt="image">
                        </div>
                        <div class="services-content">
                            <h3>
                                Product Design
                            </h3>
                            <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                            {{--                            <a href="services-details.html" class="services-btn">View More</a>--}}
                        </div>
                    </div>
                </div>

                {{--                <div class="col-lg-12 col-md-12">--}}
                {{--                    <div class="pagination-area">--}}
                {{--                        <a href="#" class="prev page-numbers"><i class="ri-arrow-left-s-line"></i></a>--}}
                {{--                        <span class="page-numbers current" aria-current="page">1</span>--}}
                {{--                        <a href="#" class="page-numbers">2</a>--}}
                {{--                        <a href="#" class="page-numbers">3</a>--}}
                {{--                        <a href="#" class="next page-numbers"><i class="ri-arrow-right-s-line"></i></a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>

    </div>
    <!-- End Services Area -->

    @include('front.pages.talktous')

@endsection
