@extends('layouts.admin_main')
@section('content')


    <!--Page Header-->
    <div class="header">
        <div class="header-content">
            <div class="page-title">
                <i class="icon-table2 position-left"></i> Manage Products
            </div>
            <ul class="breadcrumb">
                <li><a href="index.html"></a></li>
                <li>Products</li>
                <li class="active">All Products</li>
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
                    <th colspan="">Title</th>
                    <th>Pulished date</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $key =>$product)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$product->title}}</td>

                    <td>
                        {{$product->created_at->toDayDateTimeString()}}
                    </td>
                    <td>
                        @if($product->availability)
                        <span class="badge badge-success">In Stock</span>
                        @else
                            <span class="badge badge-danger">Out of Stock</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <ul class="icons-list">
                            <li><a href="/cms/product/{{$product->id}}" data-toggle="" data-target=""><i class="icon-eye2"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    {{-- <a href="#" class="dropdown-item"><i class="icon-file-download2"></i> Download</a>
                                    <a href="#" class="dropdown-item"><i class="icon-printer2"></i> Print</a>
                                    <div class="dropdown-divider"></div> --}}
                                    <a href="{{route('product.edit', $product->id)}}" class="dropdown-item"><i class="icon-pencil6"></i> Edit</a>
                                    <a href="{{route('product.delete', $product->id)}}" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
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