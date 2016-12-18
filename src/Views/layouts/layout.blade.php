<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Node Resource Administration Center</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link rel="stylesheet" href="/vendor/kelnebenath/noderesource/css/main.css" type="text/css">
@yield('styles')

    <!-- Scripts -->
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
@yield('head-scripts')
</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      @include('nrviews::layouts.header')
      <div class="mdl-layout__drawer">
        @include('nrviews::layouts.drawer')
      </div>
      <main class="mdl-layout__content">
        @yield('content')
      </main>
    </div>
    <form id="node-logout-form" action="{{ url('/logout') }}" method="POST" class="node-no-display">
        {{ csrf_field() }}
    </form>
    <script type="text/javascript" src="/vendor/kelnebenath/noderesource/js/main.js"></script>
@yield('scripts')
</body>
</html>
