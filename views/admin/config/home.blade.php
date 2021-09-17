<div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Page d'accueil</h6>
</div>
<div class="card-body">
    <div class="form-group">
        <fieldset class="mt-4">
            <legend>Banner Article(s)</legend>
            <div class="row">
                <div class="col-md-6">
                    <label for="imageSelect">{{ trans('theme::lang.config.image') }}</label>
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
                <div class="col-md-6">
                    <label for="articleBannerNewTitle">{{ trans('theme::lang.config.title') }}</label>
                    <input type="text" class="form-control @error('home[banner][news][title]') is-invalid @enderror"
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
                            Ne pas afficher la bannier
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <hr class="my-3 sidebar-divider">

    <div class="form-group">
        <fieldset>
            <legend>Banner Informations(s)</legend>
            <div class="row">
                <div class="col-md-6">
                    <label for="imageSelect">{{ trans('theme::lang.config.image') }}</label>
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
                <div class="col-md-6">
                    <label for="infoBannerNewTitle">{{ trans('theme::lang.config.title') }}</label>
                    <input type="text" class="form-control @error('home[banner][info][title]') is-invalid @enderror"
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
                            Ne pas afficher la bannier
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>

    <hr class="my-3 sidebar-divider">

    <div class="form-group">
        <label for="discord">{{ trans('theme::lang.config.discord') }}</label>
        <input type="text" class="form-control @error('discord[id]') is-invalid @enderror"
               id="discord"
               name="discord[id]" value="{{ old('discord[id]', config('theme.discord.id')) }}">

        @error('discord[id]')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
</div>
