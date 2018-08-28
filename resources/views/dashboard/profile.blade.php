@extends('layouts.dashboard_main')
@section('title')

    My Profile

@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" data-background-color="navy-blue">
                            <h4 class="title">Edit Profile</h4>
                            <p class="category">Complete your profile</p>
                        </div>
                        <div class="card-content">
                            <form action="{{route('profile.update')}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Full Name</label>
                                            <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Phone</label>
                                            <input type="text" name="phone" class="form-control" value="{{Auth::user()->phone}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email address</label>
                                            <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Address</label>
                                            <input type="text" name="address" class="form-control" value="{{Auth::user()->address}}" rows="5">
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <br>


                                <button type="submit" class="btn btn-default pull-right">Update Profile</button>
                                <div class="clearfix"></div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header" data-background-color="navy-blue">
                            <h4 class="title">Change Password</h4>
                            <p class="category">Update profile password</p>
                        </div>
                        <div class="card-content">

                            <form action="{{route('change.password')}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Old Password</label>
                                        <input type="password" name="password_old" class="form-control" >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group label-floating">
                                        <label class="control-label">New Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Confirm New Password</label>
                                        <input type="password" name="password_confirmation" class="form-control">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-default pull-right">Update Password</button>
                                <div class="clearfix"></div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection