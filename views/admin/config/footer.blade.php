@push('footer-scripts')
    <script>
        function configFormLink(i) {
            document.getElementById('links').querySelectorAll('.form-row').forEach(function (el) {
                el.querySelectorAll('input').forEach(function (input) {
                    input.name = input.name.replace('{index}', i.toString());
                });
                i++;
            });
        }
        function configFormLiens(i) {
            document.getElementById('liens').querySelectorAll('.form-row').forEach(function (el) {
                el.querySelectorAll('input').forEach(function (input) {
                    input.name = input.name.replace('{index}', i.toString());
                });
                i++;
            });
        }

        function configFormCondition(i) {
            document.getElementById('conditions').querySelectorAll('.form-row').forEach(function (el) {
                el.querySelectorAll('input').forEach(function (input) {
                    input.name = input.name.replace('{index}', i.toString());
                });
                i++;
            });
        }

        function addLinkListener(el) {
            el.addEventListener('click', function () {
                const element = el.parentNode.parentNode.parentNode.parentNode;

                element.parentNode.removeChild(element);
            });
        }

        document.querySelectorAll('.link-remove').forEach(function (el) {
            addLinkListener(el);
        });

        document.getElementById('addLinkButton').addEventListener('click', function () {
            let input = '<div class="form-row"><div class="form-group col-md-4">';
            input += '<input type="text" class="form-control" name="footer[social][links][{index}][icon]" placeholder="{{ trans('theme::lang.icon') }}"></div>';
            input += '<div class="form-group col-md-3"><div class="input-group">';
            input += '<input type="text" class="form-control" name="footer[social][links][{index}][name]" placeholder="{{ trans('theme::lang.name') }}"></div></div>';
            input += '<div class="form-group col-md-4"><div class="input-group">';
            input += '<input type="text" class="form-control" name="footer[social][links][{index}][url]" placeholder="{{ trans('theme::lang.link') }}">';
            input += '<div class="input-group-append"><button class="btn btn-outline-danger link-remove" type="button">';
            input += '<i class="fas fa-times"></i></button></div></div></div></div></div>';

            const newElement = document.createElement('div');
            newElement.innerHTML = input;

            addLinkListener(newElement.querySelector('.link-remove'));

            document.getElementById('links').appendChild(newElement);
        });

        document.getElementById('addLiensButton').addEventListener('click', function () {
            let input = '<div class="form-row"><div class="form-group col-md-4"><div class="input-group">';
            input += '<input type="text" class="form-control" name="footer[liens][links][{index}][name]" placeholder="{{ trans('theme::lang.name') }}"></div></div>';
            input += '<div class="form-group col-md-4"><div class="input-group">';
            input += '<input type="text" class="form-control" name="footer[liens][links][{index}][url]" placeholder="{{ trans('theme::lang.link') }}">';
            input += '<div class="input-group-append"><button class="btn btn-outline-danger link-remove" type="button">';
            input += '<i class="fas fa-times"></i></button></div></div></div></div></div>';

            const newElement = document.createElement('div');
            newElement.innerHTML = input;

            addLinkListener(newElement.querySelector('.link-remove'));

            document.getElementById('liens').appendChild(newElement);
        });

        document.getElementById('addConditionsButton').addEventListener('click', function () {
            let input = '<div class="form-row"><div class="form-group col-md-4"><div class="input-group">';
            input += '<input type="text" class="form-control" name="footer[conditions][links][{index}][name]" placeholder="{{ trans('theme::lang.name') }}"></div></div>';
            input += '<div class="form-group col-md-4"><div class="input-group">';
            input += '<input type="text" class="form-control" name="footer[conditions][links][{index}][url]" placeholder="{{ trans('theme::lang.link') }}">';
            input += '<div class="input-group-append"><button class="btn btn-outline-danger link-remove" type="button">';
            input += '<i class="fas fa-times"></i></button></div></div></div></div></div>';

            const newElement = document.createElement('div');
            newElement.innerHTML = input;

            addLinkListener(newElement.querySelector('.link-remove'));

            document.getElementById('conditions').appendChild(newElement);
        });

    </script>
