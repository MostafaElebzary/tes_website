@extends('front.layouts.master')
@section('title')
    T app
@endsection
@section('content')
    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-5 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500"
                 data-aos-once="true">
                <h2>T app</h2>

                <ul>
                    <li>
                        <a href="/">{{trans('lang.Home')}}</a>
                    </li>
                    <li>
                        <a href="/projects">{{trans('lang.Projects')}}</a>
                    </li>
                    <li>T app</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->
    <!-- start efood project area -->
    <div class="efood-content py-2">
        <div class="container">
            <div class="efood-details-header my-5">
{{--                <h1>T APP</h1>--}}
            </div>
            <div class="efood-details-bg">
                <img src="{{url('/')}}/assets/images/t_app_images/main_poster.png" alt="efood_details" class="w-100">
            </div>
            <div class="efood-details-data my-5">
                <p> {{trans('lang.It is a management system that supports multiple branches to deliver orders and comes with the user application, website and mandoob application, with this powerful system, you will get a powerful management panel built using one of the most powerful programming languages ​​that will help you to manage the entire system intelligently, which speeds up your business')}}</p>
                <br>
                <p><strong>{{trans('lang.What makes you buy?')}}</strong></p>
                <ol>
                    <li>{{trans('lang.Clean &amp; Maintainable Coding Structure')}}</li>
                    <li>{{trans('lang.Elegant, Clean &amp; Awesome UI Design')}}</li>
                    <li>{{trans('lang.LTR &amp; RTL Supported')}}</li>
                    <li>{{trans('lang.Complete Featured Website, User &amp; Delivery Man App')}}</li>
                    <li>{{trans('lang.Multi-branch with branch panel')}}</li>
                    <li>{{trans('lang.Take away &amp; Home delivery both supported')}}</li>
                    <li>{{trans('lang.Delivery coverage area')}}</li>
                    <li>{{trans('lang.Powerful Admin Panel')}}</li>
                    <li>{{trans('lang.Rich Analytics &amp; Reports')}}</li>
                    <li>{{trans('lang.Multiple Payment Gateway')}}</li>
                    <li>{{trans('lang.Chat, Coupon, Tracking, Review, Push Notification, etc. Pro Features ')}}</li>
                    <li>{{trans('lang.High-Level Support')}}</li>

                </ol>

                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/t_app_images/img2.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/t_app_images/img3.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/t_app_images/img4.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/t_app_images/img5.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/t_app_images/img6.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/t_app_images/img7.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/t_app_images/img8.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/t_app_images/img9.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/t_app_images/img10.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/t_app_images/img11.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/t_app_images/img12.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/t_app_images/img13.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/t_app_images/img14.png">
                </div>

            </div>
        </div>
    </div>
    <!-- end efood project area -->

@endsection
