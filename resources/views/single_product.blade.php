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
                                        <a class="simpleLens-lens-image" data-lens-image="{{URL::to($product->image1)}}">
                                            <img alt="" src="{{URL::to($product->image1)}}" class="simpleLens-big-image">
                                        </a>
                                    </div>
                                </div>

                                <div id="menu1" class="tab-pane fade">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" data-lens-image="{{URL::to($product->image2)}}">
                                            <img alt="" src="{{URL::to($product->image2)}}" class="simpleLens-big-image">
                                        </a>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" data-lens-image="{{URL::to($product->image3)}}">
                                            <img alt="" src="{{URL::to($product->image3)}}" class="simpleLens-big-image">
                                        </a>
                                    </div>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" data-lens-image="{{URL::to($product->image4)}}">
                                            <img alt="" src="{{URL::to($product->image4)}}" class="simpleLens-big-image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="small-products">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">
                                        <img src="{{URL::to($product->thumb1)}}" alt="">
                                    </a></li>
                                <li><a data-toggle="tab" href="#menu1">
                                        <img src="{{URL::to($product->thumb2)}}" alt="">
                                    </a></li>
                                <li><a data-toggle="tab" href="#menu2">
                                        <img src="{{URL::to($product->thumb3)}}" alt="">
                                    </a></li>
                                <li><a data-toggle="tab" href="#menu3">
                                        <img src="{{URL::to($product->thumb4)}}" alt="">
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
                            Availability:<span>{{$product->availability ? 'In Stock' : 'Out of Stock'}}</span>
                        </p>
                        <p class="sku">
                            Sku: <span class="color">{{$product->unit ? $product->unit : ''}}</span>
                        </p>
                        <div class="all-prices">
                            <span class="sp-price main-price">₦{{number_format($product->price)}} {{$product->unit ? '/' . $product->unit : ''}}</span>
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
                                <input type="text" value="1" name="#">
                            </div>
                            <div class="fv-comp-button">
                                <ul class="add-to-links">
                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-poraduct-botton">
                            <a href="{{route('cart.add', ['id' => $product->id])}}">
                            <button type="button" title="Add to Cart" class="button btn-cart shopng-btn"><span>Buy Now</span></button> </a>
                            <a href="{{route('cart.add', ['id' => $product->id])}}"> <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button> </a>
                        </div>
                    </div>
                </div>

                
                <div class="clear"></div><br /><br />
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
			<!-----review------>


                                     <div class="row">
                                     <div class="col-md-6">
                                            <div class="well well-sm">
                                                 <div class="text-right">
                                                     <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Click To Leave A Review</a>
                                                 </div>
                                             
                                                 <div class="row" id="post-review-box" style="display:none;">
                                                     <div class="col-md-12">
                                                         <form accept-charset="UTF-8" action="/reveiw/{{$product->id}}" method="post">
                                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                                             <input id="ratings-hidden" name="rating" type="hidden"> 
                                                             <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
                                             
                                                             <div class="text-right">
                                                                 <div class="stars starrr" data-rating="0"></div>
                                                                 <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                                                                 <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                                                                 <button class="btn btn-success btn-lg" type="submit">Save</button>
                                                             </div>
                                                         </form>
                                                     </div>
                                                 </div>
                                             </div> 
                                         </div>
                                              
                                            </div>

                                            @if($reviews != null)
                                            @foreach($reviews as $review)
                                             
                                              <div class="row">
                                                <div class="col-md-6">
                                                <hr>
                                                @for ($i=1; $i <= 5 ; $i++)
                                                  <span class="glyphicon glyphicon-star{{ ($i <= $review->rating) ? '' : '-empty'}}"></span>
                                                @endfor

                                                {{ $review->user ? $review->user->name : 'Anonymous'}} <span class="pull-right">{{$review->timeago}}</span> 

                                                <p>{{$review->comment}}</p>
                                                </div>
                                              </div>
                                            @endforeach
                                            @endif
                                     <!-----End of review---->
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

                <div class="clear"></div>
                <!-- related product area start -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="single-p-r h2-arviel-title"><h3>Related Products</h3></div>
                    <div class="clear"></div>
                    <div class="row">
                        <div class="sp-pd h5-new-design">
                            <div class="h4-products nrb-next-prev ">
                                @foreach($related_products as $related_product)
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="h4-single-p">
                                        <div class="t-all-product-info">
                                           
                                            <div class="t-product-img">
                                                <a href="{{route('product.single', $related_product->slug)}}">
                                                    <img src="{{URL::to($related_product->thumb1)}}" alt="" />
                                                </a>
                                            </div>
                                            <div class="tab-p-info">
                                                <a href="{{route('product.single', $related_product->slug)}}">₦{{number_format($related_product->price)}}</a>
                                                <h3>{{$related_product->title}}</h3>
                                                <div class="star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <div class="al-btns">
                                                    <a href="{{route('cart.add', ['id' => $related_product->id])}}"><button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button></a>
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


            </div>
        </div>
    </div>
    <!-- single product area  end-->

