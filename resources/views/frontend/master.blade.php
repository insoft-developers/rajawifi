<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
		============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900&display=swap" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/template') }}/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/template') }}/style.css" type="text/css" />

    <link rel="stylesheet" href="{{ asset('frontend/template') }}/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/template') }}/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/template') }}/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/template') }}/css/magnific-popup.css" type="text/css" />

    <!-- Bootstrap Switch CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/template') }}/css/components/bs-switches.css" type="text/css" />

    <link rel="stylesheet" href="{{ asset('frontend/template') }}/css/custom.css" type="text/css" />
    <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

    <!-- Seo Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/template') }}/css/colors.php?color=FE9603" type="text/css" />
    <!-- Theme Color -->
    <link rel="stylesheet" href="{{ asset('frontend/template') }}/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/template') }}/seo/seo.css" type="text/css" />
    <!-- / -->

    <!-- Document Title
		============================================= -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/template/images/pavicon.png') }}">
    <title>RAJAWIFI | Ultra Speed Internet</title>

    <style>
    body {
        font-family: 'Poppins', sans-serif !important;
        ;
    }

    .btn-login {
        background-color: blue;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 6px;
        padding-bottom: 6px;
        border-radius: 50px;
        color: white;
        font-size: 12px;
        font-weight: bold;
        font-family: 'Poppins', sans-serif !important;
        ;
    }

    .btn-register {
        background-color: white;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 4px;
        padding-bottom: 4px;
        border-radius: 50px;
        color: blue;
        border: 2px solid blue;
        font-size: 12px;
        font-weight: bold;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif !important;
    }

    .left-5 {
        margin-left: 5px;
    }

    .right-5 {
        margin-right: 5px;
    }

    .left-10 {
        margin-left: 10px;
    }

    .right-10 {
        margin-left: 10px;
    }

    .left-100 {
        margin-left: 100px;
    }

    .text-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: black;
    }

    .spasi {
        margin-top: 80px;
    }

    .subtext {
        color: black !important;

    }

    .image-why {
        border-radius: 10px;
        width: 100%;
        object-fit: cover;
    }

    .tenor {
        font-size: 16px;
        font-weight: normal;
    }

    .pajak {
        font-size: 14px;
        font-weight: bold;
    }

    .img-sliding {
        border-radius: 5px;
    }

    .table-custom thead tr {}

    .table-custom th {
        background-color: #8282e8;
        color: white;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 20px;
        padding-right: 20px;
        font-weight: bold;
    }

    .table-custom td {
        background-color: #f1f3f9;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 20px;
        padding-right: 20px;
        font-weight: bold;
        color: grey;
        font-size: 14px;
    }

    .payment-title {
        font-family: 'Poppins';
        font-weight: bold;
        text-align: center;
        color: #8282e8;
    }

    .payment-image {
        width: 60px;
        height: 60px;
        border-radius: 30px;
        padding: 5px;
        background-color: lightblue;
        display: inline-block;
        align-items: center;
    }

    .payment-name {
        margin-left: 10px;
        font-family: 'Poppins';
        font-weight: 600;
        margin-top: 26px;
        display: inline-block;
        align-items: center;
    }

    .payment-item {
        display: block;
        align-items: center;
        margin-bottom: -13px !important;
    }

    @media (max-width: 991px) {
        .mobile-show {
            display: none;
        }

    }
    </style>

</head>

