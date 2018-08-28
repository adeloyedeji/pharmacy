@extends('layouts.main')
@section('styles')
    <style>
        a:hover,a:focus{
            outline: none;
            text-decoration: none;
        }
        .tab{ text-align: center; }
        .tab .nav-tabs{
            display: inline-block;
            border-bottom: none;
            position: relative;
        }
        .tab .nav-tabs li{
            margin-bottom: 0;
        }
        .tab .nav-tabs li a{
            display: block;
            padding: 20px;
            border: none;
            border-radius: 0;
            font-size: 17px;
            font-weight: 700;
            color: #444;
            margin-right: 0;
            text-align: center;
            z-index: 1;
            transition: all 0.3s ease 0s;
        }
        .tab .nav-tabs li a i{
            display: block;
            font-size: 40px;
            color: #08385e;
            margin-bottom: 15px;
        }
        .tab .nav-tabs li.active a,
        .tab .nav-tabs li a:hover{
            border: none;
            background: transparent;
        }
        .tab .nav-tabs li a:before,
        .tab .nav-tabs li a:after{
            content: "";
            width: 0;
            border-top: 3px solid #00a6ff;
            position: absolute;
            bottom: -1px;
            left: 0;
            transition: all 0.3s ease 0s;
        }
        .tab .nav-tabs li a:after{
            left: auto;
            right: 0;
        }
        .tab .nav-tabs li.active a:before,
        .tab .nav-tabs li a:hover:before,
        .tab .nav-tabs li.active a:after,
        .tab .nav-tabs li a:hover:after{
            width: 50%;
        }
        .tab .tab-content{
            padding: 20px;
            margin-top: -5px;
            border-radius: 0 0 5px 5px;
            border-top: 1px solid #d7d6d6;
            font-size: 15px;
            color: #757575;
            line-height: 30px;
        }
        .tab .tab-content h3{
            font-size: 24px;
            margin-top: 0;
        }
        @media only screen and (max-width: 479px){
            .tab .nav-tabs li{
                width: 100%;
                text-align: center;
                margin-bottom: 5px;
            }
            .tab .nav-tabs li a,
            .tab .nav-tabs li a:hover{ border-bottom: 1px solid #dfdfdf; }
            .tab .tab-content{ border-top: none; }
        }

    </style>
@endsection
@section('title')
    Checkout
@endsection
@section('content')

    <!--CHECKOUT AREA START-->
    <section class="checkout-area  pad-bottom">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-credit-card"></i> Pay With Wallet</a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-cc-visa"></i> Pay With Card</a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-clock-o"></i> Pay On Pickup</a></li>
                            <li role="presentation"><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-truck"></i> Pay On Delivery</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{route('checkout.wallet')}}" method="post" class="form-horizontal">
                                    {{csrf_field()}}

                                    <br>
                                    <div class="payment-new">
                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md-2 control-label">Name</label>
                                            <div class="col-sm-10 col-md-10">
                                                <input type="text" name="name"  placeholder="Full Name" class="form-control">
                                                <input type="hidden" name="amount"  value="{{Cart::total()}}" class="form-control">

                                            </div>
                                        </div>

                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md-2 control-label">Address</label>
                                            <div class="col-sm-10 col-md-10">
                                                <input type="text" name="address" placeholder="111 Ahmedu Bello WAY, Abuja." class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md-2 control-label">Email</label>
                                            <div class="col-sm-10 col-md-10">
                                                <input type="email" name="email"  placeholder="example@mail.com" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md-2 control-label">Phone</label>
                                            <div class="col-sm-10 col-md-10">
                                                <input type="text" name="phone" placeholder="080333444111" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="buttons clearfix">
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary" {{Cart::total() <= 0 ? 'disabled' : ''}}> Make Payment </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section2">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{route('pay')}}" method="post" class="form-horizontal">
                                    {{csrf_field()}}

                                    <br>
                                    <div class="payment-new">
                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md-2 control-label">Name</label>
                                            <div class="col-sm-10 col-md-10">
                                                <input type="text" name="name"  placeholder="Full Name" class="form-control">
                                                <input type="hidden" name="amount"  value="{{Cart::total()}}" class="form-control">
                                                <input type="hidden" name="type"  value="card" class="form-control">


                                            </div>
                                        </div>

                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md-2 control-label">Address</label>
                                            <div class="col-sm-10 col-md-10">
                                                <input type="text" name="address" placeholder="111 Ahmedu Bello WAY, Abuja." class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md-2 control-label">Email</label>
                                            <div class="col-sm-10 col-md-10">
                                                <input type="email" name="email"  placeholder="example@mail.com" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md-2 control-label">Phone</label>
                                            <div class="col-sm-10 col-md-10">
                                                <input type="text" name="phone" placeholder="080333444111" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="buttons clearfix">
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary" {{Cart::total() <= 0 ? 'disabled' : ''}}> Make Payment </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section3">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form class="form-horizontal"method="POST" action="{{route('pay.onPickup')}}">
                                    {{csrf_field()}}

                                    <br>
                                    <div class="payment-new">
                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md- control-label">Name</label>
                                            <div class="col-sm-10 col-md-10">
                                                <input type="text" name="name"  placeholder="Full Name" class="form-control">
                                                <input type="hidden" name="amount"  value="{{Cart::total()}}" class="form-control">

                                            </div>
                                        </div>

                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md- control-label">Date/Time</label>

                                            <div class="col-sm-10 col-md-5">

                                                <input type="date" name="date" placeholder="111 Ahmedu Bello WAY, Abuja." class="form-control">
                                            </div>

                                            <div class="col-sm-10 col-md-5">

                                                <input type="time" name="time" placeholder="111 Ahmedu Bello WAY, Abuja." class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md-2 control-label">Email</label>
                                            <div class="col-sm-10 col-md-10">
                                                <input type="email" name="email"  placeholder="example@mail.com" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md-2 control-label">Phone</label>
                                            <div class="col-sm-10 col-md-10">
                                                <input type="text" name="phone" placeholder="080333444111" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="buttons clearfix">
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary"> Make Payment </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section4">
                                <h3>Section 3</h3>
                                <form class="form-horizontal">

                                    <br>
                                    <div class="payment-new">
                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md-2 control-label">Name</label>
                                            <div class="col-sm-10 col-md-10">
                                                <input type="text" name="name"  placeholder="Firstname Lastname" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md-2 control-label">Address</label>
                                            <div class="col-sm-10 col-md-10">
                                                <input type="text" name="address" placeholder="111 Ahmedu Bello WAY, Abuja." class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md-2 control-label">Email</label>
                                            <div class="col-sm-10 col-md-10">
                                                <input type="email" name="email"  placeholder="example@mail.com" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 col-md-2 control-label">Phone</label>
                                            <div class="col-sm-10 col-md-10">
                                                <input type="text" name="phone" placeholder="080333444111" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="buttons clearfix">
                                        <div class="pull-right">
                                            <a href class="btn btn-primary"> Make Payment </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5">
                    <br><br><br><br>
                    <div class="cart_totals ">
                        <h2>Cart Totals</h2>
                        <table>
                            <tbody>
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td>
                                    <span class="amount">₦{{number_format(Cart::total())}}</span>
                                </td>
                            </tr>
                            <tr class="shipping">
                                <th>Shipping</th>
                                <td>
                                    <ul id="shipping_method">
                                        <li>
                                            <input class="shipping_method" checked="checked" type="radio" value="flat_rate">
                                            <label>
                                                Flat Rate:
                                                <span class="amount">₦ 0.00</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="shipping_method" type="radio" value="free_shipping">
                                            <label>Free Shipping</label>
                                        </li>
                                    </ul>
                                    <p>
                                        <a class="shipping-calculator-button" href="#">Calculate Shipping</a>
                                    </p>
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th>Total</th>
                                <td>
                                    <strong>
                                        <span class="amount">₦{{number_format(Cart::total())}}</span>
                                    </strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CHECKOUT AREA END-->

@endsection