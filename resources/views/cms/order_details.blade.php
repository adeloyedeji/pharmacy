@extends('layouts.admin_main')
@section('content')



    <!-- Page header -->
    <div class="header">
        <div class="header-content">
            <div class="page-title">
                <i class="icon-cart2 position-left"></i> Order Details
            </div>
            <ul class="breadcrumb">
                <li><a href="index.html"></a></li>
                <li>Order</li>
                <li class="active">Order Details</li>
            </ul>
        </div>
    </div>
    <!-- /Page header -->

    <div class="container-fluid page-content">

        <!-- Products summary -->
        <div class="page-subtitle">Order Summary</div>

        <div class="card card-inverse card-flat table-responsive">
            <table class="table table-lg table-bordered">
                <thead>
                <tr>
                    <th style="width:100px;">Image</th>
                    <th>Product Info</th>
                    <th style="width:100px;">Quantity</th>
                    <th style="width:100px;">Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                    <td><img src="{{URL::to($product->model->image1)}}" class="img-fluid" alt="product" style="width:70px"/></td>
                    <td>
                        <h4>{{$product->name}}</h4>
                        <p>{{$product->model->overview}}</p>
                    </td>
                    <td class="text-center">{{$product->qty}}</td>
                    <td><h3 class="text-semibold text-right">₦{{number_format($product->price)}}</h3></td>
                </tr>
                @endforeach

                <tr>
                    <td colspan="3"><div class="x4 text-light text-right">Total</div></td>
                    <td><div class="x4 text-light text-right">₦{{number_format($order->amount)}}</div></td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /Products summary -->

        <!-- Payment method -->
        <div class="page-subtitle">Process Order</div>

        <div class="card card-inverse card-flat">
            <div class="card-block">
                <div class="tabbable nav-tabs-vertical nav-tabs-left">
                    <ul class="nav nav-tabs nav-tabs-highlight nav-lg" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#net" role="tab"><i class="icon-wallet position-left"></i> Details</a>
                        </li>

                    </ul>



                    <div class="tab-content">
                        <div class="tab-pane active has-padding" id="net" role="tabpanel">
                            <form action="{{route('process.order', $order->id)}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 p-l-30 p-b-30">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="text-uppercase text-semibold x1">Payment Status</label>
                                                <div class="form-group row">
                                                    <div class="col-lg-9">
                                                        <select name="payment_status" class="form-control" {{$order->status == 'Paid' ? 'disabled' : ''}}>
                                                            <option value="Unpaid">Unpaid</option>
                                                            <option value="Paid" {{$order->status == 'Paid' ? 'selected' : ''}}>Paid</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row m-t-20">
                                            <div class="col-md-12">
                                                <!-- Left inline styled -->
                                                <div class="card card-inverse card-flat">
                                                    <div class="card-header">
                                                        <div class="card-title text-semibold x1">
                                                            Delivery Status
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="delivery_status" value="0" class="styled" {{!$order->delivery_status ? 'checked="checked"' : 'disabled'}}>
                                                            Undelivered
                                                        </label>

                                                        <label class="radio-inline">
                                                            <input type="radio" name="delivery_status" value="1" class="styled" {{$order->delivery_status ? 'checked="checked"' : ''}}>
                                                            Delivered
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- /Left inline styled -->
                                            </div>

                                        </div>



                                        <div class="row m-t-20">
                                            <div class="col-md-12">
                                                <input type="submit" value="Process Order" class="btn bg-danger-600 btn-lg float-right">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>

                                    </div>
                                    <div class="col-md-3 col-sm-3 p-l-40 p-r-0">
                                        <h4 class="text-semibold text-uppercase no-mt">Instruction</h4>
                                        <p>When Processing an order make sure to mark as paid and delivered,in the case of pay on pickup. </p>
                                    </div>
                                </div>
                            </form>

                        </div>



                    </div>
                </div>
            </div>
        </div>
        <!-- /Payment method -->

    </div>
@endsection