<body class="stretched">

    <!-- Document Wrapper
		============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Top Bar
			============================================= -->
        <div id="top-bar" class="transparent-topbar">
            <div class="container clearfix">

                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">

                        <!-- Top Links
							============================================= -->
                        <div class="top-links">
                            <ul class="top-links-container">
                                <li class="top-links-item"><a href="{{ url('/') }}">Beranda</a></li>
                                <li class="top-links-item"><a href="demo-seo-faqs.html">FAQs</a></li>
                                <li class="top-links-item"><a href="demo-seo-contact.html">Hubungi Kami</a></li>
                                <!-- <li class="top-links-item"><a href="#"><img src="{{ asset('frontend/template') }}/seo/images/flags/ara.png" alt="Lang">ID</a>
									<ul class="top-links-sub-menu">
										<li class="top-links-item"><a href="#"><img src="{{ asset('frontend/template') }}/seo/images/flags/ara.png" alt="Lang">ID</a></li>
										<li class="top-links-item"><a href="#"><img src="{{ asset('frontend/template') }}/seo/images/flags/eng.png" alt="Lang">ENG</a></li>
										
									</ul>
								</li> -->
                            </ul>
                        </div><!-- .top-links end -->

                    </div>

                    <div class="col-12 col-md-auto dark">

                        <!-- Top Social
							============================================= -->
                        <ul id="top-social">
                            <li><a href="https://facebook.com/semicolonweb" class="si-facebook" target="_blank"><span
                                        class="ts-icon"><i class="icon-facebook"></i></span><span
                                        class="ts-text">Facebook</span></a></li>
                            <li><a href="https://twitter.com/__semicolon" class="si-twitter" target="_blank"><span
                                        class="ts-icon"><i class="icon-twitter"></i></span><span
                                        class="ts-text">Twitter</span></a></li>
                            <li><a href="https://youtube.com/semicolonweb" class="si-youtube" target="_blank"><span
                                        class="ts-icon"><i class="icon-youtube"></i></span><span
                                        class="ts-text">Youtube</span></a></li>
                            <li><a href="https://instagram.com/semicolonweb" class="si-instagram" target="_blank"><span
                                        class="ts-icon"><i class="icon-instagram2"></i></span><span
                                        class="ts-text">Instagram</span></a></li>
                            <li><a href="tel:+10.11.85412542" class="si-call"><span class="ts-icon"><i
                                            class="icon-call"></i></span><span
                                        class="ts-text">+10.11.85412542</span></a></li>
                            <li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i
                                            class="icon-envelope-alt"></i></span><span
                                        class="ts-text">info@canvas.com</span></a></li>
                        </ul><!-- #top-social end -->

                    </div>
                </div>

            </div>
        </div><!-- #top-bar end -->

        <!-- Header
			============================================= -->
        <header id="header" class="transparent-header floating-header header-size-md">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
							============================================= -->
                        <div id="logo">
                            <a href="{{ url('/') }}" class="standard-logo" data-dark-logo="images/logo-dark.png"><img
                                    src="{{ asset('frontend/template') }}/images/logo.png" alt="Canvas Logo"></a>
                            <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img
                                    src="{{ asset('frontend/template') }}/images/logo@2x.png" alt="Canvas Logo"></a>
                        </div><!-- #logo end -->

                        <div class="header-misc">

                            <!-- Top Search
								============================================= -->


                            <a href="#" class="btn-login mobile-show">Masuk</a>
                            <a href="#" class="btn-register mobile-show left-10">Daftar</a>

                        </div>
                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>


                        <!-- Primary Navigation
							============================================= -->
                        <nav class="primary-menu with-arrows">

                            <ul class="menu-container">
                                <li class="menu-item current"><a class="menu-link" href="{{ url('product') }}">
                                        <div>Produk</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="{{ url('promo') }}">
                                        <div>Promo</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="demo-landing-features.html">
                                        <div>Berita</div>
                                    </a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item"><a class="menu-link" href="{{ url('latest') }}">
                                                <div><i class="icon-news"></i>Berita Terbaru</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link" href="{{ url('press') }}">
                                                <div><i class="icon-newspaper3"></i>Siaran Pers</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link" href="{{ url('blog') }}">
                                                <div><i class="icon-newspaper2"></i>Blogs</div>
                                            </a></li>

                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="{{ url('about') }}">
                                        <div>Tentang Kami</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="demo-landing-features.html">
                                        <div>Bantuan</div>
                                    </a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item"><a class="menu-link" href="{{ url('faq') }}">
                                                <div><i class="icon-question-sign"></i>FAQ's</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link" href="{{ url('payment') }}">
                                                <div><i class="icon-cc-amazon-pay"></i>Cara Bayar</div>
                                            </a></li>


                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="demo-seo-contact.html">
                                        <div>Hubungi Kami</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        @yield('content')



        <!-- Footer
			============================================= -->
        <footer id="footer" class="border-0 bg-white">
            <div class="container">
                <!-- Footer Widgets
					============================================= -->
                <div class="footer-widgets-wrap pb-5 clearfix">

                    <div class="row">
                        <div class="col-md-8">

                            <div class="widget clearfix">

                                <img src="{{ asset('frontend/template') }}/images/footer-widget-logo.png"
                                    alt="Footer Logo" class="alignleft"
                                    style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #DDD;">

                                <p>Pengalaman Digital <strong>Makin Optimal</strong>, Dengan Layanan Internet yang
                                    <strong>Nyata Andalnya</strong></p>

                                <div class="line line-sm"></div>

                                <div class="row">
                                    <div class="col-lg-3 col-6 bottommargin-sm widget_links">
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Produk</a></li>
                                            <li><a href="#">Promo</a></li>

                                        </ul>
                                    </div>

                                    <div class="col-lg-3 col-6 bottommargin-sm widget_links">
                                        <ul>
                                            <li><a href="#">Berita</a></li>
                                            <li><a href="#">Berita Terbaru</a></li>
                                            <li><a href="#">Siaran Pers</a></li>
                                            <li><a href="#">BLogs</a></li>

                                        </ul>
                                    </div>

                                    <div class="col-lg-3 col-6 bottommargin-sm widget_links">
                                        <ul>
                                            <li><a href="#">Bantuan</a></li>
                                            <li><a href="#">FAQ's</a></li>
                                            <li><a href="#">Cara Bayar</a></li>

                                        </ul>
                                    </div>

                                    <div class="col-lg-3 col-6 bottommargin-sm widget_links">
                                        <ul>
                                            <li><a href="#">Tentang Kami</a></li>
                                            <li><a href="#">Hubungi Kami</a></li>

                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="widget clearfix">

                                <div class="row clearfix">
                                    <div class="col-12">
                                        <div class="feature-box fbox-plain fbox-sm align-items-center">
                                            <div class="fbox-icon">
                                                <i class="icon-envelope text-dark"></i>
                                            </div>
                                            <div class="fbox-content">
                                                <span class="text-muted">Email :</span><br>
                                                <h3 class="nott ls0 fw-semibold">contact@rajawifi.com</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <div class="feature-box fbox-plain fbox-sm align-items-center">
                                            <div class="fbox-icon">
                                                <i class="icon-phone3 text-dark"></i>
                                            </div>
                                            <div class="fbox-content">
                                                <span class="text-muted">Call Centre:</span><br>
                                                <h3 class="nott ls0 fw-semibold">(+62) 811-9090-876</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <div class="widget">

                                <div class="row col-mb-30">
                                    <div class="col-lg-6 col-md-12 col-6">
                                        <a href="https://api.whatsapp.com/send/?phone=628219001515&text&type=phone_number&app_absent=0"
                                            target="_blank" class="social-icon si-dark si-colored si-whatsapp mb-0"
                                            style="margin-right: 10px;">
                                            <i class="icon-whatsapp"></i>
                                            <i class="icon-whatsapp"></i>
                                        </a>
                                        <a href="https://api.whatsapp.com/send/?phone=628219001515&text&type=phone_number&app_absent=0"
                                            target="_blank" class="text-dark"><small
                                                style="display: block; margin-top: 3px;"><strong>Chat Us</strong><br>on
                                                WhatsApp</small></a>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-6">
                                        <a href="https://twitter.com" target="_blank"
                                            class="social-icon si-dark si-colored si-twittert mb-0"
                                            style="margin-right: 10px;">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="https://twitter.com" target="_blank" class="text-dark"><small
                                                style="display: block; margin-top: 3px;"><strong>@Rajawifi</strong><br>Twitter</small></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div><!-- .footer-widgets-wrap end -->
            </div>

            <!-- Copyrights
				============================================= -->
            <div id="copyrights"
                style="background: url('{{ asset('') }}/frontend/template/seo/images/hero/footer.svg') no-repeat top center; background-size: cover; padding-top: 70px;">
                <div class="container clearfix">

                    <div class="row justify-content-between col-mb-30">
                        <div class="col-12 col-lg-auto text-center text-lg-start">
                            Copyrights &copy; <?= date('Y') ;?> All Rights Reserved by RAJAWIFI.<br>
                            <div class="copyright-links"><a href="#">Syarat & Ketentuan</a> / <a href="#">Kebijakan
                                    Privasi</a></div>
                        </div>

                        <div class="col-12 col-lg-auto text-center text-lg-end">
                            <div class="copyrights-menu copyright-links clearfix">
                                <a href="#">Home</a>/<a href="#">Produk</a>/<a href="#">Promo</a>/<a href="#">Tentang
                                    Kami</a>/<a href="#">Bantuan</a>/<a href="#">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
		============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
		============================================= -->
    <script src="{{ asset('frontend/template') }}/js/jquery.js"></script>
    <script src="{{ asset('frontend/template') }}/js/plugins.min.js"></script>

    <!-- Footer Scripts
		============================================= -->
    <script src="{{ asset('frontend/template') }}/js/functions.js"></script>

</body>

</html>