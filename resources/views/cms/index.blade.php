@extends('layouts.admin_main')

@section('content')





    <div class="container-fluid page-content">



            <div class="row p-t-40">

                <div class="col-md-12">

                    <div class="card card-inverse card-flat border-none">

                        <div class="card-block p-b-10">

                            <div class="row p-t-10 p-b-15">



                                <!-- Leads -->

                                <div class="col-lg-3 col-sm-6 text-danger-a300 p-l-30 p-r-40 mb-5 mb-sm-5 mb-lg-0 br-grey-100 br-lg br-dashed no-b-xs">

                                    <div class="row">

                                        <div class="col-md-8 col-8">

                                            <h4 class="text-uppercase text-muted no-m">Users</h4>

                                            <div class="x3 no-p no-m m-t-10 m-b-10">{{$users->count()}} <i class="icon-arrow-up16 text-success text-size-large"></i></div>

                                        </div>

                                        <div class="col-md-4 col-4 no-p text-right">

                                            <i class="icon-users2 x6 text-grey-100 m-t-15"></i>

                                        </div>

                                    </div>

                                    <div id="leads"></div>

                                </div>

                                <!-- /Leads -->



                                <!-- Payments -->

                                <div class="col-lg-3 col-sm-6 text-success-a300 p-l-30 p-r-40 mb-5 mb-sm-5 mb-lg-0 br-grey-100 br-lg br-dashed no-b-xs no-b-sm">

                                    <div class="row">

                                        <div class="col-md-8 col-8">

                                            <h4 class="text-uppercase text-muted no-m">Payment</h4>

                                            <div class="x3 no-p no-m m-t-10 m-b-10">₦{{number_format($sales->sum('amount'))}}</div>

                                        </div>

                                        <div class="col-md-4 col-4 no-p text-right">

                                            <i class="icon-coin-dollar x6 text-grey-100 m-t-15"></i>

                                        </div>

                                    </div>

                                    <div id="payment"></div>

                                </div>

                                <!-- /Payments -->



                                <!-- Sales -->

                                <div class="col-lg-3 col-sm-6 text-info p-l-30 p-r-40 mb-5 mb-sm-0 br-grey-100 br-lg br-dashed no-b-xs">

                                    <div class="row">

                                        <div class="col-md-8 col-8">

                                            <h4 class="text-uppercase text-muted no-m">Sales</h4>

                                            <div class="x3 no-p no-m m-t-10 m-b-10">{{$sales->count()}} <i class="icon-arrow-down16 text-danger text-size-large"></i></div>

                                        </div>

                                        <div class="col-md-4 col-4 no-p text-right">

                                            <i class="icon-price-tags x6 text-grey-100 m-t-15"></i>

                                        </div>

                                    </div>

                                    <div id="sales"></div>

                                </div>

                                <!-- /Sales -->



                                <!-- Orders -->

                                <div class="col-lg-3 col-sm-6 text-warning p-l-30 p-r-40">

                                    <div class="row">

                                        <div class="col-md-8 col-8">

                                            <h4 class="text-uppercase text-muted no-m">Orders</h4>

                                            <div class="x3 no-p no-m m-t-10 m-b-10">{{$orders->count()}} <i class="icon-arrow-up16 text-success text-size-large"></i></div>

                                        </div>

                                        <div class="col-md-4 col-4 no-p text-right">

                                            <i class="icon-cart2 x6 text-grey-100 m-t-15"></i>

                                        </div>

                                    </div>

                                    <div id="orders"></div>

                                </div>

                                <!-- /Orders -->



                            </div>

                        </div>

                    </div>

                </div>

            </div>







            <div class="row">



                <!-- Recent Activities -->

                <div class="col-lg-3">

                    <div class="card card-inverse card-flat">

                        <div class="card-header">

                            <h5 class="card-title">

                                Recent Activities

                            </h5>

                        </div>

                        <div class="card-block p-l-20 p-b-20">

                            <div class="streamline">

                                <div class="sl-item sl-primary">

                                    <div class="sl-content">

                                        <small class="text-muted"><i class="icon-user-plus position-left"></i>2 mins ago</small>

                                        <p>Jane Elliott added a new friend.</p>

                                    </div>

                                </div>



                                <div class="sl-item sl-danger">

                                    <div class="sl-content">

                                        <small class="text-muted"><i class="icon-pencil5 position-left"></i>10 mins ago</small>

                                        <p>Florence Douglas posted on your timeline.</p>

                                    </div>

                                </div>



                                <div class="sl-item sl-success">

                                    <div class="sl-content">

                                        <small class="text-muted"><i class="icon-user position-left"></i>14 mins ago</small>

                                        <p>Jacqueline Howell sent you a friend request.</p>

                                    </div>

                                </div>



                                <div class="sl-item sl-warning">

                                    <div class="sl-content">

                                        <small class="text-muted"><i class="icon-calendar position-left"></i>20 mins ago</small>

                                        <p>Sara has invited you for an event.</p>

                                    </div>

                                </div>



                                <div class="sl-item sl-primary">

                                    <div class="sl-content">

                                        <small class="text-muted"><i class="icon-user-plus position-left"></i>1 day ago</small>

                                        <p>Ann Porter added a new friend.</p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- /Recent Activities -->



                <!-- Recent Comments -->

                <div class="col-lg-4">

                    <div class="card card-inverse card-flat">

                        <div class="card-header p-b-5">

                            <h5 class="card-title">

                                Recent Comments

                            </h5>

                        </div>



                        <ul class="media-list media-list-linked">

                            <li class="media bg-light-lighter">

                                <a href="#" class="media-link">

                                    <div class="media-left">

                                        <img src="img/demo/img1.jpg" class="rounded-circle" alt="">

                                    </div>



                                    <div class="media-body">

                                        <h6 class="media-heading">Jane Elliott <span class="media-annotation">4 hours ago</span></h6>

                                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.

                                    </div>

                                </a>

                            </li>



                            <li class="media">

                                <a href="#" class="media-link">

                                    <div class="media-left">

                                        <img src="img/demo/img2.jpg" class="rounded-circle" alt="">

                                    </div>



                                    <div class="media-body">

                                        <h6 class="media-heading">Florence Douglas <span class="media-annotation">3 hours ago</span></h6>

                                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. In enim justo, rhoncus ut.

                                    </div>

                                </a>

                            </li>



                            <li class="media bg-light-lighter">

                                <a href="#" class="media-link">

                                    <div class="media-left">

                                        <img src="img/demo/img3.jpg" class="rounded-circle" alt="">

                                    </div>



                                    <div class="media-body">

                                        <h6 class="media-heading">Jacqueline Howell <span class="media-annotation">2 hours ago</span></h6>

                                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum.

                                    </div>

                                </a>

                            </li>



                            <li class="media">

                                <a href="#" class="media-link">

                                    <div class="media-left">

                                        <img src="img/demo/img4.jpg" class="rounded-circle" alt="">

                                    </div>



                                    <div class="media-body">

                                        <h6 class="media-heading">Eugine Turner <span class="media-annotation">Yesterday, 14:54</span></h6>

                                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. In enim justo.

                                    </div>

                                </a>

                            </li>

                        </ul>

                    </div>

                </div>

                <!-- /Recent Comments -->



                <!-- Recent Leads -->

                <div class="col-lg-5">

                    <div class="card card-inverse card-flat">

                        <div class="card-header">

                            <h5 class="card-title">Recent leads</h5>

                        </div>

                        <div class="table-responsive">

                            <table class="table table-hover table-striped user-list">

                                <thead>

                                <tr>

                                    <th>ID</th>

                                    <th>Name</th>

                                    <th>Date</th>

                                    <th>Status</th>

                                    <th>Priority</th>

                                </tr>

                                </thead>

                                <tbody>

                                <tr>

                                    <td>1</td>

                                    <td>Jane Elliott</td>

                                    <td>Jun 14, 2016</td>

                                    <td><span class="badge badge-info">Opened</span></td>

                                    <td><span class="badge badge-danger">High</span></td>

                                </tr>



                                <tr>

                                    <td>2</td>

                                    <td>Florence Douglas</td>

                                    <td>Jun 14, 2016</td>

                                    <td><span class="badge badge-success">Closed</span></td>

                                    <td><span class="badge badge-success">Low</span></td>

                                </tr>



                                <tr>

                                    <td>3</td>

                                    <td>Jacqueline Howell</td>

                                    <td>Jun 14, 2016</td>

                                    <td><span class="badge badge-info">Opened</span></td>

                                    <td><span class="badge badge-warning">Medium</span></td>

                                </tr>



                                <tr>

                                    <td>4</td>

                                    <td>Eugine Turner</td>

                                    <td>Jun 13, 2016</td>

                                    <td><span class="badge badge-danger">Pending</span></td>

                                    <td><span class="badge badge-danger">High</span></td>

                                </tr>



                                <tr>

                                    <td>5</td>

                                    <td>Andrew Brewer</td>

                                    <td>Jun 14, 2016</td>

                                    <td><span class="badge badge-danger">Pending</span></td>

                                    <td><span class="badge badge-success">Low</span></td>

                                </tr>

                                <tr>

                                    <td>6</td>

                                    <td>Jonaly Smith</td>

                                    <td>Jun 12, 2016</td>

                                    <td><span class="badge badge-info">Opened</span></td>

                                    <td><span class="badge badge-success">Low</span></td>

                                </tr>

                                <tr>

                                    <td>7</td>

                                    <td>Ann Porter</td>

                                    <td>Jun 12, 2016</td>

                                    <td><span class="badge badge-info">Opened</span></td>

                                    <td><span class="badge badge-success">Low</span></td>

                                </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

                <!-- /Recent Leads -->

            </div>







        </div>



