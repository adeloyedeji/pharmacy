<div class="footer-product-area">

    <div class="h2-sell-off-area">

        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-12">

                <div class="h2-arviel-title fpd"><h3>Products</h3></div>

            </div>

            <div class="clear"></div>

            <div class="footer-single-p">

                <div class="col-sm-6 col-md-4 col-lg-4">

                    <div class="sp-f">

                        <div class="sp-title"><h3>Drink & Wines</h3></div>

                        @foreach($wines as $wine)

                        <div class="product-sale-of">

                            <div class="s-of-p-img">

                                <a href="#">

                                    <img alt="" src="{{URL::to($wine->thumb1)}}" class="min-img">

                                </a>

                            </div>

                            <div class="s-of-p-info">

                                <div class="tab-p-info">

                                    <a href="{{route('product.single', $wine->slug)}}"> {{$wine->title}} </a>

                                    <div class="star">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-half-o"></i>

                                        <i class="fa fa-star-half-o"></i>

                                        <i class="fa fa-star-half-o"></i>

                                    </div>

                                    <h3>₦{{number_format($wine->price)}} {{$wine->unit ? '/' . $wine->unit : ''}} </h3>

                                </div>

                            </div>

                        </div>

                        @endforeach



                    </div>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4">

                    <div class="sp-f">

                        <div class="sp-title"><h3>HouseHold</h3></div>

                        <div class="product-sale-of">

                            <div class="s-of-p-img">

                                <a href="#">

                                    <img alt="" src="assets/img/products/thumb/23.jpg" class="min-img">

                                    <img alt="" src="assets/img/products/thumb/29.jpg" class="other-img">

                                </a>

                            </div>

                            <div class="s-of-p-info">

                                <div class="tab-p-info">

                                    <a href="#"> Apple iMac ME045 </a>

                                    <div class="star">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-half-o"></i>

                                        <i class="fa fa-star-half-o"></i>

                                        <i class="fa fa-star-half-o"></i>

                                    </div>

                                    <h3>$872.00 </h3>

                                </div>

                            </div>

                        </div>

                        <div class="product-sale-of">

                            <div class="s-of-p-img">

                                <a href="#">

                                    <img alt="" src="assets/img/products/thumb/25.jpg" class="min-img">

                                    <img alt="" src="assets/img/products/thumb/27.jpg" class="other-img">

                                </a>

                            </div>

                            <div class="s-of-p-info">

                                <div class="tab-p-info">

                                    <a href="#"> Apple iMac ME045 </a>

                                    <div class="star">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-half-o"></i>

                                        <i class="fa fa-star-half-o"></i>

                                        <i class="fa fa-star-half-o"></i>

                                    </div>

                                    <h3>$872.00 </h3>

                                </div>

                            </div>

                        </div>

                        <div class="product-sale-of lst-item">

                            <div class="s-of-p-img">

                                <a href="#">

                                    <img alt="" src="assets/img/products/thumb/28.jpg" class="min-img">

                                    <img alt="" src="assets/img/products/thumb/29.jpg" class="other-img">

                                </a>

                            </div>

                            <div class="s-of-p-info">

                                <div class="tab-p-info">

                                    <a href="#"> Apple iMac ME045 </a>

                                    <div class="star">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-half-o"></i>

                                        <i class="fa fa-star-half-o"></i>

                                        <i class="fa fa-star-half-o"></i>

                                    </div>

                                    <h3>$872.00 </h3>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="col-sm-12 col-md-4 col-lg-4 hidden-sm">

                    <div class="sp-f">

                        <div class="sp-title"><h3>Beauty</h3></div>

                        <div class="product-sale-of">

                            <div class="s-of-p-img">

                                <a href="#">

                                    <img alt="" src="assets/img/products/thumb/23.jpg" class="min-img">

                                    <img alt="" src="assets/img/products/thumb/24.jpg" class="other-img">

                                </a>

                            </div>

                            <div class="s-of-p-info">

                                <div class="tab-p-info">

                                    <a href="#"> Apple iMac ME045 </a>

                                    <div class="star">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-half-o"></i>

                                        <i class="fa fa-star-half-o"></i>

                                        <i class="fa fa-star-half-o"></i>

                                    </div>

                                    <h3>$872.00 </h3>

                                </div>

                            </div>

                        </div>

                        <div class="product-sale-of">

                            <div class="s-of-p-img">

                                <a href="#">

                                    <img alt="" src="assets/img/products/thumb/25.jpg" class="min-img">

                                    <img alt="" src="assets/img/products/thumb/26.jpg" class="other-img">

                                </a>

                            </div>

                            <div class="s-of-p-info">

                                <div class="tab-p-info">

                                    <a href="#"> Apple iMac ME045 </a>

                                    <div class="star">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-half-o"></i>

                                        <i class="fa fa-star-half-o"></i>

                                        <i class="fa fa-star-half-o"></i>

                                    </div>

                                    <h3>$872.00 </h3>

                                </div>

                            </div>

                        </div>

                        <div class="product-sale-of lst-item">

                            <div class="s-of-p-img">

                                <a href="#">

                                    <img alt="" src="assets/img/products/thumb/27.jpg" class="min-img">

                                    <img alt="" src="assets/img/products/thumb/28.jpg" class="other-img">

                                </a>

                            </div>

                            <div class="s-of-p-info">

                                <div class="tab-p-info">

                                    <a href="#"> Apple iMac ME045 </a>

                                    <div class="star">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-half-o"></i>

                                        <i class="fa fa-star-half-o"></i>

                                        <i class="fa fa-star-half-o"></i>

                                    </div>

                                    <h3>$872.00 </h3>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>