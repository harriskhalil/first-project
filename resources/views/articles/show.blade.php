@extends('articles.index-layout')
@section('content')
    <!-- Slider Area Start Here -->
    <section class="slick-slider-wrap-layout1">
        <div class="slick-slider-layout1">
            <div class="slick-carousel slick-content" data-slick='{
                    "slidesToShow": 1,
                    "slidesToShowTab": 1,
                    "slidesToShowMobile": 1,
                    "slidesToShowMobiles": 1,
                    "slidesToScroll": 1,
                    "speed": 1000,
                    "autoplaySpeed": 2000,
                    "dots": false,
                    "arrows": false,
                    "lazyLoad": "progressive",
                    "pauseOnHover": true,
                    "autoplay": true,
                    "centerMode": true,
                    "adaptiveHeight": false,
                    "rtl": false,
                    "asNavFor": ".slick-nav"
                    }'>
                <div class="slick-slider">
                    <div class="item-img">
                        <img src="/img/slider/slide1-1-1.jpg" alt="slide">
                        <div class="item-content">
                            <div class="big-text">Roofing Inspection</div>
                        </div>
                    </div>
                </div>
                <div class="slick-slider">
                    <div class="item-img">
                        <img src="/img/slider/slide1-2-2.jpg" alt="slide">
                        <div class="item-content">
                            <div class="big-text">Roofing Siding</div>
                        </div>
                    </div>
                </div>
                <div class="slick-slider">
                    <div class="item-img">
                        <img src="/img/slider/slide1-3-3.jpg" alt="slide">
                        <div class="item-content">
                            <div class="big-text">Roofing Replacement</div>
                        </div>
                    </div>
                </div>
                <div class="slick-slider">
                    <div class="item-img">
                        <img src="/img/slider/slide1-4-4.jpg" alt="slide">
                        <div class="item-content">
                            <div class="big-text">Roofing Insulation</div>
                        </div>
                    </div>
                </div>
                <div class="slick-slider">
                    <div class="item-img">
                        <img src="/img/slider/slide1-5-5.jpg" alt="slide">
                        <div class="item-content">
                            <div class="big-text">Roofing Gutters</div>
                        </div>
                    </div>
                </div>
                <div class="slick-slider">
                    <div class="item-img">
                        <img src="img/slider/slide1-6-6.jpg" alt="slide">
                        <div class="item-content">
                            <div class="big-text">Roofing Repair</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-nav-wrap">
                <div class="container">
                    <div class="slick-carousel slick-nav" data-slick='{
                            "slidesToShow": 6,
                            "slidesToShowTab": 5,
                            "slidesToShowMobile": 3,
                            "slidesToShowMobiles": 2,
                            "slidesToScroll": 1,
                            "speed": 1000,
                            "autoplaySpeed": 2000,
                            "dots": false,
                            "arrows": false,
                            "lazyLoad": "progressive",
                            "pauseOnHover": true,
                            "autoplay": true,
                            "focusOnSelect": true,
                            "centerMode": false,
                            "adaptiveHeight": false,
                            "rtl": false,
                            "asNavFor": ".slick-content",
                            "prevArrow": "<span class=\"slick-prev slick-navigation\"><i class=\"flaticon-back\"></i></span>",
                            "nextArrow": "<span class=\"slick-next slick-navigation\"><i class=\"flaticon-next\"></i></span>"
                            }'>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End Here -->
    <!-- About Us Area Start Here -->
    <section class="about-wrap-layout2 bg-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="about-box-layout2">

                            <div class="item-subtitle">{{$article->title}}</div>
                            <p>{{$article->description}}</p>

                        <div class="item-award">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End Here -->
@endsection

@section('footer')
    <!-- Footer Area Start Here -->
    <footer class="footer-wrap-layout1">
        <div class="footer-top-wrap-layout1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-box-layout1">
                            <div class="footer-logo">
                                <a href="index.html"><img src="/img/logo-light-1.png" alt="logo" class="img-fluid"></a>
                            </div>
                            <p>We always deliver 100% customer satisfaction and absolute quality
                                work without any other compromise, just like we've been doing since 1982.</p>
                            <ul class="footer-social">
                                <li><a href="https://www.facebook.com/STENCONYC/?ref=page_internal"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/stencoconstruction/?igshid=x09uba4yfrkj"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.yelp.com/biz/stenco-construction-queens-6?utm_source=ishare"><i class="fa fa-yelp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-box-layout1">
                            <div class="footer-title">
                                <h3>Quick Links</h3>
                            </div>
                            <div class="footer-menu-box">
                                <ul class="footer-menu-list">
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="about1.html">Company</a>
                                    </li>
                                    <li>
                                        <a href="project1.html">Projects</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">BLOG</a>
                                    </li> -->
                                    <li>
                                        <a href="#">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-box-layout1">
                            <div class="footer-title">
                                <h3>Newsletter</h3>
                            </div>
                            <div class="footer-form-box">
                                <p>Subscribe For Daily Latest News &amp; Updates</p>
                                <form class="contact-form-box">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <input type="email" placeholder="E-mail Address" class="form-control" name="name" data-error="Name field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <button type="submit" class="item-btn">Subscribe Now</button>
                                        </div>
                                    </div>
                                    <div class="form-response"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-wrap-layout1">
            <div class="copyright">© Stenco Constructions All rights reserved. <a target="_blank" href="https://www.radiustheme.com" rel="nofollow">RadiusTheme.</a> All Rights Reserved.</div>
        </div>
    </footer>
    <!-- Footer Area End Here -->
    </div>
    <!-- jquery-->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- MeanMenu js -->
    <script src="/js/jquery.meanmenu.min.js"></script>
    <!-- Slick Slider js -->
    <script src="/vendor/slick/slick.min.js"></script>
    <!-- ImagesLoaded js -->
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <!-- Google Map js -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtmXSwv4YmAKtcZyyad9W7D4AC08z0Rb4"></script> -->
    <!-- Select 2 js -->
    <script src="/js/select2.min.js"></script>
    <!-- Magnific Popup js -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up js -->
    <script src="/js/jquery.counterup.min.js"></script>
    <!-- Waypoints js -->
    <script src="/js/waypoints.min.js"></script>
    <!-- Validator js -->
    <script src="/js/validator.min.js"></script>
    <!-- Main js -->
    <script src="/js/main.js"></script>

    </body>

    </html>
@endsection

