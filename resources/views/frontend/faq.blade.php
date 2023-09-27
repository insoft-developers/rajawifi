@extends('frontend.master')
@section('content')

<!-- Slider
			============================================= -->
<!-- <div style="margin-top:-25px"></div> -->
<section id="page-title" class="page-title-parallax page-title-center page-title-dark include-header"
    style="background-image: linear-gradient(to bottom, rgba(240, 240, 240,0), #8282e8), url('{{ asset('') }}frontend/template/images/about.jpg'); background-size: cover; padding: 100px 0;"
    data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div id="particles-line"></div>

    <div class="container clearfix mt-4">

        <h1>RAJAWIFI FAQ's</h1>


    </div>

</section>



<!-- Content
			============================================= -->
<div style="margin-top: -60px;"></div>
<div class="section bg-transparent">
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


            </div><!-- .postcontent end -->



        </div>

    </div>
</div>

<div class="section">
    <div class="container">
        <div class="heading-block border-bottom-0 center">
            <h5 class="text-uppercase ls1 mb-1">Untuk informasi lebih lanjut mengenai RAJAWIFI silakan
</h5>
            <h2 class="nott ls0">Hubungi Kami<span> Di</span></h2>
            <a href="demo-seo-contact.html" class="button button-large button-rounded nott ms-0 ls0 mt-4">contact@rajawifi.com</a>
        </div>
    </div>
</div>







@endsection