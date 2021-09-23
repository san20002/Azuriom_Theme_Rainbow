@if($banner === "login" && !theme_config('home.banner.login.hidden'))
    <div class="banner"
        {{theme_config('home.banner.login.animation')? 'data-aos='.theme_config('home.banner.login.animation'):'' }}
        {{theme_config('home.banner.login.easing')? 'data-aos-easing='.theme_config('home.banner.login.easing'):'' }}
        {{theme_config('home.banner.login.duration')? 'data-aos-duration='.theme_config('home.banner.login.duration'):'' }}
        {{theme_config('home.banner.login.duration')? 'data-aos-offset='.theme_config('home.banner.login.offset'):'' }}
        {{theme_config('home.banner.login.placement')? 'data-aos-anchor-placement='.theme_config('home.banner.login.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('home.banner.article.animation')? 'data-aos='.theme_config('home.banner.article.animation'):'' }}
        {{theme_config('home.banner.article.easing')? 'data-aos-easing='.theme_config('home.banner.article.easing'):'' }}
        {{theme_config('home.banner.article.duration')? 'data-aos-duration='.theme_config('home.banner.article.duration'):'' }}
        {{theme_config('home.banner.article.duration')? 'data-aos-offset='.theme_config('home.banner.article.offset'):'' }}
        {{theme_config('home.banner.article.placement')? 'data-aos-anchor-placement='.theme_config('home.banner.article.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('home.banner.information.animation')? 'data-aos='.theme_config('home.banner.information.animation'):'' }}
        {{theme_config('home.banner.information.easing')? 'data-aos-easing='.theme_config('home.banner.information.easing'):'' }}
        {{theme_config('home.banner.information.duration')? 'data-aos-duration='.theme_config('home.banner.information.duration'):'' }}
        {{theme_config('home.banner.information.duration')? 'data-aos-offset='.theme_config('home.banner.information.offset'):'' }}
        {{theme_config('home.banner.information.placement')? 'data-aos-anchor-placement='.theme_config('home.banner.information.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('faq.banner.faq.animation')? 'data-aos='.theme_config('faq.banner.faq.animation'):'' }}
        {{theme_config('faq.banner.faq.easing')? 'data-aos-easing='.theme_config('faq.banner.faq.easing'):'' }}
        {{theme_config('faq.banner.faq.duration')? 'data-aos-duration='.theme_config('faq.banner.faq.duration'):'' }}
        {{theme_config('faq.banner.faq.duration')? 'data-aos-offset='.theme_config('faq.banner.faq.offset'):'' }}
        {{theme_config('faq.banner.faq.placement')? 'data-aos-anchor-placement='.theme_config('faq.banner.faq.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('liteBans.banner.litebans.animation')? 'data-aos='.theme_config('liteBans.banner.litebans.animation'):'' }}
        {{theme_config('liteBans.banner.litebans.easing')? 'data-aos-easing='.theme_config('liteBans.banner.litebans.easing'):'' }}
        {{theme_config('liteBans.banner.litebans.duration')? 'data-aos-duration='.theme_config('liteBans.banner.litebans.duration'):'' }}
        {{theme_config('liteBans.banner.litebans.duration')? 'data-aos-offset='.theme_config('liteBans.banner.litebans.offset'):'' }}
        {{theme_config('liteBans.banner.litebans.placement')? 'data-aos-anchor-placement='.theme_config('liteBans.banner.litebans.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('vote.banner.vote.animation')? 'data-aos='.theme_config('vote.banner.vote.animation'):'' }}
        {{theme_config('vote.banner.vote.easing')? 'data-aos-easing='.theme_config('vote.banner.vote.easing'):'' }}
        {{theme_config('vote.banner.vote.duration')? 'data-aos-duration='.theme_config('vote.banner.vote.duration'):'' }}
        {{theme_config('vote.banner.vote.duration')? 'data-aos-offset='.theme_config('vote.banner.vote.offset'):'' }}
        {{theme_config('vote.banner.vote.placement')? 'data-aos-anchor-placement='.theme_config('vote.banner.vote.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('support.banner.support.animation')? 'data-aos='.theme_config('support.banner.support.animation'):'' }}
        {{theme_config('support.banner.support.easing')? 'data-aos-easing='.theme_config('support.banner.support.easing'):'' }}
        {{theme_config('support.banner.support.duration')? 'data-aos-duration='.theme_config('support.banner.support.duration'):'' }}
        {{theme_config('support.banner.support.duration')? 'data-aos-offset='.theme_config('support.banner.support.offset'):'' }}
        {{theme_config('support.banner.support.placement')? 'data-aos-anchor-placement='.theme_config('support.banner.support.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('wiki.banner.wiki.animation')? 'data-aos='.theme_config('wiki.banner.wiki.animation'):'' }}
        {{theme_config('wiki.banner.wiki.easing')? 'data-aos-easing='.theme_config('wiki.banner.wiki.easing'):'' }}
        {{theme_config('wiki.banner.wiki.duration')? 'data-aos-duration='.theme_config('wiki.banner.wiki.duration'):'' }}
        {{theme_config('wiki.banner.wiki.duration')? 'data-aos-offset='.theme_config('wiki.banner.wiki.offset'):'' }}
        {{theme_config('wiki.banner.wiki.placement')? 'data-aos-anchor-placement='.theme_config('wiki.banner.wiki.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('changelog.banner.changelog.animation')? 'data-aos='.theme_config('changelog.banner.changelog.animation'):'' }}
        {{theme_config('changelog.banner.changelog.easing')? 'data-aos-easing='.theme_config('changelog.banner.changelog.easing'):'' }}
        {{theme_config('changelog.banner.changelog.duration')? 'data-aos-duration='.theme_config('changelog.banner.changelog.duration'):'' }}
        {{theme_config('changelog.banner.changelog.duration')? 'data-aos-offset='.theme_config('changelog.banner.changelog.offset'):'' }}
        {{theme_config('changelog.banner.changelog.placement')? 'data-aos-anchor-placement='.theme_config('changelog.banner.changelog.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('forum.banner.forum.animation')? 'data-aos='.theme_config('forum.banner.forum.animation'):'' }}
        {{theme_config('forum.banner.forum.easing')? 'data-aos-easing='.theme_config('forum.banner.forum.easing'):'' }}
        {{theme_config('forum.banner.forum.duration')? 'data-aos-duration='.theme_config('forum.banner.forum.duration'):'' }}
        {{theme_config('forum.banner.forum.duration')? 'data-aos-offset='.theme_config('forum.banner.forum.offset'):'' }}
        {{theme_config('forum.banner.forum.placement')? 'data-aos-anchor-placement='.theme_config('forum.banner.forum.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('shop.banner.shop.animation')? 'data-aos='.theme_config('shop.banner.shop.animation'):'' }}
        {{theme_config('shop.banner.shop.easing')? 'data-aos-easing='.theme_config('shop.banner.shop.easing'):'' }}
        {{theme_config('shop.banner.shop.duration')? 'data-aos-duration='.theme_config('shop.banner.shop.duration'):'' }}
        {{theme_config('shop.banner.shop.duration')? 'data-aos-offset='.theme_config('shop.banner.shop.offset'):'' }}
        {{theme_config('shop.banner.shop.placement')? 'data-aos-anchor-placement='.theme_config('shop.banner.shop.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('shop.banner.cart.animation')? 'data-aos='.theme_config('shop.banner.cart.animation'):'' }}
        {{theme_config('shop.banner.cart.easing')? 'data-aos-easing='.theme_config('shop.banner.cart.easing'):'' }}
        {{theme_config('shop.banner.cart.duration')? 'data-aos-duration='.theme_config('shop.banner.cart.duration'):'' }}
        {{theme_config('shop.banner.cart.duration')? 'data-aos-offset='.theme_config('shop.banner.cart.offset'):'' }}
        {{theme_config('shop.banner.cart.placement')? 'data-aos-anchor-placement='.theme_config('shop.banner.cart.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('shop.banner.filter.animation')? 'data-aos='.theme_config('shop.banner.filter.animation'):'' }}
        {{theme_config('shop.banner.filter.easing')? 'data-aos-easing='.theme_config('shop.banner.filter.easing'):'' }}
        {{theme_config('shop.banner.filter.duration')? 'data-aos-duration='.theme_config('shop.banner.filter.duration'):'' }}
        {{theme_config('shop.banner.filter.duration')? 'data-aos-offset='.theme_config('shop.banner.filter.offset'):'' }}
        {{theme_config('shop.banner.filter.placement')? 'data-aos-anchor-placement='.theme_config('shop.banner.filter.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('shop.banner.profile.animation')? 'data-aos='.theme_config('shop.banner.profile.animation'):'' }}
        {{theme_config('shop.banner.profile.easing')? 'data-aos-easing='.theme_config('shop.banner.profile.easing'):'' }}
        {{theme_config('shop.banner.profile.duration')? 'data-aos-duration='.theme_config('shop.banner.profile.duration'):'' }}
        {{theme_config('shop.banner.profile.duration')? 'data-aos-offset='.theme_config('shop.banner.profile.offset'):'' }}
        {{theme_config('shop.banner.profile.placement')? 'data-aos-anchor-placement='.theme_config('shop.banner.profile.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('shop.banner.coupons.animation')? 'data-aos='.theme_config('shop.banner.coupons.animation'):'' }}
        {{theme_config('shop.banner.coupons.easing')? 'data-aos-easing='.theme_config('shop.banner.coupons.easing'):'' }}
        {{theme_config('shop.banner.coupons.duration')? 'data-aos-duration='.theme_config('shop.banner.coupons.duration'):'' }}
        {{theme_config('shop.banner.coupons.duration')? 'data-aos-offset='.theme_config('shop.banner.coupons.offset'):'' }}
        {{theme_config('shop.banner.coupons.placement')? 'data-aos-anchor-placement='.theme_config('shop.banner.coupons.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('shop.banner.addCoupons.animation')? 'data-aos='.theme_config('shop.banner.addCoupons.animation'):'' }}
        {{theme_config('shop.banner.addCoupons.easing')? 'data-aos-easing='.theme_config('shop.banner.addCoupons.easing'):'' }}
        {{theme_config('shop.banner.addCoupons.duration')? 'data-aos-duration='.theme_config('shop.banner.addCoupons.duration'):'' }}
        {{theme_config('shop.banner.addCoupons.duration')? 'data-aos-offset='.theme_config('shop.banner.addCoupons.offset'):'' }}
        {{theme_config('shop.banner.addCoupons.placement')? 'data-aos-anchor-placement='.theme_config('shop.banner.addCoupons.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('shop.banner.payment.animation')? 'data-aos='.theme_config('shop.banner.payment.animation'):'' }}
        {{theme_config('shop.banner.payment.easing')? 'data-aos-easing='.theme_config('shop.banner.payment.easing'):'' }}
        {{theme_config('shop.banner.payment.duration')? 'data-aos-duration='.theme_config('shop.banner.payment.duration'):'' }}
        {{theme_config('shop.banner.payment.duration')? 'data-aos-offset='.theme_config('shop.banner.payment.offset'):'' }}
        {{theme_config('shop.banner.payment.placement')? 'data-aos-anchor-placement='.theme_config('shop.banner.payment.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('pages.banner.page.animation')? 'data-aos='.theme_config('pages.banner.page.animation'):'' }}
        {{theme_config('pages.banner.page.easing')? 'data-aos-easing='.theme_config('pages.banner.page.easing'):'' }}
        {{theme_config('pages.banner.page.duration')? 'data-aos-duration='.theme_config('pages.banner.page.duration'):'' }}
        {{theme_config('pages.banner.page.duration')? 'data-aos-offset='.theme_config('pages.banner.page.offset'):'' }}
        {{theme_config('pages.banner.page.placement')? 'data-aos-anchor-placement='.theme_config('pages.banner.page.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('articles.banner.article.animation')? 'data-aos='.theme_config('articles.banner.article.animation'):'' }}
        {{theme_config('articles.banner.article.easing')? 'data-aos-easing='.theme_config('articles.banner.article.easing'):'' }}
        {{theme_config('articles.banner.article.duration')? 'data-aos-duration='.theme_config('articles.banner.article.duration'):'' }}
        {{theme_config('articles.banner.article.duration')? 'data-aos-offset='.theme_config('articles.banner.article.offset'):'' }}
        {{theme_config('articles.banner.article.placement')? 'data-aos-anchor-placement='.theme_config('articles.banner.article.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('articles.banner.allArticle.animation')? 'data-aos='.theme_config('articles.banner.allArticle.animation'):'' }}
        {{theme_config('articles.banner.allArticle.easing')? 'data-aos-easing='.theme_config('articles.banner.allArticle.easing'):'' }}
        {{theme_config('articles.banner.allArticle.duration')? 'data-aos-duration='.theme_config('articles.banner.allArticle.duration'):'' }}
        {{theme_config('articles.banner.allArticle.duration')? 'data-aos-offset='.theme_config('articles.banner.allArticle.offset'):'' }}
        {{theme_config('articles.banner.allArticle.placement')? 'data-aos-anchor-placement='.theme_config('articles.banner.allArticle.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('profile.banner.buy.animation')? 'data-aos='.theme_config('profile.banner.buy.animation'):'' }}
        {{theme_config('profile.banner.buy.easing')? 'data-aos-easing='.theme_config('profile.banner.buy.easing'):'' }}
        {{theme_config('profile.banner.buy.duration')? 'data-aos-duration='.theme_config('profile.banner.buy.duration'):'' }}
        {{theme_config('profile.banner.buy.duration')? 'data-aos-offset='.theme_config('profile.banner.buy.offset'):'' }}
        {{theme_config('profile.banner.buy.placement')? 'data-aos-anchor-placement='.theme_config('profile.banner.buy.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('profile.banner.skin.animation')? 'data-aos='.theme_config('profile.banner.skin.animation'):'' }}
        {{theme_config('profile.banner.skin.easing')? 'data-aos-easing='.theme_config('profile.banner.skin.easing'):'' }}
        {{theme_config('profile.banner.skin.duration')? 'data-aos-duration='.theme_config('profile.banner.skin.duration'):'' }}
        {{theme_config('profile.banner.skin.duration')? 'data-aos-offset='.theme_config('profile.banner.skin.offset'):'' }}
        {{theme_config('profile.banner.skin.placement')? 'data-aos-anchor-placement='.theme_config('profile.banner.skin.placement'):'' }}
    >
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
    <div class="banner"
        {{theme_config('advancedBan.banner.advancedBan.animation')? 'data-aos='.theme_config('advancedBan.banner.advancedBan.animation'):'' }}
        {{theme_config('advancedBan.banner.advancedBan.easing')? 'data-aos-easing='.theme_config('advancedBan.banner.advancedBan.easing'):'' }}
        {{theme_config('advancedBan.banner.advancedBan.duration')? 'data-aos-duration='.theme_config('advancedBan.banner.advancedBan.duration'):'' }}
        {{theme_config('advancedBan.banner.advancedBan.duration')? 'data-aos-offset='.theme_config('advancedBan.banner.advancedBan.offset'):'' }}
        {{theme_config('advancedBan.banner.advancedBan.placement')? 'data-aos-anchor-placement='.theme_config('advancedBan.banner.advancedBan.placement'):'' }}
    >
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
