@extends('front.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')


    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-3 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                <h2>Projects</h2>

                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Projects Area -->
    <div class="projects-area pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span>PROJECTS</span>
                <h2>Our Latest <b>Incredible</b> Client's Projects <span class="overlay"></span></h2>
            </div>

            <ul class="projects-filter-menu">
                <li class="filter" data-filter="all">All</li>
                <li class="filter" data-filter=".mobile">Mobile App</li>
                <li class="filter" data-filter=".development">Development</li>
                <li class="filter" data-filter=".web-design">Web Design</li>
                <li class="filter" data-filter=".product-design">Product Design</li>
            </ul>

            <div id="Container" class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mix mobile development web-design">
                    <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="projects-image">
                            <a href="projects-details.html"><img src="assets/images/projects-two/projects-1.jpg" alt="image"></a>
                        </div>
                        <div class="projects-content">
                            <h3>
                                <a href="projects-details.html">3D Animation</a>
                            </h3>
                            <a href="projects-details.html" class="projects-btn">View More</a>
                        </div>
                    </div>

                    <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="projects-image">
                            <a href="projects-details.html"><img src="assets/images/projects-two/projects-2.jpg" alt="image"></a>
                        </div>
                        <div class="projects-content">
                            <h3>
                                <a href="projects-details.html">Online Banking Software</a>
                            </h3>
                            <a href="projects-details.html" class="projects-btn">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix development product-design">
                    <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="projects-image">
                            <a href="projects-details.html"><img src="assets/images/projects-two/projects-3.jpg" alt="image"></a>
                        </div>
                        <div class="projects-content">
                            <h3>
                                <a href="projects-details.html">Cashier Software</a>
                            </h3>
                            <a href="projects-details.html" class="projects-btn">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix web-design mobile product-design">
                    <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="projects-image">
                            <a href="projects-details.html"><img src="assets/images/projects-two/projects-4.jpg" alt="image"></a>
                        </div>
                        <div class="projects-content">
                            <h3>
                                <a href="projects-details.html">Messaging App</a>
                            </h3>
                            <a href="projects-details.html" class="projects-btn">View More</a>
                        </div>
                    </div>

                    <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="projects-image">
                            <a href="projects-details.html"><img src="assets/images/projects-two/projects-5.jpg" alt="image"></a>
                        </div>
                        <div class="projects-content">
                            <h3>
                                <a href="projects-details.html">Analytics Software</a>
                            </h3>
                            <a href="projects-details.html" class="projects-btn">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="projects-bg-shape-1">
            <img src="assets/images/projects/projects-bg-shape.png" alt="image">
        </div>
    </div>
    <!-- End Projects Area -->

    @include('front.pages.talktous')

@endsection
