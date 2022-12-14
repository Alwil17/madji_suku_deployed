<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('css/bootstrap.custom.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    @yield('css')

</head>

<body>

<div id="page">

    <header class="version_1">
        <div class="layer"></div><!-- Mobile menu overlay mask -->
        <div class="main_header">
            <div class="container">
                <div class="row small-gutters">
                    <div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
                        <div id="logo">
                            <a href="{{route('home')}}"><img src="img/logo.svg" alt="" width="100" height="35"></a>
                        </div>
                    </div>
                    <nav class="col-xl-6 col-lg-7">
                        <a class="open_close" href="javascript:void(0);">
                            <div class="hamburger hamburger--spin">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                        </a>
                        <!-- Mobile menu button -->
                        <div class="main-menu">
                            <div id="header_menu">
                                <a href="{{route('home')}}"><img src="img/logo_black.svg" alt="" width="100" height="35"></a>
                                <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                            </div>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">Acceuil</a>
                                </li>
                                <li>
                                    <a href="{{route('establishments')}}">Etablissements</a>
                                </li>
                                <li>
                                    <a href="#0">Blog</a>
                                </li>
                                <li>
                                    <a href="#0">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!--/main-menu -->
                    </nav>
                    <div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-right">
                        <a class="phone_top" href="tel://9438843343"><strong><span>Need Help?</span>+94 423-23-221</strong></a>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /main_header -->

        <div class="main_nav Sticky">
            <div class="container">
                <div class="row small-gutters">
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <nav class="categories">
                            <ul class="clearfix">
                                <li><span>
										<a href="#">
											<span class="hamburger hamburger--spin">
												<span class="hamburger-box">
													<span class="hamburger-inner"></span>
												</span>
											</span>
											Categories
										</a>
									</span>
                                    <div id="menu">
                                        <ul>
                                            <li><span><a href="#0">Collections</a></span>
                                                <ul>
                                                    <li><a href="listing-grid-1-full.html">Trending</a></li>
                                                    <li><a href="listing-grid-2-full.html">Life style</a></li>
                                                    <li><a href="listing-grid-3.html">Running</a></li>
                                                    <li><a href="listing-grid-4-sidebar-left.html">Training</a></li>
                                                    <li><a href="listing-grid-5-sidebar-right.html">View all Collections</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Men</a></span>
                                                <ul>
                                                    <li><a href="listing-grid-6-sidebar-left.html">Offers</a></li>
                                                    <li><a href="listing-grid-7-sidebar-right.html">Shoes</a></li>
                                                    <li><a href="listing-row-1-sidebar-left.html">Clothing</a></li>
                                                    <li><a href="listing-row-3-sidebar-left.html">Accessories</a></li>
                                                    <li><a href="listing-row-4-sidebar-extended.html">Equipment</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Women</a></span>
                                                <ul>
                                                    <li><a href="listing-grid-1-full.html">Best Sellers</a></li>
                                                    <li><a href="listing-grid-2-full.html">Clothing</a></li>
                                                    <li><a href="listing-grid-3.html">Accessories</a></li>
                                                    <li><a href="listing-grid-4-sidebar-left.html">Shoes</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Boys</a></span>
                                                <ul>
                                                    <li><a href="listing-grid-6-sidebar-left.html">Easy On Shoes</a></li>
                                                    <li><a href="listing-grid-7-sidebar-right.html">Clothing</a></li>
                                                    <li><a href="listing-row-3-sidebar-left.html">Must Have</a></li>
                                                    <li><a href="listing-row-4-sidebar-extended.html">All Boys</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Girls</a></span>
                                                <ul>
                                                    <li><a href="listing-grid-1-full.html">New Releases</a></li>
                                                    <li><a href="listing-grid-2-full.html">Clothing</a></li>
                                                    <li><a href="listing-grid-3.html">Sale</a></li>
                                                    <li><a href="listing-grid-4-sidebar-left.html">Best Sellers</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Customize</a></span>
                                                <ul>
                                                    <li><a href="listing-row-1-sidebar-left.html">For Men</a></li>
                                                    <li><a href="listing-row-2-sidebar-right.html">For Women</a></li>
                                                    <li><a href="listing-row-4-sidebar-extended.html">For Boys</a></li>
                                                    <li><a href="listing-grid-1-full.html">For Girls</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
                        <div class="custom-search-input">
                            <input type="text" placeholder="Rechercher dans notre catalogue d'??tablissements">
                            <button type="submit"><i class="header-icon_search_custom"></i></button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-3">
                        <ul class="top_tools">
                            <li>
                                <a href="#0" class="compare"><span>Compare</span></a>
                            </li>
                            <li>
                                <a href="#0" class="wishlist"><span>Wishlist</span></a>
                            </li>
                            {{--<li>
                                <div class="dropdown dropdown-access">
                                    <a href="account.html" class="access_link"><span>Account</span></a>
                                    <div class="dropdown-menu">
                                        <a href="account.html" class="btn_1">Sign In or Sign Up</a>
                                        <ul>
                                            <li>
                                                <a href="track-order.html"><i class="ti-truck"></i>Track your Order</a>
                                            </li>
                                            <li>
                                                <a href="account.html"><i class="ti-package"></i>My Orders</a>
                                            </li>
                                            <li>
                                                <a href="account.html"><i class="ti-user"></i>My Profile</a>
                                            </li>
                                            <li>
                                                <a href="help.html"><i class="ti-help-alt"></i>Help and Faq</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /dropdown-access-->
                            </li>--}}
                            <li>
                                <a href="javascript:void(0);" class="btn_search_mob"><span>Search</span></a>
                            </li>
                            <li>
                                <a href="#menu" class="btn_cat_mob">
                                    <div class="hamburger hamburger--spin" id="hamburger">
                                        <div class="hamburger-box">
                                            <div class="hamburger-inner"></div>
                                        </div>
                                    </div>
                                    Categories
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <div class="search_mob_wp">
                <input type="text" class="form-control" placeholder="Rechercher dans notre catalogue d'??tablissements">
                <input type="submit" class="btn_1 full-width" value="Search">
            </div>
            <!-- /search_mobile -->
        </div>
        <!-- /main_nav -->
    </header>
    <!-- /header -->

    <main>
        @yield('main')
    </main>
    <!-- /main -->

    <footer class="revealed">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_1">Quick Links</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_1">
                        <ul>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="help.html">Faq</a></li>
                            <li><a href="help.html">Help</a></li>
                            <li><a href="account.html">My account</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_2">Categories</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_2">
                        <ul>
                            <li><a href="listing-grid-1-full.html">Clothes</a></li>
                            <li><a href="listing-grid-2-full.html">Electronics</a></li>
                            <li><a href="listing-grid-1-full.html">Furniture</a></li>
                            <li><a href="listing-grid-3.html">Glasses</a></li>
                            <li><a href="listing-grid-1-full.html">Shoes</a></li>
                            <li><a href="listing-grid-1-full.html">Watches</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_3">Contacts</h3>
                    <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                        <ul>
                            <li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
                            <li><i class="ti-headphone-alt"></i>+94 423-23-221</li>
                            <li><i class="ti-email"></i><a href="#0">info@allaia.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_4">Keep in touch</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_4">
                        <div id="newsletter">
                            <div class="form-group">
                                <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                <button type="submit" id="submit-newsletter"><i class="ti-angle-double-right"></i></button>
                            </div>
                        </div>
                        <div>
                            <ul class="additional_links">
                                <li><a href="#0">Terms and conditions</a></li>
{{--                                <li><a href="#0">Privacy</a></li>--}}
                                <li><span>?? 2020 Allaia</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row-->
            {{--<hr>
            <div class="row add_bottom_25">
                <div class="col-lg-6">
                    <ul class="footer-selector clearfix">
                        <li>
                            <div class="styled-select lang-selector">
                                <select>
                                    <option value="English" selected>English</option>
                                    <option value="French">French</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Russian">Russian</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="styled-select currency-selector">
                                <select>
                                    <option value="US Dollars" selected>US Dollars</option>
                                    <option value="Euro">Euro</option>
                                </select>
                            </div>
                        </li>
                        <li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/cards_all.svg" alt="" width="198" height="30" class="lazy"></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="additional_links">
                        <li><a href="#0">Terms and conditions</a></li>
                        <li><a href="#0">Privacy</a></li>
                        <li><span>?? 2020 Allaia</span></li>
                    </ul>
                </div>
            </div>--}}
        </div>
    </footer>
    <!--/footer-->
</div>
<!-- page -->

<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="{{asset('js/common_scripts.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@yield('js')
</body>
</html>
