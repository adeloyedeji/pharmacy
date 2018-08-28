@extends('layouts.main')
@section('title')
    {{$product->title}}
@endsection
@section('content')

    <!-- single product area  start-->
    <div class="single-product-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-5 col-lg-5">
                    <div class="product-view">
                        <div class="full-product-img">
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" data-lens-image="{{URL::to($product->image)}}">
                                            <img alt="" src="{{URL::to($product->image)}}" class="simpleLens-big-image">
                                        </a>
                                    </div>
                                </div>

                                <div id="menu1" class="tab-pane fade">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" data-lens-image="img/single-products/2.jpg">
                                            <img alt="" src="{{URL::to('assets/img/single-products/2.jpg')}}" class="simpleLens-big-image">
                                        </a>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" data-lens-image="img/single-products/3.jpg">
                                            <img alt="" src="{{URL::to('assets/img/single-products/3.jpg')}}" class="simpleLens-big-image">
                                        </a>
                                    </div>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" data-lens-image="img/single-products/4.jpg">
                                            <img alt="" src="{{URL::to('assets/img/single-products/4.jpg')}}" class="simpleLens-big-image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="small-products">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">
                                        <img src="{{URL::to($product->thumb)}}" alt="">
                                    </a></li>
                                <li><a data-toggle="tab" href="#menu1">
                                        <img src="{{URL::to('assets/img/single-products/small/2.jpg')}}" alt="">
                                    </a></li>
                                <li><a data-toggle="tab" href="#menu2">
                                        <img src="{{URL::to('assets/img/single-products/small/3.jpg')}}" alt="">
                                    </a></li>
                                <li><a data-toggle="tab" href="#menu3">
                                        <img src="{{URL::to('assets/img/single-products/small/4.jpg')}}" alt="">
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-7 col-lg-7">
                    <div class="single-product-info sp-info-area">
                        <div class="product-name"><h1>{{$product->title}}</h1></div>
                        <div class="product-rating">
                            <div title="Rating: 3/5" class="ratingbox">
                                <div class="stars-orange" style="width:45px"></div>
                            </div>
                            <span class="amount"> 1 Review(s) </span>
                        </div>
                        <p class="in-stock">
                            Availability:<span>In Stock</span>
                        </p>
                        <p class="sku">
                            Sku: <span class="color">F10</span>
                        </p>
                        <div class="all-prices">
                            <span class="sp-price price-lessprice"></span>
                            <span class="sp-price main-price">₦{{number_format($product->price, 2)}} {{$product->unit ? '/' . $product->unit : ''}}</span>
                        </div>
                        <div class="singl-share">
                            <span>Share:</span> <a href="#"><img src="{{URL::to('assets/img/single-share.png')}}" alt=""></a>
                        </div>
                        <div class="product-short-description">
                            <h4>Quick Overview</h4>
                            {{$product->overview}}
                        </div>
                        <div class="product-quantity">
                            <div class="numbers-row">
                                <input type="text" value="2" name="#">
                            </div>
                            <div class="fv-comp-button">
                                <ul class="add-to-links">
                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-poraduct-botton">
                            <button type="button" title="Add to Cart" class="button btn-cart shopng-btn"><span>Buy Now</span></button>
                            <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <!-- related product area start -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="single-p-r h2-arviel-title"><h3>Related Products</h3></div>
                    <div class="clear"></div>
                    <div class="row">
                        <div class="sp-pd h5-new-design">
                            <div class="h4-products nrb-next-prev ">
                                @foreach($related as $related_product)
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="h4-single-p">
                                        <div class="t-all-product-info">

                                            <div class="t-product-img">
                                                <a href="#">
                                                    <img src="{{URL::to($related_product->image)}}" alt="" />
                                                    {{--<img class="second-img" src="{{URL::to($related_product->image)}}" alt="" />--}}
                                                </a>
                                            </div>
                                            <div class="tab-p-info">
                                                <a href="#">{{$related_product->title}}</a>
                                                <h3>₦{{number_format($related_product->price, 2)}}</h3>
                                                <div class="star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <div class="al-btns">
                                                    <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                                    <ul class="add-to-links">
                                                        <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- related product area end -->
                <div class="clear"></div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="reviews-areas">
                        <div class="reviw-title">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#description">Full Description</a></li>
                                <li><a data-toggle="tab" href="#review">Add Your Review</a></li>
                                <li><a data-toggle="tab" href="#infomation">Product Infomation</a></li>
                            </ul>
                        </div>
                        <div class="revew-content-area">
                            <div class="tab-content">
                                <div id="description" class="tab-pane fade in active">
                                    {!! $product->description !!}
                                </div>
                                <div id="review" class="tab-pane fade">
                                    <div class="customer-reviews">
                                        <h3 class="title-list-reviews">Reviews</h3>
                                        <div class="list-reviews">
                                            <div class="review-item normal">
                                                <b class="author">Trung Jayce</b>
                                                <span class="vote">
                                        <span style="display:inline-block;width:70px;" class="vmicon ratingbox" title="Rating: 4/5">
                                             <span style="width:56px" class="stars-orange"></span>
                                        </span>
                                    </span>
                                                <span class="date">Wednesday, 23 november 2015</span>
                                                <p class="info">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet.</p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="infomation" class="tab-pane fade">
                                    <div class="product-infomation">
                                        <ul class="list-info">
                                            <li><strong>Weight</strong> 10.00 KG</li>
                                            <li><strong>Length</strong> 10.00 M</li>
                                            <li><strong>Width</strong> 5.00</li>
                                            <li><strong>Height</strong> 5.00</li>
                                            <li><strong>Packaging</strong> 5.00 KG</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single product area  end-->


@endsection