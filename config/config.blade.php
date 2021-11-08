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
        $baseMenu  = [
                'global' => [
                    'is_enabled' => true,
                ],
                'home' => [
                    'is_enabled' => true,
                ],
                'articles' => [
                    'is_enabled' => true,
                ],
                'pages' => [
                    'is_enabled' => true,
                ],
                'footer' => [
                    'is_enabled' => true,
                ],
            ];
        $pluginMenu  = [
                'advancedBan' => [
                    'is_enabled' => plugins()->isEnabled('advancedban'),
                ],
                'changelog' => [
                    'is_enabled' => plugins()->isEnabled('changelog'),
                ],
                'cps' => [
                    'is_enabled' => plugins()->isEnabled('cps'),
                ],
                'faq' => [
                    'is_enabled' => plugins()->isEnabled('faq'),
                ],
                'forum' => [
                    'is_enabled' => plugins()->isEnabled('forum'),
                ],
                'invoicepro' => [
                    'is_enabled' => plugins()->isEnabled('invoicepro'),
                ],
                'jirai' => [
                    'is_enabled' => plugins()->isEnabled('jirai'),
                ],
                'liteBans' => [
                    'is_enabled' => plugins()->isEnabled('litebans'),
                ],
                'paysafecardmanual' => [
                    'is_enabled' => plugins()->isEnabled('paysafecardmanual'),
                ],
                'shop' => [
                    'is_enabled' => plugins()->isEnabled('shop'),
                ],
                'skinApi' => [
                    'is_enabled' => plugins()->isEnabled('skin-api'),
                ],
                'support' => [
                    'is_enabled' => plugins()->isEnabled('support'),
                ],
                'staff' => [
                    'is_enabled' => plugins()->isEnabled('staff'),
                ],
                'vote' => [
                    'is_enabled' => plugins()->isEnabled('vote'),
                ],
                'wiki' => [
                    'is_enabled' => plugins()->isEnabled('wiki'),
                ],
            ];
            uasort($pluginMenu, function ($a, $b) {
                return $b['is_enabled'] <=> $a['is_enabled'];
            });

		    $menus =  $baseMenu + $pluginMenu;

            $themes = [
                1 => 'Style N°1',
                2 => 'Style N°2',
                ];


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
                @foreach ( $menus as $key => $values)
                    @if(!$values['is_enabled'])
                        <span data-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                      @endif
                     <button
                         class="list-group-item list-group-item-action list-group-item-light @if($loop->index == 0) active @endif"
                         title="{{$key}}"
                         href="#list-{{$key}}"
                         data-toggle="list"
                         role="tab"
                         @if(!$values['is_enabled'])
                         aria-disabled="false" disabled
                         @endif
                         aria-controls="{{$key}}">
                      {{trans('theme::lang.'.$key.'.title')}}
                     </button>
                    @if(!$values['is_enabled'])
                      </span>
                    @endif
                @endforeach
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
                    @foreach ( $menus as $key => $values)
                        @if($values['is_enabled'])
                            <div class="tab-pane fade card shadow mb-4 @if($loop->index == 0) active show @endif"
                                 id="list-{{$key}}" role="tabpanel"
                                 aria-labelledby="list-{{$key}}-list">
                                @includeIf("admin.config.$key")
                            </div>
                        @endif
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary"><i
                        class="fas fa-save"></i> {{ trans('messages.actions.save') }}</button>
            </form>
        </div>
    </div>
@endsection
@endif
