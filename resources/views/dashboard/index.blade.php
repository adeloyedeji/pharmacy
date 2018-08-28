@extends('layouts.dashboard_main')
@section('title')

    Dashboard

@endsection

@section('content')


    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">shopping_basket</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Orders</p>
                                    <h3 class="title">{{$orderNumber}}

                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_grocery_store</i>
                                        <a href="/dashboard/orders">view all orders</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="navy-blue">
                                    <i class="material-icons">account_balance_wallet</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Wallet Balance</p>
                                    <h3 class="title">₦{{number_format(Auth::user()->wallet->balance)}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">store</i>
                                        <a href="#" data-toggle="modal" data-target="#exampleModal">Fund Wallet</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">local_pharmacy</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Prescriptions</p>
                                    <h3 class="title">{{count(Auth::user()->prescriptions()->get())}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_hospital</i>
                                        <a href="/dashboard/prescription">view all prescriptions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="navy-blue">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Pending Orders</p>
                                    <h3 class="title">{{count(Auth::user()->orders()->where('status','Unpaid')->get())}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">store</i>
                                        <a href="/dashboard/orders">view all pending order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="navy-blue">
                                    <h4 class="title">Recent Orders</h4>
                                    <p class="category">Showing last 4 Orders</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                        <th>S/N</th>
                                        <th>Order Ref</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        </thead>
                                        <tbody>

                                        @foreach($orders as $key => $order)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td><a href="{{route('user.orderDetails', $order->id)}}">{{$order->reference}}</a> </td>
                                            <td>₦{{number_format($order->amount)}}</td>
                                            <td>{{$order->created_at->toDateTimeString()}}</td>
                                            <td>{{$order->status}}</td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Recent Wallet Activity</h4>
                                    <p class="category">Showing last 4 Wallet Transaction</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                        <th>S/N</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        </thead>
                                        <tbody>
                                        @foreach($wallet_transactions as $key =>$wallet_transaction)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$wallet_transaction->type}}</td>
                                            <td>₦{{number_format($wallet_transaction->amount)}}</td>
                                            <td>{{$wallet_transaction->created_at->toDayDateTimeString()}}</td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    @include('partials.funding_modal')



@endsection

@section('javascripts')

@endsection