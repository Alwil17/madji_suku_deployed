@extends('layouts.app')
@section('css')
    <!-- SPECIFIC CSS -->
    <link href="{{asset('css/product_page.css')}}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{asset('css/faq.css')}}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{asset('css/contact.css')}}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{asset('css/listing.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
@endsection
@section('main')
    <div class="container margin_60_35">
        {{--<div class="countdown_inner">-20% This offer ends in
            <div data-countdown="2019/05/15" class="countdown"></div>
        </div>--}}
        <div class="top_banner version_2">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0)">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <h1>{{ $establishment->nom }}</h1>
                    </div>
                </div>
            </div>
            <img src="https://via.placeholder.com/1350x550" class="img-fluid" alt="">
        </div>
        <div id="stick_here"></div>
        <div class="toolbox elemento_stick version_2">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="row ml-2">
                        @foreach($establishment->categories()->get() as $category)
                            <div class="form-check mr-2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"
                                       onclick="return false;" checked readonly>
                                <label class="form-check-label" for="defaultCheck1">
                                    {{ $category->libelle }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <div class="product_actions">
                        <ul>
                            <li>
                                <a href="#"><i class="ti-heart"></i><span>Ajouter à la liste de souhaits</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="ti-control-shuffle"></i><span>Comparez</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <br/>
                <div>{{ $establishment->description_courte }}</div>
            </div>
        </div>
    </div>
    <!-- /container -->

    <div class="container margin_60_35">
        <div class="main_title">
            <h2>NOS SERVICES</h2>
            <span>SERVICES</span>
            <p>Découvrez ici les services que nous vous proposons</p>
        </div>

        <div class="row">
            @foreach($establishment->services()->get() as $service)
                <div class="col-lg-4 col-md-6">
                    <a class="box_topic" href="#0">
                        {{--                    <i class="ti-wallet"></i>--}}
                        <img src="{{$service->pivot->image1}}">
                        <h3>{{$service->libelle}}</h3>
                        <p>{{$service->pivot->description}}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container margin_60_35">
        <div class="main_title">
            <h2>Ou nous trouver ?</h2>
            <span>Nos adresses</span>
            <p>Ne cherchez pas longtemps, découvrez ici toutes nos addresses.</p>
        </div>

        <div class="row justify-content-center">
            @if($establishment->addresses()->count() > 1)
                @foreach($establishment->addresses()->get() as $address)
                    <div class="col-lg-4">
                        <div class="box_contacts">
                            <div class="text-center sp-add">
                                <i class="ti-map-alt"></i>
                                <h2>{{$address->libelle}}</h2>
                            </div>

                            <span><i class="ti-headphone-alt"></i> </span>
                            <a href="tel://{{$address->tel1}}"> {{$address->tel1}}</a>
                            @isset($address->tel2)
                                &nbsp; - &nbsp;<a href="tel://{{$address->tel2}}">{{$address->tel2}}</a>
                            @endisset
                            @isset($address->tel3)
                                &nbsp; - &nbsp;<a href="tel://{{$address->tel3}}">{{$address->tel3}}</a>
                            @endisset
                            @isset($address->email)
                                <br/><span><i class="ti-email"></i> <a
                                        href="mailto://{{$address->email}}">{{$address->email}}</a></span>
                            @endisset
                            <br/> <span><i class="ti-location-pin"></i> {{$address->address}}</span>
                            {{--                            <small>MON to FRI 9am-6pm SAT 9am-2pm</small>--}}
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <iframe class="map_contact"
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBCqf_UlVcIrAuhFP1dz-Jgzl22Ts6hc0k&q={{\Illuminate\Support\Str::replace(" ", "+", $establishment->addresses()->first()->address) }}"
                style="border: 0" allowfullscreen></iframe>
    </div>

    <div class="tabs_product">
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Détails</a>
                </li>
                <li class="nav-item">
                    <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Avis</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /tabs_product -->
    <div class="tab_content_wrapper">
        <div class="container">
            <div class="tab-content" role="tablist">
                <div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
                    <div class="card-header" role="tab" id="heading-A">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="false"
                               aria-controls="collapse-A">
                                Détails
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-lg-6">
                                    <h3>Description</h3>
                                    <p>{{ $establishment->description_longue }}</p>
                                </div>
                                <div class="col-lg-5">
                                    <h3>Specifications</h3>
                                    <div class="table-responsive">
                                        <table class="table table-sm table-striped">
                                            <tbody>
                                            <tr>
                                                <td><strong>Color</strong></td>
                                                <td>Blue, Purple</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Size</strong></td>
                                                <td>150x100x100</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Weight</strong></td>
                                                <td>0.6kg</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Manifacturer</strong></td>
                                                <td>Manifacturer</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /TAB A -->
                <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                    <div class="card-header" role="tab" id="heading-B">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false"
                               aria-controls="collapse-B">
                                Avis
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                @foreach(\App\Models\Rating::where('establishment_id', $establishment->id)->latest()->take(4)->get() as $review)
                                    <div class="col-lg-6">
                                        <div class="review_content">
                                            <div class="clearfix add_bottom_10">
                                            <span class="rating">
                                                @if($review->note === 5)
                                                    <i class="icon-star voted"></i>
                                                    <i class="icon-star voted"></i>
                                                    <i class="icon-star voted"></i>
                                                    <i class="icon-star voted"></i>
                                                    <i class="icon-star voted"></i>
                                                @else
                                                    @for($i = 1; $i <= $review->note; $i++)
                                                        <i class="icon-star voted"></i>
                                                    @endfor
                                                    @for($i = 1; $i <= (5 - $review->note); $i++)
                                                        <i class="icon-star empty" style="color: white;"></i>
                                                    @endfor
                                                @endif
                                                <em>{{$review->note}}.0/5.0</em></span>
                                                <em>Publié {{ $review->created_at->calendar() }}</em>
                                            </div>
                                            <h4>"{{ $review->titre }}"</h4>
                                            <p>{{ $review->commentaire }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- /row -->
                            <p class="text-right"><a href="leave-review.html" class="btn_1">Leave a review</a></p>
                        </div>
                        <!-- /card-body -->
                    </div>
                </div>
                <!-- /tab B -->
            </div>
            <!-- /tab-content -->
        </div>
        <!-- /container -->
    </div>
    <!-- /tab_content_wrapper -->

    {{--<div class="container margin_60_35">
        <div class="main_title">
            <h2>Related</h2>
            <span>Products</span>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
        </div>
        <div class="owl-carousel owl-theme products_carousel">
            <div class="item">
                <div class="grid_item">
                    <span class="ribbon new">New</span>
                    <figure>
                        <a href="product-detail-1.html">
                            <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg"
                                 data-src="img/products/shoes/4.jpg" alt="">
                        </a>
                    </figure>
                    <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                            class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                    <a href="product-detail-1.html">
                        <h3>ACG React Terra</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">$110.00</span>
                    </div>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                               title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                               title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                        </li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                               title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /item -->
            <div class="item">
                <div class="grid_item">
                    <span class="ribbon new">New</span>
                    <figure>
                        <a href="product-detail-1.html">
                            <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg"
                                 data-src="img/products/shoes/5.jpg" alt="">
                        </a>
                    </figure>
                    <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                            class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                    <a href="product-detail-1.html">
                        <h3>Air Zoom Alpha</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">$140.00</span>
                    </div>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                               title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                               title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                        </li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                               title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /item -->
            <div class="item">
                <div class="grid_item">
                    <span class="ribbon hot">Hot</span>
                    <figure>
                        <a href="product-detail-1.html">
                            <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg"
                                 data-src="img/products/shoes/8.jpg" alt="">
                        </a>
                    </figure>
                    <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                            class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                    <a href="product-detail-1.html">
                        <h3>Air Color 720</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">$120.00</span>
                    </div>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                               title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                               title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                        </li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                               title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /item -->
            <div class="item">
                <div class="grid_item">
                    <span class="ribbon off">-30%</span>
                    <figure>
                        <a href="product-detail-1.html">
                            <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg"
                                 data-src="img/products/shoes/2.jpg" alt="">
                        </a>
                    </figure>
                    <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                            class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                    <a href="product-detail-1.html">
                        <h3>Okwahn II</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">$90.00</span>
                        <span class="old_price">$170.00</span>
                    </div>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                               title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                               title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                        </li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                               title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /item -->
            <div class="item">
                <div class="grid_item">
                    <span class="ribbon off">-50%</span>
                    <figure>
                        <a href="product-detail-1.html">
                            <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg"
                                 data-src="img/products/shoes/3.jpg" alt="">
                        </a>
                    </figure>
                    <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                            class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                    <a href="product-detail-1.html">
                        <h3>Air Wildwood ACG</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">$75.00</span>
                        <span class="old_price">$155.00</span>
                    </div>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                               title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                               title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                        </li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                               title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /item -->
        </div>
        <!-- /products_carousel -->
    </div>

    <div class="feat">
        <div class="container">
            <ul>
                <li>
                    <div class="box">
                        <i class="ti-gift"></i>
                        <div class="justify-content-center">
                            <h3>Free Shipping</h3>
                            <p>For all oders over $99</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <i class="ti-wallet"></i>
                        <div class="justify-content-center">
                            <h3>Secure Payment</h3>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <i class="ti-headphone-alt"></i>
                        <div class="justify-content-center">
                            <h3>24/7 Support</h3>
                            <p>Online top support</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>--}}
@endsection
@section('js')
    <!-- SPECIFIC SCRIPTS -->
    <script src="{{asset('js/carousel_with_thumbs.js')}}"></script>
@endsection
