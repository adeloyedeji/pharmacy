@extends('layouts.admin_main')
@section('content')



    <!--Page Header-->
    <div class="header">
        <div class="header-content">
            <div class="page-title">
                <i class="icon-table2 position-left"></i> Manage Blog Posts
            </div>
            <ul class="breadcrumb">
                <li><a href="index.html"></a></li>
                <li>Dashboard</li>
                <li class="active">All Posts</li>
            </ul>
        </div>
    </div>
    <!--/Page Header-->

    <div class="container-fluid page-content">

        <!-- Individual column searching (text fields) -->
        <div class="card card-inverse card-flat table-responsive">

            <table class="table datatable datatable-column-search-inputs">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Date Created</th>
                    <th>Status</th>

                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $key => $post)
                    <tr>

                        <td>{{$post->title}} </td>
                        <td>{{$post->created_at->diffForHumans()}}</td>



                        <td>
                            <span class="badge badge-info">Published</span>
                        </td>

                        <td class="text-center">
                            <ul class="icons-list">
                                <li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-eye2"></i></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-download2"></i> Download</a>
                                        <a href="#" class="dropdown-item"><i class="icon-printer2"></i> Print</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{route('blog.edit', $post->id)}}" class="dropdown-item"><i class="icon-pencil6"></i> Edit</a>
                                        <a href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach



                </tbody>
                <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Date Created</th>
                    <th>Status</th>
                    <td></td>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /Individual column searching (text fields) -->


    </div>

@endsection

@section('javascripts')
    <!-- Page scripts -->
    <script src="{{URL::to('cms_assets/lib/js/pages/forms/form_inputs_basic.js')}}"></script>
    <script src="{{URL::to('cms_assets/lib/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script src="{{URL::to('cms_assets/lib/js/pages/tables/datatable_advanced.js')}}"></script>
    <!-- /Page scripts -->
@endsection