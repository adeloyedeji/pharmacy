@extends('layouts.dashboard_main')
@section('title')

    My Wallet

@endsection

@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
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
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="red">
                            <i class="material-icons">account_balance_wallet</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Total Debit</p>
                            <h3 class="title">₦{{number_format($total_debit)}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">account_balance_wallet</i>
                                <a href="#pablo">view all prescriptions</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="navy-blue">
                            <i class="material-icons">account_balance_wallet</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Total Credit</p>
                            <h3 class="title">₦{{number_format($total_credit)}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">account_balance_wallet</i>
                                <a href="#pablo">view all pending order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="navy-blue">
                            <h4 class="title">Recent Credit Wallet Activity</h4>
                            <p class="category">Showing last 4 Credit Wallet Transaction</p>
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
                                @if($credit_wallet_transactions->count() == 0)
                                    <tr><td>No Wallet Credit Record Found...</td></tr>
                                @else

                                @foreach($credit_wallet_transactions as $key =>$credit_wallet_transaction)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$credit_wallet_transaction->type}}</td>
                                        <td>₦{{number_format($credit_wallet_transaction->amount)}}</td>
                                        <td>{{$credit_wallet_transaction->created_at->toDayDateTimeString()}}</td>
                                    </tr>
                                @endforeach

                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="red">
                            <h4 class="title">Recent Debit Wallet Activity</h4>
                            <p class="category">Showing last 4 Debit Wallet Transaction</p>
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

                                @if($debit_wallet_transactions->count() == 0)
                                    <tr><td>No Wallet Debit Record Found...</td></tr>
                                @else

                                @foreach($debit_wallet_transactions as $key =>$debit_wallet_transaction)
                                    <tr>

                                        <td>{{++$key}}</td>
                                        <td>{{$debit_wallet_transaction->type}}</td>
                                        <td>₦{{number_format($debit_wallet_transaction->amount)}}</td>
                                        <td>{{$debit_wallet_transaction->created_at->toDayDateTimeString()}}</td>

                                    </tr>
                                @endforeach
                                @endif

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