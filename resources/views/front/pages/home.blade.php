@extends('front.layouts.master')

@section('title')
    {{trans('lang.Home')}}
@endsection
@section('content')



    <!-- Start Main Banner Area -->
    <div class="main-banner-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="main-banner-content">
                        <span data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">WE ARE LEADING TECHNOLOGY SOLUTIONS PROVIDING COMPANY</span>
                        <h1 data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">We Make The Best IT Solutions <span class="overlay"></span></h1>
                        <p data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">We are leading technology solutions providing company all over the world doing over 40 years. Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor.</p>

                        <div class="banner-btn" data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                            <a href="/contact-us" class="default-btn">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="main-banner-image">
                        <img src="{{url('/')}}/assets/images/main-banner/banner.png" alt="image" data-aos="fade-down" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">

                        <div class="banner-circle">
                            <img src="{{url('/')}}/assets/images/main-banner/banner-circle.png" alt="image" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-shape-1">
            <img src="{{url('/')}}/assets/images/main-banner/banner-shape-1.png" alt="image">
        </div>
        <div class="banner-shape-2">
            <img src="{{url('/')}}/assets/images/main-banner/banner-shape-2.png" alt="image">
        </div>
        <div class="banner-dot-shape-1">
            <img src="{{url('/')}}/assets/images/main-banner/dot-1.png" alt="image">
        </div>
        <div class="banner-dot-shape-2">
            <img src="{{url('/')}}/assets/images/main-banner/dot-2.png" alt="image">
        </div>
        <div class="banner-dot-shape-3">
            <img src="{{url('/')}}/assets/images/main-banner/dot-3.png" alt="image">
        </div>
        <div class="banner-dot-shape-4">
            <img src="{{url('/')}}/assets/images/main-banner/dot-4.png" alt="image">
        </div>
        <div class="banner-dot-shape-5">
            <img src="{{url('/')}}/assets/images/main-banner/dot-5.png" alt="image">
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- End Main Banner Area -->

    <!-- Start Features Area -->
    <div class="features-area pb-75">
        <div class="container">
            <div class="features-inner-box">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
                        <div class="single-features-card" data-tilt>
                            <div class="features-image" data-tilt>
                                <a href="services-details.html"><img src="{{url('/')}}/assets/images/features/features-1.png" alt="image"></a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="services-details.html">Product Design</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr</p>
                            </div>
                            <div class="hover-content">
                                <h3>
                                    <a href="services-details.html">Product Design</a>
                                </h3>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
                        <div class="single-features-card" data-tilt>
                            <div class="features-image" data-tilt>
                                <a href="services-details.html"><img src="{{url('/')}}/assets/images/features/features-2.png" alt="image"></a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="services-details.html">Development</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr</p>
                            </div>
                            <div class="hover-content">
                                <h3>
                                    <a href="services-details.html">Development</a>
                                </h3>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
                        <div class="single-features-card" data-tilt>
                            <div class="features-image" data-tilt>
                                <a href="services-details.html"><img src="{{url('/')}}/assets/images/features/features-3.png" alt="image"></a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="services-details.html">Data Analysis</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr</p>
                            </div>
                            <div class="hover-content">
                                <h3>
                                    <a href="services-details.html">Data Analysis</a>
                                </h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->

    <!-- Start About Area -->
    <div class="about-area pb-75">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-wrap-image" data-tilt>
                        <img src="{{url('/')}}/assets/images/about/about-3.jpg" alt="image" data-aos="fade-down" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-wrap-content" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <div class="about-bg-text">ABOUT US</div>
                        <span>WHO WE ARE</span>
                        <h3>Your Trusted Partner For All IT Solutions <span class="overlay"></span></h3>
                        <p>We are leading technology solutions providing company all over the world doing over 40 years. Lorem ipsum dolor sit amet consetetur sadipscing elitre sed diam non umy eirmod tempor invidunt ut labore.</p>
                    </div>
                </div>
            </div>

            <div class="about-inner-box">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                            <h3>Our Vision</h3>
                            <p>Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.</p>

                            <div class="about-btn">
                                <a href="about-style-1.html" class="default-btn">Know More About Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card" data-aos="fade-down" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                            <h3>Our Mission</h3>
                            <p>Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                            <div class="card-image" data-tilt>
                                <img src="{{url('/')}}/assets/images/about/about-4.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-circle-shape">
            <img src="{{url('/')}}/assets/images/about/about-circle.png" alt="image">
        </div>
    </div>
    <!-- End About Area -->

    <!-- Start Services Area -->
    <div class="services-area margin-zero ptb-100" id="Services">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="services-section-content" data-aos="fade-down" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <div class="services-bg-text">{{trans('lang.Services')}}</div>
                        <span>{{trans('lang.Services')}}</span>
                        <h3>We Provide the Best Quality <b>Services</b> <span class="overlay"></span></h3>
                        <p>We are technology solutions providing company all over the world doing over 40 years.</p>
                        <div class="services-section-btn">
                            <a href="/services" class="default-btn">Explore All Services</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="services-slides owl-carousel owl-theme">
                        <div class="services-item">
                            <div class="services-image">
                                <a href="services-details.html"><img src="{{url('/')}}/assets/images/services/services-1.jpg" alt="image"></a>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="services-details.html">Software Development</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                                <a href="services-details.html" class="services-btn">View More</a>
                            </div>
                        </div>

                        <div class="services-item">
                            <div class="services-image">
                                <a href="services-details.html"><img src="{{url('/')}}/assets/images/services/services-2.jpg" alt="image"></a>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="services-details.html">App Development</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                                <a href="services-details.html" class="services-btn">View More</a>
                            </div>
                        </div>

                        <div class="services-item">
                            <div class="services-image">
                                <a href="services-details.html"><img src="{{url('/')}}/assets/images/services/services-3.jpg" alt="image"></a>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="services-details.html">Web Development</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                                <a href="services-details.html" class="services-btn">View More</a>
                            </div>
                        </div>

                        <div class="services-item">
                            <div class="services-image">
                                <a href="services-details.html"><img src="{{url('/')}}/assets/images/services/services-4.jpg" alt="image"></a>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="services-details.html">Analytic Solutions</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                                <a href="services-details.html" class="services-btn">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->



    @include('front.pages.testimonials')

    @include('front.pages.talktous')

    <!-- Start Projects Area -->
    <div class="projects-area style-two-area ptb-100" id="projects">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="projects-section-content" data-aos="fade-down" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <div class="projects-bg-text">WORK</div>
                        <span>PROJECTS</span>
                        <h3>Our Latest Incredible Client's Project <span class="overlay"></span></h3>
                        <p>We are technology solutions providing company all over the world doing over 40 years.</p>
                        <div class="projects-section-btn">
                            <a href="/projects" class="default-btn">Explore All Projects</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="projects-slides-two owl-carousel owl-theme">
                        <div class="projects-item bg-F2F1F3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                            <div class="projects-image">
                                <a href="projects-details.html"><img src="{{url('/')}}/assets/images/projects/projects-1.jpg" alt="image"></a>
                            </div>
                            <div class="projects-content">
                                <h3>
                                    <a href="projects-details.html">3D Animation</a>
                                </h3>
                                <a href="projects-details.html" class="projects-btn">View More</a>
                            </div>
                        </div>

                        <div class="projects-item bg-F2F1F3" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                            <div class="projects-image">
                                <a href="projects-details.html"><img src="{{url('/')}}/assets/images/projects/projects-2.jpg" alt="image"></a>
                            </div>
                            <div class="projects-content">
                                <h3>
                                    <a href="projects-details.html">Online Banking Software</a>
                                </h3>
                                <a href="projects-details.html" class="projects-btn">View More</a>
                            </div>
                        </div>

                        <div class="projects-item bg-F2F1F3" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                            <div class="projects-image">
                                <a href="projects-details.html"><img src="{{url('/')}}/assets/images/projects/projects-3.jpg" alt="image"></a>
                            </div>
                            <div class="projects-content">
                                <h3>
                                    <a href="projects-details.html">Cashier Software</a>
                                </h3>
                                <a href="projects-details.html" class="projects-btn">View More</a>
                            </div>
                        </div>

                        <div class="projects-item bg-F2F1F3" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                            <div class="projects-image">
                                <a href="projects-details.html"><img src="{{url('/')}}/assets/images/projects/projects-4.jpg" alt="image"></a>
                            </div>
                            <div class="projects-content">
                                <h3>
                                    <a href="projects-details.html">Analytics Software</a>
                                </h3>
                                <a href="projects-details.html" class="projects-btn">View More</a>
                            </div>
                        </div>

                        <div class="projects-item bg-F2F1F3" data-aos="fade-up" data-aos-delay="90" data-aos-duration="900" data-aos-once="true">
                            <div class="projects-image">
                                <a href="projects-details.html"><img src="{{url('/')}}/assets/images/projects/projects-5.jpg" alt="image"></a>
                            </div>
                            <div class="projects-content">
                                <h3>
                                    <a href="projects-details.html">Messaging App</a>
                                </h3>
                                <a href="projects-details.html" class="projects-btn">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Projects Area -->

    <!-- Start Partner Area -->
    <div class="partner-area ptb-100">
        <div class="container">
            <div class="partner-slides owl-carousel owl-theme">
                <div class="partner-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/partner/partner-1.png" alt="partner">
                        <img src="{{url('/')}}/assets/images/partner/partner-hover-1.png" alt="partner">
                    </a>
                </div>
                <div class="partner-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/partner/partner-2.png" alt="partner">
                        <img src="{{url('/')}}/assets/images/partner/partner-hover-2.png" alt="partner">
                    </a>
                </div>
                <div class="partner-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/partner/partner-3.png" alt="partner">
                        <img src="{{url('/')}}/assets/images/partner/partner-hover-3.png" alt="partner">
                    </a>
                </div>
                <div class="partner-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/partner/partner-4.png" alt="partner">
                        <img src="{{url('/')}}/assets/images/partner/partner-hover-4.png" alt="partner">
                    </a>
                </div>
                <div class="partner-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/partner/partner-5.png" alt="partner">
                        <img src="{{url('/')}}/assets/images/partner/partner-hover-5.png" alt="partner">
                    </a>
                </div>
                <div class="partner-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/partner/partner-6.png" alt="partner">
                        <img src="{{url('/')}}/assets/images/partner/partner-hover-6.png" alt="partner">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

  @include('front.pages.team')

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
                            <img src="{{url('/')}}/assets/images/overview/overview-shape.png" alt="image">
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
                            <img src="{{url('/')}}/assets/images/overview/overview-shape.png" alt="image">
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
                            <img src="{{url('/')}}/assets/images/overview/overview-shape.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>Visit Us</h3>
                        <span>413 North Las Vegas, NV 89032</span>

                        <div class="overview-shape">
                            <img src="{{url('/')}}/assets/images/overview/overview-shape.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview Area -->

    <!-- Start Blog Area -->
    <div class="blog-area pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span>ARTICLE</span>
                <h2>Read Our Latest Blog <span class="overlay"></span></h2>
            </div>

            <div class="blog-slides owl-carousel owl-theme">
                <div class="blog-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="blog-image">
                                <a href="single-blog-1.html"><img src="{{url('/')}}/assets/images/blog/blog-1.jpg" alt="image"></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-content">
                                <div class="date">9th July, 2021</div>
                                <h3>
                                    <a href="single-blog-1.html">How Technology Dominate In The new World In 2021</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor invidunt ut labore.</p>
                                <a href="single-blog-1.html" class="blog-btn">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog-card" data-aos="fade-up" data-aos-delay="890" data-aos-duration="900" data-aos-once="true">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="blog-image">
                                <a href="single-blog-1.html"><img src="{{url('/')}}/assets/images/blog/blog-2.jpg" alt="image"></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-content">
                                <div class="date">7th July, 2021</div>
                                <h3>
                                    <a href="single-blog-1.html">Top 10 Most Famous Technology Trend In 2021</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor invidunt ut labore.</p>
                                <a href="single-blog-1.html" class="blog-btn">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="blog-image">
                                <a href="single-blog-1.html"><img src="{{url('/')}}/assets/images/blog/blog-1.jpg" alt="image"></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-content">
                                <div class="date">9th July, 2021</div>
                                <h3>
                                    <a href="single-blog-1.html">How Technology Dominate In The new World In 2021</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor invidunt ut labore.</p>
                                <a href="single-blog-1.html" class="blog-btn">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog-card" data-aos="fade-up" data-aos-delay="90" data-aos-duration="900" data-aos-once="true">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="blog-image">
                                <a href="single-blog-1.html"><img src="{{url('/')}}/assets/images/blog/blog-2.jpg" alt="image"></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-content">
                                <div class="date">7th July, 2021</div>
                                <h3>
                                    <a href="single-blog-1.html">Top 10 Most Famous Technology Trend In 2021</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor invidunt ut labore.</p>
                                <a href="single-blog-1.html" class="blog-btn">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->



@endsection
