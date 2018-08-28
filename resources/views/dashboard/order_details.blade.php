@extends('layouts.dashboard_main')
@section('title')

    Order Details

@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="navy-blue">
                            <h4 class="title">Order Details</h4>
                            <p class="category">Products in your order.</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                </thead>
                                <tbody>

                                @foreach($products as $product)
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->qty}}</td>
                                    <td>₦{{number_format($product->price)}}</td>
                                </tr>
                                @endforeach

                                <tr>
                                    <td colspan="2"><div class="x4 text-light text-right">Total</div></td>
                                    <td><div class="x4 text-light text-left">₦{{number_format($order->amount)}}</div></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-content table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                            <th>Date Ordered</th>
                            <th>Payment Status</th>
                            <th>Payment Method</th>
                            <th>Delivery Status</th>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>{{$order->created_at->toDayDateTimeString()}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>{{$order->payment_type}}</td>
                                    <td>{{$order->delivery_status ? 'Delivered' : 'Undelivered'}}</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>

@endsection