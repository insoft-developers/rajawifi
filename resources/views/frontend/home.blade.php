@extends('frontend.master')
@section('content')

<!-- Slider
			============================================= -->
<div style="margin-top:-25px"></div>
<section id="slider" class="slider-element boxed-slider h-auto">

    <div class="container">

        <div class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true"
            data-animate-in="rollIn" data-speed="450" data-animate-out="rollOut" data-autoplay="5000">
            <a href="#"><img class="img-sliding" src="{{ asset('frontend/template/images') }}/slider/b1.png"
                    alt="Slider"></a>
            <a href="#"><img class="img-sliding" src="{{ asset('frontend/template/images') }}/slider/b2.png"
                    alt="Slider"></a>
            <a href="#"><img class="img-sliding" src="{{ asset('frontend/template/images') }}/slider/b3.png"
                    alt="Slider"></a>
            <a href="#"><img class="img-sliding" src="{{ asset('frontend/template/images') }}/slider/b4.png"
                    alt="Slider"></a>

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
            <div class="row mt-5 clearfix">
                    <div class="col-md-6">
                    <h3 class="nott ls0 text-title">Tentang Kami</h3>
                    <p>RAJAWIFI hadir untuk mengoptimalkan aktivitas digital kita semua dengan layanan internet yang
                        Stabil Dan Handal.
                        <br>
                        Jelajahi internet dengan bebas dan tanpa khawatir akan jaringan yang tidak stabil dengan
                        kualitas koneksi yang terpercaya dan layanan customer service yang siap siaga.
                    </p>
                    </div>
                    <div class="col-md-6">
                        <iframe style="border-radius:10px;" width="853" height="480"
                            src="https://www.youtube.com/embed/WIm1GgfRz6M"
                            title="The Script - Superheroes (Official Video)" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>

                    </div>


                </div>

            </div>
        </div>


        <!-- Features
						============================================= -->
        <div style="margin-top: -60px;"></div>
        <div class="section m-0"
            style="background: url('frontend/template/images/section/3.jpg') no-repeat center top; background-size: cover; padding: 140px 0 0;">
            <div class="container">

                <div class="row">
                    <center>
                        <h3 class="nott ls0 mb-3 text-title">Kenapa Harus Memilih RAJAWIFI</h3>
                    </center>
                    <div class="col-lg-4 col-md-6 d-flex">
                        <a href="demo-seo-experience.html" class="card h-shadow h-translate-y-sm all-ts">
                            <div class="card-body p-5">
                                <div class="feature-box flex-column">
                                    <div class="fbox-image mb-5 text-center">
                                        <img class="image-why" src="{{ asset('frontend/template/images/why') }}/c1.png"
                                            alt="Feature Icon">
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="nott ls0 text-larger">100% Fibre Optic</h3>

                                    </div>
                                    <ul class="iconlist ms-3 mt-4 mb-0">
                                        <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Tidak
                                            Menggunakan Kabel Tembaga Seperti Provider Lainnya</li>
                                        <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                            Koneksi Tetap Stabil Setiap Saat Tanpa Terpengaruh Gangguan Cuaca</li>
                                        <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                            Jangkauan Lebih Luas</li>

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
                                        <img class="image-why" src="{{ asset('frontend/template/images/why') }}/c2.png"
                                            alt="Feature Icon">
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="nott ls0 text-larger">Internet Yang Handal</h3>

                                    </div>
                                    <ul class="iconlist ms-3 mt-4 mb-0">
                                        <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                            Internet kecepatan tinggi yang tidak akan terganggu walaupun di jam-jam
                                            sibuk</li>
                                        <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                            Download dan Upload file lebih cepat</li>
                                        <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                            Penggunaan banyak Gadget secara bersamaan tanpa ada gangguan</li>

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
                                        <img class="image-why" src="{{ asset('frontend/template/images/why') }}/c3.png"
                                            alt="Feature Icon">
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="nott ls0 text-larger">Streaming Online Terbaik</h3>

                                    </div>
                                    <ul class="iconlist ms-3 mt-4 mb-0">
                                        <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                            RAJAWIFI adalah operator ISP paling stabil untuk mengakses konten</li>
                                        <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Untuk
                                            Netflix</li>
                                        <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> HBO
                                            dan Disney Hotstar</li>

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
                    <center>
                        <h3 class="nott ls0 mb-3 text-title">Cara Aktivasi RAJAWIFI</h3>
                    </center>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box fbox-center fbox-bg fbox-outline fbox-dark fbox-effect">
                            <div class="fbox-icon">
                                <a href="#"><i class="i-alt">1</i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Registrasi<span class="subtitle subtext">Cek area, pilih layanan, jadwal pemasangan,
                                        proses pembayaran.</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box fbox-center fbox-bg fbox-border fbox-effect">
                            <div class="fbox-icon">
                                <a href="#"><i>2</i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Pembayaran<span class="subtitle subtext">Pembayaran deposit, instalasi layanan
                                        dijadwalkan Sesuai Registrasi.</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box fbox-center fbox-bg fbox-border fbox-effect">
                            <div class="fbox-icon">
                                <a href="#"><i class="i-alt">3</i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Instalasi<span class="subtitle subtext">Lacak proses instalasi , lakukan pembayaran
                                        dan nikmati layanan RAJAWIFI Anda!</span></h3>
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
                    <h2 class="nott ls0">Cek Area Apakah Sudah <span> Tercover atau Belum</span></h2>
                    <a href="{{ url('coverage') }}" class="button button-large button-rounded nott ms-0 ls0 mt-4">Cek
                        Area</a>
                </div>
            </div>
        </div>

        <!-- Pricing
					============================================= -->
        <div style="margin-top:-70px !important"></div>
        <div class="section mt-5 promo-section footer-stick bg-transparent" style="padding: 100px 0; overflow: visible">
            <div class="container">

                <center>
                    <h3 class="nott ls0 mb-3 text-title">Pilih Paket Pilihan Anda</h3>
                </center>


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
                                <a href="#" class="btn btn-success w-100 btn-sm bg-color border-color">Pesan
                                    Sekarang</a>
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
            <center>
                <p class="pajak">* Harga belum termasuk pajak 11% | Instalasi dan ONT (Wi-Fi) sudah termasuk dalam harga
                    hingga radius 200m</p>
            </center>
        </div>


        <!-- Works/Projects
					============================================= -->
        <div class="section m-0" style="background: no-repeat center center; background-size: cover;">
            <div class="container">
                <div class="heading-block border-bottom-0 center">

                    <h3 class="nott ls0">Rekomendasi Perangkat Untuk <br>Kecepatan Internet Maksimal</h3>
                </div>

                <table style="width: 100%;text-align: center;" class="table-custom">
                    <thead>
                        <tr>
                            <th style="border-top-left-radius: 20px;">Kecepatan Internet</th>
                            <th style="border-top-right-radius: 20px;">Rekomendasi Jumlah Perangkat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>30 Mbps</td>
                            <td>5 - 7 Devices</td>
                        </tr>
                        <tr>
                            <td>50 Mbps</td>
                            <td>8 - 12 Devices</td>
                        </tr>
                        <tr>
                            <td>100 Mbps</td>
                            <td>16 - 20 Devices</td>
                        </tr>
                        <tr>
                            <td>300 Mbps</td>
                            <td>20 perangkat - dengan penggunaan Smart Home Device</td>
                        </tr>
                        <tr>
                            <td style="border-bottom-left-radius: 20px;">500 Mbps</td>
                            <td style="border-bottom-right-radius: 20px;">24 perangkat - dengan penggunaan Smart Home
                                Device</td>
                        </tr>
                    </tbody>

                </table>
                <center>
                    <p class="pajak">*Penggunaan internet di ponsel rata-rata 5 Mbps
                        <span style="margin-left: 10px;">*Penggunaan internet di laptop rata-rata 20 Mbps</span></p>
                </center>

            </div>
        </div>

        <div class="section m-0" style="background: no-repeat center center; background-size: cover;">
            <div class="container clearfix">

                <div class="row col-mb-50">


                    <div class="col-md-7 text-center text-md-start">

                        <div class="text-title topmargin-sm">
                            <h2>Diferensiasi pengalaman ber-Internet 30 Mbps - 1 Gbps</h2>

                        </div>

                        <p>Kecepatan internet adalah kecepatan transfer data saat menggunakan jaringan internet yang
                            diukur dalam bps (bit per detik).<br>
                            Intinya adalah jumlah bit data yang ditransfer dari satu komputer ke komputer lain dalam
                            setiap detik. Kecepatan akses internet dibagi menjadi dua jenis, yaitu downstream dan
                            upstream.<br>
                            RAJAWIFI menawarkan layanan internet dengan teknologi jaringan Fiber Optic yang menghasilkan
                            sinyal stabil dan tanpa batasan penggunaan, tanpa kuota dan juga kecepatan tanpa batasan
                            (throttling).</p>



                    </div>
                    <div class="col-md-5 d-flex align-items-center table-responsive" style="min-height: 350px">
                        <table style="width: 100%;text-align: center;" class="table-custom">
                            <thead>
                                <tr>
                                    <th style="border-top-left-radius: 20px;">Kecepatan Internet</th>
                                    <th>Unduh Game PS5 100 GB</th>
                                    <th style="border-top-right-radius: 20px;">Unduh Film 4K 7GB</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>30 Mbps</td>
                                    <td>444 Menit</td>
                                    <td>31 Menit</td>
                                </tr>
                                <tr>
                                    <td>50 Mbps</td>
                                    <td>267 Menit</td>
                                    <td>19 Menit</td>
                                </tr>
                                <tr>
                                    <td>100 Mbps</td>
                                    <td>133 Menit</td>
                                    <td>9 Menit</td>
                                </tr>
                                <tr>
                                    <td>300 Mbps</td>
                                    <td>44 Mins</td>
                                    <td>3 Mins</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom-left-radius: 20px;">500 Mbps</td>
                                    <td>24 Mins</td>
                                    <td style="border-bottom-right-radius: 20px;">2 Mins</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </div>

        <div class="section m-0">
            <div class="container">
                <div class="heading-block border-bottom-0 center">

                    <h3 class="nott ls0">Rekomendasi Penggunaan Internet untuk pelanggan</h3>
                </div>

                <table style="width: 100%;text-align: center;" class="table-custom">
                    <thead>
                        <tr>
                            <th width="10%" style="border-top-left-radius: 20px;">Paket</th>
                            <th width="*" style="border-top-right-radius: 20px;">Rekomendasi Penggunaan Internet
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>30 Mbps</td>
                            <td>Socmed dengan video + streaming kualitas HD + video conference (zoom, gmeet)</td>
                        </tr>
                        <tr>
                            <td>50 Mbps</td>
                            <td>Socmed dengan video + streaming kualitas HD di Laptop + Video conference + download
                                cepat film/game 7 GB + 2 internet CCTV rumah</td>
                        </tr>
                        <tr>
                            <td>100 Mbps</td>
                            <td>Socmed dengan video + streaming di Laptop/ Smart TV kualitas 4K + Video conference +
                                download cepat film/game maks 20 GB + 3 internet CCTV rumah + Gaming online kualitas HD.
                            </td>
                        </tr>
                        <tr>
                            <td>300 Mbps</td>
                            <td>Socmed dengan video + streaming di Laptop/Smart TV kualitas 4K + Video converence +
                                Screen Sharing + Audio + Gaming Online Experience ( Sony, PS4, Xbox One, Nintendo
                                Switch, PC / Mac / Mobile ) + Smart Home</td>
                        </tr>
                        <tr>
                            <td style="border-bottom-left-radius: 20px;">500 Mbps</td>
                            <td style="border-bottom-right-radius: 20px;">Socmed dengan video + streaming di Laptop /
                                Smart TV kualitas 4K + Online Gaming + Video Conference + 4K video streaming + Multiple
                                Smart Home Device</td>
                        </tr>
                    </tbody>

                </table>


            </div>
        </div>

        <div class="section bg-transparent mt-4 mb-0 pb-0">
            <div class="container">
                <div class="heading-block border-bottom-0 center mx-auto mb-0" style="max-width: 550px">
                    <h3 class="nott ls0 mb-3">Cara Bayar RAJAWIFI</h3>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="payment-title">Metode Pembayaran</p>
                        <a href="{{ url('payment') }}/#snav-content1"><div class="payment-item">
                            <img class="payment-image"
                                src="{{ asset('frontend/template/images/pembayaran') }}/kartu.jpg">
                            <p class="payment-name">Credit/Debit Card</p>
                        </div></a>
                    </div>
                    <div class="col-md-4">
                        <p class="payment-title">Virtual Account</p>
                        <a href="{{ url('payment') }}/#snav-content2"><div class="payment-item">
                            <img class="payment-image"
                                src="{{ asset('frontend/template/images/pembayaran') }}/mandiri.jpg">
                            <p class="payment-name">Bank Mandiri</p>
                        </div></a>
                        <a href="{{ url('payment') }}/#snav-content2"><div class="payment-item">
                            <img class="payment-image" src="{{ asset('frontend/template/images/pembayaran') }}/bni.jpg">
                            <p class="payment-name">Bank BNI</p>
                        </div></a>
                        <a href="{{ url('payment') }}/#snav-content2"><div class="payment-item">
                            <img class="payment-image" src="{{ asset('frontend/template/images/pembayaran') }}/bri.jpg">
                            <p class="payment-name">Bank BRI</p>
                        </div></a>
                        <a href="{{ url('payment') }}/#snav-content2"><div class="payment-item">
                            <img class="payment-image" src="{{ asset('frontend/template/images/pembayaran') }}/bca.jpg">
                            <p class="payment-name">Bank BCA</p>
                        </div></a>
                        <a href="{{ url('payment') }}/#snav-content2"><div class="payment-item">
                            <img class="payment-image"
                                src="{{ asset('frontend/template/images/pembayaran') }}/bersama.jpg">
                            <p class="payment-name">ATM Bersama</p>
                        </div></a>
                    </div>
                    <div class="col-md-4">
                        <p class="payment-title">E-Wallet</p>
                        <a href="{{ url('payment') }}/#snav-content5"><div class="payment-item">
                            <img class="payment-image"
                                src="{{ asset('frontend/template/images/pembayaran') }}/gopay.jpg">
                            <p class="payment-name">GoPay</p>
                        </div></a>
                        <a href="{{ url('payment') }}/#snav-content5"><div class="payment-item">
                            <img class="payment-image"
                                src="{{ asset('frontend/template/images/pembayaran') }}/shopee.jpg">
                            <p class="payment-name">Shopee Pay</p>
                        </div></a>
                        <a href="{{ url('payment') }}/#snav-content5"><div class="payment-item">
                            <img class="payment-image" src="{{ asset('frontend/template/images/pembayaran') }}/ovo.jpg">
                            <p class="payment-name">OVO</p>
                        </div></a>
                        <a href="{{ url('payment') }}/#snav-content5"><div class="payment-item">
                            <img class="payment-image"
                                src="{{ asset('frontend/template/images/pembayaran') }}/dana.jpg">
                            <p class="payment-name">Dana</p>
                        </div></a>

                    </div>
                </div>
            </div>
        </div>




        <div class="section">
            <div class="container clearfix">
                <div class="heading-block border-bottom-0 center mx-auto mb-0" style="max-width: 550px">
                    <h3 class="nott ls0 mb-3">Tanya Jawab</h3>

                </div>

                <div class="row gutter-40 col-mb-0">
                    <!-- Post Content
						============================================= -->
                    <div class="postcontent col-lg-12">
                        <div class="clear"></div>

                        <div id="faqs" class="faqs">

                            <div class="toggle faq faq-marketplace faq-authors">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-question-sign"></i>
                                        <i class="toggle-open icon-question-sign"></i>
                                    </div>
                                    <div class="toggle-title">
                                        Apa yang dimaksud dengan RAJAWIFI?
                                    </div>
                                </div>
                                <div class="toggle-content">Layanan terbaru Internet menggunakan teknologi
                                    Fiber-to-the-home (FTTH) dengan 100% fiber optic untuk memberikan layanan internet
                                    dan layanan lainnya secara maksimal untuk pelanggan.</div>
                            </div>

                            <div class="toggle faq faq-authors faq-miscellaneous">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-question-sign"></i>
                                        <i class="toggle-open icon-question-sign"></i>
                                    </div>
                                    <div class="toggle-title">
                                        Apa keunggulan dari RAJAWIFI?
                                    </div>
                                </div>
                                <div class="toggle-content">
                                    <ul>
                                        <li>Menggunakan teknologi Fiber-to-the-home (FTTH) dengan 100% fiber optic untuk
                                            memberikan layanan yang dapat diandalkan oleh pelanggan.</li>
                                        <li>Layanan internet unlimited, cepat, stabil serta dapat diandalkan.</li>
                                        <li>Memberikan value for money bagi pelanggan untuk kebutuhan terkini dan
                                            kebutuhan lainnya..</li>
                                        <li>Memiliki pelayanan pelanggan yang baik dengan dukungan gerai Indosat Ooredoo
                                            Hutchison, call center, email dan social media.</li>
                                        <li>Memiliki layanan mandiri secara digital untuk aktivitas pembayaran maupun
                                            lainnya untuk kemudahan pelanggan.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="toggle faq faq-miscellaneous">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-question-sign"></i>
                                        <i class="toggle-open icon-question-sign"></i>
                                    </div>
                                    <div class="toggle-title">
                                        Bagaimana rencana Anda untuk memperluas jangkauan RAJAWIFI?
                                    </div>
                                </div>
                                <div class="toggle-content">Mulai hari ini tanggal 9 September 2022 kami telah
                                    memperkenalkan layanan di wilayah Jakarta dan akan segera berekspansi ke wilayah
                                    Bodetabek, Surabaya dan Yogyakarta.</div>
                            </div>

                            <div class="toggle faq faq-authors faq-legal faq-itemdiscussion">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-question-sign"></i>
                                        <i class="toggle-open icon-question-sign"></i>
                                    </div>
                                    <div class="toggle-title">
                                        Bagaimana dengan lisensi RAJAWIFI? Apakah menggunakan lisensi IM2 untuk layanan
                                        ini?
                                    </div>
                                </div>
                                <div class="toggle-content">
                                    <ul>
                                        <li>Kami tidak menggunakan lisensi IM2.</li>
                                        <li>Kami sudah menyelesaikan semua persetujuan yang diperlukan terkait lisensi
                                            dari mitra strategis .</li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                        <center><a href="#" class="btn btn-success w-10 btn-sm bg-color border-color">Lihat Semua Tanya
                                Jawab</a></center>

                    </div><!-- .postcontent end -->



                </div>

            </div>
        </div>
        @endsection