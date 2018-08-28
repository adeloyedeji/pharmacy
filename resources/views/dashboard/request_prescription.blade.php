@extends('layouts.dashboard_main')
@section('title')

    Request Prescription

@endsection

@section('content')

    <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header" data-background-color="navy-blue">
                        <h4 class="title">Request Prescription</h4>
                        <p class="category">Fill the form to request a medical Prescription</p>
                    </div>
                    <div class="card-content">
                        <form method="post" action="{{route('prescription.store')}}">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Full Name</label>
                                        <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Phone</label>
                                        <input type="text" name="phone" value="{{Auth::user()->phone}}" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email</label>
                                        <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Age</label>
                                        <input type="text" name="age" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Details</label>
                                        <div class="form-group label-floating">
                                            <label class="control-label"> Decription of symptoms, request are needed.</label>
                                            <textarea name="description" class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default pull-right">Request</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection