@if(request()->ajax() || request()->isXmlHttpRequest())
    @json(config('theme'))
@else

    @extends('admin.layouts.admin')
    @section('title', 'Dofus default - Config')

@include('admin.elements.editor')

@section('content')
    @push('styles')
        <style>
            #wrapper #content-wrapper {
                overflow-x: inherit;
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
                        console.log(preview)

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
                configFormSlider(i)
            });
        </script>
    @endpush
    <div class="row">
        <div class="col-2">
            <div class="list-group sticky-top" style="top: 75px">
                <a class="list-group-item list-group-item-action list-group-item-light active"
                   title="Entête"
                   href="#list-entete"
                   data-toggle="list"
                   role="tab"
                   aria-controls="entete">
                    Entête
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light"
                   title="Page Accueil"
                   href="#list-home"
                   data-toggle="list"
                   role="tab"
                   aria-controls="home">
                    Page Accueil
                </a>

                <a class="list-group-item list-group-item-action list-group-item-light"
                   title="Article"
                   href="#list-article"
                   data-toggle="list"
                   role="tab"
                   aria-controls="article">
                    Article
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light"
                   title="{{ trans('theme::lang.config.footer.name') }}"
                   href="#list-footer"
                   data-toggle="list"
                   role="tab"
                   aria-controls="footer">
                    {{ trans('theme::lang.config.footer.name') }}
                </a>

                <a class="list-group-item list-group-item-action list-group-item-light"
                   title="{{ trans('theme::lang.config.slider.name') }}"
                   href="#list-slider"
                   data-toggle="list"
                   role="tab"
                   aria-controls="slider">
                    {{ trans('theme::lang.config.slider.name') }}
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light"
                   title="Vote"
                   href="#list-vote"
                   data-toggle="list"
                   role="tab"
                   aria-controls="vote">
                    Vote
                </a>
            </div>
        </div>
        <div class="col-10">
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
                    <div class="tab-pane fade card shadow mb-4" id="list-slider" role="tabpanel"
                         aria-labelledby="list-slider-list">
                        @include('admin.config.slider')
                    </div>
                    <div class="tab-pane fade card shadow mb-4" id="list-vote" role="tabpanel"
                         aria-labelledby="list-vote-list">
                        @include('admin.config.vote')
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><i
                        class="fas fa-save"></i> {{ trans('messages.actions.save') }}</button>
            </form>
        </div>
    </div>
@endsection
@endif
