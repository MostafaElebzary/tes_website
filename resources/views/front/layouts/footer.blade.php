<!-- End Footer Area -->
<footer class="footer-area with-black-background margin-zero pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                     data-aos-once="true">
                    <div class="widget-logo">
                        <a href="/"><img src="{{url('storage')}}/{{ settings_image("logo_dark")}}"
                                         alt="{{settings_value('logo_dark')}}"></a>
                    </div>
                    <p>{{ settings_value("footer_desc_".app()->getLocale())}}.</p>
                    <ul class="widget-social">
                        @if(settings_value("linkedin") != '#')
                            <li>
                                <a href="{{ settings_value("linkedin")}}" target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                        @endif
                        @if(settings_value("facebook") != '#')
                            <li>
                                <a href="{{ settings_value("facebook")}}" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                        @endif
                        @if(settings_value("twitter") != '#')
                            <li>
                                <a href="{{ settings_value("twitter")}}" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                        @endif
                        @if(settings_value("youtube") != '#')
                            <li>
                                <a href="{{ settings_value("youtube")}}" target="_blank">
                                    <i class="ri-youtube-fill"></i>
                                </a>
                            </li>
                        @endif
                        @if(settings_value("instagram") != '#')
                            <li>
                                <a href="{{ settings_value("instagram")}}" target="_blank">
                                    <i class="ri-instagram-fill"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>

            {{--            <div class="col-lg-3 col-md-6">--}}
            {{--                <div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600"--}}
            {{--                     data-aos-once="true">--}}
            {{--                    <h3>Links</h3>--}}

            {{--                    <ul class="quick-links">--}}
            {{--                        <li><a href="about-style-1.html">About Us</a></li>--}}
            {{--                        <li><a href="services-style-2.html">Services</a></li>--}}
            {{--                        <li><a href="blog-style-1.html">News</a></li>--}}
            {{--                        <li><a href="pricing.html">Pricing</a></li>--}}
            {{--                        <li><a href="projects.html">Projects</a></li>--}}
            {{--                    </ul>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700"
                     data-aos-once="true">
                    <h3>{{trans('lang.Pages')}}</h3>

                    <ul class="quick-links">
                        <li><a href="/contact-us">{{trans('lang.Contact Us')}}</a></li>
                        <li><a href="/about-us">{{trans('lang.About Us')}}</a></li>
                        <li><a href="/services">{{trans('lang.Services')}}</a></li>
                        <li><a href="/projects">{{trans('lang.Projects')}}</a></li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                     data-aos-once="true">
                    <h3>{{trans('lang.Subscribe Newsletter')}}</h3>

                    <form action="{{url('/subscribe')}}" class="newsletter-form" data-bs-toggle="validator"
                          method="post">
                        @csrf
                        <input type="email" class="input-newsletter" placeholder="{{trans('lang.Enter your email')}}"
                               name="email"
                               required autocomplete="off">

                        <button type="submit" class="default-btn">{{trans('lang.Subscribe')}}</button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright @
                    <script>document.write(new Date().getFullYear())</script>
                    <span>  All Rights Reserved by TES  </span>

                </p>
            </div>
        </div>
    </div>
    <div class="footer-shape-1">
        <img src="{{url('/')}}/assets/images/footer/footer-shape-3.png" alt="image">
    </div>
    <div class="footer-shape-2">
        <img src="{{url('/')}}/assets/images/footer/footer-shape-3.png" alt="image">
    </div>
    <div class="footer-shape-3">
        <img src="{{url('/')}}/assets/images/footer/footer-shape-3.png" alt="image">
    </div>
</footer>
<!-- End Footer Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-s-line"></i>
</div>
<!-- End Go Top Area -->


@if(session('lang') == 'en')
    <!-- Links of JS files -->
    <script defer src="{{url('/')}}/assets/js/jquery.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/jquery.meanmenu.js"></script>
    <script defer src="{{url('/')}}/assets/js/owl.carousel.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/jquery.appear.js"></script>
    <script defer src="{{url('/')}}/assets/js/odometer.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/jquery.magnific-popup.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/fancybox.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/tweenmax.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/ScrollMagic.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/animation.gsap.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/debug.addIndicators.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/mixitup.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/nice-select.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/tilt.jquery.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/parallax.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/jquery.ajaxchimp.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/form-validator.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/contact-form-script.js"></script>
    <script defer src="{{url('/')}}/assets/js/aos.js"></script>
    <script defer src="{{url('/')}}/assets/js/wow.min.js"></script>
    <script defer src="{{url('/')}}/assets/js/main.js"></script>



@else

    <script defer src="{{url('/')}}/assets_ar/js/jquery.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/bootstrap.bundle.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/jquery.meanmenu.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/owl.carousel.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/jquery.appear.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/odometer.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/jquery.magnific-popup.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/fancybox.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/tweenmax.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/ScrollMagic.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/animation.gsap.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/debug.addIndicators.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/mixitup.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/nice-select.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/tilt.jquery.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/parallax.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/jquery.ajaxchimp.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/form-validator.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/contact-form-script.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/aos.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/wow.min.js"></script>
    <script defer src="{{url('/')}}/assets_ar/js/main.js"></script>


@endif

{{--<script>--}}

{{--    document.addEventListener('contextmenu', event => event.preventDefault());--}}
{{--    /** TO DISABLE SCREEN CAPTURE **/--}}
{{--    document.addEventListener('keyup', (e) => {--}}
{{--        if (e.key == 'PrintScreen') {--}}
{{--            navigator.clipboard.writeText('');--}}
{{--            alert('Screenshots disabled!');--}}
{{--        }--}}
{{--    });--}}

{{--    /** TO DISABLE PRINTS WHIT CTRL+P **/--}}
{{--    document.addEventListener('keydown', (e) => {--}}
{{--        if (e.ctrlKey && e.key == 'p') {--}}
{{--            alert('This section is not allowed to print or export to PDF');--}}
{{--            e.cancelBubble = true;--}}
{{--            e.preventDefault();--}}
{{--            e.stopImmediatePropagation();--}}
{{--        }--}}
{{--    });--}}

{{--    /** TO DISABLE PRINTS WHIT CTRL+U **/--}}
{{--    document.addEventListener('keydown', (e) => {--}}
{{--        if (e.ctrlKey && e.key == 'u') {--}}
{{--            alert('This section is not allowed to see source code');--}}
{{--            e.cancelBubble = true;--}}
{{--            e.preventDefault();--}}
{{--            e.stopImmediatePropagation();--}}
{{--        }--}}
{{--    });--}}

{{--    document.onkeypress = function (event) {--}}
{{--        event = (event || window.event);--}}
{{--        if (event.keyCode == 123) {--}}
{{--            return false;--}}
{{--        }--}}
{{--    }--}}
{{--    document.onmousedown = function (event) {--}}
{{--        event = (event || window.event);--}}
{{--        if (event.keyCode == 123) {--}}
{{--            return false;--}}
{{--        }--}}
{{--    }--}}
{{--    document.onkeydown = function (event) {--}}
{{--        event = (event || window.event);--}}
{{--        if (event.keyCode == 123) {--}}
{{--            return false;--}}
{{--        }--}}
{{--    }--}}

{{--</script>--}}
{{--<!--Start of Tawk.to Script-->--}}
{{--<script type="text/javascript">--}}
{{--    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();--}}
{{--    (function () {--}}
{{--        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];--}}
{{--        s1.async = true;--}}
{{--        s1.src = 'https://embed.tawk.to/6341c3ef37898912e96d9202/1geseao5s';--}}
{{--        s1.charset = 'UTF-8';--}}
{{--        s1.setAttribute('crossorigin', '*');--}}
{{--        s0.parentNode.insertBefore(s1, s0);--}}
{{--    })();--}}
{{--</script>--}}
<!--End of Tawk.to Script-->

@yield('js')
</body>
</html>
