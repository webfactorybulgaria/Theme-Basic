@extends('pages::public.master')

@section('page')
    {!! $page->present()->body !!}
    @include('galleries::public._galleries', ['model' => $page])

    @section('subnav')
    @if($children)
    <ul class="nav nav-subpages">
        @foreach ($children as $child)
        @include('pages::public._listItem', array('child' => $child))
        @endforeach
    </ul>
    @endif
    @show

@endsection
