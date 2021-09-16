@if($banner === "news" && !config('theme.home.banner.news.hidden'))
    <div class="banner">
        @if(config('theme.home.banner.news.image'))
            <div class="banner-icon">
                <img src="{{image_url(config('theme.home.banner.news.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!config('theme.home.banner.news.image') ? 'no-image': ''}}">
            {{config('theme.home.banner.news.title') ? config('theme.home.banner.news.title') : 'Dernières actualitées'}}
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
            {{config('theme.home.banner.info.title')? config('theme.home.banner.info.title') : 'Informations'}}
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
            {{config('theme.faq.banner.faq.title')? config('theme.faq.banner.faq.title') : trans('faq::messages.title') }}
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
            {{config('theme.liteBans.banner.liteban.title') !== null ? config('theme.liteBans.banner.liteban.title') : trans('litebans::messages.title')}}
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
            {{config('theme.vote.banner.vote.title') !== null ? config('theme.vote.banner.vote.title') : trans('vote::messages.title')}}
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
            {{config('theme.support.banner.support.title') !== null ? config('theme.support.banner.support.title') : trans('support::messages.title')}}
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
            {{config('theme.wiki.banner.wiki.title') !== null ? config('theme.wiki.banner.wiki.title') : trans('wiki::messages.title')}}
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
            {{config('theme.changelog.banner.changelog.title') !== null ? config('theme.changelog.banner.changelog.title') : trans('changelog::messages.title')}}
        </div>
    </div>
@endif
