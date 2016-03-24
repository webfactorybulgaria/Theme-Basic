@extends('pages::public.master')

@section('header-carousel')
    @if($slides = Slides::all() and $slides->count())
        @include('slides::public._slider', ['items' => $slides])
    @endif
@endsection

@section('heading-breadcrumbs')
@endsection

@section('page')

{{--
    @include('galleries::public._galleries', ['model' => $page])
--}}
{{--
    @if($latestNews = News::latest(3) and $latestNews->count())
        <div class="container-news">
            <h2>@lang('db.Latest news')</h2>
            @include('news::public._list', ['items' => $latestNews])
            <a href="{{ route($lang . '.news') }}" class="btn btn-default btn-xs">@lang('db.All news')</a>
        </div>
    @endif
--}}
{{--
    @if($incomingEvents = Events::incoming() and $incomingEvents->count())
        <div class="container-events">
            <h3>@lang('db.Incoming events')</h3>
            @include('events::public._list', ['items' => $incomingEvents])
            <a href="{{ route($lang . '.events') }}" class="btn btn-default btn-xs">@lang('db.All events')</a>
        </div>
    @endif
--}}


        <!-- Marketing Icons Section -->
        {!! Blocks::render('Homepage-Highlights') !!}

        <!-- Partners Section -->
        @if($partners = Partners::allBy('homepage', 1) and $partners->count())
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header" href="{{ route($lang . '.partners') }}">@lang('db.Partners')</a></h2>
            </div>
            @include('partners::public._list_home', ['items' => $partners])
        </div>
        @endif

        <!-- Features Section -->
        {!! Blocks::render('Homepage-Features') !!}

        <!-- Call to Action Section -->
        {!! Blocks::render('Homepage-CTA') !!}

@endsection