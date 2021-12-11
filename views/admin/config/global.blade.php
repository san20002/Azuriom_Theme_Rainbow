@push('footer-scripts')
    <script>
        function addCommandListener(el) {
            let i = 1;
            el.addEventListener('click', function () {
                const element = el.closest('.iconMenu');
                element.parentNode.removeChild(element);
                document.getElementById('iconMenus').querySelectorAll('.iconMenu').forEach(function (el) {
                    let count = i++
                    el.querySelector('.card-title').innerHTML = 'Icon ' + count;
                })
            });
        }

        function addCommandListenerParticul(el) {
            let i = 1;
            el.addEventListener('click', function () {
                const element = el.closest('.iconParticul');
                element.parentNode.removeChild(element);
                document.getElementById('iconParticuls').querySelectorAll('.iconParticul').forEach(function (el) {
                    let count = i++
                    el.querySelector('.card-title').innerHTML = 'Icon ' + count;
                })
            });
        }

        document.querySelectorAll('.command-remove').forEach(function (el) {
            addCommandListener(el);
            addCommandListenerParticul(el)
        });

        document.getElementById('addIconMenu').addEventListener('click', function () {
            let i = 1;
            let input = `@include('admin.pattern.iconMenu')`;

            const newElement = document.createElement('div');
            newElement.classList.add('iconMenu', 'col-xl-4', 'col-lg-6', 'my-3')
            newElement.innerHTML = input
            addCommandListener(newElement.querySelector('.command-remove'));

            document.getElementById('iconMenus').appendChild(newElement);
            document.getElementById('iconMenus').querySelectorAll('.iconMenu').forEach(function (el) {
                let count = i++
                el.querySelector('.card-title').innerHTML = 'Icon ' + count;
                el.querySelector('select').setAttribute('data-image-preview-select', 'filePreview-' + count)
                el.querySelector('img').setAttribute('id', 'filePreview-' + count)
                imagePreviewSelect(el.querySelector('select'))
            })

        });


        document.getElementById('addIconParticuls').addEventListener('click', function () {
            let i = 1;
            let input = `@include('admin.pattern.iconParticul')`;

            const newElement = document.createElement('div');
            newElement.classList.add('iconParticul', 'col-xl-4', 'col-lg-6', 'my-3')
            newElement.innerHTML = input
            addCommandListenerParticul(newElement.querySelector('.command-remove'));

            document.getElementById('iconParticuls').appendChild(newElement);
            document.getElementById('iconParticuls').querySelectorAll('.iconParticul').forEach(function (el) {
                let count = i++
                el.querySelector('.card-title').innerHTML = 'Icon ' + count;
                el.querySelector('select').setAttribute('data-image-preview-select', 'filePreview-' + count)
                el.querySelector('img').setAttribute('id', 'filePreview-' + count)
                imagePreviewSelect(el.querySelector('select'))
            })

        });

        function configFormIconParticul(i) {
            document.getElementById('iconParticuls').querySelectorAll('.form-row').forEach(function (el) {
                el.querySelectorAll('input').forEach(function (input) {
                    input.name = input.name.replace('{index}', i.toString());
                });
                el.querySelectorAll('select').forEach(function (select) {
                    select.name = select.name.replace('{index}', i.toString());
                });

                i++;
            });
        }

        function configFormIconMenus(i) {
            document.getElementById('iconMenus').querySelectorAll('.form-row').forEach(function (el) {
                el.querySelectorAll('input').forEach(function (input) {
                    input.name = input.name.replace('{index}', i.toString());
                });
                el.querySelectorAll('select').forEach(function (select) {
                    select.name = select.name.replace('{index}', i.toString());
                });

                i++;
            });
        }
    </script>
@endpush
<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">
        {{trans('theme::lang.global.title')}}
    </h3>
