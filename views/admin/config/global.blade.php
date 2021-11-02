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

        document.querySelectorAll('.command-remove').forEach(function (el) {
            addCommandListener(el);
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
        <legend>{{ trans('theme::lang.general.style.title') }}</legend>
        <select name="header[style]" id="select-style" class="form-control">
            @foreach($themes as $key => $value)
                <option value="{{ $value }}"
                        @if(theme_config('header.style') === $value) selected @endif>{{ $value }}</option>
            @endforeach
        </select>
    </fieldset>
    <hr class="my-3 sidebar-divider">
    <fieldset class="mt-4">
        <legend>{{ trans('theme::lang.home.particle.title') }}</legend>
        <div class="pl-3">
            <div class="small font-italic mb-2">{!! trans('theme::lang.home.particle.info')!!}</div>
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
