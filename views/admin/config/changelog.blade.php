<div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Plugin Changelog</h6>
</div>
<div class="card-body">
    <div class="form-group">
        <fieldset>
            <legend>Banner Changelog</legend>
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
                                id="imageSelect-changelog"
                                name="changelog[banner][changelog][image]"
                                data-image-preview-select="filePreview-changelog">
                            <option value="">none</option>
                            @foreach(\Azuriom\Models\Image::all() as $image)
                                <option value="{{ $image->file }}"
                                        @if(config('theme.changelog.banner.changelog.image') === $image->file) selected @endif>{{ $image->name }}</option>
                            @endforeach
                        </select>
                        <div class="mt-3 w-100">
                            <img
                                src="{{ config('theme.changelog.banner.changelog.image') ? image_url( old('changelog[banner][changelog][image]', config('theme.changelog.banner.changelog.image')) ): ''}}"
                                alt="{{ old('changelog[banner][changelog][image]', config('theme.changelog.banner.changelog.image')) }}"
                                class="card-img rounded img-preview-sm @if(!config('changelog.banner.changelog.image')))d-none @endif"
                                id="filePreview-changelog"
                                style="object-fit: contain">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="changelogBannerNewTitle">{{ trans('theme::lang.config.title') }}</label>
                    <input type="text" class="form-control @error('changelog[banner][changelog][title]') is-invalid @enderror"
                           id="changelogBannerNewTitle"
                           name="changelog[banner][changelog][title]"
                           value="{{ old('changelog[banner][changelog][title]', config('theme.changelog.banner.changelog.title')) }}">

                    @error('changelog[banner][changelog][title]')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <div class="custom-control custom-switch mt-2">
                        <input type="checkbox" class="custom-control-input" id="changelogBannerNewHidden"
                               name="changelog[banner][changelog][hidden]"
                               @if(config('theme.changelog.banner.changelog.hidden')) checked @endif>
                        <label class="custom-control-label" for="changelogBannerNewHidden">
                            Ne pas afficher la bannier
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
