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
    <!-- start efood project area -->
    <div class="efood-content py-2">
        <div class="container">
            <div class="efood-details-header my-5">
                <h1>eFood - Food Delivery App with Laravel Admin Panel + Delivery Man App</h1>
            </div>
            <div class="efood-details-bg">
                <img src="{{url('/')}}/assets/images/efood_images/image1.avif" alt="efood_details" class="w-100">
            </div>
            <div class="efood-details-data my-5">
                <p><strong>eFood</strong> is a <strong>Multi Branch supported food delivery restaurant management
                        system</strong> that comes with the <strong>user app, website</strong> and <strong>delivery man
                        app</strong>. With this powerful system, you will get a powerful admin panel built with
                    <strong>Laravel Framework</strong> that will help you manage the whole system smartly which accelerates
                    your restaurant business.</p>
                <br>
                <p><strong>REASON TO BUY</strong></p>
                <ol>
                    <li>Clean &amp; Maintainable Coding Structure</li>
                    <li>Elegant, Clean &amp; Awesome UI Design</li>
                    <li>LTR &amp; RTL Supported</li>
                    <li>Complete Featured Website, User &amp; Delivery Man App</li>
                    <li>Multi-branch with branch panel</li>
                    <li>Take away &amp; Home delivery both supported</li>
                    <li>Delivery coverage area</li>
                    <li>Powerful Admin Panel</li>
                    <li>Rich Analytics &amp; Reports</li>
                    <li>Multiple Payment Gateway</li>
                    <li>Chat, Coupon, Tracking, Review, Push Notification, etc. Pro Features </li>
                    <li>High-Level Support</li>
                    <li>More features Coming in the Next Release.</li>
                </ol>
                <p><a href="https://efood.6amtech.com/" rel="nofollow"><strong>Demo Web App-</strong></a> <a
                        href="https://efood-web.6amtech.com/" rel="nofollow">https://efood-web.6amtech.com/</a>
                </p>
                <p><strong><a href="https://efood-admin.6amtech.com/admin/auth/login" rel="nofollow">Admin Panel</a>
                        Email</strong>- <a href="mailto:admin@admin.com">admin@admin.com</a> <strong>Password</strong>-
                    12345678<br><br><strong><a href="https://efood-admin.6amtech.com/branch/auth/login"
                                               rel="nofollow">Branch Panel</a> Email</strong>- <a
                        href="mailto:branch@gmail.com">branch@gmail.com</a> <strong>Password</strong>- 12345678</p>
                <p>
                    <a href="https://drive.google.com/file/d/1HAS7jJ5uuFwQYI_Ykey3aOcwhGVC_hbF/view?usp=sharing"
                       rel="nofollow">User app</a> <a
                        href="https://drive.google.com/file/d/1iQ6_0dsI6-evMqzIeesaDNJ0r1yWbdYR/view?usp=sharing"
                        rel="nofollow">Delivery man app</a>
                </p>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/efood_images/img2.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/efood_images/img3.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/efood_images/img4.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/efood_images/img5.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/efood_images/img6.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/efood_images/img7.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/efood_images/img8.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/efood_images/img9.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/efood_images/img10.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/efood_images/img11.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/efood_images/img12.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/efood_images/img13.png">
                </div>
                <div class="efood-slide">
                    <img src="{{url('/')}}/assets/images/efood_images/img14.png">
                </div>
                <p class="mt-3"><strong>User App Features-</strong></p>
                <ol>
                    <li>Multi-branch supported</li>
                    <li>Coverage area</li>
                    <li>Take away &amp; Home delivery</li>
                    <li>Splash &amp; OnBoarding screen</li>
                    <li>Login and Registration with email &amp; password</li>
                    <li>Password reset option using confirmation OTP</li>
                    <li>Multiple languages</li>
                    <li>LTR &amp; RTL supported</li>
                    <li>Smart homepage with category, set menu, banner &amp; latest items. </li>
                    <li>Promotional banner option with category or item redirection</li>
                    <li>Nice category &amp; subcategory page</li>
                    <li>Search food item with search suggestions</li>
                    <li>Filter option in the search</li>
                    <li>Product wishlist</li>
                    <li>Cart screen with the dynamic configurable payment method</li>
                    <li>Promo code system</li>
                    <li>Order list and details</li>
                    <li>Order tracking with live delivery man location</li>
                    <li>Save addresses for quick order</li>
                    <li>In-app chatting with the restaurant owner</li>
                    <li>Custom notification</li>
                    <li>User profile</li>
                    <li>Dark &amp; Light theme for better user experience.</li>
                </ol>
                <p><strong>Delivery Man Features-</strong></p>
                <ol>
                    <li>Splash &amp; Login with email and password.</li>
                    <li>Active order list</li>
                    <li>Order details with Start delivery and Confirm delivery button </li>
                    <li>Delivery success screen with the receivable amount from the customer </li>
                    <li>Google map direction for customer delivery location</li>
                    <li>Delivered order history</li>
                    <li>Delivery man profile</li>
                    <li>LTR &amp; RTL supported</li>
                    <li>Dark &amp; Light theme</li>
                </ol>
                <p><strong>Admin Dashboard Features-</strong></p>
                <ol>
                    <li>Branch management</li>
                    <li>Order management</li>
                    <li>Food category &amp; subcategory management</li>
                    <li>Food variation &amp; addon management</li>
                    <li>Food item &amp; set menu management</li>
                    <li>Chat with customer</li>
                    <li>Send custom notification </li>
                    <li>Coupon management</li>
                    <li>Customer management</li>
                    <li>Delivery man management</li>
                    <li>Rich Analytics &amp; Reports</li>
                    <li>Restaurant business settings</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end efood project area -->

@endsection
