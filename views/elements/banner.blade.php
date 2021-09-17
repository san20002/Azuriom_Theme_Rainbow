@if($banner === "news" && !config('theme.home.banner.news.hidden'))
    <div class="banner">
        @if(config('theme.home.banner.news.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.home.banner.news.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.home.banner.news.image') ? 'no-image': ''}}">
            <h2>
                {{config('theme.home.banner.news.title') ? config('theme.home.banner.news.title') : 'Dernières actualitées'}}
            </h2>
        </div>
    </div>
@endif

@if($banner === "info" && !config('theme.home.banner.info.hidden'))
    <div class="banner">
        @if(config('theme.home.banner.info.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.home.banner.info.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.home.banner.info.image') ? 'no-image': ''}}">
            <h2>
                {{config('theme.home.banner.info.title')? config('theme.home.banner.info.title') : 'Informations'}}
            </h2>
        </div>
    </div>
@endif

@if($banner == "faq" && !config('theme.faq.banner.faq.hidden') )
    <div class="banner">
        @if(config('theme.faq.banner.faq.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.faq.banner.faq.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.faq.banner.faq.image') ? 'no-image': ''}}">
            <h1>
                {{config('theme.faq.banner.faq.title')? config('theme.faq.banner.faq.title') : trans('faq::messages.title') }}
            </h1>
        </div>
    </div>
@endif

@if($banner === "liteBans" && !config('theme.liteBans.banner.liteban.hidden'))
    <div class="banner">
        @if(config('theme.liteBans.banner.liteban.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.liteBans.banner.liteban.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.liteBans.banner.liteban.image') ? 'no-image': ''}}">
            <h1>
                {{config('theme.liteBans.banner.liteban.title') !== null ? config('theme.liteBans.banner.liteban.title') : trans('litebans::messages.title')}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "vote" && !config('theme.vote.banner.vote.hidden'))
    <div class="banner">
        @if(config('theme.vote.banner.vote.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.vote.banner.vote.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.vote.banner.vote.image') ? 'no-image': ''}}">
            <h1>
                {{config('theme.vote.banner.vote.title') !== null ? config('theme.vote.banner.vote.title') : trans('vote::messages.title')}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "support" && !config('theme.support.banner.support.hidden'))
    <div class="banner">
        @if(config('theme.support.banner.support.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.support.banner.support.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.support.banner.support.image') ? 'no-image': ''}}">
            <h1>
                {{config('theme.support.banner.support.title') !== null ? config('theme.support.banner.support.title') : trans('support::messages.title')}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "wiki" && !config('theme.wiki.banner.wiki.hidden'))
    <div class="banner">
        @if(config('theme.wiki.banner.wiki.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.wiki.banner.wiki.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.wiki.banner.wiki.image') ? 'no-image': ''}}">
            <h1>
                {{config('theme.wiki.banner.wiki.title') !== null ? config('theme.wiki.banner.wiki.title') : trans('wiki::messages.title')}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "changelog" && !config('theme.changelog.banner.changelog.hidden'))
    <div class="banner">
        @if(config('theme.changelog.banner.changelog.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.changelog.banner.changelog.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.changelog.banner.changelog.image') ? 'no-image': ''}}">
            <h1>
                {{config('theme.changelog.banner.changelog.title') !== null ? config('theme.changelog.banner.changelog.title') : trans('changelog::messages.title')}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "forum" && !config('theme.forum.banner.forum.hidden'))
    <div class="banner">
        @if(config('theme.forum.banner.forum.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.forum.banner.forum.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.forum.banner.forum.image') ? 'no-image': ''}}">
            @if(!isset($discussion))
                <h1>
                    {{config('theme.forum.banner.forum.title') !== null ? config('theme.forum.banner.forum.title') : trans('forum::messages.title')}}
                </h1>
            @else
                <h1 class="mb-0">
                    {{ $discussion->title }}
                </h1>
                @foreach($discussion->tags as $tag)
                    <small class="mr-4">
                        <span class="badge" style="{{ $tag->getBadgeStyle() }}">{{ $tag->name }}</span>
                    </small>
                @endforeach
            @endif
        </div>
    </div>
