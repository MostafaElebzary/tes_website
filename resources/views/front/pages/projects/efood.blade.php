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
                <h2>{{trans('lang.Projects')}}</h2>

                <ul>
                    <li>
                        <a href="/">{{trans('lang.Home')}}</a>
                    </li>
                    <li>{{trans('lang.Projects')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->
    <!-- Start Projects Area -->
    <div class="projects-area pt-100 pb-75">
        <div class="container">
           <iframe style="width: 100%; height: 2900px;" src="http://efoodlanding.tesolutionspro.com/codecanyon.net/item/efood-food-delivery-system-with-laravel-admin-panel-delivery-man-app-v10/30320338.html"></iframe>
        </div>
    </div>
    <!-- End Projects Area -->

@endsection
