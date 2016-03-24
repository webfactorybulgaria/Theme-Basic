@extends('core::public.master')

@section('title', $model->title . ' – ' . trans('partners::global.name') . ' – ' . $websiteTitle)
@section('ogTitle', $model->title)
@section('description', $model->summary)
@section('image', $model->present()->thumbUrl())
@section('bodyClass', 'body-partners body-partner-' . $model->id . ' body-page body-page-' . $page->id)

@section('heading')
<h1 class="page-header">{{ $model->title }}</h1>
@endsection


@section('breadcrumbs-current')
<li><a href="{{ url($page->uri()) }}">{{ $page->present()->title }}</a></li>
<li class="active">{{ $model->title }}</li>
@endsection


@section('main')
    <div class="row">
        <div class="col-md-8">
            <img class="img-responsive img-portfolio img-hover" src="{!! $model->present()->thumbSrc(700, 450) !!}" alt="{{ $model->title }}">
        </div>
        <div class="col-md-4">
            {{-- nl2br($model->summary) --}}
            {!! $model->present()->body !!}
            <p><a href="{{ $model->website }}" target="_blank">{{ $model->website }}</a></p>
        </div>
    </div>

    @include('core::public._btn-prev-next', ['module' => 'Partners', 'model' => $model])

@endsection
