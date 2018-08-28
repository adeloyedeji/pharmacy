@extends('layouts.admin_main')
@section('content')

<?php print_r('yes');die;?>

    <!-- Page header -->
    <div class="header">
        <div class="header-content">
            <div class="page-title">
                <i class="icon-select2 position-left"></i> Product Management
            </div>
            <ul class="breadcrumb">
                <li><a href=""></a></li>
                <li>Product</li>
                <li class="active">Edit Product</li>
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
                        <div class="card-title">Create Product</div>
                    </div>
                    <div class="card-block">
                        <form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-group row">
                                <label class="control-label col-lg-3">Product Title</label>
                                <div class="col-lg-9">
                                    <input type="text" name="title" class="form-control" value="{{$product->title}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-lg-3">Product Price</label>
                                <div class="col-lg-6">
                                    <input type="number" name="price" class="form-control" value="{{$product->price}}">
                                </div>

                                <div class="col-lg-3">
                                    <select  name="unit" class="form-control">
                                        <option value="" {{$product->unit == "" ? 'selected' : ''}}>None</option>
                                        <option value="Card" {{$product->unit == "Card" ? 'selected' : ''}}>Per Card</option>

                                    </select>
                                </div>



                            </div>




                            <div class="form-group row">
                                <label class="control-label col-lg-3">Product Category</label>
                                <div class="col-md-4">
                                    <select id="category" name="category" class="form-control" onchange="fetch_select();">
                                        <option value="">Select Category</option>

                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" >{{$category->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-lg-3">SubCategory</label>
                                <div class="col-md-4">
                                    <select id="subcategory" name="subcategory" class="form-control" disabled>
                                        <option value="">Select Subcategory</option>


                                    </select>
                                </div>
                            </div>
			                            <div class="form-group row">
                                <label class="control-label col-lg-3">Product Stock</label>
                                @if($stock != null)
                                <div class="col-lg-4">
                                    <input type="number" name="stock" class="form-control" value="{{$stock->product_count}}">
                                </div>
                                @else
                                <div class="col-lg-4">
                                    <input type="number" name="stock" class="form-control" value="">
                                </div>
                                @endif
                            </div>


                            <div class="form-group row pb-10">
                                <label class="control-label col-lg-3">Product Overview</label>
                                <div class="col-lg-9">
                                    <textarea rows="3" name="overview" cols="5" class="form-control" placeholder="Short description">{{$product->overview}}</textarea>
                                </div>
                            </div>




                            <div class="form-group row pb-10">
                                <label class="control-label col-lg-3">Product Description</label>
                                <div class="col-lg-9">
                                    <textarea rows="3" id="editor1" name="description" cols="5" class="form-control" placeholder="Product Full description">{!! $product->description !!}</textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-lg-3">Product Image</label>
                                <div class="col-lg-9">
                                    <input type="file" class="file-styled-basic" name="image">
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
    <script src="{{URL::to('assets/js/sub_category.js')}}"></script>
    <script>
        fetch_select();
    </script>

@endsection