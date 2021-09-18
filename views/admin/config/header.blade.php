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
    <h3 type="button" class="btn btn-link m-0 font-weight-bold text-primary">
        {{trans('theme::lang.header.title')}}
    </h3>
</div>
<div class="card-body">
    <fieldset>
        <legend>{{trans('theme::lang.header.preloader.title')}}</legend>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="headerPreloader"
                   name="header[preloader][hidden]"
                   @if(config('theme.header.preloader.hidden')) checked @endif>
            <label class="custom-control-label" for="headerPreloader">
                {{trans('theme::lang.header.preloader.hidden')}}
            </label>
        </div>
    </fieldset>
    <fieldset class="mt-4">
        <legend>{{trans('theme::lang.header.navbar.title')}}</legend>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="headerIcon"
                   name="header[icons]"
                   @if(config('theme.header.icons')) checked @endif>
            <label class="custom-control-label" for="headerIcon">
                {{ trans('theme::lang.header.navbar.hiddenIcon') }}
            </label>
        </div>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="headerTextHidden"
                   name="header[text][hidden]"
                   @if(config('theme.header.text.hidden')) checked @endif>
            <label class="custom-control-label" for="headerTextHidden">
                {{ trans('theme::lang.header.navbar.hiddenText') }}
            </label>
        </div>
    </fieldset>
    <hr class="my-3 sidebar-divider">
    <span class="d-block mb-1 font-weight-bold mb-2 mt-5">
        <span class="text-danger">
         <i class="fas fa-exclamation-triangle pr-1"></i>
        </span>
        {{ trans('theme::lang.header.navbar.icon.alert') }}
    </span>

    <button type="button" id="addIconMenu" class="btn btn-sm btn-success">
        <i class="fas fa-plus"></i> {{ trans('messages.actions.add') }}
    </button>
    <div id="iconMenus" class="row">
        @forelse( config('theme.header.iconmenus') ?? [] as $icon )
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
