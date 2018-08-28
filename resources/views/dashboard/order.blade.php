@extends('layouts.dashboard_main')
@section('title')

    My Orders

@endsection

@section('content')


    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="navy-blue">
                            <h4 class="title">My Orders</h4>
                            <p class="category">Showing list of orders</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                <th>S/N</th>
                                <th>Reference</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Date</th>
                                </thead>
                                <tbody>
                                @if($order->count() == 0)
                                    <tr><td colspan="9">
                                    No Order Record Found...</td></tr>
                                @else

                                    @foreach($order as $key =>$order_detail)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$order_detail->reference}}</td>
                                            <td>₦{{number_format($order_detail->amount)}}</td>
                                            <td>{{ ($order_detail->status = 'pending') ? 'Pending' : 'Paid'}}</td>
                                            <td>{{$order_detail->name}}</td>
                                            <td>{{$order_detail->address}}</td>
                                            <td>{{$order_detail->phone}}</td>
                                            <td>{{$order_detail->email}}</td>
                                            <td>{{$order_detail->created_at->toDayDateTimeString()}}</td>
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


@endsection