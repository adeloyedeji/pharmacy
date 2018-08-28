<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display all Cart Content.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart(){

        return view('cart');

    }


    /**
     * Add product to cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request, $id){

        $product = Product::find($id);

        $cart_item = Cart::add([
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->price,
            'qty' => 1,
            'picture' => $product->small1,

        ]);

        Cart::associate($cart_item->rowId, 'App\Product');

        Session::flash('success', 'Added to Cart');

        return redirect()->route('cart');

    }

    /**
     * Remove product from cart.
     *
     * @return \Illuminate\Http\Response
     */

    public function cartDelete($id){

        Cart::remove($id);

        Session::flash('success', 'Product Removed From Cart');

        return redirect()->back();

    }

    /**
     * Display Checkout Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout(){

        return view('checkout');

    }


}
