@extends('layouts.admin_main')
@section('content')



    <!-- Page header -->
    <div class="header">
        <div class="header-content">
            <div class="page-title">
                <i class="icon-select2 position-left"></i> Blog Management
            </div>
            <ul class="breadcrumb">
                <li><a href=""></a></li>
                <li>Product</li>
                <li class="active">Edit Post</li>
            </ul>
        </div>
    </div>
    <!-- /Page header -->

    <div class="container-fluid page-content">

        <div class="row">
            <div class="col-md-12 col-sm-12">

                <!-- Basic inputs -->
                <div class="card card-inverse">
                    <div class="card-header">
                        <div class="card-title">Edit Post</div>
                    </div>
                    <div class="card-block">
                        <form action="{{route('blog.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-group row">
                                <label class="control-label col-lg-3">Post Title</label>
                                <div class="col-lg-9">
                                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                                </div>
                            </div>






                            <div class="form-group row pb-10">
                                <label class="control-label col-lg-3">Post Details</label>
                                <div class="col-lg-9">
                                    <textarea rows="3" id="editor1" name="description" cols="5" class="form-control" placeholder="Product Full description">{{ $post->description}}</textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-lg-3">Post Image</label>
                                <div class="col-lg-9">
                                    <input type="file" name="image" class="file-styled-basic">
                                </div>
                            </div>


                            <div class="card-block">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Basic inputs -->



            </div>


        </div>


    </div>

@endsection

@section('javascripts')
    <!-- Page scripts -->
    <script src="{{URL::to('cms_assets/lib/js/pages/forms/form_inputs_basic.js')}}"></script>
    <!-- /Page scripts -->
@endsection