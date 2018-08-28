<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    // Displays all the order on the system.

    public function allOrders()
    {
        $orders = Order::latest()->get();

        return view('cms.orders', compact('orders'));
    }

    // Displays all orders that are yet to be delivered.

    public function pendingOrders()
    {
        $orders = Order::where('delivery_status', false)->latest()->get();

        return view('cms.orders', compact('orders'));
    }

    // Displays all orders that has been paid for and delivered.

    public function deliveredOrders()
    {
        $orders = Order::where('delivery_status', true)->latest()->get();

        return view('cms.orders', compact('orders'));
    }

    // Displays the order details for an admin

    public function orderDetails($id)
    {
        $order = Order::where('id', $id)->first();

        $products = unserialize($order->cart);

        return view('cms.order_details', compact('products', 'order'));

    }

    /*
     * Allows admin to mark an order as delivered and or paid.
     *
     */

    public function processOrder(Request $request, $id)
    {
        $order = $order = Order::where('id', $id)->first();

        $order->delivery_status = $request->delivery_status;
        $order->status = $request->payment_status;

        $order->save();

        Session::flash('success', 'Order Processed Successfully');
        return redirect()->back();
    }
}
