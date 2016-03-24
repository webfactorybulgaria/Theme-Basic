
    @foreach ($items as $partner)
    @include('partners::public._list-item')
    @endforeach

    {{-- {!! $items->appends(Request::except('page'))->render() !!} --}}