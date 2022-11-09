@extends('layouts.app')

@section('css')
    <!-- SPECIFIC CSS -->
    <link href="{{asset('css/home_1.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
@endsection
@section('main')
    <div id="carousel-home">
        <div class="owl-carousel owl-theme">
            <div class="owl-slide cover" style="background-image: url(img/banner1.jpg);">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-end">
                            <div class="col-lg-6 static">
                                <div class="slide-text text-right white">
                                    <h2 class="owl-slide-animated owl-slide-title">Quel établissement choisir ?</h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                        Ne vous inquietez pas, nous sommes là pour vous aider.
                                    </p>
                                    <div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
                                                                                     href="{{route('establishments')}}"
                                                                                     role="button">Voir les établissements</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/owl-slide-->
            <div class="owl-slide cover" style="background-image: url(img/banner2.jpg);">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-lg-6 static">
                                <div class="slide-text white">
                                    <h2 class="owl-slide-animated owl-slide-title">Ont-ils de bonnes infrastructures ?</h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                        Ne vous inquietez pas, nous sommes là pour vous aider.
                                    </p>
                                    <div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
                                                                                     href="{{route('establishments')}}"
                                                                                     role="button">Voir les établissements</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/owl-slide-->
            <div class="owl-slide cover" style="background-image: url(img/banner3.jpg);">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(255, 255, 255, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-lg-12 static">
                                <div class="slide-text text-center black">
                                    <h2 class="owl-slide-animated owl-slide-title">Est-ce qu'ils enseignent bien ?</h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                        Ne vous inquietez pas, nous sommes là pour vous aider.
                                    </p>
                                    <div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
                                                                                     href="{{route('establishments')}}"
                                                                                     role="button">Voir les établissements</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
            </div>
        </div>
        <div id="icon_drag_mobile"></div>
    </div>
    <!--/carousel-->

    {{-- <ul id="banners_grid" class="clearfix">
         <li>
             <a href="#0" class="img_container">
                 <img src="img/banners_cat_placeholder.jpg" data-src="img/banner_1.jpg" alt="" class="lazy">
                 <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                     <h3>Men's Collection</h3>
                     <div><span class="btn_1">Shop Now</span></div>
                 </div>
             </a>
         </li>
         <li>
             <a href="#0" class="img_container">
                 <img src="img/banners_cat_placeholder.jpg" data-src="img/banner_2.jpg" alt="" class="lazy">
                 <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                     <h3>Womens's Collection</h3>
                     <div><span class="btn_1">Shop Now</span></div>
                 </div>
             </a>
         </li>
         <li>
             <a href="#0" class="img_container">
                 <img src="img/banners_cat_placeholder.jpg" data-src="img/banner_3.jpg" alt="" class="lazy">
                 <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                     <h3>Kids's Collection</h3>
                     <div><span class="btn_1">Shop Now</span></div>
                 </div>
             </a>
         </li>
     </ul>--}}
    <!--/banners_grid -->

    <div class="container margin_60_35">
        <div class="main_title">
            <h2>Les mieux notés</h2>
            <span>Etablissements</span>
            <p>Une sélection des établissments scolaires les mieux notés sur notre plateforme.</p>
        </div>
        <div class="row small-gutters">
            @foreach($rated as $establishment)
                <x-grid-establishment :establishment="$establishment"/>
            @endforeach
        </div>
    </div>
    <!-- /container -->

    <div class="featured lazy" data-bg="url(img/banner4.jpg)">
        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container margin_60">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-lg-6 wow" data-wow-offset="150">
                        <h3>Ont-ils des salles de révisions ? Une cantine ?</h3>
                        <p>Ne vous inquietez pas, nous sommes là pour vous aider.</p>
                        <div class="feat_text_block">

                            <a class="btn_1" href="{{route('establishments')}}" role="button">Voir les établissements</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /featured -->

    <div class="container margin_60_35">
        <div class="main_title">
            <h2>Sélection du moment</h2>
            <span>Etablissements</span>
            <p>Parcourer notre catalogue et choisissez l'établissement que vous voulez</p>
        </div>
        <div class="owl-carousel owl-theme products_carousel">
            @foreach($featured as $establishment)
                <x-carousel-establishment :establishment="$establishment"/>
            @endforeach
        </div>
        <!-- /products_carousel -->
    </div>
    <!-- /container -->
{{--
    <div class="bg_gray">
        <div class="container margin_30">
            <div id="brands" class="owl-carousel owl-theme">
                <div class="item">
                    <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_1.png" alt=""
                                      class="owl-lazy"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_2.png" alt=""
                                      class="owl-lazy"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_3.png" alt=""
                                      class="owl-lazy"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_4.png" alt=""
                                      class="owl-lazy"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_5.png" alt=""
                                      class="owl-lazy"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_6.png" alt=""
                                      class="owl-lazy"></a>
                </div><!-- /item -->
            </div><!-- /carousel -->
        </div><!-- /container -->
    </div>
    <!-- /bg_gray -->

    <div class="container margin_60_35">
        <div class="main_title">
            <h2>Latest News</h2>
            <span>Blog</span>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-1.jpg" alt="" width="400"
                             height="266" class="lazy">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>by Mark Twain</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Pri oportere scribentur eu</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum
                        vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-2.jpg" alt="" width="400"
                             height="266" class="lazy">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>By Jhon Doe</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Duo eius postea suscipit ad</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum
                        vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-3.jpg" alt="" width="400"
                             height="266" class="lazy">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>By Luca Robinson</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Elitr mandamus cu has</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum
                        vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-4.jpg" alt="" width="400"
                             height="266" class="lazy">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>By Paula Rodrigez</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Id est adhuc ignota delenit</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum
                        vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
        </div>
        <!-- /row -->
    </div>--}}
@endsection
@section('js')
    <!-- SPECIFIC SCRIPTS -->
    <script src="{{asset('js/carousel-home.min.js')}}"></script>
@endsection
