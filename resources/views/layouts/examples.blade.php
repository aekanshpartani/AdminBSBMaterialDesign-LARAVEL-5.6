<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}e" type="image/x-icon">




    @section('css')
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="{{ URL::asset('bsb/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
        <!-- Waves Effect Css -->
        <link href="{{ URL::asset('bsb/plugins/node-waves/waves.css')}}" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="{{ URL::asset('bsb/plugins/animate-css/animate.css')}}" rel="stylesheet" />


        <!-- Custom Css -->
        <link href="{{ URL::asset('bsb/css/style.css')}}" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        {{--<link href="{{ URL::asset('bsb/css/themes/all-themes.css')}}" rel="stylesheet" />--}}
    @show

    @yield('extra-css')




</head>

<body class="theme-red">

    @yield('content')


@section('scripts')
    <!-- Jquery Core Js -->
    <script src="{{ URL::asset('bsb/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ URL::asset('bsb/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ URL::asset('bsb/plugins/node-waves/waves.js')}}"></script>

@show

@yield('extra-scripts')
</body>

</html>