</div>
<div class="card-body">
    <fieldset class="mt-4">
        <legend>{{ trans('theme::lang.general.style') }}</legend>
        <select name="header[style]" id="select-style" class="form-control">
            @foreach($themes as $key => $value)
                <option value="{{ $key }}"
                        @if(theme_config('header.style') == $key) selected @endif>{{ $value }}</option>
            @endforeach
        </select>
    </fieldset>
    <hr class="my-3 sidebar-divider">
    <fieldset class="mt-4">
        <legend>{{ trans('theme::lang.home.particle.title') }}</legend>
        <div class="small font-italic mb-2">{!! trans('theme::lang.home.particle.info')!!}</div>
        <div class="form-group">
            <label for="select-content">{{ trans('theme::lang.home.particle.content') }}</label>
            <select name="home[particle][content]" id="select-content" class="form-control mb-3">
                @foreach($particleContent as $key => $value)
                    <option value="{{ $value }}"
                            @if(theme_config('home.particle.content') == $value) selected @endif>{{ $value }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="select-style">{{ trans('theme::lang.home.particle.style') }}</label>
            <select name="home[particle][style]" id="select-style"
                    class="form-control mb-3 js-select-trigger-particlejs">
                @foreach($particleStyle as $key => $value)
                    <option value="{{ $value }}"
                            @if(theme_config('home.particle.style') == $value) selected @endif>{{ $value }}</option>
                @endforeach
            </select>
        </div>
        <div
            class="form-group js-select-trigger-particlejs-target {{theme_config('home.particle.style') === 'custom' ? '':'d-none' }}">
            @includeIf('admin.pattern.particlesjs')
        </div>
        <button type="button" id="addIconParticuls" class="btn btn-sm btn-success d-none">
            <i class="fas fa-plus"></i> {{ trans('messages.actions.add') }}
        </button>
        <div id="iconParticuls" class="row d-none">
            @forelse( theme_config('home.particle.icons') ?? [] as $icon )
                <div class="iconParticul col-xl-4 col-lg-6 my-3">
                    @include('admin.pattern.iconParticul')
                </div>
            @empty
                <div class="iconMenu col-xl-4  col-lg-6 my-3">
                    @include('admin.pattern.iconParticul')
                </div>
            @endforelse
        </div>
        <div class="pl-3 mb-3">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="homeParticleHidden"
                       name="home[particle][hidden]"
                       @if(theme_config('home.particle.hidden')) checked @endif>
                <label class="custom-control-label" for="homeParticleHidden">
                    {{ trans('theme::lang.home.particle.hidden') }}
                </label>
            </div>
        </div>
    </fieldset>
    <hr class="my-3 sidebar-divider">
    <fieldset>
        <legend>{{trans('theme::lang.header.preloader.title')}}</legend>
        <div class="pl-3">
            <div class="small font-italic mb-2">{!! trans('theme::lang.header.preloader.info')!!}</div>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="headerPreloader"
                       name="header[preloader][hidden]"
                       @if(theme_config('header.preloader.hidden')) checked @endif>
                <label class="custom-control-label" for="headerPreloader">
                    {{trans('theme::lang.header.preloader.hidden')}}
                </label>
            </div>
        </div>
    </fieldset>
    <fieldset class="mt-4">
        <legend>{{trans('theme::lang.header.navbar.title')}}</legend>
        <div class="pl-3">
            <div class="small font-italic mb-2">{!! trans('theme::lang.header.navbar.info')!!}</div>

            <div class="form-group">
                <label for="select-style-navbar-style">{{ trans('theme::lang.header.navbar.style') }}</label>
                <select name="header[navbar][style]" id="select-style-navbar-style"
                        class="form-control mb-3">
                    @foreach($navbarStyle as $key => $value)
                        <option value="{{ $key }}"
                                @if(theme_config('header.navbar.style') == $key) selected @endif>{{ $value }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="select-style-navbar-position">{{ trans('theme::lang.header.navbar.position') }}</label>
                <select name="header[navbar][position]" id="select-style-navbar-position"
                        class="form-control mb-3">
                    @foreach($navbarPosition as $key => $value)
                        <option value="{{ $key }}"
                                @if(theme_config('header.navbar.position') == $key) selected @endif>{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="headerLogoHidden"
                       name="header[logo][hidden]"
                       @if(theme_config('header.logo.hidden')) checked @endif>
                <label class="custom-control-label" for="headerLogoHidden">
                    {{ trans('theme::lang.header.navbar.hiddenLogo') }}
                </label>
            </div>

            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="headerIcon"
                       name="header[icons]"
                       @if(theme_config('header.icons')) checked @endif>
                <label class="custom-control-label" for="headerIcon">
                    {{ trans('theme::lang.header.navbar.hiddenIcon') }}
                </label>
            </div>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="headerTextHidden"
                       name="header[text][hidden]"
                       @if(theme_config('header.text.hidden')) checked @endif>
                <label class="custom-control-label" for="headerTextHidden">
                    {{ trans('theme::lang.header.navbar.hiddenText') }}
                </label>
            </div>
        </div>
    </fieldset>
    <hr class="my-3 sidebar-divider">
    <fieldset class="mt-4">
        <legend>{{trans('theme::lang.header.icon.title')}}</legend>
        <div class="pl-3">
            <div class="small font-italic mb-2">{!! trans('theme::lang.header.icon.info')!!}</div>
            <span class="d-block font-weight-bold mb-2">
        <span class="text-danger"><i class="fas fa-exclamation-triangle pr-1"></i></span>
        {{ trans('theme::lang.header.icon.alert') }}
        </span>
            <button type="button" id="addIconMenu" class="btn btn-sm btn-success">
                <i class="fas fa-plus"></i> {{ trans('messages.actions.add') }}
            </button>
            <div id="iconMenus" class="row">
                @forelse( theme_config('header.iconmenus') ?? [] as $icon )
                    <div class="iconMenu col-xl-4 col-lg-6 my-3">
                        @include('admin.pattern.iconMenu')
                    </div>
                @empty
                    <div class="iconMenu col-xl-4  col-lg-6 my-3">
                        @include('admin.pattern.iconMenu')
                    </div>
                @endforelse
            </div>
        </div>
    </fieldset>
</div>
