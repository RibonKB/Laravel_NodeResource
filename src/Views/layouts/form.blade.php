@extends('nrviews::layouts.layout')

@section('scripts')
    <script src="/vendor/kelnebenath/noderesource/js/form.js"></script>
    @yield('form-scripts')
@endsection

@section('head-scripts')
    @yield('form-head-scripts')
@endsection
