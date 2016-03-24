@if ($menu = Menus::getMenu($name))
    @if ($menu->menulinks->count())
    <ul class="nav navbar-nav navbar-right {{ $menu->class }}" role="menu">
        @foreach ($menu->menulinks as $menulink)
            @include('menus::public._item')
        @endforeach
    </ul>
    @endif

@endif
