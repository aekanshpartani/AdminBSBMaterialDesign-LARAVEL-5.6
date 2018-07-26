@extends('layouts.examples')

@section('title', 'Examples - 404')

@section('extra-css')

@stop

@section('content')

    <div class="four-zero-four-container">
        <div class="error-code">404</div>
        <div class="error-message">This page doesn't exist</div>
        <div class="button-place">
            <a href="{{ route('home') }}" class="btn btn-default btn-lg waves-effect">GO TO HOMEPAGE</a>
        </div>
    </div>

@stop

@section('extra-scripts')
    <script>
        $(function() {
            $('body').addClass('four-zero-four');
        });
    </script>
@stop