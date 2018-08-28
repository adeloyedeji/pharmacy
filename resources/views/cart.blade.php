@extends('layouts.main')
@section('title')
    Cart
@endsection
@section('content')

    <!-- Cart area Start -->
    <div class="main_cart_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="main_cart">
                        <div class="cart_heading_top">
                            <h2>Shopping-cart summary
                                <span> Your shopping cart contains:<span>{{Cart::count()}} products</span> </span>
                            </h2>
                        </div>
                    </div>
                    <div class="wishlist-content cart-arae ">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(Cart::content() as $cart)
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="{{$cart->model->small1}}" alt="" /></a></td>
                                        <td class="product-name"><a href="#">{{$cart->name}}</a></td>
                                        <td class="product-price"><span class="amount">₦{{number_format($cart->price)}}</span></td>
                                        <td class="product-quantity"><input type="number" value="1" /></td>
                                        <td class="product-subtotal">₦{{Cart::subtotal()}}</td>
                                        <td class="product-remove"><a href="{{route('cart.delete', ['id' =>$cart->rowId])}}"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </form>
                        <div class="col-md-8 col-sm-7 col-md-offset-2">
                            <div class="buttons-cart">
                                <a class="pull-left" href="{{route('index')}}">Continue Shopping </a>

                                <a class="pull-right" href="{{route('checkout')}}">Proceed to checkout</a>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <!-- Cart area End -->

@endsection