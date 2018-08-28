<style>
    ul#subcat > li {
        color: #000;
    }
    ul#subcat > li > a {
        color: #000;
    }
    ul#subcat > li > a:hover {
        color: #04c;
    }
    #sp {
        color: #000;
    }
    #sp:hover {
        color: #000;
    }
</style>
<div class="col-sm-12 col-md-3 col-lg-3 hidden-sm hidden-xs ">
    <div class="h-16">
        <div class="h2-left-cat">
            <h2 class="left-crt-title">Cateogry</h2>
            <div class="h16-menu">
                <nav>
                    <div class="left-cart-menu">
                        <ul>

                            @foreach($categories as $category)
                            <li>
                                @if(count($category->subCategories) > 0)
                                <i class="fa fa-gift"></i>
                                <a class="sp" href="javascript:void(0)" data-toggle="collapse" data-target="#subcat"> {{$category->name}}  <i class="fa fa-chevron-down pull-right"></i></a>

                                <ul id="subcat" class="collapse">
                                    @foreach($category->subCategories as $sub)
                                        <li><a href="{{ url('category/') ."/". $category->name . "/" . $sub->name }}"><i class="fa fa-gift"></i> {{ $sub->name }}</a></li>
                                    @endforeach
                                </ul>

                                @else
                                <i class="fa fa-gift"></i>
                                <a href="{{route('product.category', $category->name)}}"> {{$category->name}}  </a>
                                @endif
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    <div class="h2-left-cat nra">
        <h2 class="left-crt-title">Best Sellers</h2>
        <div class="b-p-area">
            @foreach($categories->take(1) as $category)

                @foreach($category->products()->inRandomOrder()->take(12)->get() as $pharm_product)
            <div class="product-sale-of">
                <div class="s-of-p-img">
                    <a href="#">
                        <img class="min-img" src="{{URL::to($pharm_product->small1)}}" alt="">
                    </a>
                </div>
                <div class="s-of-p-info">
                    <div class="tab-p-info">
                        <a href="#"> {{$pharm_product->title}} </a>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <h3>₦{{number_format($pharm_product->price)}} {{$pharm_product->unit ? '/' . $pharm_product->unit : ''}} </h3>
                    </div>
                </div>
            </div>
                  @endforeach
            @endforeach

        </div>
    </div>

    <!-- add area -->
    <div class="all-h17-left-add">
        <div class="new-adds electronics-bottom-bannar-area">
            <a href="#"><img src="assets/img/all-adds/90.jpg" alt=""></a>
        </div>

        <div class="new-adds electronics-bottom-bannar-area hidden-md">
            <a href="#"><img src="assets/img/all-adds/91.jpg" alt=""></a>
        </div>
        <div class="img-banner-small hidden-md">
            <div class="banner-img  b-stripe">
                <a href="#">
                    <img src="assets/img/all-adds/93.jpg" alt="" class="img-responsive">
                    <span class="b-line-9 b-position-1">&nbsp;</span>
                    <span class="b-line-9 b-position-2">&nbsp;</span>
                    <span class="b-line-9 b-position-3">&nbsp;</span>
                    <span class="b-line-9 b-position-4">&nbsp;</span>
                    <span class="b-line-9 b-position-5">&nbsp;</span>
                    <span class="b-line-9 b-position-6">&nbsp;</span>
                    <span class="b-line-9 b-position-7">&nbsp;</span>
                    <span class="b-line-9 b-position-8">&nbsp;</span>
                    <span class="b-line-9 b-position-9">&nbsp;</span>
                </a>
            </div>
        </div>
    </div>
    <!-- add area -->
</div>