@extends('layouts.dashboard_main')
@section('title')

    My Prescriptions

@endsection

@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="navy-blue">
                            <i class="material-icons">local_pharmacy</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Cleared Prescriptions</p>
                            <h3 class="title">{{$prescriptions->count()}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_pharmacy</i>
                                <a href="{{route('prescription.create')}}">Request Prescription</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="red">
                            <i class="material-icons">local_pharmacy</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Pending Prescriptions</p>
                            <h3 class="title">{{$pending_prescriptions->count()}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_pharmacy</i>
                                <a href="#pablo">view all prescriptions</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="navy-blue">
                            <h4 class="title">Recent Pending Prescriptions</h4>
                            <p class="category">Showing last 4 pending Prescriptions</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                <th>S/N</th>
                                <th>Title</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Date</th>
                                </thead>
                                <tbody>
                                @if($prescriptions->count() == 0)
                                    <tr><td>No Prescription Record Found...</td></tr>
                                @else

                                    @foreach($prescriptions as $key =>$prescription)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$prescription->title}}</td>
                                            <td>₦{{number_format($prescription->amount)}}</td>
                                            <td>{{ !$prescription->pharm_response ? 'Pending' : 'Done'}}</td>
                                            <td>{{$prescription->created_at->toDayDateTimeString()}}</td>
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
                                <th>Title</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Date</th>
                                </thead>
                                <tbody>

                                @if($pending_prescriptions->count() == 0)
                                    <tr><td>No pending prescription Record Found...</td></tr>
                                @else

                                    @foreach($pending_prescriptions as $key =>$pending_prescription)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$pending_prescription->title}}</td>
                                            <td>₦{{number_format($pending_prescription->amount)}}</td>
                                            <td>{{ !$pending_prescription->pharm_response ? 'Pending' : 'Done'}}</td>
                                            <td>{{$pending_prescription->created_at->toDayDateTimeString()}}</td>
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