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

        <h1>Hubungi Kami</h1>


    </div>

</section>



<!-- Content
			============================================= -->
            <div style="margin-top: -60px;"></div>
<div class="section">
    
    <div class="content-wrap pb-0">
        
        <div class="container mb-3">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box flex-column text-center">
                        <div class="fbox-image text-center mb-3">
                            <img height="120" src="{{ asset('frontend/template') }}/seo/images/icons/seo.svg"
                                alt="Feature Icon">
                        </div>
                        <div class="fbox-content">
                            <h3 class="nott ls0 mb-4">Location:</h3>
                            <p class="text-smaller mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod.</p>
                            <address>
                                <a href="https://maps.google.com">
                                    <u>Jl. Merdeka No. 47<br>
                                       Medan</u>
                                </a>
                            </address>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-box flex-column text-center">
                        <div class="fbox-image text-center mb-3">
                            <img height="120" src="{{ asset('frontend/template') }}/seo/images/icons/social.svg"
                                alt="Feature Icon">
                        </div>
                        <div class="fbox-content">
                            <h3 class="nott ls0 mb-4">Contact Us:</h3>
                            <p class="text-smaller mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod.</p>
                            <a class="btn btn-link" href="mailto:info@canvas.com"><u>contact@rajawifi.com</u></a>
                            <a class="btn btn-link" href="tel:10-22-33445566"><u>(061) 7941233</u></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-box flex-column text-center">
                        <div class="fbox-image text-center mb-3">
                            <img height="120" src="{{ asset('frontend/template') }}/seo/images/icons/group.svg"
                                alt="Feature Icon">
                        </div>
                        <div class="fbox-content">
                            <h3 class="nott ls0 mb-4">Live Chat:</h3>
                            <p class="text-smaller mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod.</p>
                            <a href="#"><u>Click Here</u></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection