@extends('layouts.main')
@section('title')
    {{$sub_category->name}}
@endsection
@section('content')
    <!-- shop page start  -->
    <div class="shop-product-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="shop-top-bar">
                        <div class="shop-left-short-area sorter">
                            <h3>{{ strtoupper($category->name) . " / " . strtoupper($sub_category->name) }}</h3>
                            <br>
                        </div>

                    </div>
                    <div class="clear"></div>
                    <div class="shop-products">
                        <div class="row">
                            <div class="tab-single-product">
                                @forelse($products->chunk(4) as $products_chunk)
                                @foreach($products_chunk as $product)
                                <div class="col-sm-6 col-md-3 col-lg-3">
                                    <div class="t-all-product-info">
                                        <div class="p-sign">    {{$category->name}}
                                        </div>
                                        <div class="t-product-img">
                                            <a href="{{route('product.single', $product->slug)}}">
                                                <img alt="" src="{{URL::to($product->thumb1)}}">
                                            </a>
                                        </div>
                                        <div class="tab-p-info">
                                            <a href="{{route('product.single', $product->slug)}}">{{$product->title}} </a>
                                            <h3>₦{{number_format($product->price)}} {{$product->unit ? '/' . $product->unit : ''}}</h3>

                                            <div class="al-btns">
                                                <a href="{{route('cart.add', ['id' => $product->id])}}"> <button class="button btn-cart" title="Add to Cart" type="button"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button></a>
                                                <ul class="add-to-links">
                                                    <li><a title="Wishlist" class="link-wishlist" href="{{route('product.single', $product->slug)}}"><i class="fa fa-eye"></i></a></li>
                                                    <li><a title="Wishlist" class="link-wishlist" href="#"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a title="Wishlist" class="link-wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="clear"></div>
                                @empty
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <h3 class="text-center">
                                        No products in this category yet! Please check back later.
                                    </h3>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop page end  -->
@endsection