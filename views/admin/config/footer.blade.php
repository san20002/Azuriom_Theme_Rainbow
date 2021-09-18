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
            input += '<input type="text" class="form-control" name="footer[links][{index}][icon]" placeholder="{{ trans('theme::lang.icon') }}"></div>';
            input += '<div class="form-group col-md-3"><div class="input-group">';
            input += '<input type="text" class="form-control" name="footer[links][{index}][name]" placeholder="{{ trans('theme::lang.name') }}"></div></div>';
            input += '<div class="form-group col-md-4"><div class="input-group">';
            input += '<input type="url" class="form-control" name="footer[links][{index}][value]" placeholder="{{ trans('theme::lang.link') }}">';
            input += '<div class="input-group-append"><button class="btn btn-outline-danger link-remove" type="button">';
            input += '<i class="fas fa-times"></i></button></div></div></div></div></div>';

            const newElement = document.createElement('div');
            newElement.innerHTML = input;

            addLinkListener(newElement.querySelector('.link-remove'));

            document.getElementById('links').appendChild(newElement);
        });

    </script>
@endpush
<div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">{{ trans('theme::lang.footer.title') }}</h6>
</div>
<div class="card-body">
    <fieldset class="mt-4">
        <legend>{{trans('theme::lang.footer.logo.title')}}</legend>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="footerLogo"
                   name="footer[logo][hidden]"
                   @if(config('theme.footer.logo.hidden')) checked @endif>
            <label class="custom-control-label" for="footerLogo">
                {{trans('theme::lang.footer.logo.hidden')}}
            </label>
        </div>
    </fieldset>
    <hr class="my-3 sidebar-divider">
    <div class="form-group">
        <div class="card-text mb-2">
            {{ trans('theme::lang.fontawesome') }}
            <a href="https://fontawesome.com/icons?d=gallery" title="fontawesome" target="_blank">fontawesome</a>
        </div>
        <div id="links">
            @foreach(theme_config('footer.links') ?? [] as $link)
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="footer[links][{index}][icon]"
                               placeholder="{{ trans('theme::lang.icon') }}"
                               value="{{ $link['icon'] }}">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" class="form-control" name="footer[links][{index}][name]"
                               placeholder="{{ trans('theme::lang.name') }}"
                               value="{{ $link['name'] }}">
                    </div>

                    <div class="form-group col-md-4">
                        <div class="input-group">
                            <input type="url" class="form-control"
                                   name="footer[links][{index}][value]"
                                   placeholder="{{ trans('theme::lang.link') }}"
                                   value="{{ $link['value'] }}">
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
            <button type="button" id="addLinkButton" class="btn btn-sm btn-success">
                <i class="fas fa-plus"></i> {{ trans('messages.actions.add') }}
            </button>
        </div>
    </div>
    <hr class="my-3 sidebar-divider">
    <div class="form-group">
        <label for="footer_title">{{ trans('theme::lang.title') }}</label>
        <input type="text"
               class="form-control @error('footer[title]') is-invalid @enderror"
               id="footer_title"
               name="footer[title]"
               value="{{ old('footer[title]', config('theme.footer.title')) }}">
        @error('footer[title]')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
    <div class="form-group">
        <label for="footer_description">{{ trans('theme::lang.description') }}</label>
        <textarea type="text"
                  class="form-control @error('footer[description]') is-invalid @enderror"
                  id="footer_description"
                  name="footer[description]"
                  rows="6">{{ old('footer[description]', config('theme.footer.description')) }}</textarea>
        @error('footer[description]')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
    <hr class="my-3 sidebar-divider">
    <div class="form-group">
        <label for="footer_liens" class="form-label">{{trans('theme::lang.footer.liens.title')}}</label>
        <input type="text"
               class="form-control @error('footer[liens]') is-invalid @enderror"
               id="footer_liens"
               name="footer[liens]"
               value="{{ old('footer[liens]', config('theme.footer.liens')) }}">
        @error('footer[liens]')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="footerLienHidden"
                   name="footer[lien][hidden]"
                   @if(config('theme.footer.lien.hidden')) checked @endif>
            <label class="custom-control-label" for="footerLienHidden">
                {{trans('theme::lang.footer.liens.hidden')}}
            </label>
        </div>
    </div>
    <hr class="my-3 sidebar-divider">
    <fieldset class="mt-4">
        <legend>{{trans('theme::lang.footer.button.download.title')}}</legend>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="footerDownloadHidden"
                   name="footer[btndownload][hidden]"
                   @if(config('theme.footer.btndownload.hidden')) checked @endif>
            <label class="custom-control-label" for="footerDownloadHidden">
                {{trans('theme::lang.footer.button.download.hidden')}}
            </label>
        </div>
    </fieldset>
    <hr class="my-3 sidebar-divider">
    <div class="card shadow mt-4 mb-4" id="accordion-cgu">
        <div class="card-header" id="headingOneCgu">
            <h6 class="m-0 font-weight-bold text-primary" style="cursor: pointer"
                data-toggle="collapse"
                data-target="#collapseOneCgu" aria-expanded="true"
                aria-controls="collapseOneCgu">
                {{ trans('theme::lang.footer.cgu.name') }}<i
                    class="fas fa-chevron-down pl-1"></i></h6>
        </div>

        <div id="collapseOneCgu" class="collapse" aria-labelledby="headingOneCgu"
             data-parent="#accordion-cgu">
            <div class="card-body">
                <div class="form-group">
                    <span class="d-block mb-1 font-weight-bold mb-2"> <span class="text-danger">
                         {!! trans('theme::lang.footer.cgu.warning') !!}
                    </span>
                    <label
                        for="footerLinksCgu">{{ trans('theme::lang.footer.cgu.input_link') }}</label>
                    <input type="text"
                           class="form-control @error('footer[cgu]') is-invalid @enderror"
                           id="footerLinksCgu"
                           name="footer[cgu]"
                           value="{{ old('footer[cgu]', config('theme.footer.cgu')) }}"
                           placeholder="exemple: cgu">

                    @error('footer[cgu]')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4" id="accordion-cgv">
        <div class="card-header" id="headingOneCgv">
            <h6 class="m-0 font-weight-bold text-primary" style="cursor: pointer"
                data-toggle="collapse"
                data-target="#collapseOneCgv" aria-expanded="true"
                aria-controls="collapseOneCgv">
                {{ trans('theme::lang.footer.cgv.name') }}<i
                    class="fas fa-chevron-down pl-1"></i></h6>
        </div>

        <div id="collapseOneCgv" class="collapse" aria-labelledby="headingOneCgv"
             data-parent="#accordion-cgv">
            <div class="card-body">
                <div class="form-group">
                    <span class="d-block mb-1 font-weight-bold mb-2"> <span class="text-danger">
                            {!! trans('theme::lang.footer.cgv.warning') !!}
                    </span>
                    <label
                        for="footerLinksCgv">{{ trans('theme::lang.footer.cgv.input_link') }}</label>
                    <input type="text"
                           class="form-control @error('footer[cgv]') is-invalid @enderror"
                           id="footerLinksCgv"
                           name="footer[cgv]"
                           value="{{ old('footer[cgv]', config('theme.footer.cgv')) }}"
                           placeholder="exemple: cgv">

                    @error('footer[cgv]')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4" id="accordion-download">
        <div class="card-header" id="headingOneDownload">
            <h6 class="m-0 font-weight-bold text-primary" style="cursor: pointer"
                data-toggle="collapse"
                data-target="#collapseOneDownload" aria-expanded="true"
                aria-controls="collapseOneDownload">
                {{ trans('theme::lang.footer.download.name') }}<i
                    class="fas fa-chevron-down pl-1"></i></h6>
        </div>

        <div id="collapseOneDownload" class="collapse" aria-labelledby="headingOneDownload"
             data-parent="#accordion-download">
            <div class="card-body">
                <div class="form-group">
                    <span class="d-block mb-1 font-weight-bold mb-2"> <span class="text-danger">
                         {!! trans('theme::lang.footer.download.warning') !!}
                    </span>
                    <label
                        for="downloadLink">{{ trans('theme::lang.footer.download.input_link') }}</label>
                    <input type="text"
                           class="form-control @error('footer[download]') is-invalid @enderror"
                           id="downloadLink"
                           name="footer[download]"
                           value="{{ old('footer[download]', config('theme.footer.download')) }}"
                           placeholder="exemple: download">

                    @error('footer[download]')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
