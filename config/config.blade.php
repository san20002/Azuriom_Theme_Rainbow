@if(request()->ajax() || request()->isXmlHttpRequest())
    @json(config('theme'))
@else

    @extends('admin.layouts.admin')
    @section('title', 'Thème Rainbow')

@include('admin.elements.editor')

@section('content')
    @push('styles')
        <style>
            #wrapper #content-wrapper {
                overflow-x: inherit;
            }

            a {
                scroll-behavior: smooth;
            }
        </style>
    @endpush
    @push('footer-scripts')
        <script>
            document.querySelectorAll('[data-image-preview-select]').forEach(function (el) {
                imagePreviewSelect(el);
            });

            function imagePreviewSelect(el) {
                el.addEventListener('change', function () {
                    if (el.value) {
                        const reader = new FileReader();
                        const preview = document.getElementById(el.getAttribute('data-image-preview-select'));

                        preview.src = 'https://' + window.location.hostname + '/storage/img/' + el.value;
                        preview.classList.remove('d-none');

                        reader.onload = function (el) {
                            if (preview) {
                                preview.src = el.currentTarget.result;
                                preview.classList.remove('d-none');
                            }
                        };

                    }
                });
            }


            document.getElementById('configForm').addEventListener('submit', function () {
                let i = 0;
                configFormIconMenus(i)
                configFormLink(i)
                configFormLiens(i)
                configFormCondition(i)
                configFormSlider(i)
            });

            document.querySelectorAll('.list-group button').forEach(function (event) {
                event.addEventListener('click', function (e) {
                    scrollTo(document.getElementById(event.getAttribute('href').split('#')[1]))
                })
            })
            scrollTo = (element) => {
                window.scroll({
                    behavior: 'smooth',
                    left: 0,
                    top: element.offsetTop + 150
                });
            }
            window.addEventListener('DOMContentLoaded', function (event) {
                document.querySelectorAll('.js-select-aos').forEach(function (event) {
                    if (event.value !== 'none') {
                        event.closest('.js-aos').querySelector('.js-aos-active').classList.remove('d-none')
                    } else {
                        event.closest('.js-aos').querySelector('.js-aos-active').classList.add('d-none')
                    }
                })
            })
            document.querySelectorAll('.js-select-aos').forEach(function (event) {
                event.addEventListener('change', function (select) {
                    if (select.target.value !== 'none') {
                        event.closest('.js-aos').querySelector('.js-aos-active').classList.remove('d-none')
                    } else {
                        event.closest('.js-aos').querySelector('.js-aos-active').classList.add('d-none')
                    }
                })
            })
            document.querySelectorAll('.js-select-col').forEach(function (event) {
                event.addEventListener('change', function (select) {
                    let elementData = event.dataset.col;
                    let element = event.closest('.js-detect-col');
                    for (let i = 2; i <= 12; i++) {
                        console.log(elementData)
                        let col = 'col-' + elementData + '-' + i
                        element.classList.remove(col)
                        element.classList.add(select.target.value)
                    }
                })
            })
            document.querySelectorAll('.js-select-order').forEach(function (event) {
                event.addEventListener('change', function (select) {
                    let element = event.closest('.js-detect-order');
                    for (let i = 2; i <= 12; i++) {
                        let col = 'order-' + i
                        element.classList.remove(col)
                        element.classList.add('order-' + select.target.value)
                    }
                })
            })
        </script>
    @endpush
    @php
        $articles = \Azuriom\Models\Post::all();
        $pages = \Azuriom\Models\Page::all();
        if (plugins()->isEnabled('support')){
        $tickets = \Azuriom\Plugin\Support\Models\Ticket::all();
        }
        if (plugins()->isEnabled('wiki')){
        $wikis = \Azuriom\Plugin\Wiki\Models\Category::all();
        }
        if (plugins()->isEnabled('forum')){
        $forums = \Azuriom\Plugin\Forum\Models\Forum::all();
        $forumsDiscussions = \Azuriom\Plugin\Forum\Models\Discussion::all();
        }
        if (plugins()->isEnabled('jirai')){
        $jirai = \Azuriom\Plugin\Jirai\Models\JiraiChangelog::all();
        $jiraiIssue = \Azuriom\Plugin\Jirai\Models\JiraiIssue::all();
        $jiraiMessages = \Azuriom\Plugin\Jirai\Models\JiraiMessage::all();
        }
        $animations = [
            'No effect'=>['none'],
            'Fade' => ['fade', 'fade-up', 'fade-down', 'fade-left', 'fade-right', 'fade-up-right', 'fade-up-left', 'fade-down-right', 'fade-down-left'],
            'Flip' => ['flip-up', 'flip-down', 'flip-left', 'flip-right'],
            'Slide' => ['slide-up', 'slide-down', 'slide-left', 'slide-right'],
            'Zoom' => ['zoom-in', 'zoom-in-up', 'zoom-in-down', 'zoom-in-left', 'zoom-in-right', 'zoom-out', 'zoom-out-up', 'zoom-out-down', 'zoom-out-left', 'zoom-out-right']
        ];
        $easingAnimations = [
            'linear', 'ease', 'ease-in', 'ease-out', 'ease-in-out', 'ease-in-back', 'ease-out-back', 'ease-in-out-back', 'ease-in-sine',
            'ease-out-sine', 'ease-in-out-sine', 'ease-in-quad', 'ease-out-quad', 'ease-in-out-quad', 'ease-in-cubic', 'ease-out-cubic',
            'ease-in-out-cubic', 'ease-in-quart', 'ease-out-quart', 'ease-in-out-quart'
        ];
        $placements = [
            'top-bottom','center-bottom','bottom-bottom','top-center','center-center'
        ];
        $colLgs = [
            'col-lg-2','col-lg-3','col-lg-4','col-lg-5','col-lg-6','col-lg-7','col-lg-8','col-lg-9','col-lg-10','col-lg-11','col-lg-12',
        ];
        $counterPartial = 1;
        $allImagesStokage = \Azuriom\Models\Image::all();
        $navbars = \Azuriom\Models\NavbarElement::where('parent_id', null)->orderBy('position')
            ->get();
    @endphp
    <div class="row mb-5">
        <div class="col-12 mb-3">
            {!!  trans('theme::lang.config.info') !!}
        </div>
        <div class="col-lg-2">
            <div class="list-group sticky-top">
                <button class="list-group-item list-group-item-action list-group-item-light active"
                        title="Entête"
                        href="#list-entete"
                        data-toggle="list"
                        role="tab"
                        aria-controls="entete">
                    {{trans('theme::lang.global.title')}}
                </button>
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Page Accueil"
                        href="#list-home"
                        data-toggle="list"
                        role="tab"
                        aria-controls="home">
                    {{trans('theme::lang.home.title')}}
                </button>
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Article"
                        href="#list-article"
                        data-toggle="list"
                        role="tab"
                        aria-controls="article">
                    {{trans('theme::lang.articles.title')}}
                </button>
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Pages"
                        href="#list-page"
                        data-toggle="list"
                        role="tab"
                        aria-controls="page">
                    {{trans('theme::lang.pages.title')}}
                </button>
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="{{ trans('theme::lang.config.footer.name') }}"
                        href="#list-footer"
                        data-toggle="list"
                        role="tab"
                        aria-controls="footer">
                    {{ trans('theme::lang.footer.title') }}
                </button>
                @if(!plugins()->isEnabled('advancedban'))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="advancedBan"
                        href="#list-advancedBan"
                        data-toggle="list"
                        role="tab"
                        {{!plugins()->isEnabled('advancedban')? 'aria-disabled="true" disabled': ''}}
                        aria-controls="advancedBan">
                    {{ trans('theme::lang.advancedBan.title') }}
                </button>
                @if(!plugins()->isEnabled('advancedban'))
                </span>
                @endif
                @if(!plugins()->isEnabled('changelog'))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Changelog"
                        href="#list-changelog"
                        data-toggle="list"
                        role="tab"
                        {{!plugins()->isEnabled('changelog')? 'aria-disabled="true" disabled': ''}}
                        aria-controls="changelog">
                    {{ trans('theme::lang.changelog.title') }}
                </button>
                @if(!plugins()->isEnabled('changelog'))
                </span>
                @endif
                @if(!plugins()->isEnabled('cps'))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="CPS"
                        href="#list-cps"
                        data-toggle="list"
                        role="tab"
                        {{!plugins()->isEnabled('cps')? 'aria-disabled="true" disabled': ''}}
                        aria-controls="cps">
                    {{ trans('theme::lang.cps.title') }}
                </button>
                @if(!plugins()->isEnabled('cps'))
                </span>
                @endif
                @if(!plugins()->isEnabled('faq'))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="FAQ"
                        href="#list-faq"
                        data-toggle="list"
                        role="tab"
                        {{!plugins()->isEnabled('faq')? 'aria-disabled="true" disabled': ''}}
                        aria-controls="faq">
                    {{ trans('theme::lang.faq.title') }}
                </button>
                @if(!plugins()->isEnabled('faq'))
                </span>
                @endif
                @if(!plugins()->isEnabled('forum'))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Forum"
                        href="#list-forum"
                        data-toggle="list"
                        role="tab"
                        {{!plugins()->isEnabled('forum')? 'aria-disabled="true" disabled': ''}}
                        aria-controls="forum">
                    {{ trans('theme::lang.forum.title') }}
                </button>
                @if(!plugins()->isEnabled('forum'))
                </span>
                @endif
                @if(!plugins()->isEnabled('invoicepro'))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Invoicepro"
                        href="#list-invoicepro"
                        data-toggle="list"
                        role="tab"
                        {{!plugins()->isEnabled('invoicepro')? 'aria-disabled="true" disabled': ''}}
                        aria-controls="invoicepro">
                    {{ trans('theme::lang.invoicepro.title') }}
                </button>
                @if(!plugins()->isEnabled('invoicepro'))
                </span>
                @endif
                @if(!plugins()->isEnabled('jirai'))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Jirai"
                        href="#list-jirai"
                        data-toggle="list"
                        role="tab"
                        {{!plugins()->isEnabled('jirai')? 'aria-disabled="true" disabled': ''}}
                        aria-controls="jirai">
                    {{ trans('theme::lang.jirai.title') }}
                </button>
                @if(!plugins()->isEnabled('jirai'))
                </span>
                @endif
                @if(!plugins()->isEnabled('litebans'))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Litebans"
                        href="#list-litebans"
                        data-toggle="list"
                        role="tab"
                        {{!plugins()->isEnabled('litebans')? 'aria-disabled="true" disabled': ''}}
                        aria-controls="litebans">
                    {{ trans('theme::lang.liteBans.title') }}
                </button>
                @if(!plugins()->isEnabled('litebans'))
                </span>
                @endif
                @if(!plugins()->isEnabled('paysafecardmanual'))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Paysafecardmanual"
                        href="#list-paysafecardmanual"
                        data-toggle="list"
                        role="tab"
                        {{!plugins()->isEnabled('paysafecardmanual')? 'aria-disabled="true" disabled': ''}}
                        aria-controls="paysafecardmanual">
                    {{ trans('theme::lang.paysafecardmanual.title') }}
                </button>
                @if(!plugins()->isEnabled('paysafecardmanual'))
                </span>
                @endif
                @if(!plugins()->isEnabled('shop'))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button
                    class="list-group-item list-group-item-action list-group-item-light opacity-50%"
                    title="Shop"
                    href="#list-shop"
                    data-toggle="list"
                    role="tab"
                    {{!plugins()->isEnabled('shop')? 'aria-disabled="true" disabled': ''}}
                    aria-controls="shop">
                    {{ trans('theme::lang.shop.title') }}
                </button>
                @if(!plugins()->isEnabled('shop'))
                </span>
                @endif
                @if(!plugins()->isEnabled('skin-api'))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="skinApi"
                        href="#list-skinApi"
                        data-toggle="list"
                        role="tab"
                        {{!plugins()->isEnabled('skin-api')? 'aria-disabled="true" disabled': ''}}
                        aria-controls="skinApi">
                    {{trans('theme::lang.skinApi.title')}}
                </button>
                @if(!plugins()->isEnabled('skin-api'))
                </span>
                @endif
                @if(!plugins()->isEnabled('support'))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Support"
                        href="#list-support"
                        data-toggle="list"
                        role="tab"
                        {{!plugins()->isEnabled('support')? 'aria-disabled="true" disabled': ''}}
                        aria-controls="support">
                    {{ trans('theme::lang.support.title') }}
                </button>
                @if(!plugins()->isEnabled('support'))
                </span>
                @endif
                @if(!plugins()->isEnabled('vote'))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Vote"
                        href="#list-vote"
                        data-toggle="list"
                        role="tab"
                        {{!plugins()->isEnabled('vote')? 'aria-disabled="true" disabled': ''}}
                        aria-controls="vote">
                    {{ trans('theme::lang.vote.title') }}
                </button>
                @if(!plugins()->isEnabled('vote'))
                </span>
                @endif
                @if(!plugins()->isEnabled('wiki'))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Wiki"
                        href="#list-wiki"
                        data-toggle="list"
                        role="tab"
                        {{!plugins()->isEnabled('wiki')? 'aria-disabled="true" disabled': ''}}
                        aria-controls="wiki">
                    {{ trans('theme::lang.wiki.title') }}
                </button>
                    @if(!plugins()->isEnabled('wiki'))
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-10  mt-lg-0 mt-5 sidebar-dark">
            <form action="{{ route('admin.themes.config', $theme) }}" method="POST" id="configForm">
                @csrf

                <input type="hidden" name="project[color_themes]"
                       value="{{ old('project[color_themes]', config('theme.project.color_themes')) }}">
                <input type="hidden" name="project[color_themes_data]"
                       value="{{ old('project[color_themes_data]', config('theme.project.color_themes_data')) }}">

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active show card shadow mb-4"
                         id="list-entete"
                         role="tabpanel" aria-labelledby="list-entete-list">
                        @include('admin.config.header')
                    </div>

                    <div class="tab-pane fade card shadow mb-4"
                         id="list-home"
                         role="tabpanel" aria-labelledby="list-home-list">
                        @include('admin.config.home')
                    </div>
{{--                    @if(count($articles) >= 1 )--}}
                        <div class="tab-pane fade card shadow mb-4"
                             id="list-article"
                             role="tabpanel" aria-labelledby="list-article-list">
                            @include('admin.config.article')
                        </div>
{{--                    @endif--}}

                    <div class="tab-pane fade card shadow mb-4" id="list-footer"
                         role="tabpanel" aria-labelledby="list-footer-list">
                        @include('admin.config.footer')
                    </div>

                    <div class="tab-pane fade card shadow mb-4" id="list-page" role="tabpanel"
                         aria-labelledby="list-page-list">
                        @include('admin.config.page')
                    </div>

                    @if(plugins()->isEnabled('advancedban'))
                        <div class="tab-pane fade card shadow mb-4" id="list-advancedBan" role="tabpanel"
                             aria-labelledby="list-advancedBan-list">
                            @include('admin.config.advancedban')
                        </div>
                    @endif
                    @if(plugins()->isEnabled('vote'))
                        <div class="tab-pane fade card shadow mb-4" id="list-vote" role="tabpanel"
                             aria-labelledby="list-vote-list">
                            @include('admin.config.vote')
                        </div>
                    @endif
                    @if(plugins()->isEnabled('faq'))
                        <div class="tab-pane fade card shadow mb-4" id="list-faq" role="tabpanel"
                             aria-labelledby="list-faq-list">
                            @include('admin.config.faq')
                        </div>
                    @endif
                    @if(plugins()->isEnabled('invoicepro'))
                        <div class="tab-pane fade card shadow mb-4" id="list-invoicepro" role="tabpanel"
                             aria-labelledby="list-invoicepro-list">
                            @include('admin.config.invoicepro')
                        </div>
                    @endif
                    @if(plugins()->isEnabled('jirai'))
                        <div class="tab-pane fade card shadow mb-4" id="list-jirai" role="tabpanel"
                             aria-labelledby="list-jirai-list">
                            @include('admin.config.jirai')
                        </div>
                    @endif
                    @if(plugins()->isEnabled('litebans'))
                        <div class="tab-pane fade card shadow mb-4" id="list-litebans" role="tabpanel"
                             aria-labelledby="list-litebans-list">
                            @include('admin.config.litebans')
                        </div>
                    @endif
                    @if(plugins()->isEnabled('paysafecardmanual'))
                        <div class="tab-pane fade card shadow mb-4" id="list-paysafecardmanual" role="tabpanel"
                             aria-labelledby="list-paysafecardmanual-list">
                            @include('admin.config.paysafecardmanual')
                        </div>
                    @endif
                    @if(plugins()->isEnabled('wiki'))
                        <div class="tab-pane fade card shadow mb-4" id="list-wiki" role="tabpanel"
                             aria-labelledby="list-wiki-list">
                            @include('admin.config.wiki')
                        </div>
                    @endif
                    @if(plugins()->isEnabled('support'))
                        <div class="tab-pane fade card shadow mb-4" id="list-support" role="tabpanel"
                             aria-labelledby="list-support-list">
                            @include('admin.config.support')
                        </div>
                    @endif
                    @if(plugins()->isEnabled('changelog'))
                        <div class="tab-pane fade card shadow mb-4" id="list-changelog" role="tabpanel"
                             aria-labelledby="list-changelog-list">
                            @include('admin.config.changelog')
                        </div>
                    @endif
                    @if(plugins()->isEnabled('cps'))
                        <div class="tab-pane fade card shadow mb-4" id="list-cps" role="tabpanel"
                             aria-labelledby="list-cps-list">
                            @include('admin.config.cps')
                        </div>
                    @endif
                    @if(plugins()->isEnabled('shop'))
                        <div class="tab-pane fade card shadow mb-4" id="list-shop" role="tabpanel"
                             aria-labelledby="list-shop-list">
                            @include('admin.config.shop')
                        </div>
                    @endif
                    @if(plugins()->isEnabled('forum'))
                        <div class="tab-pane fade card shadow mb-4" id="list-forum" role="tabpanel"
                             aria-labelledby="list-forum-list">
                            @include('admin.config.forum')
                        </div>
                    @endif
                    @if(plugins()->isEnabled('skin-api'))
                        <div class="tab-pane fade card shadow mb-4" id="list-skinApi" role="tabpanel"
                             aria-labelledby="list-skinApi-list">
                            @include('admin.config.skin')
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary"><i
                        class="fas fa-save"></i> {{ trans('messages.actions.save') }}</button>
            </form>
        </div>
    </div>
@endsection
@endif
