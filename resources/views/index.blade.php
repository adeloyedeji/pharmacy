@extends('layouts.main')
@section('title')
    Home
@endsection
@section('content')
    <!-- slider area start -->
    <div class="h2_slider_area">
        <div class="container">
            <div class="row">
                <div class="h2-main-slider ">
                    @include('partials._categories')

                    <div class="col-sm-12 col-md-9 col-lg-9">
                        @include('partials._slider')
                        <div class="row">
                            <!-- add area start -->
                            <div class="electronics-bottom-bannar-area">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <a href="#"><img alt="" src="{{URL::to('assets/img/promo_discount.jpg')}}"></a>
                                </div>
                                <div class="col-sm-6  col-md-6 col-lg-6">
                                    <a href="#"><img alt="" src="{{URL::to('assets/img/discount_banner.jpg')}}"></a>
                                </div>
                            </div>


                            <!-- add area end -->
                        </div>
                        @foreach($categories as $category)
                        <div class="h2-new-arrivals-area">
                            <div class="h2-arviel-title h17t"><h3>{{$category->name}}</h3></div>
                            <div class="clear"></div>
                            <div class="row">
                                <div class="h2-products nrb-next-prev">
                                    @foreach($category->products()->inRandomOrder()->take(3)->get() as $product)
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="t-all-product-info">
                                            
                                            <div class="t-product-img">
                                                <a href="{{route('product.single', $product->slug)}}">
                                                    <img src="{{URL::to($product->thumb1)}}" alt="" />

                                                </a>
                                            </div>
                                            <div class="tab-p-info">
                                                <a href="{{route('product.single', $product->slug)}}">{{$product->title}} </a>
                                                <h3>₦{{number_format($product->price)}} {{$product->unit ? '/' . $product->unit : ''}}</h3>
                                                <div class="star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <div class="al-btns">
                                                    <a href="{{route('cart.add', ['id' => $product->id])}}"> <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button></a>
                                                    <ul class="add-to-links">
                                                        <li><a href="{{route('product.single', $product->slug)}}" class="link-wishlist" title="Wishlist"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        @endforeach

                    </div>
                </div>
            </div>

            <!-- footer product area  -->
            {{--@include('partials._footer_product')--}}
        </div>
    </div>
    <!-- slider area End -->



    <!--home blog area start -->
    <div class="h8-blog-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="new-title-wrap">
                        <div class="h2-arviel-title h17b"><h3>From Our Blog </h3></div>
                    </div>
                </div>
                @foreach($posts as $post)
                <div class="col-sm-6  col-md-6 col-lg-6">
                    <div class="singl-h-blog">

                        <div class="h-b-img">
                            <a href="{{route('blog.details', $post->slug)}}"><img src="{{URL::to($post->thumb)}}" alt="" /></a>
                        </div>
                        <div class="h-blog-info">
                            <h2><a href="{{route('blog.details', $post->slug)}}">{{$post->title}}</a></h2>
                            {!! str_limit($post->description, 120) !!}
                            <a href="{{route('blog.details', $post->slug)}}"><span><i class="fa fa-angle-double-right"></i></span>Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!--home blog area end -->

@endsection








