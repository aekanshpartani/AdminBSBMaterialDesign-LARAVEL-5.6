@extends('layouts.examples')

@section('title', 'Examples - Forgot Password')

@section('extra-css')

@stop

@section('content')

    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>BSB</b></a>
            <small>Admin BootStrap Based - Material Design</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="forgot_password" method="POST">
                    <div class="msg">
                        Enter your email address that you used to register. We'll send you an email with your username and a
                        link to reset your password.
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">RESET MY PASSWORD</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="sign-in.html">Sign In!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('extra-scripts')
    <script>
        $(function() {
            $('body').addClass('fp-page');
        });
    </script>

    <!-- Validation Plugin Js -->
    <script src="{{ URL::asset('bsb/plugins/jquery-validation/jquery.validate.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{ URL::asset('bsb/js/admin.js')}}"></script>
    <script src="{{ URL::asset('bsb/js/pages/examples/forgot-password.js')}}"></script>
@stop