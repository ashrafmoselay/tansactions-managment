<!DOCTYPE html>
<html class="loading" lang="{{ App::getLocale() }}"
    data-textdirection="{{ LaravelLocalization::getCurrentLocaleDirection() }}"
    dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="سيستم إدارة مكاتب وشركات السياحه الخاصة بالعماله والزيارات">
    <meta name="keywords"
        content="سهل للحسابات ,customers , orders,fees,expenses">
    <meta name="author" content="Ashraf Hassan">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@lang('menu.dashboard') {{ getModel() == 'dashboard' ? '' : ' | ' . trans('menu.'.getModel()) }}</title>

    {{-- ************** START ICON ************** --}}
    <link rel="apple-touch-icon" href="{{ asset(setting('favicon', 'samples/images/favicon.png')) }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(setting('favicon', 'samples/images/favicon.png')) }}">
    {{-- ************** START ICON ************** --}}

    {{-- ************** START FONTS AWESOME ************** --}}
    <link rel="stylesheet" type="text/css" href="{{ assetHelper('fonts/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ assetHelper('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ assetHelper('build/css/main.css') }}">
    {{-- ************** END FONTS AWESOME ************** --}}

    {{-- ************** START RTL , LTR CSS FILES ************** --}}
    @if (App::isLocale('ar'))
        <link rel="stylesheet" type="text/css" href="{{ assetHelper('css-rtl/vendors.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ assetHelper('build/css/main-rtl.css') }}">
    @else
        <link rel="stylesheet" type="text/css" href="{{ assetHelper('css/vendors.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ assetHelper('build/css/main-ltr.css') }}">
        {{ config()->set('sweetalert.toast_position', 'top-end') }}
    @endif
    {{-- ************** END RTL , LTR CSS FILES ************** --}}

    {{-- ************** START CUSTOM CSS ************** --}}
    <link rel="stylesheet" type="text/css" href="{{ assetHelper('build/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ assetHelper('build/css/app/app.css') }}">
    @if (App::isLocale('ar'))
        <link rel="stylesheet" type="text/css" href="{{ assetHelper('build/css/app/app-rtl.css') }}">
    @else
        <link rel="stylesheet" type="text/css" href="{{ assetHelper('build/css/app/app-ltr.css') }}">
    @endif
    {{-- ************** END CUSTOM CSS ************** --}}

    @yield('style')
    @stack('style')

</head>

{{-- <body class="vertical-layout vertical-menu content-detached-left-sidebar menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-col="content-detached-left-sidebar"> --}}
<body id="loader-progress" class="vertical-layout vertical-menu content-left-sidebar email-application fixed-navbar menu-expanded pace-done" data-open="click" data-menu="vertical-menu" data-col="content-left-sidebar">

    {{--  --}}
<div id="body-loading"> <span> ... Loading ...</span> </div>
{{-- 
    <div id="page-loading-animation">
        <div>G</div>
        <div>N</div>
        <div>I</div>
        <div>D</div>
        <div>A</div>
        <div>O</div>
        <div>L</div>
    </div> --}}

    {{-- <div id="page-loading-animation">
        <span></span>
        <span></span>
        <span></span>
    </div> --}}





