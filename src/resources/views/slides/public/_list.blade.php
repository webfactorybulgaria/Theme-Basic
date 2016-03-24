   <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            @foreach ($items as $key => $slide)
            <li data-target="#myCarousel" data-slide-to="{{$key}}" @if(!$key) class="active" @endif></li>
            @endforeach
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($items as $key => $slide)
            <div class="item @if(!$key) active @endif">
                @include('slides::public._list-item')
            </div>
            @endforeach
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

