@extends('layouts.app')
@section('css')
    <!-- SPECIFIC CSS -->
    <link href="{{asset('css/listing.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
@endsection
@section('main')
    <div class="container margin_30">
        <div class="row">
            <aside class="col-lg-3" id="sidebar_fixed">
                <div class="filter_col">
                    <div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
                    <div class="filter_type version_2">
                        <h4><a href="#filter_1" data-toggle="collapse" class="opened">Categories</a></h4>
                        <div class="collapse show" id="filter_1">
                            <ul>
                                @foreach($categories as $category)
                                <li>
                                    <label class="container_check">{{$category->libelle}} <small>{{$category->establishments->count()}}</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- /filter_type -->
                    </div>
                    <!-- /filter_type -->
                    <div class="filter_type version_2">
                        <h4><a href="#filter_2" data-toggle="collapse" class="opened">Villes</a></h4>
                        <div class="collapse show" id="filter_2">
                            <ul>
                                @foreach($villes as $ville)
                                <li>
                                    <label class="container_check">{{$ville}} <small>06</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /filter_type -->
                    <div class="filter_type version_2">
                        <h4><a href="#filter_3" data-toggle="collapse" class="closed">Note</a></h4>
                        <div class="collapse" id="filter_3">
                            <ul>
                                <li>
                                    <label class="container_check">1 étoile <small>{{ \App\Models\Rating::where('note', 1)->count() }}</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">2 étoiles <small>{{ \App\Models\Rating::where('note', 2)->count() }}</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">3 étoiles <small>{{ \App\Models\Rating::where('note', 3)->count() }}</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">4 étoiles <small>{{ \App\Models\Rating::where('note', 4)->count() }}</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">5 étoiles <small>{{ \App\Models\Rating::where('note', 5)->count() }}</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /filter_type -->
                    <div class="buttons">
                        <a href="#0" class="btn_1">Filter</a> <a href="#0" class="btn_1 gray">Reset</a>
                    </div>
                </div>
            </aside>
            <!-- /col -->
            <div class="col-lg-9">
                <div class="top_banner">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                        <div class="container pl-lg-5">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="{{route('home')}}">Accueil</a></li>
                                    <li>Tous les établissements</li>
                                </ul>
                            </div>
                            <h1>Retrouvez ici tous les établissements scolaires que nous avons répertorié.</h1>
                        </div>
                    </div>
                    <img src="img/bg_cat_shoes.jpg" class="img-fluid" alt="">
                </div>
                <!-- /top_banner -->
                <div id="stick_here"></div>
                <div class="toolbox elemento_stick add_bottom_30">
                    <div class="container">
                        <ul class="clearfix">
                            <li>
                                <div class="sort_select">
                                    <select name="sort" id="sort">
                                        <option value="popularity" selected="selected">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to
                                    </select>
                                </div>
                            </li>
                            <li>
                                <a href="#0"><i class="ti-view-grid"></i></a>
                                <a href="listing-row-1-sidebar-left.html"><i class="ti-view-list"></i></a>
                            </li>
                            <li>
                                <a href="#0" class="open_filters">
                                    <i class="ti-filter"></i><span>Filters</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /toolbox -->
                <div class="row small-gutters">
                    @foreach($establishments as $establishment)
                        <x-grid-establishment :establishment="$establishment"/>
                    @endforeach
                </div>
                <!-- /row -->
                <div class="pagination__wrapper">
                    {{ $establishments->links() }}
                   {{-- <ul class="pagination">
                        <li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
                        <li>
                            <a href="#0" class="active">1</a>
                        </li>
                        <li>
                            <a href="#0">2</a>
                        </li>
                        <li>
                            <a href="#0">3</a>
                        </li>
                        <li>
                            <a href="#0">4</a>
                        </li>
                        <li><a href="#0" class="next" title="next page">&#10095;</a></li>
                    </ul>--}}
                </div>
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
@endsection
@section('js')
    <!-- SPECIFIC SCRIPTS -->
    <script src="{{asset('js/sticky_sidebar.min.js')}}"></script>
    <script src="{{asset('js/specific_listing.js')}}"></script>
@endsection
