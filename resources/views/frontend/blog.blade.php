@extends('frontend.master')
@section('content')

<!-- Slider
			============================================= -->
<!-- <div style="margin-top:-25px"></div> -->
<section id="page-title" class="page-title-parallax page-title-center page-title-dark include-header"
    style="background-image: linear-gradient(to bottom, rgba(240, 240, 240,0), #8282e8), url('{{ asset('') }}frontend/template/images/news.png'); background-size: cover; padding: 100px 0;"
    data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div id="particles-line"></div>

    <div class="container clearfix mt-4">

        <h1>Blogs</h1>


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

                    <h3 class="nott ls0">Blogs</h3>
                </div>

                <div class="row mt-5 clearfix">
                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img src="{{ asset('frontend/template') }}/seo/images/blog/1.jpg"
                                        alt="Image 3"></a>
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
                                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem progressive
                                    technology through pariatur quibusdam veritatis quisquam. Efficiently communicate
                                    alternative.</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img src="{{ asset('frontend/template') }}/seo/images/blog/2.jpg"
                                        alt="Image 3"></a>
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
                                <p>Interactively predominate progressive technology through distinctive materials.
                                    Progressively benchmark extensible intellectual. Exercitationem progressive
                                    technology through pariatur.</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img src="{{ asset('frontend/template') }}/seo/images/blog/3.jpg"
                                        alt="Image 3"></a>
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
                                <p>Globally synergize premium metrics with holistic e-markets. Professionally morph
                                    interoperable networks vis-a-vis value-added methods.</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img src="{{ asset('frontend/template') }}/seo/images/blog/1.jpg"
                                        alt="Image 3"></a>
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
                                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem progressive
                                    technology through pariatur quibusdam veritatis quisquam. Efficiently communicate
                                    alternative.</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img src="{{ asset('frontend/template') }}/seo/images/blog/2.jpg"
                                        alt="Image 3"></a>
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
                                <p>Interactively predominate progressive technology through distinctive materials.
                                    Progressively benchmark extensible intellectual. Exercitationem progressive
                                    technology through pariatur.</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img src="{{ asset('frontend/template') }}/seo/images/blog/3.jpg"
                                        alt="Image 3"></a>
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
                                <p>Globally synergize premium metrics with holistic e-markets. Professionally morph
                                    interoperable networks vis-a-vis value-added methods.</p>
                            </div>
                        </article>
                    </div>
                </div>
               

            </div>
        </div>







        @endsection