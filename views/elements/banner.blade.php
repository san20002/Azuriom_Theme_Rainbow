@if($banner === "login" && !theme_config('home.banner.login.hidden'))
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'home', 'valueAos' => 'login'])>
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
@if($banner === "news" && !theme_config('home.banner.article.hidden'))
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'home', 'valueAos' => 'article'])>
        @if(theme_config('home.banner.article.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('home.banner.article.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('home.banner.article.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('home.banner.article.title') ? theme_config('home.banner.article.title') : 'Dernières actualités'}}
            </h2>
        </div>
    </div>
@endif

@if($banner === "info" && !theme_config('home.banner.information.hidden'))
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'home', 'valueAos' => 'information'])>
        @if(theme_config('home.banner.information.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('home.banner.information.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('home.banner.information.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('home.banner.information.title')? theme_config('home.banner.information.title') : 'Informations'}}
            </h2>
        </div>
    </div>
@endif

@if($banner == "faq" && !theme_config('faq.banner.faq.hidden') )
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'faq', 'valueAos' => 'faq'])>
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

@if($banner === "liteBans" && !theme_config('liteBans.banner.litebans.hidden'))
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'liteBans', 'valueAos' => 'litebans'])>
        @if(theme_config('liteBans.banner.litebans.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('liteBans.banner.litebans.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('liteBans.banner.litebans.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('liteBans.banner.litebans.title') !== null ? theme_config('liteBans.banner.litebans.title') : trans('litebans::messages.title')}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "vote" && !theme_config('vote.banner.vote.hidden'))
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'vote', 'valueAos' => 'vote'])>
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
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'support', 'valueAos' => 'support'])>
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
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'wiki', 'valueAos' => 'wiki'])>
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
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'changelog', 'valueAos' => 'changelog'])>
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
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'forum', 'valueAos' => 'forum'])>
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
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'valueAos' => 'shop'])>
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
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'valueAos' => 'cart'])>
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
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'valueAos' => 'filter'])>
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
@if($banner === "shop_account" && !theme_config('shop.banner.profile.hidden'))
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'valueAos' => 'profile'])>
        @if(theme_config('shop.banner.profile.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('shop.banner.profile.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('shop.banner.profile.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('shop.banner.profile.title') !== null ? theme_config('shop.banner.profile.title') : 'Compte'}}
            </h2>
        </div>
    </div>
@endif
@if($banner === "coupons" && !config('theme.shop.banner.coupons.hidden'))
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'valueAos' => 'coupons'])>
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
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'valueAos' => 'addCoupons'])>
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

@if($banner === "payment" && !config('theme.shop.banner.payment.hidden'))
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'valueAos' => 'payment'])>
        @if(config('theme.shop.banner.payment.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.shop.banner.payment.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.shop.banner.payment.image') ? 'no-image': ''}}">
            <h1>{{config('theme.shop.banner.payment.title') !== null ? config('theme.shop.banner.payment.title') : trans('shop::messages.payment.title')}}</h1>
        </div>
    </div>
@endif

@if($banner === "pages" && !config('theme.pages.banner.page.hidden'))
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'pages', 'valueAos' => 'page'])>
        @if(config('theme.pages.banner.page.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.pages.banner.page.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.pages.banner.page.image') ? 'no-image': ''}}">
            <h1>{{$page->title}}</h1>
        </div>
    </div>
@endif

@if($banner === "article" && !config('theme.articles.banner.article.hidden'))
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'articles', 'valueAos' => 'article'])>
        @if(config('theme.articles.banner.article.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.articles.banner.article.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.articles.banner.article.image') ? 'no-image': ''}}">
            <h1>{{$post->title}}</h1>
        </div>
    </div>
@endif
@if($banner === "allArticle" && !config('theme.articles.banner.allArticle.hidden'))
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'articles', 'valueAos' => 'allArticle'])>
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

@if($banner === "myAchat" && !config('theme.profile.banner.buy.hidden'))
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'profile', 'valueAos' => 'buy'])>
        @if(config('theme.profile.banner.buy.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.profile.banner.buy.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div
            class="banner-title justify-content-between {{!config('theme.profile.banner.buy.image') ? 'no-image': ''}}">
            <h1>{{config('theme.profile.banner.buy.title') !== null ? trans('shop::messages.profile.payments') : 'Mes achats'}}</h1>
        </div>
    </div>
@endif

@if($banner === "mySkin" && !config('theme.profile.banner.skin.hidden'))
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'profile', 'valueAos' => 'skin'])>
        @if(config('theme.profile.banner.skin.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.profile.banner.skin.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div
            class="banner-title justify-content-between {{!config('theme.profile.banner.skin.image') ? 'no-image': ''}}">
            <h1>{{config('theme.profile.banner.skin.title') !== null ? trans('skin-api::messages.change') : 'Mon skin'}}</h1>
        </div>
    </div>
@endif

@if($banner === "advancedban" && !config('theme.advancedBan.banner.advancedBan.hidden'))
    <div class="banner" @include('elements.string-aos-banner',['bannerAos' => 'advancedBan', 'valueAos' => 'advancedBan'])>
        @if(config('theme.advancedBan.banner.advancedBan.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.advancedBan.banner.advancedBan.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div
            class="banner-title justify-content-between {{!config('theme.advancedBan.banner.advancedBan.image') ? 'no-image': ''}}">
            <div class="col">
                <h1>{{config('theme.advancedBan.banner.advancedBan.title') !== null ? trans('advancedban::messages.title') : 'AdvancedBan'}}</h1>
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
