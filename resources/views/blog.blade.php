@extends('layouts.main')
@section('title')
    Blog
@endsection
@section('content')

    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="breadcrumbs-title pull-left">
                        <h3>BLOG & MEDIA</h3>
                    </div>
                    <div class="breadcrumbs-list pull-right">
                        <ul>
                            <li> <a title="Home" href="{{route('index')}}"><span>Home</span></a> <span class="separator">/ </span></li>
                            <li class="contact"> <strong>Blog & Media</strong></li></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- blog area start -->
    <div class="blog-page-h">
        <div class="container">
            <div class="row">
                <!-- EVENT  START -->
                <div class="col-lg-8 col-md-8 col-sm-8 help-border">
                    @foreach($posts as $post)
                    <!-- SINGLE BLOG  START -->
                    <div class="single-event">
                        <div class="even-item-img">
                            <div class="catitemimage">
                                <a href="{{route('blog.details', $post->slug)}}">
                                    <span class="catItemLink"></span>
                                    <img src="{{URL::to($post->thumb)}}" alt="" />
                                </a>
                                <div class="blog-info-block">

                                    <div class="event-share">
                                        <div class="caTshare">
                                            <i class="fa fa-share"></i>
                                            <span class="share-text">Share</span>
                                            <ul class="share-menu">
                                                <li class="share-title">Share on</li>
                                                <li><a href="#"><i class="fa fa-facebook"></i>SHARE</a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i>TWEET</a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i>SHARE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3 class="even-title"><a href="{{route('blog.details', $post->slug)}}">{{$post->title}}</a></h3>
                            <div class="tolbar">
                                <span class="author"><i class="fa fa-user"></i>Written by <a href="#">Dollar Pharmacy</a></span>
                               
                            </div>
                            {!! str_limit($post->description, 150) !!}
                        </div>
                        <div class="even-read">
                            <a class="readon" href="{{route('blog.details', $post->slug)}}">Read more...</a>
                        </div>
                    </div>
                    <!-- SINGLE BLOG  END -->
                    @endforeach

                    <!-- PAGINATION START -->
                   
                    <!-- PAGINATION END -->
                </div>
                <!-- EVENT  END -->
                <!-- RIGHT SIDEBAR START -->
                @include('partials.blog_sidebar')
                <!-- RIGHT SIDEBAR END -->
            </div>
        </div>
    </div>
    <!-- blog area end -->

@endsection