@endif
@if($banner === "shop" && !config('theme.shop.banner.shop.hidden'))
    <div class="banner">
        @if(config('theme.shop.banner.shop.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.shop.banner.shop.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.shop.banner.shop.image') ? 'no-image': ''}}">
            <h1>
                {{config('theme.shop.banner.shop.title') !== null ? config('theme.shop.banner.shop.title') : trans('shop::messages.title')}}
            </h1>
        </div>
    </div>
@endif
@if($banner === "cart" && !config('theme.shop.banner.cart.hidden'))
    <div class="banner">
        @if(config('theme.shop.banner.cart.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.shop.banner.cart.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.shop.banner.cart.image') ? 'no-image': ''}}">
            <h2>
                {{config('theme.shop.banner.cart.title') !== null ? config('theme.shop.banner.cart.title') : trans('shop::messages.cart.title')}}
            </h2>
        </div>
    </div>
@endif
@if($banner === "filter" && !config('theme.shop.banner.filter.hidden'))
    <div class="banner">
        @if(config('theme.shop.banner.filter.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.shop.banner.filter.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.shop.banner.filter.image') ? 'no-image': ''}}">
            <h2>
                {{config('theme.shop.banner.filter.title') !== null ? config('theme.shop.banner.filter.title') : 'Filter'}}
            </h2>
        </div>
    </div>
@endif
@if($banner === "shop_account" && !config('theme.shop.banner.user.hidden'))
    <div class="banner">
        @if(config('theme.shop.banner.user.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.shop.banner.user.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.shop.banner.user.image') ? 'no-image': ''}}">
            <h2>
                {{config('theme.shop.banner.user.title') !== null ? config('theme.shop.banner.user.title') : 'Compte'}}
            </h2>
        </div>
    </div>
@endif
@if($banner === "coupons" && !config('theme.shop.banner.coupons.hidden'))
    <div class="banner">
        @if(config('theme.shop.banner.coupons.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.shop.banner.coupons.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.shop.banner.coupons.image') ? 'no-image': ''}}">
            <h2>
                {{config('theme.shop.banner.coupons.title') !== null ? config('theme.shop.banner.coupons.title') : trans('shop::messages.cart.coupons')}}
            </h2>
        </div>
    </div>
@endif
@if($banner === "addCoupons" && !config('theme.shop.banner.addCoupons.hidden'))
    <div class="banner">
        @if(config('theme.shop.banner.addCoupons.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.shop.banner.addCoupons.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.shop.banner.addCoupons.image') ? 'no-image': ''}}">
            <h2>{{config('theme.shop.banner.addCoupons.title') !== null ? config('theme.shop.banner.addCoupons.title') : trans('shop::messages.cart.add-coupon')}}</h2>
        </div>
    </div>
@endif

@if($banner === "payment" && !config('theme.shop.banner.paiement.hidden'))
    <div class="banner">
        @if(config('theme.shop.banner.paiement.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.shop.banner.paiement.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.shop.banner.paiement.image') ? 'no-image': ''}}">
            <h1>{{config('theme.shop.banner.paiement.title') !== null ? config('theme.shop.banner.paiement.title') : trans('shop::messages.payment.title')}}</h1>
        </div>
    </div>
@endif

@if($banner === "page" && !config('theme.page.banner.page.hidden'))
    <div class="banner">
        @if(config('theme.page.banner.page.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.page.banner.page.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.page.banner.page.image') ? 'no-image': ''}}">
            <h1>{{$page->title}}</h1>
        </div>
    </div>
@endif

@if($banner === "article" && !config('theme.articles.banner.page.hidden'))
    <div class="banner">
        @if(config('theme.articles.banner.articles.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.articles.banner.articles.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.articles.banner.articles.image') ? 'no-image': ''}}">
            <h1>{{$post->title}}</h1>
        </div>
    </div>
@endif
@if($banner === "allArticle" && !config('theme.articles.banner.allArticle.hidden'))
    <div class="banner">
        @if(config('theme.articles.banner.allArticle.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.articles.banner.allArticle.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title justify-content-between {{!config('theme.articles.banner.allArticle.image') ? 'no-image': ''}}">
            <h1>{{config('theme.articles.banner.allArticle.title') !== null ? config('theme.articles.banner.allArticle.title') : 'Les articles'}}</h1>
            <small class="mr-3 text-sm">
                Nombre d'article(s): {{count($posts)}}
            </small>
        </div>
    </div>
@endif
