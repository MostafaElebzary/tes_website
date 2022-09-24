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
                        <h1 data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                            data-aos-once="true"> {{$slider->title}} <span class="overlay"></span></h1>
                        <p data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                           data-aos-once="true">{!! $slider->body !!}</p>

                        <div class="banner-btn" data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                             data-aos-once="true">
                            <a href="/contact-us" class="default-btn">{{trans('lang.Get Started')}}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="main-banner-image">
                        <img src="{{url('storage')}}/{{ $slider->image}}" alt="{{$slider->title}}" data-aos="fade-down"
                             data-aos-delay="70"
                             data-aos-duration="700" data-aos-once="true">

                        <div class="banner-circle">
                            <img src="{{url('/')}}/assets/images/main-banner/banner-circle.png" alt="image"
                                 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"
                                 data-aos-once="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-shape-1">
            <img src="{{url('/')}}/assets/images/main-banner/banner-shape-1.png" alt="banner-shape-1.png">
        </div>
        <div class="banner-shape-2">
            <img src="{{url('/')}}/assets/images/main-banner/banner-shape-2.png" alt="banner-shape-2.png">
        </div>
        <div class="banner-dot-shape-1">
            <img src="{{url('/')}}/assets/images/main-banner/dot-1.png" alt="dot-1.png">
        </div>
        <div class="banner-dot-shape-2">
            <img src="{{url('/')}}/assets/images/main-banner/dot-2.png" alt="dot-2.png">
        </div>
        <div class="banner-dot-shape-3">
            <img src="{{url('/')}}/assets/images/main-banner/dot-3.png" alt="dot-3.png">
        </div>
        <div class="banner-dot-shape-4">
            <img src="{{url('/')}}/assets/images/main-banner/dot-4.png" alt="dot-4.png">
        </div>
        <div class="banner-dot-shape-5">
            <img src="{{url('/')}}/assets/images/main-banner/dot-5.png" alt="dot-5.png">
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
                    @foreach($services->take(3) as $service)

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
                             data-aos-once="true">
                            <div class="single-features-card">
                                <div class="features-image">
                                    <a href="/services"><img
                                            src="{{url('storage')}}/{{$service->image}}" alt="{{$service->title}}"></a>
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="/services">{{$service->title}}</a>
                                    </h3>
                                    <div class="truncate"> {!!AbstractHTMLContents($service->body,100)  !!}</div>
                                </div>
                                <div class="hover-content">
                                    <h3>
                                        <a href="/services">{{$service->title}}</a>
                                    </h3>

                                </div>
                            </div>
                        </div>
                    @endforeach
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
                    <div class="about-wrap-image">
                        <img src="{{url('storage')}}/{{$about->image}}" alt="{{$about->title}}" data-aos="fade-down"
                             data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-wrap-content" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                         data-aos-once="true">
                        <div class="about-bg-text">ABOUT US</div>
                        <span>{{$about->page}}</span>
                        <h3>{{$about->title}} <span class="overlay"></span></h3>
                        <p>{!! $about->body !!}</p>
                    </div>
                </div>
            </div>

            <div class="about-inner-box">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                             data-aos-once="true">
                            <h3>{{$vision->page}}</h3>
                            <p>{!! $vision->body !!}.</p>

                            {{--                            <div class="about-btn">--}}
                            {{--                                <a href="about-style-1.html" class="default-btn">Know More About Us</a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card" data-aos="fade-down" data-aos-delay="70" data-aos-duration="700"
                             data-aos-once="true">
                            <h3>{{$mission->page}}</h3>
                            <p>{!! $mission->body !!}.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                             data-aos-once="true">
                            <div class="card-image">
                                <img src="{{url('storage')}}/{{$mission->image}}" alt="{{$mission->page}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--        <div class="about-circle-shape">--}}
        {{--            <img src="{{url('/')}}/assets/images/about/about-circle.png" alt="about-circle">--}}
        {{--        </div>--}}
    </div>
    <!-- End About Area -->
    {{--TODO::Services --}}
    <!-- Start Services Area -->
    <div class="services-area bg-with-14042C-color ptb-100" id="Services">
        <div class="container">
            <div class="section-title">
                <span>{{trans('lang.Services')}}</span>
                <h3> {{settings_value('service_title_'.app()->getLocale())}}<span class="overlay"></span></h3>
                <p>{!! settings_value('service_desc_'.app()->getLocale()) !!}</p>
            </div>
            <div class="row justify-content-center">
                @foreach($services as $service)
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item">
                            <div class="services-image">
                                <a href="/services"><img
                                        src="{{url('storage')}}/{{$service->image}}" alt="{{$service->title}}"></a>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="/services">{{$service->title}}</a>
                                </h3>
                                {{--                                <div>{!! $service->body !!}</div>--}}
{{--                                <a href="/services" class="services-btn">{{trans('lang.View More')}}</a>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="services-section-btn text-center">
                <a href="/services" class="default-btn">{{trans('lang.Explore All Services')}}</a>
            </div>
        </div>
    </div>
    <!-- End Services Area -->



    @include('front.pages.testimonials')





    <!-- Start Partner Area -->
    <div class="partner-area ptb-100">
        <div class="container">
            <div class="partner-slides owl-carousel owl-theme">
                @foreach($partners as $key=> $partner)
                    <div class="partner-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                         data-aos-once="true">
                        <a href="#">
                            <img src="{{url('storage')}}/{{$partner->image}}" alt="partner{{$key}}">

                        </a>
                    </div>
                @endforeach
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
                        <h3>{{trans('lang.Call Us')}}</h3>
                        <span>
                                <a href="tel:{{settings_value('call_us')}}">{{settings_value('call_us')}}</a>
                            </span>

                        <div class="overview-shape">
                            <img src="{{url('/')}}/assets/images/overview/overview-shape.png" alt="overview-shape">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>{{trans('lang.Email Us')}}</h3>
                        <span>
                                <a href="mailto:{{settings_value('email')}}">{{settings_value('email')}}</a>
                            </span>

                        <div class="overview-shape">
                            <img src="{{url('/')}}/assets/images/overview/overview-shape.png" alt="overview-shape">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>{{trans('lang.Tech Support')}}</h3>
                        <span>
                                <a href="tel:15143125678">{{settings_value('tech_support')}}</a>
                            </span>

                        <div class="overview-shape">
                            <img src="{{url('/')}}/assets/images/overview/overview-shape.png" alt="overview-shape">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>{{trans('lang.Visit Us')}}</h3>
                        <span>{{settings_value('address_'.app()->getLocale())}}</span>

                        <div class="overview-shape">
                            <img src="{{url('/')}}/assets/images/overview/overview-shape.png" alt="overview-shape">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview Area -->

    @include('front.pages.talktous')

    {{--    <!-- Start Blog Area -->--}}
    {{--    <div class="blog-area pt-100 pb-75">--}}
    {{--        <div class="container">--}}
    {{--            <div class="section-title">--}}
    {{--                <span>ARTICLE</span>--}}
    {{--                <h2>Read Our Latest Blog <span class="overlay"></span></h2>--}}
    {{--            </div>--}}

    {{--            <div class="blog-slides owl-carousel owl-theme">--}}
    {{--                <div class="blog-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"--}}
    {{--                     data-aos-once="true">--}}
    {{--                    <div class="row align-items-center">--}}
    {{--                        <div class="col-lg-6">--}}
    {{--                            <div class="blog-image">--}}
    {{--                                <a href="single-blog-1.html"><img src="{{url('/')}}/assets/images/blog/blog-1.jpg"--}}
    {{--                                                                  alt="image"></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-lg-6">--}}
    {{--                            <div class="blog-content">--}}
    {{--                                <div class="date">9th July, 2021</div>--}}
    {{--                                <h3>--}}
    {{--                                    <a href="single-blog-1.html">How Technology Dominate In The new World In 2021</a>--}}
    {{--                                </h3>--}}
    {{--                                <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor--}}
    {{--                                    invidunt ut labore.</p>--}}
    {{--                                <a href="single-blog-1.html" class="blog-btn">View More</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="blog-card" data-aos="fade-up" data-aos-delay="890" data-aos-duration="900"--}}
    {{--                     data-aos-once="true">--}}
    {{--                    <div class="row align-items-center">--}}
    {{--                        <div class="col-lg-6">--}}
    {{--                            <div class="blog-image">--}}
    {{--                                <a href="single-blog-1.html"><img src="{{url('/')}}/assets/images/blog/blog-2.jpg"--}}
    {{--                                                                  alt="image"></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-lg-6">--}}
    {{--                            <div class="blog-content">--}}
    {{--                                <div class="date">7th July, 2021</div>--}}
    {{--                                <h3>--}}
    {{--                                    <a href="single-blog-1.html">Top 10 Most Famous Technology Trend In 2021</a>--}}
    {{--                                </h3>--}}
    {{--                                <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor--}}
    {{--                                    invidunt ut labore.</p>--}}
    {{--                                <a href="single-blog-1.html" class="blog-btn">View More</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="blog-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"--}}
    {{--                     data-aos-once="true">--}}
    {{--                    <div class="row align-items-center">--}}
    {{--                        <div class="col-lg-6">--}}
    {{--                            <div class="blog-image">--}}
    {{--                                <a href="single-blog-1.html"><img src="{{url('/')}}/assets/images/blog/blog-1.jpg"--}}
    {{--                                                                  alt="image"></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-lg-6">--}}
    {{--                            <div class="blog-content">--}}
    {{--                                <div class="date">9th July, 2021</div>--}}
    {{--                                <h3>--}}
    {{--                                    <a href="single-blog-1.html">How Technology Dominate In The new World In 2021</a>--}}
    {{--                                </h3>--}}
    {{--                                <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor--}}
    {{--                                    invidunt ut labore.</p>--}}
    {{--                                <a href="single-blog-1.html" class="blog-btn">View More</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="blog-card" data-aos="fade-up" data-aos-delay="90" data-aos-duration="900"--}}
    {{--                     data-aos-once="true">--}}
    {{--                    <div class="row align-items-center">--}}
    {{--                        <div class="col-lg-6">--}}
    {{--                            <div class="blog-image">--}}
    {{--                                <a href="single-blog-1.html"><img src="{{url('/')}}/assets/images/blog/blog-2.jpg"--}}
    {{--                                                                  alt="image"></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-lg-6">--}}
    {{--                            <div class="blog-content">--}}
    {{--                                <div class="date">7th July, 2021</div>--}}
    {{--                                <h3>--}}
    {{--                                    <a href="single-blog-1.html">Top 10 Most Famous Technology Trend In 2021</a>--}}
    {{--                                </h3>--}}
    {{--                                <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor--}}
    {{--                                    invidunt ut labore.</p>--}}
    {{--                                <a href="single-blog-1.html" class="blog-btn">View More</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <!-- End Blog Area -->--}}



@endsection
