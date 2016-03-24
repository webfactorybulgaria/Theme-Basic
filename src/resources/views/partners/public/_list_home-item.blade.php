            <div class="col-md-4 col-sm-6">
                <a href="{{ route($lang.'.partners.slug', $partner->slug) }}" title="{{ $partner->title }}">
                <img class="img-responsive img-portfolio img-hover" src="{!! $partner->present()->thumbSrc(700, 450) !!}" alt="">
                </a>
            </div>
