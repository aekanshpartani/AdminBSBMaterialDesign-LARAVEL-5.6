@extends('layouts.main')

@section('title', 'Charts - JQuery Knob')

@section('extra-css')


@stop

@section('content')

    <div class="container-fluid">
        <div class="block-header">
            <h2>
                JQUERY KNOB
                <small>Taken from <a href="https://github.com/aterrien/jQuery-Knob" target="_blank">github.com/aterrien/jQuery-Knob</a></small>
            </h2>
        </div>

        <!-- Basic Example -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>BASIC EXAMPLES</h2>
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
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <input type="text" class="knob" value="86" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#F44336">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="92" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#E91E63">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="93" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#00BCD4">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="89" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#009688">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="91" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#FF9800">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="93" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#9C27B0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Example -->
        <!-- Rounded Corners -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>ROUNDED CORNERS</h2>
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
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <input type="text" class="knob" data-linecap="round" value="42" data-width="125" data-height="125" data-thickness="0.25"
                                       data-fgColor="#F44336">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" data-linecap="round" value="56" data-width="125" data-height="125" data-thickness="0.25"
                                       data-fgColor="#E91E63">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" data-linecap="round" value="48" data-width="125" data-height="125" data-thickness="0.25"
                                       data-fgColor="#00BCD4">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" data-linecap="round" value="65" data-width="125" data-height="125" data-thickness="0.25"
                                       data-fgColor="#009688">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" data-linecap="round" value="72" data-width="125" data-height="125" data-thickness="0.25"
                                       data-fgColor="#FF9800">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" data-linecap="round" value="18" data-width="125" data-height="125" data-thickness="0.25"
                                       data-fgColor="#9C27B0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Rounded Corners -->
        <!-- Different Sizes -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>DIFFERENT SIZES</h2>
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
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <input type="text" class="knob" value="86" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#F44336">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="92" data-width="120" data-height="120" data-thickness="0.32" data-fgColor="#E91E63">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="93" data-width="120" data-height="120" data-thickness="0.50" data-fgColor="#00BCD4">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="89" data-width="80" data-height="80" data-thickness="0.16" data-fgColor="#009688">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="91" data-width="75" data-height="75" data-thickness="0.2" data-fgColor="#FF9800">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="93" data-width="120" data-height="120" data-thickness="0.12" data-fgColor="#9C27B0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Different Sizes -->
        <!-- Different Angles & Offsets -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>DIFFERENT ANGLES & OFFSETS</h2>
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
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <input type="text" class="knob" value="35" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="-125"
                                       data-fgColor="#F44336">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="45" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="-305"
                                       data-fgColor="#E91E63">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="40" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="-35"
                                       data-fgColor="#00BCD4">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="36" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="145"
                                       data-fgColor="#009688">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="43" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="270" data-angleoffset="-0"
                                       data-fgColor="#FF9800">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="52" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="270" data-angleoffset="90"
                                       data-fgColor="#9C27B0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Different Angles & Offsets -->
        <!-- Readonly -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>READ-ONLY</h2>
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
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <input type="text" class="knob" value="42" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#F44336"
                                       readonly>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="56" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#E91E63"
                                       readonly>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="48" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#00BCD4"
                                       readonly>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="65" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#009688"
                                       readonly>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="72" data-width="140" data-height="140" data-thickness="0.20" data-fgColor="#FF9800"
                                       data-skin="tron" readonly>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="18" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#9C27B0"
                                       data-anglearc="250" data-angleoffset="-125" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Readonly -->
        <!-- Tron Style -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>TRON STYLE</h2>
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
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <input type="text" class="knob" data-skin="tron" value="45" data-width="135" data-height="135" data-thickness="0.2" data-fgColor="#F44336">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" data-skin="tron" value="58" data-width="135" data-height="135" data-thickness="0.2" data-fgColor="#E91E63">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" data-skin="tron" value="45" data-width="135" data-height="135" data-thickness="0.2" data-fgColor="#00BCD4">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" data-skin="tron" value="42" data-width="135" data-height="135" data-thickness="0.2" data-fgColor="#009688">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" data-skin="tron" value="100" data-width="135" data-height="135" data-thickness="0.2" data-angleArc="270"
                                       data-angleoffset="90" data-fgColor="#FF9800">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" data-skin="tron" value="100" data-width="135" data-height="135" data-thickness="0.2" data-angleArc="250"
                                       data-angleoffset="-125" data-fgColor="#9C27B0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Tron Style -->
    </div>

@stop

@section('extra-scripts')



    <!-- Jquery Knob Plugin Js -->
    <script src="{{ URL::asset('bsb/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{ URL::asset('bsb/js/pages/charts/jquery-knob.js')}}"></script>

@stop