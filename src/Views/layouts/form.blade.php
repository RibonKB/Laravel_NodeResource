@extends('nrviews::layouts.layout')

@section('scripts')
    @yield('form-scripts')
@endsection

@section('head-scripts')
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    @yield('form-head-scripts')
@endsection
