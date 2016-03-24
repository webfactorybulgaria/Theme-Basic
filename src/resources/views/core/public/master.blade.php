<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <meta property="og:site_name" content="{{ $websiteTitle }}">
    <meta property="og:title" content="@yield('ogTitle')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ URL::full() }}">
    <meta property="og:image" content="@yield('image')">

    <link href="{{ app()->isLocal() ? asset('css/public.css') : asset(elixir('css/public.css')) }}" rel="stylesheet">

    @yield('css')

    @if(app()->environment('production') and config('typicms.google_analytics_code'))

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', '{{ config('typicms.google_analytics_code') }}', 'auto');
        ga('send', 'pageview');
    </script>

    @endif

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body class="body-{{ $lang }} @yield('bodyClass') @if(Auth::user() and Auth::user()->hasRole('Admin') and ! Request::input('preview'))has-navbar @endif">

@if(Auth::user() and Auth::user()->hasRole('Admin') and ! Request::input('preview'))
    @include('core::_navbar')
@endif

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">@lang('db.Open navigation')</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                @include('core::public._site-title')
            </div>
            @section('lang-switcher')
                @include('core::public._lang-switcher')
            @show

            @section('site-nav')
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                {!! Menus::render('main') !!}
            </div>
            @show
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    @include('core::public._alert')

    @section('header-carousel')
    @show


    <!-- Page Content -->
    <div class="container">
        @section('heading-breadcrumbs')
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                @section('heading')
                @if(!empty($page))
                <h1 class="page-header">{{ $page->present()->title }}
                    <small>{{ $page->present()->subtitle }}</small>
                </h1>
                @endif
                @show
                @section('breadcrumbs')
                <ol class="breadcrumb">
                    <li><a href="{{ TypiCMS::homeUrl() }}">@lang('db.Home')</a></li>
                    @section('breadcrumbs-current')
                    @if(!empty($page))
                    <li class="active">{{ $page->present()->title }}</li>
                    @endif
                    @show
                </ol>
                @show
            </div>
        </div>
        <!-- /.row -->
        @show

        @yield('main')

        <!-- Footer -->
        @section('site-footer')
        <footer>
            <nav class="social-nav">
                {!! Menus::render('social') !!}
            </nav>
            <nav class="footer-nav">
                {!! Menus::render('footer') !!}
            </nav>
            <div class="row">
                <div class="col-lg-12">
                    <p>@lang('db.Copyright')</p>
                </div>
            </div>
        </footer>
        @show

    </div>
    <!-- /.container -->
 
    <script src="@if(app()->environment('production')){{ asset(elixir('js/public/components.min.js')) }}@else{{ asset('js/public/components.min.js') }}@endif"></script>
    <script src="@if(app()->environment('production')){{ asset(elixir('js/public/master.js')) }}@else{{ asset('js/public/master.js') }}@endif"></script>
    @if (Request::input('preview'))
    <script src="{{ asset('js/public/previewmode.js') }}"></script>
    @endif

    @yield('js')

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>


<?php /*<!doctype html>
<html lang="{{ config('app.locale') }}">


<body class="body-{{ $lang }} @yield('bodyClass') @if(Auth::user() and Auth::user()->hasRole('Admin') and ! Request::input('preview'))has-navbar @endif">

    @section('skip-links')
    <a href="#main" class="skip-to-content">@lang('db.Skip to content')</a>
    <a href="#site-nav" class="btn-offcanvas" data-toggle="offcanvas" title="@lang('db.Open navigation')" aria-label="@lang('db.Open navigation')" role="button" aria-controls="navigation" aria-expanded="false"><span class="fa fa-bars fa-fw" aria-hidden="true"></span></a>
    @show

@if(Auth::user() and Auth::user()->hasRole('Admin') and ! Request::input('preview'))
    @include('core::_navbar')
@endif

    <div class="site-container" id="main" role="main">

        @section('site-header')
        <header class="site-header">
            @section('site-title')
            <div class="site-title">@include('core::public._site-title')</div>
            @show
        </header>
        @show

        <div class="sidebar-offcanvas">

            <button class="btn-offcanvas btn-offcanvas-close" data-toggle="offcanvas" title="@lang('global.Close navigation')" aria-label="@lang('global.Close navigation')"><span class="fa fa-close fa-fw" aria-hidden="true"></span></button>

            @section('lang-switcher')
                @include('core::public._lang-switcher')
            @show

            @section('site-nav')
            <nav class="site-nav" id="site-nav">
                {!! Menus::render('main') !!}
            </nav>
            @show

        </div>

        @include('core::public._alert')

        @yield('main')

        @section('site-footer')
        <footer class="site-footer">
            <nav class="social-nav">
                {!! Menus::render('social') !!}
            </nav>
            <nav class="footer-nav">
                {!! Menus::render('footer') !!}
            </nav>
        </footer>
        @show

    </div>

    <script src="@if(app()->environment('production')){{ asset(elixir('js/public/components.min.js')) }}@else{{ asset('js/public/components.min.js') }}@endif"></script>
    <script src="@if(app()->environment('production')){{ asset(elixir('js/public/master.js')) }}@else{{ asset('js/public/master.js') }}@endif"></script>
    @if (Request::input('preview'))
    <script src="{{ asset('js/public/previewmode.js') }}"></script>
    @endif

    @yield('js')

</body>

</html>
*/?>