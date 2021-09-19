@if($banner === "login" && !theme_config('home.banner.login.hidden'))
    <div class="banner">
        @if(theme_config('home.banner.login.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('home.banner.login.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('home.banner.login.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('home.banner.login.title') ? theme_config('home.banner.login.title') : trans('auth.login') }}
            </h2>
        </div>
    </div>
@endif
@if($banner === "news" && !theme_config('home.banner.news.hidden'))
    <div class="banner">
        @if(theme_config('home.banner.news.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('home.banner.news.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('home.banner.news.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('home.banner.news.title') ? theme_config('home.banner.news.title') : 'Dernières actualités'}}
            </h2>
        </div>
    </div>
@endif

@if($banner === "info" && !theme_config('home.banner.info.hidden'))
    <div class="banner">
        @if(theme_config('home.banner.info.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('home.banner.info.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('home.banner.info.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('home.banner.info.title')? theme_config('home.banner.info.title') : 'Informations'}}
            </h2>
        </div>
    </div>
@endif

@if($banner == "faq" && !theme_config('faq.banner.faq.hidden') )
    <div class="banner">
        @if(theme_config('faq.banner.faq.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('faq.banner.faq.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('faq.banner.faq.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('faq.banner.faq.title')? theme_config('faq.banner.faq.title') : trans('faq::messages.title') }}
            </h1>
        </div>
    </div>
@endif

@if($banner === "liteBans" && !theme_config('liteBans.banner.liteban.hidden'))
    <div class="banner">
        @if(theme_config('liteBans.banner.liteban.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('liteBans.banner.liteban.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('liteBans.banner.liteban.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('liteBans.banner.liteban.title') !== null ? theme_config('liteBans.banner.liteban.title') : trans('litebans::messages.title')}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "vote" && !theme_config('vote.banner.vote.hidden'))
    <div class="banner">
        @if(theme_config('vote.banner.vote.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('vote.banner.vote.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('vote.banner.vote.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('vote.banner.vote.title') !== null ? theme_config('vote.banner.vote.title') : trans('vote::messages.title')}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "support" && !theme_config('support.banner.support.hidden'))
    <div class="banner">
        @if(theme_config('support.banner.support.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('support.banner.support.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('support.banner.support.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('support.banner.support.title') !== null ? theme_config('support.banner.support.title') : trans('support::messages.title')}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "wiki" && !theme_config('wiki.banner.wiki.hidden'))
    <div class="banner">
        @if(theme_config('wiki.banner.wiki.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('wiki.banner.wiki.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('wiki.banner.wiki.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('wiki.banner.wiki.title') !== null ? theme_config('wiki.banner.wiki.title') : trans('wiki::messages.title')}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "changelog" && !theme_config('changelog.banner.changelog.hidden'))
    <div class="banner">
        @if(theme_config('changelog.banner.changelog.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('changelog.banner.changelog.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('changelog.banner.changelog.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('changelog.banner.changelog.title') !== null ? theme_config('changelog.banner.changelog.title') : trans('changelog::messages.title')}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "forum" && !theme_config('forum.banner.forum.hidden'))
    <div class="banner">
        @if(theme_config('forum.banner.forum.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('forum.banner.forum.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('forum.banner.forum.image') ? 'no-image': ''}}">
            @if(!isset($discussion))
                <h1>
                    {{theme_config('forum.banner.forum.title') !== null ? theme_config('forum.banner.forum.title') : trans('forum::messages.title')}}
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
@if($banner === "shop" && !theme_config('shop.banner.shop.hidden'))
    <div class="banner">
        @if(theme_config('shop.banner.shop.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('shop.banner.shop.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('shop.banner.shop.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('shop.banner.shop.title') !== null ? theme_config('shop.banner.shop.title') : trans('shop::messages.title')}}
            </h1>
        </div>
    </div>
@endif
@if($banner === "cart" && !theme_config('shop.banner.cart.hidden'))
    <div class="banner">
        @if(theme_config('shop.banner.cart.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('shop.banner.cart.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('shop.banner.cart.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('shop.banner.cart.title') !== null ? theme_config('shop.banner.cart.title') : trans('shop::messages.cart.title')}}
            </h2>
        </div>
    </div>
@endif
@if($banner === "filter" && !theme_config('shop.banner.filter.hidden'))
    <div class="banner">
        @if(theme_config('shop.banner.filter.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('shop.banner.filter.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('shop.banner.filter.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('shop.banner.filter.title') !== null ? theme_config('shop.banner.filter.title') : 'Filtre'}}
            </h2>
        </div>
    </div>
@endif
@if($banner === "shop_account" && !theme_config('shop.banner.user.hidden'))
    <div class="banner">
        @if(theme_config('shop.banner.user.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('shop.banner.user.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('shop.banner.user.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('shop.banner.user.title') !== null ? theme_config('shop.banner.user.title') : 'Compte'}}
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

@if($banner === "page" && !config('theme.pages.banner.pages.hidden'))
    <div class="banner">
        @if(config('theme.pages.banner.pages.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.pages.banner.pages.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.pages.banner.pages.image') ? 'no-image': ''}}">
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
        <div
            class="banner-title justify-content-between {{!config('theme.articles.banner.allArticle.image') ? 'no-image': ''}}">
            <h1>{{config('theme.articles.banner.allArticle.title') !== null ? config('theme.articles.banner.allArticle.title') : 'Les articles'}}</h1>
            <small class="mr-3 text-sm">
                Nombre d'article(s): {{count($posts)}}
            </small>
        </div>
    </div>
@endif

@if($banner === "myAchat" && !config('theme.profile.banner.achat.hidden'))
    <div class="banner">
        @if(config('theme.profile.banner.achat.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.profile.banner.achat.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div
            class="banner-title justify-content-between {{!config('theme.profile.banner.achat.image') ? 'no-image': ''}}">
            <h1>{{config('theme.profile.banner.achat.title') !== null ? trans('shop::messages.profile.payments') : 'Mes achats'}}</h1>
        </div>
    </div>
@endif

@if($banner === "mySkin" && !config('theme.profile.banner.skin.hidden'))
    <div class="banner">
        @if(config('theme.profile.banner.skin.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.profile.banner.skin.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div
            class="banner-title justify-content-between {{!config('theme.profile.banner.skin.image') ? 'no-image': ''}}">
            <h1>{{config('theme.articles.banner.allArticle.title') !== null ? trans('skin-api::messages.change') : 'Mon skin'}}</h1>
        </div>
    </div>
@endif

@if($banner === "advancedban" && !config('theme.advancedBan.banner.skin.hidden'))
    <div class="banner">
        @if(config('theme.advancedBan.banner.skin.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.advancedBan.banner.skin.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div
            class="banner-title justify-content-between {{!config('theme.advancedBan.banner.skin.image') ? 'no-image': ''}}">
            <div class="col">
                <h1>{{config('theme.articles.banner.allArticle.title') !== null ? trans('advancedban::messages.title') : 'AdvancedBan'}}</h1>
            </div>
            <div class="col">
                <form class="form-inline mb-0 float-right" action="{{ route('advancedban.index') }}" method="GET">
                    <div class="form-group mb-0">
                        <label for="searchInput" class="sr-only">{{ trans('messages.actions.search') }}</label>

                        <div class="input-group">
                            <input type="text" class="form-control" id="searchInput" name="q"
                                   value="{{ request()->input('q') }}"
                                   placeholder="{{ trans('messages.actions.search') }}">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
