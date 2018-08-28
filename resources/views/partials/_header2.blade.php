<header>
    <!-- header top area start -->
    <div class="header_top_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <p> <i class="fa fa-phone"></i> hotline: 01922262289</p>
                </div>
                <div class="col-sm-8 col-md-9 col-lg-9">
                    <div class="right-menus">
                        <ul>
                            <li><a href="#"><img alt="" src="assets/img/lng/english.png"> English <i class="fa fa-angle-down"></i> </a>

                            </li>
                            <li><a href="#">NGN <i class="fa fa-angle-down"></i></a>

                            </li>
                            <li><a href="/login"><span> <i class="fa fa-unlock-alt"></i></span> Login  </a>
                            </li>
                            <li><a href="/register"><span><i class="fa fa-key"></i></span>  Register</a></li>
                            <li><a href="#"><span> <i class="fa fa-heart"></i> </span>Wishlist</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header main area start -->
    <div class="header_main_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="h2-logo">
                        <a href="{{route('index')}}"><img src="{{URL::to('assets/img/logos/logo.png')}}" alt="" height="150" width="250" /></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="h2-cat-search">
                        <div class="em-category-search">
                            <form action="{{route('search')}}" method="GET">
                                <div class="form-search cate_search">
                                    <div class="input_cat hidden-xs">
                                        <div class="catsearch-dropdown over">
                                            <span class="current">&nbsp;&nbsp;&nbsp; All Categories</span>
                                            <ul >
                                                @foreach($categories as $category)
                                                <li><a href="#"> &nbsp;&nbsp;&nbsp; {{$category->name}} </a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                        <div class="text-search">
                                            <input type="search" name="query" placeholder="Search entire store here..." class="input-text">
                                            <button class="button" title="Search" type="submit"><span><span>Search</span></span></button>
                                        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="cart-area">
                        <div class="main-cart-area">
                            <div class="cart-icon">
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>My Cart: {{Cart::count()}}
                                </a>
                            </div>
                            <div class="cart-sub">
                                <div class="all_carts_item">
                                    @foreach(Cart::content() as $cart)
                                    <div class="row mini-cart-item ">
                                        <a href="#" class="cart_list_product_img">
                                            <img class="attachment-shop_thumbnail" src="{{asset($cart->model->small1)}}" alt="04">
                                        </a>
                                        <div class="mini-cart-info">
                                            <a href="#" class="cart_list_product_title">{{$cart->name}}</a>
                                            <div class="cart_list_product_quantity">{{$cart->qty}} x <span class="amount">₦{{number_format($cart->price)}}</span></div>
                                        </div>
                                        <a title="Remove this item" class="remove" href="{{route('cart.delete', $cart->rowId)}}"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                        @endforeach

                                </div>
                                <div class="minicart_total_checkout">
                                    Subtotal<span><span class="amount">₦{{Cart::total()}}</span></span>
                                </div>
                                <div class="btn-mini-cart inline-lists">
                                    <a class="button btn-viewcart" href="{{route('cart')}}">View Cart</a>
                                    <a title="Checkout" class="button btn-checkout" href="{{route('checkout')}}">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header main area end -->
</header>