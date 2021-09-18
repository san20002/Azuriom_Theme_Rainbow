@push('footer-scripts')
    <script>
        function addCommandIconMenu(el) {
            let i = 1;
            el.addEventListener('click', function () {
                const element = el.closest('.slider');
                element.parentNode.removeChild(element);
                document.getElementById('sliders').querySelectorAll('.slider').forEach(function (el) {
                    let count = i++
                    el.querySelector('.card-title').innerHTML = 'Slider ' + count;
                })
            });
        }

        document.querySelectorAll('.command-remove-slider').forEach(function (el) {
            addCommandIconMenu(el);
        });

        document.getElementById('addCommandButton').addEventListener('click', function () {
            let i = 1;
            let input = `@include('admin.pattern.slider')`;

            const newElement = document.createElement('div');
            newElement.classList.add('slider', 'col-lg-4', 'col-md-6', 'my-3')
            newElement.innerHTML = input
            addCommandIconMenu(newElement.querySelector('.command-remove-slider'));

            document.getElementById('sliders').appendChild(newElement);
            document.getElementById('sliders').querySelectorAll('.slider').forEach(function (el) {
                let count = i++
                el.querySelector('.card-title').innerHTML = 'Slider ' + count;
                el.querySelector('select').setAttribute('data-image-preview-select', 'filePreview-' + count)
                el.querySelector('img').setAttribute('id', 'filePreview-' + count)
                imagePreviewSelect(el.querySelector('select'))
            })

        });

        function configFormSlider(i) {
            document.getElementById('sliders').querySelectorAll('.form-row').forEach(function (el) {
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
    <h6 class="m-0 font-weight-bold text-primary">{{ trans('theme::lang.home.title') }}</h6>
</div>
<div class="card-body">
    <button type="button" id="addCommandButton" class="btn btn-sm btn-success">
        <i class="fas fa-plus"></i> {{ trans('messages.actions.add') }}
    </button>
    <div id="sliders" class="row no-gutters">
        @forelse( config('theme.sliders') ?? [] as $slider )

            <div class="slider col-lg-4 col-md-6 my-3">
                @include('admin.pattern.slider')
            </div>
        @empty
            <div class="slider col-lg-4 col-md-6 my-3">
                @include('admin.pattern.slider')
            </div>
        @endforelse
    </div>
    <hr class="my-3 sidebar-divider">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <fieldset>
                    <legend>{{trans('theme::lang.home.banner.article.title')}}</legend>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="imageSelect">{{ trans('theme::lang.image') }}</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <a class="btn btn-outline-success"
                                       href="{{ route('admin.images.create') }}"
                                       target="_blank" rel="noopener noreferrer"><i
                                            class="fas fa-upload"></i></a>
                                </div>
                                <select class="custom-select"
                                        id="imageSelect-article"
                                        name="home[banner][news][image]"
                                        data-image-preview-select="filePreview-article">
                                    <option value="">none</option>
                                    @foreach(\Azuriom\Models\Image::all() as $image)
                                        <option value="{{ $image->file }}"
                                                @if(config('theme.home.banner.news.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                    @endforeach
                                </select>
                                <div class="mt-3 w-100">
                                    <img
                                        src="{{ config('theme.home.banner.news.image') ? image_url( old('home[banner][news][image]', config('theme.home.banner.news.image')) ): ''}}"
                                        alt="{{ old('home[banner][news][image]', config('theme.home.banner.news.image')) }}"
                                        class="card-img rounded img-preview-sm @if(!config('home.banner.news.image')))d-none @endif"
                                        id="filePreview-article"
                                        style="object-fit: contain">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="articleBannerNewTitle">{{ trans('theme::lang.title') }}</label>
                            <input type="text"
                                   class="form-control @error('home[banner][news][title]') is-invalid @enderror"
                                   id="articleBannerNewTitle"
                                   name="home[banner][news][title]"
                                   value="{{ old('home[banner][news][title]', config('theme.home.banner.news.title')) }}">

                            @error('home[banner][news][title]')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="articleBannerNewHidden"
                                       name="home[banner][news][hidden]"
                                       @if(config('theme.home.banner.news.hidden')) checked @endif>
                                <label class="custom-control-label" for="articleBannerNewHidden">
                                    {{trans('theme::lang.home.banner.article.hidden')}}
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <fieldset>
                    <legend>{{trans('theme::lang.home.banner.info.title')}}</legend>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="imageSelect">{{ trans('theme::lang.image') }}</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <a class="btn btn-outline-success"
                                       href="{{ route('admin.images.create') }}"
                                       target="_blank" rel="noopener noreferrer"><i
                                            class="fas fa-upload"></i></a>
                                </div>
                                <select class="custom-select"
                                        id="imageSelect-info"
                                        name="home[banner][info][image]"
                                        data-image-preview-select="filePreview-info">
                                    <option value="">none</option>
                                    @foreach(\Azuriom\Models\Image::all() as $image)
                                        <option value="{{ $image->file }}"
                                                @if(config('theme.home.banner.info.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                    @endforeach
                                </select>
                                <div class="mt-3 w-100">
                                    <img
                                        src="{{ config('theme.home.banner.info.image') ? image_url( old('home[banner][info][image]', config('theme.home.banner.info.image')) ): ''}}"
                                        alt="{{ old('home[banner][info][image]', config('theme.home.banner.info.image')) }}"
                                        class="card-img rounded img-preview-sm @if(!config('home.banner.info.image')))d-none @endif"
                                        id="filePreview-info"
                                        style="object-fit: contain">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="infoBannerNewTitle">{{ trans('theme::lang.title') }}</label>
                            <input type="text"
                                   class="form-control @error('home[banner][info][title]') is-invalid @enderror"
                                   id="infoBannerNewTitle"
                                   name="home[banner][info][title]"
                                   value="{{ old('home[banner][info][title]', config('theme.home.banner.info.title')) }}">

                            @error('home[banner][info][title]')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="infoBannerNewHidden"
                                       name="home[banner][info][hidden]"
                                       @if(config('theme.home.banner.info.hidden')) checked @endif>
                                <label class="custom-control-label" for="infoBannerNewHidden">
                                    {{trans('theme::lang.home.banner.info.hidden')}}
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <fieldset>
                    <legend>{{trans('theme::lang.home.banner.login.title')}}</legend>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="imageSelect">{{ trans('theme::lang.image') }}</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <a class="btn btn-outline-success"
                                       href="{{ route('admin.images.create') }}"
                                       target="_blank" rel="noopener noreferrer"><i
                                            class="fas fa-upload"></i></a>
                                </div>
                                <select class="custom-select"
                                        id="imageSelect-login"
                                        name="home[banner][login][image]"
                                        data-image-preview-select="filePreview-login">
                                    <option value="">none</option>
                                    @foreach(\Azuriom\Models\Image::all() as $image)
                                        <option value="{{ $image->file }}"
                                                @if(config('theme.home.banner.login.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                    @endforeach
                                </select>
                                <div class="mt-3 w-100">
                                    <img
                                        src="{{ config('theme.home.banner.login.image') ? image_url( old('home[banner][login][image]', config('theme.home.banner.login.image')) ): ''}}"
                                        alt="{{ old('home[banner][login][image]', config('theme.home.banner.login.image')) }}"
                                        class="card-img rounded img-preview-sm @if(!config('home.banner.login.image')))d-none @endif"
                                        id="filePreview-login"
                                        style="object-fit: contain">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="loginBannerNewTitle">{{ trans('theme::lang.title') }}</label>
                            <input type="text"
                                   class="form-control @error('home[banner][login][title]') is-invalid @enderror"
                                   id="loginBannerNewTitle"
                                   name="home[banner][login][title]"
                                   value="{{ old('home[banner][login][title]', config('theme.home.banner.login.title')) }}">

                            @error('home[banner][login][title]')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="loginBannerNewHidden"
                                       name="home[banner][login][hidden]"
                                       @if(config('theme.home.banner.login.hidden')) checked @endif>
                                <label class="custom-control-label" for="loginBannerNewHidden">
                                    {{trans('theme::lang.home.banner.login.hidden')}}
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <hr class="my-3 sidebar-divider">
    <div class="form-group">
        <label for="discord">{{ trans('theme::lang.discord.id') }}</label>
        <input type="text" class="form-control @error('discord[id]') is-invalid @enderror"
               id="discord"
               name="discord[id]" value="{{ old('discord[id]', config('theme.discord.id')) }}">

        @error('discord[id]')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
    <hr class="my-3 sidebar-divider">
    <fieldset class="mt-4">
        <legend>{{ trans('theme::lang.home.button.download.title') }}</legend>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="homeDownloadHidden"
                   name="home[download][hidden]"
                   @if(config('theme.home.download.hidden')) checked @endif>
            <label class="custom-control-label" for="homeDownloadHidden">
                {{ trans('theme::lang.home.button.download.hidden') }}
            </label>
        </div>
    </fieldset>
    <fieldset class="mt-4">
        <legend>{{ trans('theme::lang.home.particle.title') }}</legend>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="homeParticleHidden"
                   name="home[particle][hidden]"
                   @if(config('theme.home.particle.hidden')) checked @endif>
            <label class="custom-control-label" for="homeParticleHidden">
                {{ trans('theme::lang.home.particle.hidden') }}
            </label>
        </div>
    </fieldset>
</div>
