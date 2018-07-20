@extends('layouts.main')

@section('title', 'Tables - Editable Tables')

@section('extra-css')


@stop

@section('content')

    <div class="container-fluid">
        <div class="block-header">
            <h2>
                EDITABLE TABLE
                <small>Taken from <a href="https://github.com/mindmup/editable-table" taget="_blank">github.com/mindmup/editable-table</a></small>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EXAMPLE
                            <small>You can edit any columns except header/footer</small>
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
                        <table id="mainTable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Cost</th>
                                <th>Profit</th>
                                <th>Fun</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Car</td>
                                <td>100</td>
                                <td>200</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Bike</td>
                                <td>330</td>
                                <td>240</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Plane</td>
                                <td>430</td>
                                <td>540</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Yacht</td>
                                <td>100</td>
                                <td>200</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Segway</td>
                                <td>330</td>
                                <td>240</td>
                                <td>1</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th><strong>TOTAL</strong></th>
                                <th>1290</th>
                                <th>1420</th>
                                <th>5</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('extra-scripts')


    <!-- Editable Table Plugin Js -->
    <script src="{{ URL::asset('bsb/plugins/editable-table/mindmup-editabletable.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{ URL::asset('bsb/js/pages/tables/editable-table.js')}}"></script>

@stop