@endpush
<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{ trans('theme::lang.footer.title') }}</h3>
</div>
<div class="card-body">
    <fieldset class="mt-4">
        <legend>{{trans('theme::lang.footer.logo.title')}}</legend>
        <div class="pl-4 pb-2 row">
                <label for="input-range-footer-logo-opacity" class="col-12">Opacity</label>
                <input id="input-range-footer-logo-opacity"
                       class="form-control-range col-7"
                       value="{{old('footer[logo][opacity]',theme_config('footer.logo.opacity'))}}"
                       name="footer[logo][opacity]"
                       type="range"
                       min="0.1"
                       max="1"
                       step="0.1"
                       oninput="this.nextElementSibling.value = this.value">
                <output
                    class="col-2">{{old('footer[logo][opacity]',theme_config('footer.logo.opacity'))}}</output>
        </div>
        <div class="pl-4">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="footerLogo"
                       name="footer[logo][hidden]"
                       @if(theme_config('footer.logo.hidden')) checked @endif>
                <label class="custom-control-label" for="footerLogo">
                    {{trans('theme::lang.footer.logo.hidden')}}
                </label>
            </div>
        </div>
    </fieldset>
    <hr class="my-3 sidebar-divider">
    <fieldset class="form-group">
        <legend>{{trans('theme::lang.footer.social.title')}}</legend>
        <div class="card-text mb-2 pl-4">
            {{ trans('theme::lang.fontawesome') }}
            <a href="https://fontawesome.com/icons?d=gallery" title="fontawesome" target="_blank">fontawesome</a>
        </div>

        <div class="small font-italic pl-4 mb-2">{!! trans('theme::lang.footer.social.info')!!}</div>
        <div id="links" class="pl-4">
            @foreach(theme_config('footer.social.links') ?? [] as $link)
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="footer[social][links][{index}][icon]"
                               placeholder="{{ trans('theme::lang.icon') }}"
                               value="{{ $link['icon'] }}">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" class="form-control" name="footer[social][links][{index}][name]"
                               placeholder="{{ trans('theme::lang.name') }}"
                               value="{{ $link['name'] }}">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="input-group">
                            <input type="text" class="form-control" name="footer[social][links][{index}][url]"
                                   placeholder="{{ trans('theme::lang.link') }}"
                                   value="{{ $link['url'] }}">
                            <div class="input-group-append">
                                <button class="btn btn-outline-danger link-remove" type="button">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mb-2 pl-4">
            <button type="button" id="addLinkButton" class="btn btn-sm btn-success">
                <i class="fas fa-plus"></i> {{ trans('messages.actions.add') }}
            </button>
        </div>
    </fieldset>
    <hr class="my-3 sidebar-divider">
    <fieldset>
        <legend>{{ trans('theme::lang.description') }}</legend>
        <div class="form-group pl-4">
            <label for="footer_title">{{ trans('theme::lang.title') }}</label>
            <input type="text"
                   class="form-control @error('footer[title]') is-invalid @enderror"
                   id="footer_title"
                   name="footer[title]"
                   value="{{ old('footer[title]', theme_config('footer.title')) }}">
            @error('footer[title]')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group pl-4">
            <label for="footer_description">{{ trans('theme::lang.description') }}</label>
            <textarea type="text"
                      class="form-control @error('footer[description]') is-invalid @enderror"
                      id="footer_description"
                      name="footer[description]"
                      rows="6">{{ old('footer[description]', theme_config('footer.description')) }}</textarea>
            @error('footer[description]')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </fieldset>
    <hr class="my-3 sidebar-divider">
    <fieldset class="form-group">
        <legend>{{trans('theme::lang.footer.liens.title')}}</legend>
        <div class="pl-4">
            <div class="form-group">
                <label for="footer_liens" class="form-label">{{trans('theme::lang.title')}}</label>
                <input type="text"
                       class="form-control @error('footer[liens][title]') is-invalid @enderror"
                       id="footer_liens"
                       name="footer[liens][title]"
                       value="{{ old('footer[liens][title]', theme_config('footer.liens.title')) }}">
                @error('footer[liens][title]')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="custom-control custom-switch mt-2">
                <input type="checkbox" class="custom-control-input" id="footerLienHidden"
                       name="footer[liens][hidden]"
                       @if(theme_config('footer.liens.hidden')) checked @endif>
                <label class="custom-control-label" for="footerLienHidden">
                    {{trans('theme::lang.footer.liens.hidden')}}
                </label>
            </div>

            <div id="liens" class="mt-3">
                <div class="small font-italic mb-2">{!! trans('theme::lang.footer.liens.info')!!}</div>
                @foreach(theme_config('footer.liens.links') ?? [] as $link)
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="footer[liens][links][{index}][name]"
                                   placeholder="{{ trans('theme::lang.name') }}"
                                   value="{{ $link['name'] }}">
                        </div>
                        <div class="form-group col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control"
                                       name="footer[liens][links][{index}][url]"
                                       placeholder="{{ trans('theme::lang.link') }}"
                                       value="{{ $link['url'] }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-danger link-remove" type="button">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mb-2">
                <button type="button" id="addLiensButton" class="btn btn-sm btn-success">
                    <i class="fas fa-plus"></i> {{ trans('messages.actions.add') }}
                </button>
            </div>

        </div>
    </fieldset>
    <hr class="my-3 sidebar-divider">
    <fieldset class="mt-4">
        <legend>{{trans('theme::lang.footer.download.title')}}</legend>
        <div class="pl-4">
            <div class="small font-italic mb-2">{!! trans('theme::lang.footer.download.info')!!}</div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="footer[download][link][name]"
                           placeholder="{{ trans('theme::lang.name') }}"
                           value="{{ old('footer[download][link][name]', theme_config('footer.download.link.name')) }}">
                    @error('footer[download][link][name]')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control"
                               name="footer[download][link][url]"
                               placeholder="{{ trans('theme::lang.link') }}"
                               value="{{ old('footer[download][link][url]', theme_config('footer.download.link.url')) }}">
                        @error('footer[download][link][url]')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="footerDownloadHidden"
                       name="footer[download][hidden]"
                       @if(theme_config('footer.download.hidden')) checked @endif>
                <label class="custom-control-label" for="footerDownloadHidden">
                    {{trans('theme::lang.footer.download.hidden')}}
                </label>
            </div>
        </div>
    </fieldset>
    <hr class="my-3 sidebar-divider">

    <fieldset class="form-group">
        <legend>{{trans('theme::lang.footer.condition.title')}}</legend>
        <div class="small font-italic pl-4 mb-2">{!! trans('theme::lang.footer.condition.info')!!}</div>
        <div id="conditions" class="pl-4">
            @foreach(theme_config('footer.conditions.links') ?? [] as $condition)
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="footer[conditions][links][{index}][name]"
                               placeholder="{{ trans('theme::lang.name') }}"
                               value="{{ $condition['name'] }}">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="input-group">
                            <input type="text" class="form-control"
                                   name="footer[conditions][links][{index}][url]"
                                   placeholder="{{ trans('theme::lang.link') }}"
                                   value="{{ $condition['url'] }}">
                            <div class="input-group-append">
                                <button class="btn btn-outline-danger link-remove" type="button">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mb-2 pl-4">
            <button type="button" id="addConditionsButton" class="btn btn-sm btn-success">
                <i class="fas fa-plus"></i> {{ trans('messages.actions.add') }}
            </button>
        </div>
    </fieldset>
</div>
