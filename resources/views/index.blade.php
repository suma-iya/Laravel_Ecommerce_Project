<x-header/>

<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="img/hero/bottle.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Handy and Lovely</h6>
                            <h2>Premium Quality</h2>
                            <p>Presenting you a brand new collection</p>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="img/hero/furniture.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Handy and Lovely</h6>
                            <h2>Premium Quality</h2>
                            <p>Presenting you a brand new collection</p>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-5">
                <div class="banner__item">
                    <div class="banner__item__pic">
                        <img src="img/banner/basket.jpg" width="350px" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h4><i>Household <br> Collections</i></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="img/banner/blue_rack.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h4><i>Fashionable Designs</i></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img src="img/banner/box.jpg" width="350px" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h4><i>New Collections</i></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <ul class="filter__controls">
                <li class="active" data-filter=".latest-products">Latest Products</li>
                <li data-filter=".best-sellers">Best Sellers</li>
                <li data-filter=".new-arrivals">New Arrivals</li>
                <li data-filter=".hot-sales">Hot Sales</li>
            </ul>

            </div>
        </div>
        <div class="row product__filter">
    <!-- Latest Products -->
    @foreach($latestProducts as $item)
    <div class="col-lg-3 col-md-6 col-sm-6 mix latest-products">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="{{ URL::asset('uploads/profile/products/'.$item->picture) }}">
                <span class="label">New</span>
                <ul class="product__hover">
                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                    <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                    <li><a href="{{ URL::to('single/'.$item->id) }}"><img src="img/icon/search.png" alt=""></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6>{{ $item->title }}</h6>
                
                <h5>${{ $item->price }}</h5>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Best Sellers -->
    @foreach($bestSeller as $item)
    <div class="col-lg-3 col-md-6 col-sm-6 mix best-sellers">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="{{ URL::asset('uploads/profile/products/'.$item->picture) }}">
                <span class="label">New</span>
                <ul class="product__hover">
                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                    <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                    <li><a href="{{ URL::to('single/'.$item->id) }}"><img src="img/icon/search.png" alt=""></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6>{{ $item->title }}</h6>
               
                <h5>${{ $item->price }}</h5>
            </div>
        </div>
    </div>
    @endforeach

    <!-- New Arrivals -->
    @foreach($newArrivals as $item)
    <div class="col-lg-3 col-md-6 col-sm-6 mix new-arrivals">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="{{ URL::asset('uploads/profile/products/'.$item->picture) }}">
                <span class="label">New</span>
                <ul class="product__hover">
                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                    <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                    <li><a href="{{ URL::to('single/'.$item->id) }}"><img src="img/icon/search.png" alt=""></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6>{{ $item->title }}</h6>
               
                <h5>${{ $item->price }}</h5>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Hot Sales -->
    @foreach($hotSales as $item)
    <div class="col-lg-3 col-md-6 col-sm-6 mix hot-sales">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="{{ URL::asset('uploads/profile/products/'.$item->picture) }}">
                <span class="label">New</span>
                <ul class="product__hover">
                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                    <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                    <li><a href="{{ URL::to('single/'.$item->id) }}"><img src="img/icon/search.png" alt=""></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6>{{ $item->title }}</h6>
               
                <h5>${{ $item->price }}</h5>
            </div>
        </div>
    </div>
    @endforeach
</div>

    </div>
</section>
<!-- Product Section End -->
<!-- Include MixItUp library -->
<script src="https://cdn.jsdelivr.net/npm/mixitup@3/dist/mixitup.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var containerEl = document.querySelector('.product__filter');
        var mixer = mixitup(containerEl);
    });
</script>

<x-footer />
