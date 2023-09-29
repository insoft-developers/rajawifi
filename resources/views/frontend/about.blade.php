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

        <h1>Tentang Kami</h1>


    </div>

</section>



<!-- Content
			============================================= -->

<section id="content">

    <div class="content-wrap pt-0">
        <div style="margin-top: -60px;"></div>

        <div class="section">

            <div class="container py-4">
                <div class="heading-block border-bottom-0 center">


                </div>

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







        @endsection