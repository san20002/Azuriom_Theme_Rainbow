@if(request()->ajax() || request()->isXmlHttpRequest())
    @json(config('theme'))
@else

    @extends('admin.layouts.admin')
    @section('title', 'Themes Rainbow')

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
        </script>
    @endpush
    <div class="row">
        <div class="col-lg-2">
            <div class="list-group sticky-top" style="top: 75px">
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
                        title="Profil"
                        href="#list-profil"
                        data-toggle="list"
                        role="tab"
                        aria-controls="profil">
                    {{trans('theme::lang.profile.title')}}
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
                @if(!isset(plugins()->plugins()['changelog']))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Changelog"
                        href="#list-changelog"
                        data-toggle="list"
                        role="tab"
                        {{!isset(plugins()->plugins()['changelog'])? 'aria-disabled="true" disabled': ''}}
                        aria-controls="changelog">
                    {{ trans('theme::lang.changelog.title') }}
                </button>
                @if(!isset(plugins()->plugins()['changelog']))
                </span>
                @endif
                @if(!isset(plugins()->plugins()['faq']))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="FAQ"
                        href="#list-faq"
                        data-toggle="list"
                        role="tab"
                        {{!isset(plugins()->plugins()['faq'])? 'aria-disabled="true" disabled': ''}}
                        aria-controls="faq">
                    {{ trans('theme::lang.faq.title') }}
                </button>
                @if(!isset(plugins()->plugins()['faq']))
                </span>
                @endif
                @if(!isset(plugins()->plugins()['forum']))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Forum"
                        href="#list-forum"
                        data-toggle="list"
                        role="tab"
                        {{!isset(plugins()->plugins()['forum'])? 'aria-disabled="true" disabled': ''}}
                        aria-controls="forum">
                    {{ trans('theme::lang.forum.title') }}
                </button>
                @if(!isset(plugins()->plugins()['forum']))
                </span>
                @endif
                @if(!isset(plugins()->plugins()['litebans']))
                    <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="FAQ"
                        href="#list-litebans"
                        data-toggle="list"
                        role="tab"
                        {{!isset(plugins()->plugins()['litebans'])? 'aria-disabled="true" disabled': ''}}
                        aria-controls="litebans">
                    {{ trans('theme::lang.liteBans.title') }}
                </button>
                @if(!isset(plugins()->plugins()['litebans']))
                </span>
                @endif
                @if(!isset(plugins()->plugins()['shop']))
                            <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button
                    class="list-group-item list-group-item-action list-group-item-light opacity-50%"
                    title="Shop"
                    href="#list-shop"
                    data-toggle="list"
                    role="tab"
                    {{!isset(plugins()->plugins()['shop'])? 'aria-disabled="true" disabled': ''}}
                    aria-controls="shop">
                    {{ trans('theme::lang.shop.title') }}
                </button>
                @if(!isset(plugins()->plugins()['shop']))
                </span>
                        @endif
                        @if(!isset(plugins()->plugins()['support']))
                            <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Support"
                        href="#list-support"
                        data-toggle="list"
                        role="tab"
                        {{!isset(plugins()->plugins()['support'])? 'aria-disabled="true" disabled': ''}}
                        aria-controls="support">
                    {{ trans('theme::lang.support.title') }}
                </button>
                @if(!isset(plugins()->plugins()['support']))
                </span>
                        @endif
                        @if(!isset(plugins()->plugins()['vote']))
                            <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Vote"
                        href="#list-vote"
                        data-toggle="list"
                        role="tab"
                        {{!isset(plugins()->plugins()['vote'])? 'aria-disabled="true" disabled': ''}}
                        aria-controls="vote">
                    {{ trans('theme::lang.vote.title') }}
                </button>
                @if(!isset(plugins()->plugins()['vote']))
                </span>
                        @endif
                        @if(!isset(plugins()->plugins()['wiki']))
                            <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                @endif
                <button class="list-group-item list-group-item-action list-group-item-light"
                        title="Wiki"
                        href="#list-wiki"
                        data-toggle="list"
                        role="tab"
                        {{!isset(plugins()->plugins()['wiki'])? 'aria-disabled="true" disabled': ''}}
                        aria-controls="wiki">
                    {{ trans('theme::lang.wiki.title') }}
                </button>
                    @if(!isset(plugins()->plugins()['wiki']))
                    </span>
                @endif
            </div>
        </div>
        @php
            $animations = [
	            'Fade' => ['none','fade', 'fade-up', 'fade-down', 'fade-left', 'fade-right', 'fade-up-right', 'fade-up-left', 'fade-down-right', 'fade-down-left'],
                'Flip' => ['flip-up', 'flip-down', 'flip-left', 'flip-right'],
                'Slide' => ['slide-up', 'slide-down', 'slide-left', 'slide-right'],
                'Zoom' => ['zoom-in', 'zoom-in-up', 'zoom-in-down', 'zoom-in-left', 'zoom-in-right', 'zoom-out', 'zoom-out-up', 'zoom-out-down', 'zoom-out-left', 'zoom-out-right']
            ];
            $easingAnimations = [
                'linear', 'ease', 'ease-in', 'ease-out', 'ease-in-out', 'ease-in-back', 'ease-out-back', 'ease-in-out-back', 'ease-in-sine',
                'ease-out-sine', 'ease-in-out-sine', 'ease-in-quad', 'ease-out-quad', 'ease-in-out-quad', 'ease-in-cubic', 'ease-out-cubic',
                'ease-in-out-cubic', 'ease-in-quart', 'ease-out-quart', 'ease-in-out-quart'
            ];
			$counterPartial = 1;
            $allImagesStokage = \Azuriom\Models\Image::all()
        @endphp
        <div class="col-lg-10  mt-lg-5 mt-5 sidebar-dark">
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
                    <div class="tab-pane fade card shadow mb-4"
                         id="list-article"
                         role="tabpanel" aria-labelledby="list-article-list">
                        @include('admin.config.article')
                    </div>

                    <div class="tab-pane fade card shadow mb-4" id="list-footer"
                         role="tabpanel" aria-labelledby="list-footer-list">
                        @include('admin.config.footer')
                    </div>
                    <div class="tab-pane fade card shadow mb-4" id="list-vote" role="tabpanel"
                         aria-labelledby="list-vote-list">
                        @include('admin.config.vote')
                    </div>
                    <div class="tab-pane fade card shadow mb-4" id="list-faq" role="tabpanel"
                         aria-labelledby="list-faq-list">
                        @include('admin.config.faq')
                    </div>
                    <div class="tab-pane fade card shadow mb-4" id="list-litebans" role="tabpanel"
                         aria-labelledby="list-litebans-list">
                        @include('admin.config.litebans')
                    </div>
                    <div class="tab-pane fade card shadow mb-4" id="list-wiki" role="tabpanel"
                         aria-labelledby="list-wiki-list">
                        @include('admin.config.wiki')
                    </div>
                    <div class="tab-pane fade card shadow mb-4" id="list-support" role="tabpanel"
                         aria-labelledby="list-support-list">
                        @include('admin.config.support')
                    </div>
                    <div class="tab-pane fade card shadow mb-4" id="list-changelog" role="tabpanel"
                         aria-labelledby="list-changelog-list">
                        @include('admin.config.changelog')
                    </div>
                    <div class="tab-pane fade card shadow mb-4" id="list-shop" role="tabpanel"
                         aria-labelledby="list-shop-list">
                        @include('admin.config.shop')
                    </div>
                    <div class="tab-pane fade card shadow mb-4" id="list-forum" role="tabpanel"
                         aria-labelledby="list-forum-list">
                        @include('admin.config.forum')
                    </div>
                    <div class="tab-pane fade card shadow mb-4" id="list-page" role="tabpanel"
                         aria-labelledby="list-page-list">
                        @include('admin.config.page')
                    </div>
                    <div class="tab-pane fade card shadow mb-4" id="list-profil" role="tabpanel"
                         aria-labelledby="list-profil-list">
                        @include('admin.config.profile')
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><i
                        class="fas fa-save"></i> {{ trans('messages.actions.save') }}</button>
            </form>
        </div>
    </div>
@endsection
@endif
