<div class="col-6 col-md-4 col-xl-3">
    <div class="grid_item">
        <figure>
            {{--            <span class="ribbon off">-30%</span>--}}
            <a href="{{ route('establishment.single', ["slug" => $establishment->slug]) }}">
                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/1.jpg" alt="">
                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/1_b.jpg" alt="">
            </a>
            {{--            <div data-countdown="2019/05/15" class="countdown"></div>--}}
        </figure>
        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
        <a href="{{ route('establishment.single', ["slug" => $establishment->slug]) }}">
            <h3>{{ $establishment->nom }}</h3>
        </a>
        {{--<div class="price_box">
            <span class="new_price">$48.00</span>
            <span class="old_price">$60.00</span>
        </div>--}}
        <ul>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
{{--            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>--}}
        </ul>
    </div>
</div>
