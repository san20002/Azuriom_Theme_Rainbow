@if($banner === "login" && !theme_config('home.banner.login.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'home','value'=>'login']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'home', 'value' => 'login'])>
        @if(theme_config('home.banner.login.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('home.banner.login.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('home.banner.login.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('home.banner.login.title') ?: trans('auth.login') }}
            </h2>
        </div>
    </div>
@endif
@if($banner === "news" && !theme_config('home.banner.article.hidden'))
    <div
        @include('elements.data-config-trigger',['key' => 'home','value'=>'article']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'home', 'value' => 'article'])>
        @if(theme_config('home.banner.article.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('home.banner.article.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('home.banner.article.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('home.banner.article.title') ?: 'Dernier actualités'}}
            </h2>
        </div>
    </div>
@endif
@if($banner === "information" && !theme_config('home.banner.information.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'home','value'=>'information']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'home', 'value' => 'information'])>
        @if(theme_config('home.banner.information.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('home.banner.information.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('home.banner.information.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('home.banner.information.title') ?: 'Informations'}}
            </h2>
        </div>
    </div>
@endif

@if($banner == "faq" && !theme_config('faq.banner.faq.hidden') )
    <div @include('elements.data-config-trigger',['key' => 'faq','value'=>'faq']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'faq', 'value' => 'faq'])>
        @if(theme_config('faq.banner.faq.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('faq.banner.faq.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('faq.banner.faq.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('faq.banner.faq.title') ?: trans('faq::messages.title') }}
            </h1>
        </div>
    </div>
@endif

@if($banner === "liteBans" && !theme_config('liteBans.banner.litebans.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'liteBans','value'=>'liteBans']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'liteBans', 'value' => 'litebans'])>
        @if(theme_config('liteBans.banner.litebans.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('liteBans.banner.litebans.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('liteBans.banner.litebans.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('liteBans.banner.litebans.title') ?? trans('litebans::messages.title')}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "vote" && !theme_config('vote.banner.vote.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'vote','value'=>'vote']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'vote', 'value' => 'vote'])>
        @if(theme_config('vote.banner.vote.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('vote.banner.vote.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('vote.banner.vote.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('vote.banner.vote.title') ?? trans('vote::messages.sections.vote')}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "support" && !theme_config('support.banner.support.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'support','value'=>'support']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'support', 'value' => 'support'])>
        @if(theme_config('support.banner.support.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('support.banner.support.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('support.banner.support.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('support.banner.support.title') ?? trans('support::messages.title')}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "support-create" && !theme_config('support.banner.support-create.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'support','value'=>'support-create']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'support', 'value' => 'support-create'])>
        @if(theme_config('support.banner.support-create.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('support.banner.support-create.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('support.banner.support-create.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('support.banner.support-create.title') ?? trans('support::messages.tickets.title-open')}}
            </h1>
        </div>
    </div>
@endif
@if($banner === "support-show" && !theme_config('support.banner.support-show.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'support','value'=>'support-show']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'support', 'value' => 'support-show'])>
        @if(theme_config('support.banner.support-show.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('support.banner.support-show.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('support.banner.support-show.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('support.banner.support-show.title') ?? $ticket->subject}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "wiki" && !theme_config('wiki.banner.wiki.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'wiki','value'=>'wiki']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'wiki', 'value' => 'wiki'])>
        @if(theme_config('wiki.banner.wiki.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('wiki.banner.wiki.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('wiki.banner.wiki.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('wiki.banner.wiki.title') ?? trans('wiki::messages.title')}}
            </h1>
        </div>
    </div>
@endif
@if($banner === "wiki-show" && !theme_config('wiki.banner.wiki-show.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'wiki','value'=>'wiki-show']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'wiki', 'value' => 'wiki-show'])>
        @if(theme_config('wiki.banner.wiki-show.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('wiki.banner.wiki-show.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('wiki.banner.wiki-show.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('wiki.banner.wiki-show.title') ?? $category->name}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "changelog" && !theme_config('changelog.banner.changelog.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'changelog','value'=>'changelog']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'changelog', 'value' => 'changelog'])>
        @if(theme_config('changelog.banner.changelog.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('changelog.banner.changelog.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('changelog.banner.changelog.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('changelog.banner.changelog.title') ?? trans('changelog::messages.title')}}
            </h1>
        </div>
    </div>
@endif

@if($banner === "forum" && !theme_config('forum.banner.forum.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'forum','value'=>'forum']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'forum', 'value' => 'forum'])>
        @if(theme_config('forum.banner.forum.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('forum.banner.forum.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('forum.banner.forum.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('forum.banner.forum.title') ?? trans('forum::messages.title')}}
            </h1>
        </div>
    </div>
@endif
@if($banner === "forum-show" && !theme_config('forum.banner.forum-show.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'forum','value'=>'forum-show']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'forum', 'value' => 'forum-show'])>
        @if(theme_config('forum.banner.forum-show.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('forum.banner.forum-show.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('forum.banner.forum-show.image') ? 'no-image': ''}}">
            <h1>{{theme_config('forum.banner.forum-show.title') ?? $forum->name}}</h1>
        </div>
    </div>
@endif
@if($banner === "forum-user-edit" && !theme_config('forum.banner.forum-user-edit.hidden'))
    <div
        @include('elements.data-config-trigger',['key' => 'forum','value'=>'forum-user-edit']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'forum', 'value' => 'forum-user-edit'])>
        @if(theme_config('forum.banner.forum-user-edit.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('forum.banner.forum-user-edit.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('forum.banner.forum-user-edit.image') ? 'no-image': ''}}">
            <h1>{{theme_config('forum.banner.forum-user-edit.title') ?? trans('forum::messages.discussions.title-edit')}}</h1>
        </div>
    </div>
@endif
@if($banner === "forum-posts-edit" && !theme_config('forum.banner.forum-posts-edit.hidden'))
    <div
        @include('elements.data-config-trigger',['key' => 'forum','value'=>'forum-posts-edit']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'forum', 'value' => 'forum-posts-edit'])>
        @if(theme_config('forum.banner.forum-posts-edit.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('forum.banner.forum-posts-edit.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('forum.banner.forum-posts-edit.image') ? 'no-image': ''}}">
            <h1>{{theme_config('forum.banner.forum-posts-edit.title') ?? trans('forum::messages.posts.title-edit')}}</h1>
        </div>
    </div>
@endif
@if($banner === "forum-discussions-create" && !theme_config('forum.banner.forum-discussions-create.hidden'))
    <div
        @include('elements.data-config-trigger',['key' => 'forum','value'=>'forum-discussions-create']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'forum', 'value' => 'forum-discussions-create'])>
        @if(theme_config('forum.banner.forum-discussions-create.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('forum.banner.forum-discussions-create.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('forum.banner.forum-discussions-create.image') ? 'no-image': ''}}">
            <h1>{{theme_config('forum.banner.forum-discussions-create.title') ?? trans('forum::messages.discussions.title-create')}}</h1>
        </div>
    </div>
@endif
@if($banner === "forum-discussions-edit" && !theme_config('forum.banner.forum-discussions-edit.hidden'))
    <div
        @include('elements.data-config-trigger',['key' => 'forum','value'=>'forum-discussions-edit']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'forum', 'value' => 'forum-discussions-edit'])>
        @if(theme_config('forum.banner.forum-discussions-edit.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('forum.banner.forum-discussions-edit.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('forum.banner.forum-discussions-edit.image') ? 'no-image': ''}}">
            <h1>{{theme_config('forum.banner.forum-discussions-edit.title') ?? trans('forum::messages.discussions.title-edit')}}</h1>
        </div>
    </div>
@endif
@if($banner === "forum-discussions-show" && !theme_config('forum.banner.forum-discussions-show.hidden'))
    <div
        @include('elements.data-config-trigger',['key' => 'forum','value'=>'forum-discussions-show']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'forum', 'value' => 'forum-discussions-show'])>
        @if(theme_config('forum.banner.forum-discussions-show.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('forum.banner.forum-discussions-show.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('forum.banner.forum-discussions-show.image') ? 'no-image': ''}}">
            <h1 class="mb-0">
                {{ $discussion->title }}
            </h1>
            @foreach($discussion->tags as $tag)
                <small class="mr-4">
                    <span class="badge" style="{{ $tag->getBadgeStyle() }}">{{ $tag->name }}</span>
                </small>
            @endforeach
        </div>
    </div>
@endif
@if($banner === "shop" && !theme_config('shop.banner.shop.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'shop','value'=>'shop']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'value' => 'shop'])>
        @if(theme_config('shop.banner.shop.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('shop.banner.shop.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('shop.banner.shop.image') ? 'no-image': ''}}">
            <h1>
                {{theme_config('shop.banner.shop.title') ?? trans('shop::messages.title')}}
            </h1>
        </div>
    </div>
@endif
@if($banner === "cart" && !theme_config('shop.banner.cart.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'shop','value'=>'cart']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'value' => 'cart'])>
        @if(theme_config('shop.banner.cart.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('shop.banner.cart.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('shop.banner.cart.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('shop.banner.cart.title') ?? trans('shop::messages.cart.title')}}
            </h2>
        </div>
    </div>
@endif
@if($banner === "filter" && !theme_config('shop.banner.filter.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'shop','value'=>'filter']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'value' => 'filter'])>
        @if(theme_config('shop.banner.filter.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('shop.banner.filter.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('shop.banner.filter.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('shop.banner.filter.title') ?? 'Filtre'}}
            </h2>
        </div>
    </div>
@endif
@if($banner === "shop_account" && !theme_config('shop.banner.profile.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'shop','value'=>'profile']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'value' => 'profile'])>
        @if(theme_config('shop.banner.profile.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('shop.banner.profile.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('shop.banner.profile.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('shop.banner.profile.title') ?? 'Compte'}}
            </h2>
        </div>
    </div>
@endif
@if($banner === "coupons" && !theme_config('shop.banner.coupons.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'shop','value'=>'coupons']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'value' => 'coupons'])>
        @if(theme_config('shop.banner.coupons.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('shop.banner.coupons.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('shop.banner.coupons.image') ? 'no-image': ''}}">
            <h2>
                {{theme_config('shop.banner.coupons.title') ?? trans('shop::messages.cart.coupons')}}
            </h2>
        </div>
    </div>
@endif
@if($banner === "addCoupons" && !theme_config('shop.banner.addCoupons.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'shop','value'=>'addCoupons']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'value' => 'addCoupons'])>
        @if(theme_config('shop.banner.addCoupons.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('shop.banner.addCoupons.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('shop.banner.addCoupons.image') ? 'no-image': ''}}">
            <h2>{{theme_config('shop.banner.addCoupons.title') ?? trans('shop::messages.cart.add-coupon')}}</h2>
        </div>
    </div>
@endif

@if($banner === "payment" && !theme_config('shop.banner.payment.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'shop','value'=>'payment']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'value' => 'payment'])>
        @if(theme_config('shop.banner.payment.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('shop.banner.payment.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('shop.banner.payment.image') ? 'no-image': ''}}">
            <h1>{{theme_config('shop.banner.payment.title') ?? trans('shop::messages.payment.title')}}</h1>
        </div>
    </div>
@endif
@if($banner === "method-payment" && !theme_config('shop.banner.method-payment.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'shop','value'=>'method-payment']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'value' => 'method-payment'])>
        @if(theme_config('shop.banner.method-payment.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('shop.banner.method-payment.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('shop.banner.method-payment.image') ? 'no-image': ''}}">
            <h1>{{theme_config('shop.banner.method-payment.title') ?? trans('shop::messages.offers.title-payment')}}</h1>
        </div>
    </div>
@endif
@if($banner === "select-payment" && !theme_config('shop.banner.select-payment.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'shop','value'=>'select-payment']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'value' => 'select-payment'])>
        @if(theme_config('shop.banner.select-payment.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('shop.banner.select-payment.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('shop.banner.select-payment.image') ? 'no-image': ''}}">
            <h1>{{theme_config('shop.banner.select-payment.title') ?? trans('shop::messages.offers.title-select')}}</h1>
        </div>
    </div>
@endif
@if($banner === "myAchat" && !theme_config('shop.banner.buy.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'shop','value'=>'buy']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'shop', 'value' => 'buy'])>
        @if(theme_config('shop.banner.buy.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('shop.banner.buy.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div
            class="banner-title justify-content-between {{!theme_config('shop.banner.buy.image') ? 'no-image': ''}}">
            <h1>{{theme_config('shop.banner.buy.title') !== null ? trans('shop::messages.shop.payments') : 'Mes achats'}}</h1>
        </div>
    </div>
@endif

@if($banner === "pages" && !theme_config('pages.banner.page.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'pages','value'=>'page']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'pages', 'value' => 'page'])>
        @if(theme_config('pages.banner.page.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('pages.banner.page.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('pages.banner.page.image') ? 'no-image': ''}}">
            <h1>{{$page->title}}</h1>
        </div>
    </div>
@endif

@if($banner === "article" && !theme_config('articles.banner.article.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'articles','value'=>'article']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'articles', 'value' => 'article'])>
        @if(theme_config('articles.banner.article.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('articles.banner.article.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config('articles.banner.article.image') ? 'no-image': ''}}">
            <h1>{{$post->title}}</h1>
        </div>
    </div>
@endif
@if($banner === "allArticle" && !theme_config('articles.banner.allArticle.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'articles','value'=>'allArticle']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'articles', 'value' => 'allArticle'])>
        @if(theme_config('articles.banner.allArticle.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('articles.banner.allArticle.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div
            class="banner-title justify-content-between {{!theme_config('articles.banner.allArticle.image') ? 'no-image': ''}}">
            <h1>{{theme_config('articles.banner.allArticle.title') ?? 'Les articles'}}</h1>
            <small class="mr-3 text-sm">
                Nombre d'article(s): {{count($posts)}}
            </small>
        </div>
    </div>
@endif

@if($banner === "mySkin" && !theme_config('skinApi.banner.skin.hidden'))
    <div @include('elements.data-config-trigger',['key' => 'skinApi','value'=>'skin']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'skinApi', 'value' => 'skin'])>
        @if(theme_config('skinApi.banner.skin.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('skinApi.banner.skin.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div
            class="banner-title justify-content-between {{!theme_config('skinApi.banner.skin.image') ? 'no-image': ''}}">
            <h1>{{theme_config('skinApi.banner.skin.title') !== null ? trans('skin-api::messages.change') : 'Mon skin'}}</h1>
        </div>
    </div>
@endif

@if($banner === "advancedban" && !theme_config('advancedBan.banner.advancedBan.hidden'))
    <div
        @include('elements.data-config-trigger',['key' => 'advancedBan','value'=>'advancedBan']) class="banner" @include('elements.string-aos-banner',['bannerAos' => 'advancedBan', 'value' => 'advancedBan'])>
        @if(theme_config('advancedBan.banner.advancedBan.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config('advancedBan.banner.advancedBan.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div
            class="banner-title justify-content-between {{!theme_config('advancedBan.banner.advancedBan.image') ? 'no-image': ''}}">
            <div class="col">
                <h1>{{theme_config('advancedBan.banner.advancedBan.title') !== null ? trans('advancedban::messages.title') : 'AdvancedBan'}}</h1>
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
