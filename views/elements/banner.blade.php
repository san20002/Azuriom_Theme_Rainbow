@if(!theme_config($banner.'.banner.'.$value.'.hidden'))
    <div
        @include('elements.data-config-trigger',['key' => $banner,'value'=>$value]) class="banner" @include('elements.string-aos-banner',['bannerAos' => $banner, 'value' => $value])>
        @if(theme_config($banner.'.banner.'.$value.'.image'))
            <div class="banner-icon">
                <img src="{{image_url(theme_config($banner.'.banner.'.$value.'.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config($banner.'.banner.'.$value.'.image') ? 'no-image': ''}}">
            @if(!theme_config($banner.'.banner.'.$value.'.hidden'))

                @if($banner === "home" && $value === "login")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?: trans('auth.login') }}</h2>
                @endif

                @if($banner === "home" &&  $value === "article")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?: trans('messages.posts.posts')}}</h2>
                @endif

                @if($banner === "home" &&  $value === "information")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?: 'Informations'}}</h2>
                @endif

                @if($banner === "login" &&  $value === "login")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?: trans('auth.login')}}</h2>
                @endif

                @if($banner === "register" &&  $value === "register")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?: trans('auth.register')}}</h2>
                @endif

                @if($banner === "passwordReset" &&  $value === "passwordReset")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?: trans('auth.passwords.reset')}}</h2>
                @endif

                @if($banner === "faq" &&  $value === "faq")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?: trans('faq::messages.title') }}</h1>
                @endif

                @if($banner === "liteBans" &&  $value === "litebans")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('litebans::messages.title')}}</h1>
                @endif

                @if($banner === "vote" &&  $value === "vote")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('vote::messages.sections.vote')}}</h1>
                @endif

                @if($banner === "support" &&  $value === "support")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('support::messages.title')}}</h1>
                @endif

                @if($banner === "support" &&  $value === "support-create")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('support::messages.tickets.title-open')}}</h1>
                @endif

                @if($banner === "support" &&  $value === "support-show")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? $ticket->subject}}</h1>
                @endif

                @if($banner === "wiki" &&  $value === "wiki")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('wiki::messages.title')}}</h1>
                @endif

                @if($banner === "wiki" &&  $value === "wiki-show")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ? theme_config($banner.'.banner.'.$value.'.title').' '.$category->name: $category->name}}</h1>
                @endif

                @if($banner === "changelog" &&  $value === "changelog")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('changelog::messages.title')}}</h1>
                @endif

                @if($banner === "forum" &&  $value === "forum")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('forum::messages.title')}}</h1>
                @endif

                @if($banner === "forum" &&  $value === "forum-show")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? $forum->name}}</h1>
                @endif

                @if($banner === "forum" &&  $value === "forum-user-edit")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('forum::messages.discussions.title-edit')}}</h1>
                @endif

                @if($banner === "forum" &&  $value === "forum-posts-edit")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('forum::messages.posts.title-edit')}}</h1>
                @endif

                @if($banner === "forum" &&  $value === "forum-discussions-create")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('forum::messages.discussions.title-create')}}</h1>
                @endif

                @if($banner === "forum" &&  $value === "forum-discussions-edit")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('forum::messages.discussions.title-edit')}}</h1>
                @endif

                @if($banner === "forum" &&  $value === "forum-discussions-show")
                    <h1 class="mb-0">{{ $discussion->title }}</h1>
                    @foreach($discussion->tags as $tag)
                        <small class="mx-4">
                            <span class="badge" style="{{ $tag->getBadgeStyle() }}">{{ $tag->name }}</span>
                        </small>
                    @endforeach
                @endif

                @if($banner === "shop" &&  $value === "shop")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('shop::messages.title')}}</h1>
                @endif

                @if($banner === "shop" &&  $value === "cart")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('shop::messages.cart.title')}}</h2>
                @endif

                @if($banner === "shop" &&  $value === "filter")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?? 'Filtre'}}</h2>
                @endif

                @if($banner === "shop" &&  $value === "profile")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?? 'Compte'}}</h2>
                @endif

                @if($banner === "shop" &&  $value === "coupons")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('shop::messages.cart.coupons')}}</h2>
                @endif

                @if($banner === "shop" &&  $value === "addCoupons")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('shop::messages.cart.add-coupon')}}</h2>
                @endif

                @if($banner === "shop" &&  $value === "payment")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('shop::messages.payment.title')}}</h1>
                @endif

                @if($banner === "shop" &&  $value === "method-payment")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('shop::messages.offers.title-payment')}}</h1>
                @endif

                @if($banner === "shop" &&  $value === "select-payment")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('shop::messages.offers.title-select')}}</h1>
                @endif

                @if($banner === "shop" && $value === "buy")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') !== null ? trans('shop::messages.shop.payments') : 'Mes achats'}}</h1>
                @endif

                @if($banner === "pages" && $value === "page")
                    <h1>{{$page->title}}</h1>
                @endif

                @if($banner === "articles" && $value === "article")
                    <h1>{{$post->title}}</h1>
                @endif

                @if($banner === "articles" && $value === "allArticle")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('messages.posts.posts')}}</h1>
                    <small class="mx-3 text-sm">
                        Nombre d'article(s): {{count($posts)}}
                    </small>
                @endif

                @if($banner === "skinApi" && $value === "skin")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('skin-api::messages.change')}}</h1>
                @endif

                @if($banner === "staff" && $value === "staff")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('staff::messages.title')}}</h1>
                @endif

                @if($banner === "advancedBan" && $value === "advancedBan")
                    <div class="col">
                        <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('advancedban::messages.title')}}</h1>
                    </div>
                    <div class="col">
                        <form class="form-inline mb-0 float-right" action="{{ route('advancedban.index') }}"
                              method="GET">
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
                @endif

                @if($banner === "cps" && $value === "cps")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('cps::messages.title')}}</h1>
                @endif

                @if($banner === "paysafecardmanual" && $value === "paysafecardmanual")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('paysafecardmanual::messages.title')}}</h1>
                @endif

                @if($banner === "jirai" && $value === "changelog")
                    <h2 class="d-flex flex-row justify-content-between w-100">
                        {{theme_config($banner.'.banner.'.$value.'.title') ?? trans('jirai::messages.changelog')}}
                        @auth @can('jirai.changelog.post')
                            <a href="{{ route('jirai.changelogs.create') }}"
                               class="btn btn-primary mr-3">{{ trans('jirai::messages.new') }}</a>
                        @endcan @endauth
                    </h2>
                @endif

                @if($banner === "jirai" && $value === "bugs")
                    <h2 class="d-flex flex-row justify-content-between w-100">
                        {{theme_config($banner.'.banner.'.$value.'.title') ?? trans('jirai::messages.bugs')}}
                        @auth @can('jirai.issue.post')
                            <a href="{{ route('jirai.issues.create') }}?type=bugs"
                               class="btn btn-primary mr-3">{{ trans('jirai::messages.new') }}</a>
                        @endauth @endcan
                    </h2>
                @endif

                @if($banner === "jirai" && $value === "suggestions")
                    <h2 class="d-flex flex-row justify-content-between w-100">
                        {{theme_config($banner.'.banner.'.$value.'.title') ?? trans('jirai::messages.suggestions')}}
                        @auth @can('jirai.issue.post')
                            <a href="{{ route('jirai.issues.create') }}?type=suggestion"
                               class="btn btn-primary mr-3">{{ trans('jirai::messages.new') }}</a>
                        @endauth @endcan
                    </h2>
                @endif

            @endif
        </div>
    </div>
@endif
