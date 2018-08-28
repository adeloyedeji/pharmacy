@extends('layouts.admin_main')
@section('content')


    <!--Page Header-->
    <div class="header">
        <div class="header-content">
            <div class="page-title">
                <i class="icon-table2 position-left"></i> Manage Orders
            </div>
            <ul class="breadcrumb">
                <li><a href="index.html"></a></li>
                <li>Orders</li>
                <li class="active">All Orders</li>
            </ul>
        </div>
    </div>
    <!--/Page Header-->

    <div class="container-fluid page-content">

        <!-- Individual column searching (text fields) -->
        <div class="card card-inverse card-flat table-responsive">

            <table class="table datatable datatable-column-search-inputs">

                <col width="10">
                <col width="300">
                <thead>
                <tr>
                    <th class="no-m">#</th>
                    <th colspan="">Reference</th>
                    <th colspan="">Amount</th>
                    <th>Order date</th>
                    <th>Payment Method</th>
                    <th>Delivery Status</th>

                    <th>Payment Status</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $key =>$order)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$order->reference}}</td>

                        <td>
                            ₦{{number_format($order->amount)}}
                        </td>

                        <td>
                            {{$order->created_at->toDayDateTimeString()}}
                        </td>

                        <td>
                            <span class="badge {{$order->payment_type == 'On Pickup' ? 'badge-warning' : 'badge-default'}} ">{{$order->payment_type}}</span>
                        </td>


                        <td>
                            <span class="badge {{$order->delivery_status ? 'badge-default' : 'badge-danger'}} ">{{$order->delivery_status ? 'Delivered' : 'Undelivered'}}</span>
                        </td>


                        <td>
                            @if($order->status == 'Paid')
                                <span class="badge badge-success">Paid</span>
                            @else
                                <span class="badge badge-danger">Unpaid</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li><a href="{{route('order.details', $order->id)}}"><i class="icon-eye2"></i></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-download2"></i> Download</a>
                                        <a href="#" class="dropdown-item"><i class="icon-printer2"></i> Print</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{route('product.edit', $order->id)}}" class="dropdown-item"><i class="icon-pencil6"></i> Edit</a>
                                        <a href="{{route('product.delete', $order->id)}}" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>

                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <td>#</td>
                    <td>Period</td>
                    <td>Issue date</td>
                    <td>Due Date</td>
                    <td></td>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /Individual column searching (text fields) -->


    </div>

@endsection

@section('javascripts')
    <script src="{{URL::to('cms_assets/lib/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script src="{{URL::to('cms_assets/lib/js/pages/tables/datatable_advanced.js')}}"></script>
@endsection