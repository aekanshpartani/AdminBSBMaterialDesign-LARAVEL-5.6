@extends('layouts.main')

@section('title', 'Medias - Image Gallery')

@section('extra-css')

    <!-- Light Gallery Plugin Css -->
    <link href="{{ URL::asset('bsb/plugins/light-gallery/css/lightgallery.css')}}" rel="stylesheet" />

@stop

@section('content')

    <div class="container-fluid">
        <!-- Image Gallery -->
        <div class="block-header">
            <h2>
                IMAGE GALLERY
                <small>Taken from <a href="http://sachinchoolur.github.io/lightGallery/" target="_blank">sachinchoolur.github.io/lightGallery</a></small>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            GALLERY
                            <small>All pictures taken from <a href="https://unsplash.com/" target="_blank">unsplash.com</a></small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{ asset('bsb/images/image-gallery/1.jpg') }}" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail" src="{{ asset('bsb/images/image-gallery/thumb/thumb-1.jpg') }}">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{ asset('bsb/images/image-gallery/2.jpg') }}" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail" src="{{ asset('bsb/images/image-gallery/thumb/thumb-2.jpg') }}">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{ asset('bsb/images/image-gallery/3.jpg') }}" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail" src="{{ asset('bsb/images/image-gallery/thumb/thumb-3.jpg') }}">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{ asset('bsb/images/image-gallery/4.jpg') }}" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail" src="{{ asset('bsb/images/image-gallery/thumb/thumb-4.jpg') }}">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{ asset('bsb/images/image-gallery/5.jpg') }}" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail" src="{{ asset('bsb/images/image-gallery/thumb/thumb-5.jpg') }}">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{ asset('bsb/images/image-gallery/6.jpg') }}" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail" src="{{ asset('bsb/images/image-gallery/thumb/thumb-6.jpg') }}">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{ asset('bsb/images/image-gallery/7.jpg') }}" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail" src="{{ asset('bsb/images/image-gallery/thumb/thumb-7.jpg') }}">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{ asset('bsb/images/image-gallery/8.jpg') }}" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail" src="{{ asset('bsb/images/image-gallery/thumb/thumb-8.jpg') }}">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{ asset('bsb/images/image-gallery/9.jpg') }}" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail" src="{{ asset('bsb/images/image-gallery/thumb/thumb-9.jpg') }}">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{ asset('bsb/images/image-gallery/10.jpg') }}" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail" src="{{ asset('bsb/images/image-gallery/thumb/thumb-10.jpg') }}">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{ asset('bsb/images/image-gallery/11.jpg') }}" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail" src="{{ asset('bsb/images/image-gallery/thumb/thumb-11.jpg') }}">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{ asset('bsb/images/image-gallery/12.jpg') }}" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail" src="{{ asset('bsb/images/image-gallery/thumb/thumb-12.jpg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('extra-scripts')

    <!-- Light Gallery Plugin Js -->
    <script src="{{ URL::asset('bsb/plugins/light-gallery/js/lightgallery-all.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{ URL::asset('bsb/js/pages/medias/image-gallery.js')}}"></script>

@stop