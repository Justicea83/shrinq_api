<!doctype html>
<html lang="">
<head>

    <title>XDocs - A Knowledge base and documentation theme</title>
    <!--========================================
    Meta
    ===========================================-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="xDocs">
    <link rel="icon" sizes="192x192" href="{{asset('assets/img/basic/chrome-touch-icon-192x192.png')}}">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <link rel="apple-touch-icon" href="{{asset('assets/img/basic/apple-touch-icon.png')}}">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="{{asset('assets/img/basic/ms-touch-icon-144x144-precomposed.png')}}">
    <meta name="msapplication-TileColor" content="#55acee">
    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#55acee">

    <!--========================================
    CSS
    ===========================================-->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!--put your custom css on the file below-->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css">


</head>
<!--options panel/ panel in the middle , wont collapse on this page automatically-->
<body class="quickSectionActive skipAutoCollapse">

<div class="bodyWrap">
    @include('partials.header')
    <div id="app">
        @yield('content')
    </div>

</div>

<!--========================================
Javascript
===========================================-->

<script src="{{asset('assets/lib/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>

</body>
</html>