@endsection

  @section('script')
    <script type="text/javascript">
        (function(e){var t,o={className:"autosizejs",append:"",callback:!1,resizeDelay:10},i='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',n=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent"],s=e(i).data("autosize",!0)[0];s.style.lineHeight="99px","99px"===e(s).css("lineHeight")&&n.push("lineHeight"),s.style.lineHeight="",e.fn.autosize=function(i){return this.length?(i=e.extend({},o,i||{}),s.parentNode!==document.body&&e(document.body).append(s),this.each(function(){function o(){var t,o;"getComputedStyle"in window?(t=window.getComputedStyle(u,null),o=u.getBoundingClientRect().width,e.each(["paddingLeft","paddingRight","borderLeftWidth","borderRightWidth"],function(e,i){o-=parseInt(t[i],10)}),s.style.width=o+"px"):s.style.width=Math.max(p.width(),0)+"px"}function a(){var a={};if(t=u,s.className=i.className,d=parseInt(p.css("maxHeight"),10),e.each(n,function(e,t){a[t]=p.css(t)}),e(s).css(a),o(),window.chrome){var r=u.style.width;u.style.width="0px",u.offsetWidth,u.style.width=r}}function r(){var e,n;t!==u?a():o(),s.value=u.value+i.append,s.style.overflowY=u.style.overflowY,n=parseInt(u.style.height,10),s.scrollTop=0,s.scrollTop=9e4,e=s.scrollTop,d&&e>d?(u.style.overflowY="scroll",e=d):(u.style.overflowY="hidden",c>e&&(e=c)),e+=w,n!==e&&(u.style.height=e+"px",f&&i.callback.call(u,u))}function l(){clearTimeout(h),h=setTimeout(function(){var e=p.width();e!==g&&(g=e,r())},parseInt(i.resizeDelay,10))}var d,c,h,u=this,p=e(u),w=0,f=e.isFunction(i.callback),z={height:u.style.height,overflow:u.style.overflow,overflowY:u.style.overflowY,wordWrap:u.style.wordWrap,resize:u.style.resize},g=p.width();p.data("autosize")||(p.data("autosize",!0),("border-box"===p.css("box-sizing")||"border-box"===p.css("-moz-box-sizing")||"border-box"===p.css("-webkit-box-sizing"))&&(w=p.outerHeight()-p.height()),c=Math.max(parseInt(p.css("minHeight"),10)-w||0,p.height()),p.css({overflow:"hidden",overflowY:"hidden",wordWrap:"break-word",resize:"none"===p.css("resize")||"vertical"===p.css("resize")?"none":"horizontal"}),"onpropertychange"in u?"oninput"in u?p.on("input.autosize keyup.autosize",r):p.on("propertychange.autosize",function(){"value"===event.propertyName&&r()}):p.on("input.autosize",r),i.resizeDelay!==!1&&e(window).on("resize.autosize",l),p.on("autosize.resize",r),p.on("autosize.resizeIncludeStyle",function(){t=null,r()}),p.on("autosize.destroy",function(){t=null,clearTimeout(h),e(window).off("resize",l),p.off("autosize").off(".autosize").css(z).removeData("autosize")}),r())})):this}})(window.jQuery||window.$);

        var __slice=[].slice;(function(e,t){var n;n=function(){function t(t,n){var r,i,s,o=this;this.options=e.extend({},this.defaults,n);this.$el=t;s=this.defaults;for(r in s){i=s[r];if(this.$el.data(r)!=null){this.options[r]=this.$el.data(r)}}this.createStars();this.syncRating();this.$el.on("mouseover.starrr","span",function(e){return o.syncRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("mouseout.starrr",function(){return o.syncRating()});this.$el.on("click.starrr","span",function(e){return o.setRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("starrr:change",this.options.change)}t.prototype.defaults={rating:void 0,numStars:5,change:function(e,t){}};t.prototype.createStars=function(){var e,t,n;n=[];for(e=1,t=this.options.numStars;1<=t?e<=t:e>=t;1<=t?e++:e--){n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))}return n};t.prototype.setRating=function(e){if(this.options.rating===e){e=void 0}this.options.rating=e;this.syncRating();return this.$el.trigger("starrr:change",e)};t.prototype.syncRating=function(e){var t,n,r,i;e||(e=this.options.rating);if(e){for(t=n=0,i=e-1;0<=i?n<=i:n>=i;t=0<=i?++n:--n){this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass("glyphicon-star")}}if(e&&e<5){for(t=r=e;e<=4?r<=4:r>=4;t=e<=4?++r:--r){this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass("glyphicon-star-empty")}}if(!e){return this.$el.find("span").removeClass("glyphicon-star").addClass("glyphicon-star-empty")}};return t}();return e.fn.extend({starrr:function(){var t,r;r=arguments[0],t=2<=arguments.length?__slice.call(arguments,1):[];return this.each(function(){var i;i=e(this).data("star-rating");if(!i){e(this).data("star-rating",i=new n(e(this),r))}if(typeof r==="string"){return i[r].apply(i,t)}})}})})(window.jQuery,window);$(function(){return $(".starrr").starrr()})

        $(function(){

          $('#new-review').autosize({append: "\n"});

          var reviewBox = $('#post-review-box');
          var newReview = $('#new-review');
          var openReviewBtn = $('#open-review-box');
          var closeReviewBtn = $('#close-review-box');
          var ratingsField = $('#ratings-hidden');

          openReviewBtn.click(function(e)
          {
            reviewBox.slideDown(400, function()
              {
                $('#new-review').trigger('autosize.resize');
                newReview.focus();
              });
            openReviewBtn.fadeOut(100);
            closeReviewBtn.show();
          });

          closeReviewBtn.click(function(e)
          {
            e.preventDefault();
            reviewBox.slideUp(300, function()
              {
                newReview.focus();
                openReviewBtn.fadeIn(200);
              });
            closeReviewBtn.hide();
            
          });

          $('.starrr').on('starrr:change', function(e, value){
            ratingsField.val(value);
          });
        });
    </script>
    @endsection