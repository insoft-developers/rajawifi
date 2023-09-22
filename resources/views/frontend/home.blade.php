
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
		============================================= -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900&display=swap" rel="stylesheet" type="text/css" />
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
		<link rel="stylesheet" href="{{ asset('frontend/template') }}/css/colors.php?color=FE9603" type="text/css" /> <!-- Theme Color -->
		<link rel="stylesheet" href="{{ asset('frontend/template') }}/css/fonts.css" type="text/css" />
		<link rel="stylesheet" href="{{ asset('frontend/template') }}/seo/seo.css" type="text/css" />
		<!-- / -->

	<!-- Document Title
		============================================= -->
		<link rel="icon" type="image/x-icon" href="{{ asset('frontend/template/images/pavicon.png') }}">
		<title>RAJAWIFI | Era Internet Ultra Speed</title>

		<style>
			body {
				font-family: 'Poppins', sans-serif !important;;
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
				font-family: 'Poppins', sans-serif !important;;
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
				margin-left:5px;
			}
			.right-5 {
				margin-right:5px;
			}
			.left-10 {
				margin-left:10px;
			}
			.right-10 {
				margin-left:10px;
			}
			.left-100 {
				margin-left:100px;
			}
			.text-title {
				font-size: 1.75rem;
				font-weight: 700;
				color: black;
			}

			.spasi {
				margin-top: 80px;
			}

			.subtext{
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
								<li><a href="https://facebook.com/semicolonweb" class="si-facebook" target="_blank"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
								<li><a href="https://twitter.com/__semicolon" class="si-twitter" target="_blank"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
								<li><a href="https://youtube.com/semicolonweb" class="si-youtube" target="_blank"><span class="ts-icon"><i class="icon-youtube"></i></span><span class="ts-text">Youtube</span></a></li>
								<li><a href="https://instagram.com/semicolonweb" class="si-instagram" target="_blank"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
								<li><a href="tel:+10.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+10.11.85412542</span></a></li>
								<li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@canvas.com</span></a></li>
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
								<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="{{ asset('frontend/template') }}/images/logo.png" alt="Canvas Logo"></a>
								<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="{{ asset('frontend/template') }}/images/logo@2x.png" alt="Canvas Logo"></a>
							</div><!-- #logo end -->

							<div class="header-misc">

							<!-- Top Search
								============================================= -->


								<a href="#" class="btn-login mobile-show">Masuk</a>
								<a href="#" class="btn-register mobile-show left-10">Daftar</a>

								</div>
								<div id="primary-menu-trigger">
									<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
								</div>


						<!-- Primary Navigation
							============================================= -->
							<nav class="primary-menu with-arrows">

								<ul class="menu-container">
									<li class="menu-item current"><a class="menu-link" href="demo-seo.html"><div>Produk</div></a></li>
									<li class="menu-item"><a class="menu-link" href="demo-seo-about.html"><div>Promo</div></a></li>
									<li class="menu-item mega-menu"><div class="menu-link"><div>Berita</div></div>
										<div class="mega-menu-content mega-menu-style-2 px-0">
											<div class="container">
												<div class="row">
													<a href="demo-seo-optimizations.html" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
														<div class="feature-box">
															<div class="fbox-icon mb-2">
																<img src="{{ asset('frontend/template') }}/seo/images/icons/seo.svg" alt="Feature Icon" class="bg-transparent rounded-0">
															</div>
															<div class="fbox-content">
																<h3 class="nott ls0">Berita Terbaru</h3>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
															</div>
														</div>
													</a>
													<a href="demo-seo-social.html" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
														<div class="feature-box">
															<div class="fbox-icon mb-2">
																<img src="{{ asset('frontend/template') }}/seo/images/icons/social.svg" alt="Feature Icon" class="bg-transparent rounded-0">
															</div>
															<div class="fbox-content">
																<h3 class="nott ls0">Siaran Pers</h3>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
															</div>
														</div>
													</a>
													<a href="demo-seo-adwords.html" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
														<div class="feature-box">
															<div class="fbox-icon mb-2">
																<img src="{{ asset('frontend/template') }}/seo/images/icons/adword.svg" alt="Feature Icon" class="bg-transparent rounded-0">
															</div>
															<div class="fbox-content">
																<h3 class="nott ls0">Blogs</h3>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
															</div>
														</div>
													</a>

													<div class="mega-menu-column sub-menu-container col-12 p-0">
														<a href="demo-seo-about.html" class="button button-rounded button-large nott ls0 w-100 text-center m-0 rounded-0 py-3 button-light ">Lihat Semua <i class="icon-line-arrow-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="menu-item"><a class="menu-link" href="demo-seo-faqs.html"><div>Tentang Kami</div></a></li>
									<li class="menu-item mega-menu"><div class="menu-link"><div>Bantuan</div></div>
										<div class="mega-menu-content mega-menu-style-2 px-0">
											<div class="container">
												<div class="row">
													<a href="demo-seo-optimizations.html" class="mega-menu-column sub-menu-container col-lg-6 border-bottom h-bg-light py-4">
														<div class="feature-box">
															<div class="fbox-icon mb-2">
																<img src="{{ asset('frontend/template') }}/seo/images/icons/seo.svg" alt="Feature Icon" class="bg-transparent rounded-0">
															</div>
															<div class="fbox-content">
																<h3 class="nott ls0">FAQ's</h3>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
															</div>
														</div>
													</a>
													<a href="demo-seo-social.html" class="mega-menu-column sub-menu-container col-lg-6 border-bottom h-bg-light py-4">
														<div class="feature-box">
															<div class="fbox-icon mb-2">
																<img src="{{ asset('frontend/template') }}/seo/images/icons/social.svg" alt="Feature Icon" class="bg-transparent rounded-0">
															</div>
															<div class="fbox-content">
																<h3 class="nott ls0">Cara Bayar</h3>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
															</div>
														</div>
													</a>		
													<div class="mega-menu-column sub-menu-container col-12 p-0">
														<a href="demo-seo-about.html" class="button button-rounded button-large nott ls0 w-100 text-center m-0 rounded-0 py-3 button-light ">Lihat Semua <i class="icon-line-arrow-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="menu-item"><a class="menu-link" href="demo-seo-contact.html"><div>Hubungi Kami</div></a></li>
								</ul>

							</nav><!-- #primary-menu end -->

						</div>
					</div>
				</div>
				<div class="header-wrap-clone"></div>
			</header><!-- #header end -->

		<!-- Slider
			============================================= -->
			<div style="margin-top:-25px"></div>
			<section id="slider" class="slider-element boxed-slider h-auto">

				<div class="container">

					<div class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true" data-animate-in="rollIn" data-speed="450" data-animate-out="rollOut" data-autoplay="5000">
						<a href="#"><img class="img-sliding" src="{{ asset('frontend/template/images') }}/slider/b1.png" alt="Slider"></a>
						<a href="#"><img class="img-sliding" src="{{ asset('frontend/template/images') }}/slider/b2.png" alt="Slider"></a>
						<a href="#"><img class="img-sliding" src="{{ asset('frontend/template/images') }}/slider/b3.png" alt="Slider"></a>
						<a href="#"><img class="img-sliding" src="{{ asset('frontend/template/images') }}/slider/b4.png" alt="Slider"></a>

					</div>

				</div>

			</section>



		<!-- Content
			============================================= -->
			<div style="margin-top: -30px;"></div>
			<section id="content">

				<div class="content-wrap pt-0">

				<!-- Features
					============================================= -->
					<div class="section bg-transparent mt-4 mb-0 pb-0">
						<div class="container">
							<div class="heading-block border-bottom-0 center mx-auto mb-0" style="max-width: 550px">
								<h3 class="nott ls0 mb-3">Tentang Kami</h3>
								<p>RAJAWIFI hadir untuk mengoptimalkan aktivitas digital kita semua dengan layanan internet yang Stabil Dan Handal.
									<br>
									Jelajahi internet dengan bebas dan tanpa khawatir akan jaringan yang tidak stabil dengan kualitas koneksi yang terpercaya dan layanan customer service yang siap siaga.	
								</p>
							</div>
							
						</div>
					</div>


					<!-- Features
						============================================= -->
						<div style="margin-top: -60px;"></div>
						<div class="section m-0" style="background: url('frontend/template/images/section/3.jpg') no-repeat center top; background-size: cover; padding: 140px 0 0;">
							<div class="container">

								<div class="row">
									<center><h3 class="nott ls0 mb-3 text-title">Kenapa Harus Memilih RAJAWIFI</h3></center>
									<div class="col-lg-4 col-md-6 d-flex">
										<a href="demo-seo-experience.html" class="card h-shadow h-translate-y-sm all-ts">
											<div class="card-body p-5">
												<div class="feature-box flex-column">
													<div class="fbox-image mb-5 text-center">
														<img class="image-why"  src="{{ asset('frontend/template/images/why') }}/c1.png" alt="Feature Icon">
													</div>
													<div class="fbox-content">
														<h3 class="nott ls0 text-larger">100% Fibre Optic</h3>

													</div>
													<ul class="iconlist ms-3 mt-4 mb-0">
														<li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Tidak Menggunakan Kabel Tembaga Seperti Provider Lainnya</li>
														<li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Koneksi Tetap Stabil Setiap Saat Tanpa Terpengaruh Gangguan Cuaca</li>
														<li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Jangkauan Lebih Luas</li>

													</ul>
												</div>
											</div>
										</a>
									</div>

									<div class="col-lg-4 col-md-6 d-flex">
										<a href="demo-seo-social.html" class="card h-shadow h-translate-y-sm all-ts">
											<div class="card-body p-5">
												<div class="feature-box flex-column">
													<div class="fbox-image mb-5 text-center">
														<img class="image-why"  src="{{ asset('frontend/template/images/why') }}/c2.png" alt="Feature Icon">
													</div>
													<div class="fbox-content">
														<h3 class="nott ls0 text-larger">Internet Yang Handal</h3>

													</div>
													<ul class="iconlist ms-3 mt-4 mb-0">
														<li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Internet kecepatan tinggi yang tidak akan terganggu walaupun di jam-jam sibuk</li>
														<li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Download dan Upload file lebih cepat</li>
														<li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Penggunaan banyak Gadget secara bersamaan tanpa ada gangguan</li>

													</ul>
												</div>
											</div>
										</a>
									</div>

									<div class="col-lg-4 col-md-6 d-flex">
										<a href="demo-seo-adwords.html" class="card h-shadow h-translate-y-sm all-ts">
											<div class="card-body p-5">
												<div class="feature-box flex-column">
													<div class="fbox-image mb-5 text-center">
														<img class="image-why"  src="{{ asset('frontend/template/images/why') }}/c3.png" alt="Feature Icon">
													</div>
													<div class="fbox-content">
														<h3 class="nott ls0 text-larger">Streaming Online Terbaik</h3>

													</div>
													<ul class="iconlist ms-3 mt-4 mb-0">
														<li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> RAJAWIFI adalah operator ISP paling stabil untuk mengakses konten</li>
														<li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Untuk Netflix</li>
														<li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> HBO dan Disney Hotstar</li>

													</ul>
												</div>
											</div>
										</a>
									</div>


								</div>
							</div>

							<div class="spasi"></div>
							<div class="container">
								<div class="row justify-content-center col-mb-50 mb-0">
									<center><h3 class="nott ls0 mb-3 text-title">Cara Aktivasi RAJAWIFI</h3></center>
									<div class="col-sm-6 col-lg-4">
										<div class="feature-box fbox-center fbox-bg fbox-outline fbox-dark fbox-effect">
											<div class="fbox-icon">
												<a href="#"><i class="i-alt">1</i></a>
											</div>
											<div class="fbox-content">
												<h3>Registrasi<span class="subtitle subtext">Cek area, pilih layanan, jadwal pemasangan, proses pembayaran.</span></h3>
											</div>
										</div>
									</div>

									<div class="col-sm-6 col-lg-4">
										<div class="feature-box fbox-center fbox-bg fbox-border fbox-effect">
											<div class="fbox-icon">
												<a href="#"><i>2</i></a>
											</div>
											<div class="fbox-content">
												<h3>Pembayaran<span class="subtitle subtext">Pembayaran deposit, instalasi layanan dijadwalkan Sesuai Registrasi.</span></h3>
											</div>
										</div>
									</div>

									<div class="col-sm-6 col-lg-4">
										<div class="feature-box fbox-center fbox-bg fbox-border fbox-effect">
											<div class="fbox-icon">
												<a href="#"><i class="i-alt">3</i></a>
											</div>
											<div class="fbox-content">
												<h3>Instalasi<span class="subtitle subtext">Lacak proses instalasi , lakukan pembayaran dan nikmati layanan RAJAWIFI Anda!</span></h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="section mt-5 footer-stick bg-transparent" style="padding: 10px 0; overflow: visible">
							<div class="container">
								<div class="heading-block border-bottom-0 center">
									<h5 class="ls1 mb-1">Cek Area</h5>
									<h2 class="nott ls0">Cek Area Apakah Sudah  <span> Tercover atau Belum</span></h2>
									<a href="demo-seo-contact.html" class="button button-large button-rounded nott ms-0 ls0 mt-4">Cek Area</a>
								</div>
							</div>
						</div>	

				<!-- Pricing
					============================================= -->
					<div style="margin-top:-70px !important"></div>
					<div class="section mt-5 promo-section footer-stick bg-transparent" style="padding: 100px 0; overflow: visible">
						<div class="container">
							
							<center><h3 class="nott ls0 mb-3 text-title">Pilih Paket Pilihan Anda</h3></center>


							<div class="row pricing col-mb-30 mb-4 g-0">

								<div class="col-md-6 col-lg-3">

									<div class="pricing-box text-center">
										<div class="pricing-title text-uppercase title-sm">
											<h3>RAJAWIFI 30 Mbps</h3>
										</div>
										<div class="pricing-price">
											<span class="price-unit">Rp.</span>245.000 <span class="tenor">/bln</span>
										</div>
										<div class="pricing-features">
											<ul>
												<li>Internet Tanpa Batas <strong>30 Mbps</strong></li>
												<li>Gratis <strong>Router WIFI</strong></li>
												<li>Gratis <strong>Instalasi</strong></li>
												<li>Ideal Untuk <strong>5-7 Devices</strong></li>
												<li>Ideal Untuk Individu atau 2 orang dengan pemakaian standar</li>
											</ul>
										</div>
										<div style="margin-top:15px"></div>
										<div class="pricing-action px-4">
											<a href="#" class="btn btn-success w-100 btn-sm">Pesan Sekarang</a>
										</div>
									</div>

								</div>

								<div class="col-md-6 col-lg-3">

									<div class="pricing-box pricing-highlight text-center">
										<div class="pricing-title text-uppercase title-sm">
											<h3>RAJAWIFI 50 Mbps</h3>
											<span>Paling Laris</span>
										</div>
										<div class="pricing-price">
											<span class="price-unit">Rp.</span>275.000 <span class="tenor">/bln</span>
										</div>
										<div class="pricing-features">
											<ul>
												<li>Internet Tanpa Batas <strong>50 Mbps</strong></li>
												<li>Gratis <strong>Router WIFI</strong></li>
												<li>Gratis <strong>Instalasi</strong></li>
												<li>Ideal Untuk <strong>8-15 Devices</strong></li>
												<li>Ideal Untuk Family Paket</li>
											</ul>
											</div>
											<div class="pricing-action px-4">
												<div style="margin-top:15px"></div>
												<a href="#" class="btn btn-success w-100 btn-sm bg-color border-color">Pesan Sekarang</a>
											</div>
										</div>

									</div>

									<div class="col-md-6 col-lg-3">

										<div class="pricing-box text-center">
											<div class="pricing-title text-uppercase title-sm">
												<h3>RAJAWIFI 100 Mbps</h3>
											</div>
											<div class="pricing-price">
												<span class="price-unit">Rp.</span>345.000 <span class="tenor">/bln</span>
											</div>
											<div class="pricing-features">
												<ul>
												<li>Internet Tanpa Batas <strong>100 Mbps</strong></li>
												<li>Gratis <strong>Router WIFI</strong></li>
												<li>Gratis <strong>Instalasi</strong></li>
												<li>Ideal Untuk <strong>16-20 Devices</strong></li>
												<li>Ideal Untuk Reseller Paket dan Kelompok Kerja</li>
											</ul>
											</div>
											<div class="pricing-action px-4">
												<div style="margin-top:15px"></div>
											<a href="#" class="btn btn-success w-100 btn-sm">Pesan Sekarang</a>
										</div>
										</div>

									</div>

									<div class="col-md-6 col-lg-3">

										<div class="pricing-box text-center">
											<div class="pricing-title text-uppercase title-sm">
												<h3>RAJAWIFI 200 Mbps</h3>
											</div>
											<div class="pricing-price">
												<span class="price-unit">Rp.</span>400.000 <span class="tenor">/bln</span> 
											</div>
											<div class="pricing-features">
												<ul>
												<li>Internet Tanpa Batas <strong>200 Mbps</strong></li>
												<li>Gratis <strong>Router WIFI</strong></li>
												<li>Gratis <strong>Instalasi</strong></li>
												<li>Ideal Untuk <strong>21-30 Devices</strong></li>
												<li>Ideal Untuk Group Remote dan Perusahaan</li>
											</ul>
											</div>
											<div class="pricing-action px-4">
												<div style="margin-top:15px"></div>
											<a href="#" class="btn btn-success w-100 btn-sm">Pesan Sekarang</a>
										</div>
										</div>

									</div>

								</div>
							</div>
							<center><p class="pajak">* Harga belum termasuk pajak 11% | Instalasi dan ONT (Wi-Fi) sudah termasuk dalam harga hingga radius 200m</p></center>
						</div>


				<!-- Works/Projects
					============================================= -->
					<div class="section m-0" style="background: no-repeat center center; background-size: cover;padding: 80px 0;">
						<div class="container">
							<div class="heading-block border-bottom-0 center">
								<div class="badge rounded-pill badge-default">Completed Projects</div>
								<h3 class="nott ls0">Our Latest Works</h3>
							</div>

							<div id="portfolio" class="portfolio row grid-container gutter-20">

								<article class="portfolio-item col-12 col-sm-6 col-md-4 pf-media pf-icons">
									<div class="grid-inner">
										<div class="portfolio-image">
											<img src="{{ asset('frontend/template') }}/seo/images/works/1.jpg" alt="The Atmosphere">
											<div class="bg-overlay">
												<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
													<a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
												</div>
												<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
											</div>
										</div>
										<div class="portfolio-desc">
											<h3><a href="#">The Atmosphere</a></h3>
											<span>Digital Marketing</span>
										</div>
									</div>
								</article>

								<article class="portfolio-item col-12 col-sm-6 col-md-4 pf-illustrations">
									<div class="grid-inner">
										<div class="portfolio-image">
											<img src="{{ asset('frontend/template') }}/seo/images/works/2.jpg" alt="Wavelength Structure">
											<div class="bg-overlay">
												<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
													<a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
												</div>
												<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
											</div>
										</div>
										<div class="portfolio-desc">
											<h3>Wavelength Structure</h3>
											<span>SEO</span>
										</div>
									</div>
								</article>

								<article class="portfolio-item col-12 col-sm-6 col-md-4 pf-graphics pf-uielements">
									<div class="grid-inner">
										<div class="portfolio-image">
											<img src="{{ asset('frontend/template') }}/seo/images/works/3.jpg" alt="Greenhouse Garden">
											<div class="bg-overlay">
												<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
													<a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
												</div>
												<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
											</div>
										</div>
										<div class="portfolio-desc">
											<h3>Simplicity Pages</h3>
											<span>Analytics</span>
										</div>
									</div>
								</article>

								<article class="portfolio-item col-12 col-sm-6 col-md-4 pf-icons pf-illustrations">
									<div class="grid-inner">
										<div class="portfolio-image">
											<img src="{{ asset('frontend/template') }}/seo/images/works/4.jpg" alt="Industrial Hub">
											<div class="bg-overlay">
												<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
													<a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
												</div>
												<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
											</div>
										</div>
										<div class="portfolio-desc">
											<h3>SEO Analysis</h3>
											<span>SEO</span>
										</div>
									</div>
								</article>

								<article class="portfolio-item col-12 col-sm-6 col-md-4 pf-uielements pf-media">
									<div class="grid-inner">
										<div class="portfolio-image">
											<img src="{{ asset('frontend/template') }}/seo/images/works/5.jpg" alt="Corporate Headquarters">
											<div class="bg-overlay">
												<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
													<a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
												</div>
												<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
											</div>
										</div>
										<div class="portfolio-desc">
											<h3>Marketing Strategy</h3>
											<span>Digital Marketing</span>
										</div>
									</div>
								</article>

								<article class="portfolio-item col-12 col-sm-6 col-md-4 pf-graphics pf-illustrations">
									<div class="grid-inner">
										<div class="portfolio-image">
											<img src="{{ asset('frontend/template') }}/seo/images/works/6.jpg" alt="Space Station">
											<div class="bg-overlay">
												<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
													<a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
												</div>
												<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
											</div>
										</div>
										<div class="portfolio-desc">
											<h3>Space Station</h3>
											<span>Social Media</span>
										</div>
									</div>
								</article>

							</div>

							<div class="center">
								<a href="demo-seo-about.html" class="button button-large button-rounded text-capitalize ms-0 mt-5 ls0">View All Works</a>
							</div>

						</div>
					</div>

				<!-- Features
					============================================= -->
					<div class="container clearfix py-5">
						<div class="row">
							<div class="col-md-4 mt-5">
								<div class="feature-box fbox-center border-0">
									<div class="fbox-icon">
										<a href="#"><img src="{{ asset('frontend/template') }}/seo/images/icons/research.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott ls0">1. Planning &amp; Research</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, dolore, voluptates!</p>
									</div>
								</div>
							</div>

							<div class="col-md-4 mt-5">
								<div class="feature-box fbox-center border-0">
									<div class="fbox-icon">
										<a href="#"><img src="{{ asset('frontend/template') }}/seo/images/icons/optimizing.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott ls0">2. Optimizing</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, provident.</p>
									</div>
								</div>
							</div>

							<div class="col-md-4 mt-5">
								<div class="feature-box fbox-center border-0">
									<div class="fbox-icon">
										<a href="#"><img src="{{ asset('frontend/template') }}/seo/images/icons/result.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott ls0">3. Result</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
									</div>
								</div>
							</div>
						</div>
					</div>

				<!-- Testimonials
					============================================= -->
					<div class="section mt-0" style="background: no-repeat top center; background-size: cover; padding: 80px 0 70px;">
						<div class="container">
							<div class="heading-block border-bottom-0 center">
								<div class="badge rounded-pill badge-default">Testimonials</div>
								<h3 class="nott ls0">What Clients Says</h3>
							</div>

							<div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget clearfix" data-margin="0" data-pagi="true" data-loop="true" data-center="true" data-autoplay="5000" data-items-sm="1" data-items-md="2" data-items-xl="3">

								<div class="oc-item">
									<div class="testimonial">
										<div class="testi-image">
											<a href="#"><img src="{{ asset('frontend/template/images') }}/testimonials/1.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
											<div class="testi-meta">
												John Doe
												<span>XYZ Inc.</span>
											</div>
										</div>
									</div>
								</div>

								<div class="oc-item">
									<div class="testimonial">
										<div class="testi-image">
											<a href="#"><img src="{{ asset('frontend/template/images') }}/testimonials/2.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
											<div class="testi-meta">
												Collis Ta'eed
												<span>Envato Inc.</span>
											</div>
										</div>
									</div>
								</div>
								<div class="oc-item">
									<div class="testimonial">
										<div class="testi-image">
											<a href="#"><img src="{{ asset('frontend/template/images') }}/testimonials/3.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
											<div class="testi-meta">
												Collis Ta'eed
												<span>Envato Inc.</span>
											</div>
										</div>
									</div>
								</div>
								<div class="oc-item">
									<div class="testimonial">
										<div class="testi-image">
											<a href="#"><img src="{{ asset('frontend/template/images') }}/testimonials/4.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
											<div class="testi-meta">
												Mary Jane
												<span>Google Inc.</span>
											</div>
										</div>
									</div>
								</div>
								<div class="oc-item">
									<div class="testimonial">
										<div class="testi-image">
											<a href="#"><img src="{{ asset('frontend/template/images') }}/testimonials/5.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
											<div class="testi-meta">
												Steve Jobs
												<span>Apple Inc.</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				<!-- Blogs
					============================================= -->
					<div class="container py-4">
						<div class="heading-block border-bottom-0 center">
							<div class="badge rounded-pill badge-default">Latest Articles</div>
							<h3 class="nott ls0">Recently From the Blog</h3>
						</div>

						<div class="row mt-5 clearfix">
							<div class="col-md-4">
								<article class="entry">
									<div class="entry-image mb-3">
										<a href="#"><img src="{{ asset('frontend/template') }}/seo/images/blog/1.jpg" alt="Image 3"></a>
									</div>
									<div class="entry-title">
										<h3><a href="#">Top Most SEO Optizied Websites</a></h3>
									</div>
									<div class="entry-meta">
										<ul>
											<li><i class="icon-line2-user"></i><a href="#"> John Doe</a></li>
											<li><i class="icon-calendar-times1"></i><a href="#"> 11 Mar 2021</a></li>
										</ul>
									</div>
									<div class="entry-content clearfix">
										<p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem progressive technology through pariatur quibusdam veritatis quisquam. Efficiently communicate alternative.</p>
									</div>
								</article>
							</div>

							<div class="col-md-4">
								<article class="entry">
									<div class="entry-image mb-3">
										<a href="#"><img src="{{ asset('frontend/template') }}/seo/images/blog/2.jpg" alt="Image 3"></a>
									</div>
									<div class="entry-title">
										<h3><a href="#">10 Recent SEO Tips for Startups</a></h3>
									</div>
									<div class="entry-meta">
										<ul>
											<li><i class="icon-line2-user"></i><a href="#"> Semicolonweb</a></li>
											<li><i class="icon-calendar-times1"></i><a href="#"> 18 Apr 2021</a></li>
										</ul>
									</div>
									<div class="entry-content clearfix">
										<p>Interactively predominate progressive technology through distinctive materials. Progressively benchmark extensible intellectual. Exercitationem progressive technology through pariatur.</p>
									</div>
								</article>
							</div>

							<div class="col-md-4">
								<article class="entry">
									<div class="entry-image mb-3">
										<a href="#"><img src="{{ asset('frontend/template') }}/seo/images/blog/3.jpg" alt="Image 3"></a>
									</div>
									<div class="entry-title">
										<h3><a href="#">3 Ways to Transform Your Site Into a SEO</a></h3>
									</div>
									<div class="entry-meta">
										<ul>
											<li><i class="icon-line2-user"></i><a href="#"> John Doe</a></li>
											<li><i class="icon-calendar-times1"></i><a href="#"> 06 Aug 2021</a></li>
										</ul>
									</div>
									<div class="entry-content clearfix">
										<p>Globally synergize premium metrics with holistic e-markets. Professionally morph interoperable networks vis-a-vis value-added methods.</p>
									</div>
								</article>
							</div>
						</div>

					</div>

				<!-- Promo/Contact
					============================================= -->
					
				</div>
			</section>

			<!-- #content end -->

		<!-- Footer
			============================================= -->
			<footer id="footer" class="border-0 bg-white">
				<div class="container">
				<!-- Footer Widgets
					============================================= -->
					<div class="footer-widgets-wrap pb-5 clearfix">

						<div class="row col-mb-50">
							<div class="col-md-8">

								<div class="widget clearfix">

									<img src="{{ asset('frontend/template') }}/images/footer-widget-logo.png" alt="Footer Logo" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #DDD;">

									<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.</p>

									<div class="line line-sm"></div>

									<div class="row">
										<div class="col-lg-3 col-6 bottommargin-sm widget_links">
											<ul>
												<li><a href="#">Home</a></li>
												<li><a href="#">About</a></li>
												<li><a href="#">FAQs</a></li>
												<li><a href="#">Support</a></li>
												<li><a href="#">Contact</a></li>
											</ul>
										</div>

										<div class="col-lg-3 col-6 bottommargin-sm widget_links">
											<ul>
												<li><a href="#">Shop</a></li>
												<li><a href="#">Portfolio</a></li>
												<li><a href="#">Blog</a></li>
												<li><a href="#">Events</a></li>
												<li><a href="#">Forums</a></li>
											</ul>
										</div>

										<div class="col-lg-3 col-6 bottommargin-sm widget_links">
											<ul>
												<li><a href="#">Corporate</a></li>
												<li><a href="#">Agency</a></li>
												<li><a href="#">eCommerce</a></li>
												<li><a href="#">Personal</a></li>
												<li><a href="#">One Page</a></li>
											</ul>
										</div>

										<div class="col-lg-3 col-6 bottommargin-sm widget_links">
											<ul>
												<li><a href="#">Restaurant</a></li>
												<li><a href="#">Wedding</a></li>
												<li><a href="#">App Showcase</a></li>
												<li><a href="#">Magazine</a></li>
												<li><a href="#">Landing Page</a></li>
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
													<span class="text-muted">Call Us:</span><br>
													<h3 class="nott ls0 fw-semibold">(10) 22 33445566</h3>
												</div>
											</div>
										</div>

										<div class="col-12 mt-4">
											<div class="feature-box fbox-plain fbox-sm align-items-center">
												<div class="fbox-icon">
													<i class="icon-phone3 text-dark"></i>
												</div>
												<div class="fbox-content">
													<span class="text-muted">Email Us:</span><br>
													<h3 class="nott ls0 fw-semibold">info@canvas.com</h3>
												</div>
											</div>
										</div>
									</div>

								</div>

								<div class="widget subscribe-widget clearfix">
									<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
									<div class="widget-subscribe-form-result"></div>
									<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
										<div class="input-group mx-auto">
											<div class="input-group-text bg-transparent"><i class="icon-email2"></i></div>
											<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
											<button class="btn btn-success button button-color nott ls0 m-0" type="submit">Subscribe</button>
										</div>
									</form>
								</div>

								<div class="widget">

									<div class="row col-mb-30">
										<div class="col-lg-6 col-md-12 col-6">
											<a href="https://facebook.com/semicolonweb" target="_blank" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>
											<a href="https://facebook.com/semicolonweb" target="_blank" class="text-dark"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
										</div>
										<div class="col-lg-6 col-md-12 col-6">
											<a href="https://themeforest.net/user/SemiColonWeb/follow" target="_blank" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
												<i class="icon-rss"></i>
												<i class="icon-rss"></i>
											</a>
											<a href="https://themeforest.net/user/SemiColonWeb/follow" target="_blank" class="text-dark"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div><!-- .footer-widgets-wrap end -->
				</div>

			<!-- Copyrights
				============================================= -->
				<div id="copyrights" style="background:  no-repeat top center; background-size: cover; padding-top: 70px;">
					<div class="container clearfix">

						<div class="row justify-content-between col-mb-30">
							<div class="col-12 col-lg-auto text-center text-lg-start">
								Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
								<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
							</div>

							<div class="col-12 col-lg-auto text-center text-lg-end">
								<div class="copyrights-menu copyright-links clearfix">
									<a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Team</a>/<a href="#">Clients</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
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