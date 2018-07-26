@extends('layouts.examples')

@section('title', 'Examples - 500')

@section('extra-css')

@stop

@section('content')

    <div class="five-zero-zero-container">
        <div class="error-code">500</div>
        <div class="error-message">Internal Server Error</div>
        <div class="button-place">
            <a href="{{ route('home') }}" class="btn btn-default btn-lg waves-effect">GO TO HOMEPAGE</a>
        </div>
    </div>

@stop

@section('extra-scripts')
    <script>
        $(function() {
            $('body').addClass('five-zero-zero');
        });
    </script>
@stop