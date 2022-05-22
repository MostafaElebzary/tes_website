<!doctype html>

<html @if(session('lang') == 'en') lang="zxx" @else  lang="ar" dir="rtl" @endif>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

@if(session('lang') == 'en')


        <style>

            :root {
                --main-font-family: 'Open Sans', sans-serif;
                --heading-font-family: 'Jost', sans-serif;
                --monoton-font-family: 'Monoton', cursive;
                --main-color: #E7AB1D;
                --optional-color: #3E019A;
                --white-color: #ffffff;
                --black-color: #14042C;
                --paragraph-color: #646464;
                --font-size: 16px;
                --transition: .6s;
                --btn-gradient-color: radial-gradient(circle, #E7AB1D, #f8c600, #eed900, #e0ec00, #cdff05);
            }
        </style>
    <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/aos.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/animate.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/meanmenu.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/remixicon.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/odometer.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/fancybox.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/nice-select.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/navbar.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/footer.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/dark.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/responsive.css">
    @else

        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/bootstrap.rtl.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/aos.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/animate.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/meanmenu.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/remixicon.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/odometer.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/magnific-popup.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/fancybox.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/nice-select.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/style.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/navbar.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/footer.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/dark.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/responsive.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/rtl.css">

        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
    @endif
    @yield('css')

    <title>TES - @yield('title')</title>

    <link rel="icon" type="image/png" href="{{url('/')}}/assets/images/favicon.png">
</head>

<body @if(session('lang') == 'en') style="font-family: Tajawal" @endif>

<!-- Start Preloader Area -->
<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="lds-spinner">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader Area -->

<!-- Start Header Area -->
<header class="main-header-area">
    <!-- Start Navbar Area -->
    <div class="navbar-area navbar-style-two-with-color">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{url('/')}}/assets/images/black-logo.png" class="black-logo" alt="image">
                            <img src="{{url('/')}}/assets/images/logo.png" class="white-logo" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{url('/')}}/assets/images/black-logo.png" class="black-logo" alt="image">
                        <img src="{{url('/')}}/assets/images/logo.png" class="white-logo" alt="image">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item">
                                <a href="/" class="nav-link @if(request()->segment(1) == "" || request()->segment(1) == "home") active @endif">{{trans('lang.Home')}}</a>
                            </li>

                            <li class="nav-item">
                                <a href="@if(request()->segment(1) == "" || request()->segment(1) == "home") #Services @else /services @endif" class="nav-link @if( request()->segment(1) == "services") active @endif">{{trans('lang.Services')}}</a>
                            </li>

                            <li class="nav-item">
                                <a href="@if(request()->segment(1) == "" || request()->segment(1) == "home") #projects @else /projects @endif" class="nav-link  @if( request()->segment(1) == "projects") active @endif">{{trans('lang.Projects')}}</a>
                            </li>

                            <li class="nav-item">
                                <a href="/about-us" class="nav-link @if( request()->segment(1) == "about-us") active @endif">{{trans('lang.AboutUs')}}</a>
                            </li>

                            <li class="nav-item">
                                <a href="/contact-us" class="nav-link @if( request()->segment(1) == "contact-us") active @endif">{{trans('lang.Contact')}}</a>
                            </li>


                        </ul>

                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <ul class="topbar-action">
                                    <li class="dropdown language-option" style="color: gray">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-global-line"></i>
                                            <span class="lang-name" style="color: gray">
                                            @if(session('lang') == 'en')
                                                    ENG
                                                @else
                                                    العربيّة
                                                @endif
                                    </span>
                                        </button>
                                        <div class="dropdown-menu language-dropdown-menu">
                                            @if(session('lang') == 'en')
                                                <a class="dropdown-item" href="{{url('lang/en')}}">
                                                    <img src="{{url('/')}}/assets/images/uk.png" alt="flag">
                                                    ENG
                                                </a>
                                                <a class="dropdown-item" href="{{url('lang/ar')}}">
                                                    <img src="{{url('/')}}/assets/images/uae.png" alt="flag">
                                                    العربيّة
                                                </a>
                                            @else
                                                <a class="dropdown-item" href="{{url('lang/ar')}}">
                                                    <img src="{{url('/')}}/assets/images/uae.png" alt="flag">
                                                    العربيّة
                                                </a>
                                                <a class="dropdown-item" href="{{url('lang/en')}}">
                                                    <img src="{{url('/')}}/assets/images/uk.png" alt="flag">
                                                    ENG
                                                </a>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="option-item">
                                <div class="side-menu-btn">
                                    <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal"
                                       data-bs-target="#sidebarModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">

                                <ul class="topbar-action">
                                    <li class="dropdown language-option" style="color: gray">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-global-line"></i>
                                            <span class="lang-name" style="color: gray">
                                            @if(session('lang') == 'en')
                                                    EN
                                                @else
                                                    ع
                                                @endif
                                    </span>
                                        </button>
                                        <div class="dropdown-menu language-dropdown-menu">
                                            @if(session('lang') == 'en')
                                                <a class="dropdown-item" href="{{url('lang/en')}}">
                                                    <img src="{{url('/')}}/assets/images/uk.png" alt="flag">
                                                    EN
                                                </a>
                                                <a class="dropdown-item" href="{{url('lang/ar')}}">
                                                    <img src="{{url('/')}}/assets/images/uae.png" alt="flag">
                                                    ع
                                                </a>
                                            @else
                                                <a class="dropdown-item" href="{{url('lang/ar')}}">
                                                    <img src="{{url('/')}}/assets/images/uae.png" alt="flag">
                                                    ع
                                                </a>
                                                <a class="dropdown-item" href="{{url('lang/en')}}">
                                                    <img src="{{url('/')}}/assets/images/uk.png" alt="flag">
                                                    EN
                                                </a>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="option-item">
                                <div class="side-menu-btn">
                                    <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal"
                                       data-bs-target="#sidebarModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
<!-- End Header Area -->

<!-- Sidebar Modal -->
<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>

            <div class="modal-body">
                <a href="index.html">
                    <img src="{{url('/')}}/assets/images/black-logo.png" class="black-logo" alt="image">
                    <img src="{{url('/')}}/assets/images/logo.png" class="white-logo" alt="image">
                </a>
                <div class="sidebar-content">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua.</p>

                    <div class="sidebar-btn">
                        <a href="/contact-us" class="default-btn">Let’s Talk</a>
                    </div>
                </div>
                <div class="sidebar-contact-info">
                    <h3>Contact Information</h3>

                    <ul class="info-list">
                        <li><i class="ri-phone-fill"></i> <a href="tel:9901234567">+990-123-4567</a></li>

                        <li><i class="ri-mail-line"></i> <a href="mailto:coze@gmail.com">coze@gmail.com</a></li>

                        <li><i class="ri-map-pin-line"></i> 413 North Las Vegas, NV 89032</li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li><a href="#" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                    <li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                    <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                    <li><a href="#" target="_blank"><i class="ri-instagram-fill"></i></a></li>
                </ul>
                <div class="contact-form">
                    <h3>Ready to Get Started?</h3>

                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required
                                           data-error="Please enter your name" placeholder="Your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required
                                           data-error="Please enter your email"
                                           placeholder="Your email address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control" required
                                           data-error="Please enter your phone number"
                                           placeholder="Your phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                            <textarea name="message" class="form-control" cols="30" rows="6" required
                                                      data-error="Please enter your message"
                                                      placeholder="Write your message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Send Message<span></span></button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Modal -->

