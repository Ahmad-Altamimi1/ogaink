@section('content')
    <section class="products-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="product-sidebar">
                        <div class="product-sidebar__single product-sidebar__search-widget">
                            <form action="{{ route("search_products") }}" method="get" >
                                <input name="search" type="text" placeholder="Search">
                                <button class="organik-icon-magnifying-glass" type="submit"></button>
                            </form>
                        </div><!-- /.product-sidebar__single -->
                        <div class="product-sidebar__single">
                            <h3>Categories</h3>
                            <ul class="list-unstyled product-sidebar__links">
                                <li><a href="{{ route('subcategories') }}">All<i class="fa fa-angle-right"></i></a></li>
                               @foreach ($categories as $category) 
                               <li><a href="{{ route('subcategories', ['id' => $category->id]) }}">{{ $category->name }} <i class="fa fa-angle-right"></i></a></li>
                               @endforeach
                            </ul><!-- /.list-unstyled product-sidebar__links -->
                        </div>
                        <div class="product-sidebar__single">
                            <h3>Price</h3>
                            <div class="product-sidebar__price-range">
                                <div class="range-slider-price" id="range-slider-price"></div>
                              <form method="POST" action="{{ route("price_products") }}">
                                @csrf
                                <div class="form-group">
                                    <div class="left">
                                        <p>$<span id="min-value-rangeslider"></span></p>
                                        <input value=0 id="min" type="text" name="rangemin" hidden>
                                        <span>-</span>
                                        <p>$<span id="max-value-rangeslider"></span></p>
                                        <input value=0 id="max" type="text" name="rangemax" hidden>
                                    </div><!-- /.left -->
                                    <div class="right">
                                        <input type="submit" class="thm-btn" value="Filter">
                                    </div><!-- /.right -->
                                </div>
                              </form>
                            </div><!-- /.product-sidebar__price-range -->
                        </div><!-- /.product-sidebar__single -->
                        <!-- /.product-sidebar__single -->
                    </div><!-- /.product-sidebar -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-3 -->
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <div class="product-sorter">
                        <h1>OUR PRODUCTS</h1>
                        <!-- /.product-sorter__select -->
                    </div><!-- /.product-sorter -->
                    <div class="row">
                       @foreach ($products as $product )
                       <div class="col-md-6 col-lg-4">
                        <div class="product-card">
                            <div class="product-card__image">
                                <img src="{{ asset("assets/images/products/product-1-1.jpg") }}" alt="">
                                <div class="product-card__image-content">
                                    <a href={{ route('product_details', ['id' => $product->id]) }}><i class="organik-icon-visibility"></i></a>
                                    <a href="{{ route('add', ['id' => $product->id]) }}"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__image-content -->
                            </div><!-- /.product-card__image -->
                            <div class="product-card__content">
                                <div class="product-card__left">
                                    <h3><a href={{ route('product_details', ['id' => $product->id]) }}>{{ $product->name }}</a></h3>
                                    <p>{{ $product->price }}</p>
                                </div><!-- /.product-card__left -->
                                @php
                                    $reviews = $product->review;


$productRatings = $reviews->pluck('review')->toArray();
        $averageRating = count($productRatings) > 0 ? array_sum($productRatings) / count($productRatings) : 0;
                                @endphp
                                <div class="product-card__right">
                                     @for ($i = 1; $i <= 5; $i++)
                                    
                                        @if ($i <= $averageRating)
                                            <i class="fa fa-star"></i>
                                        @else
                                        <i class="far fa-star"></i> 
                                        @endif
                                    </a>
                                @endfor
                                </div><!-- /.product-card__right -->
                            </div><!-- /.product-card__content -->
                        </div><!-- /.product-card -->
                    </div>
                       @endforeach

                    </div>
                    <div class="text-center">
                        <a href="#" class="thm-btn products__load-more">Load More</a><!-- /.thm-btn -->
                    </div><!-- /.text-center -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.products-page -->



    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="organik-icon-close"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="organik-icon-email"></i>
                    <a href="mailto:needhelp@organik.com">needhelp@organik.com</a>
                </li>
                <li>
                    <i class="organik-icon-calling"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">
                    <img src="assets/images/resources/flag-1-1.jpg" alt="">
                    <label class="sr-only" for="language-select">select language</label>
                    <!-- /#language-select.sr-only -->
                    <select class="selectpicker" id="language-select">
                        <option value="english">English</option>
                        <option value="arabic">Arabic</option>
                    </select>
                </div><!-- /.mobile-nav__language -->
                <div class="main-menu__login">
                    <a href="#"><i class="organik-icon-user"></i>Login / Register</a>
                </div><!-- /.main-menu__login -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="mini-cart">
        <div class="mini-cart__overlay mini-cart__toggler"></div>
        <div class="mini-cart__content">
            <div class="mini-cart__top">
                <h3 class="mini-cart__title">Shopping Cart</h3>
                <span class="mini-cart__close mini-cart__toggler"><i class="organik-icon-close"></i></span>
            </div><!-- /.mini-cart__top -->
            <div class="mini-cart__item">
                <img src="assets/images/products/cart-1-1.jpg" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="product-details.html">Banana</a></h3>
                        <p>$9.99</p>
                    </div><!-- /.mini-cart__item-top -->
                    <div class="quantity-box">
                        <button type="button" class="sub">-</button>
                        <input type="number" id="2" value="1" />
                        <button type="button" class="add">+</button>
                    </div>
                </div><!-- /.mini-cart__item-content -->
            </div><!-- /.mini-cart__item -->
            <div class="mini-cart__item">
                <img src="assets/images/products/cart-1-2.jpg" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="product-details.html">Tomato</a></h3>
                        <p>$9.99</p>
                    </div><!-- /.mini-cart__item-top -->
                    <div class="quantity-box">
                        <button type="button" class="sub">-</button>
                        <input type="number" id="2" value="1" />
                        <button type="button" class="add">+</button>
                    </div>
                </div><!-- /.mini-cart__item-content -->
            </div><!-- /.mini-cart__item -->
            <div class="mini-cart__item">
                <img src="assets/images/products/cart-1-3.jpg" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="product-details.html">Bread</a></h3>
                        <p>$9.99</p>
                    </div><!-- /.mini-cart__item-top -->
                    <div class="quantity-box">
                        <button type="button" class="sub">-</button>
                        <input type="number" id="2" value="1" />
                        <button type="button" class="add">+</button>
                    </div>
                </div><!-- /.mini-cart__item-content -->
            </div><!-- /.mini-cart__item -->
            <a href="checkout.html" class="thm-btn mini-cart__checkout">Proceed To Checkout</a>
        </div><!-- /.mini-cart__content -->
    </div><!-- /.cart-toggler -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="organik-icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
@endsection