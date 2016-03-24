        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="{{ route($lang.'.partners.slug', $partner->slug) }}" title="{{ $partner->title }}">
                    <img class="img-responsive img-hover" src="{!! $partner->present()->thumbSrc(700, 300) !!}" alt="{{ $partner->title }}">
                </a>
            </div>
            <div class="col-md-5">
                <h3>{{ nl2br($partner->title) }}</h3>
                <p>{{ nl2br($partner->summary) }}</p>
                <a class="btn btn-primary" href="{{ route($lang.'.partners.slug', $partner->slug) }}">@lang('db.View Partner')</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>