@endsection





@section('javascripts')

    <!-- Page scripts -->

    <script src="{{URL::to('cms_assets/lib/js/pages/forms/form_inputs_basic.js')}}"></script>

    <!-- /Page scripts -->



    {{--<script src="{{URL::to('cms_assets/lib/js/core/jquery/jquery.easing.min.js')}}"></script>--}}

    {{--<script src="{{URL::to('cms_assets/lib/js/charts/jquery.easypiechart.min.js')}}"></script>--}}

    {{--<script src="{{URL::to('cms_assets/lib/js/charts/raphael-min.js')}}"></script>--}}

    {{--<script src="{{URL::to('cms_assets/lib/js/charts/morris.min.js')}}"></script>--}}

    {{--<script src="{{URL::to('cms_assets/lib/js/charts/highcharts.js')}}"></script>--}}

    {{--<script src="{{URL::to('cms_assets/lib/js/charts/highcharts-more.js')}}"></script>--}}

    {{--<script src="{{URL::to('cms_assets/lib/js/maps/jvectormap/jvectormap.min.js')}}"></script>--}}

    {{--<script src="{{URL::to('cms_assets/lib/js/maps/jvectormap/map_files/world.js')}}"></script>--}}

    {{--<script src="{{URL::to('cms_assets/lib/js/pages/dashboard.js')}}"></script>--}}

@endsection