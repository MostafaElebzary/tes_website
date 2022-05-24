<!-- End Footer Area -->
<footer class="footer-area with-black-background margin-zero pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                     data-aos-once="true">
                    <div class="widget-logo">
                        <a href="index.html"><img src="{{url('/')}}/assets/images/logo.png" alt="image"></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consetetur sadi scing elitr sed diam nonumy.</p>

                    <ul class="widget-social">
                        <li>
                            <a href="https://www.facebook.com/EnvyTheme" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/?lang=en" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.youtube.com/" target="_blank">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://vimeo.com/" target="_blank">
                                <i class="ri-vimeo-fill"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600"
                     data-aos-once="true">
                    <h3>Links</h3>

                    <ul class="quick-links">
                        <li><a href="about-style-1.html">About Us</a></li>
                        <li><a href="services-style-2.html">Services</a></li>
                        <li><a href="blog-style-1.html">News</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="projects.html">Projects</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700"
                     data-aos-once="true">
                    <h3>Pages</h3>

                    <ul class="quick-links">
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="purchase-guide.html">Purchase Guide</a></li>
                        <li><a href="faq.html">FAQ's</a></li>
                        <li><a href="terms-of-service.html">Terms of Service</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                     data-aos-once="true">
                    <h3>Subscribe Newsletter</h3>

                    <form class="newsletter-form" data-bs-toggle="validator">
                        <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL"
                               required autocomplete="off">

                        <button type="submit" class="default-btn">Subscribe</button>
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
                     All Rights Reserved by TES

                </p>
            </div>
        </div>
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
    <script src="{{url('/')}}/assets/js/jquery.min.js"></script>
    <script src="{{url('/')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/assets/js/jquery.meanmenu.js"></script>
    <script src="{{url('/')}}/assets/js/owl.carousel.min.js"></script>
    <script src="{{url('/')}}/assets/js/jquery.appear.js"></script>
    <script src="{{url('/')}}/assets/js/odometer.min.js"></script>
    <script src="{{url('/')}}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{url('/')}}/assets/js/fancybox.min.js"></script>
    <script src="{{url('/')}}/assets/js/tweenmax.min.js"></script>
    <script src="{{url('/')}}/assets/js/ScrollMagic.min.js"></script>
    <script src="{{url('/')}}/assets/js/animation.gsap.min.js"></script>
    <script src="{{url('/')}}/assets/js/debug.addIndicators.min.js"></script>
    <script src="{{url('/')}}/assets/js/mixitup.min.js"></script>
    <script src="{{url('/')}}/assets/js/nice-select.min.js"></script>
    <script src="{{url('/')}}/assets/js/tilt.jquery.min.js"></script>
    <script src="{{url('/')}}/assets/js/parallax.min.js"></script>
    <script src="{{url('/')}}/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{url('/')}}/assets/js/form-validator.min.js"></script>
    <script src="{{url('/')}}/assets/js/contact-form-script.js"></script>
    <script src="{{url('/')}}/assets/js/aos.js"></script>
    <script src="{{url('/')}}/assets/js/wow.min.js"></script>
    <script src="{{url('/')}}/assets/js/main.js"></script>



@else

    <script src="{{url('/')}}/assets_ar/js/jquery.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/jquery.meanmenu.js"></script>
    <script src="{{url('/')}}/assets_ar/js/owl.carousel.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/jquery.appear.js"></script>
    <script src="{{url('/')}}/assets_ar/js/odometer.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/jquery.magnific-popup.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/fancybox.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/tweenmax.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/ScrollMagic.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/animation.gsap.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/debug.addIndicators.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/mixitup.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/nice-select.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/tilt.jquery.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/parallax.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/form-validator.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/contact-form-script.js"></script>
    <script src="{{url('/')}}/assets_ar/js/aos.js"></script>
    <script src="{{url('/')}}/assets_ar/js/wow.min.js"></script>
    <script src="{{url('/')}}/assets_ar/js/main.js"></script>


@endif

    @yield('js')
    </body>
    </html>