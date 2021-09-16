<div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Plugin Support</h6>
</div>
<div class="card-body">
    <div class="form-group">
        <fieldset>
            <legend>Banner Support</legend>
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
                                id="imageSelect-support"
                                name="support[banner][support][image]"
                                data-image-preview-select="filePreview-support">
                            <option value="">none</option>
                            @foreach(\Azuriom\Models\Image::all() as $image)
                                <option value="{{ $image->file }}"
                                        @if(config('theme.support.banner.support.image') === $image->file) selected @endif>{{ $image->name }}</option>
                            @endforeach
                        </select>
                        <div class="mt-3 w-100">
                            <img
                                src="{{ config('theme.support.banner.support.image') ? image_url( old('support[banner][support][image]', config('theme.support.banner.support.image')) ): ''}}"
                                alt="{{ old('support[banner][support][image]', config('theme.support.banner.support.image')) }}"
                                class="card-img rounded img-preview-sm @if(!config('support.banner.support.image')))d-none @endif"
                                id="filePreview-support"
                                style="object-fit: contain">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="supportBannerNewTitle">{{ trans('theme::lang.config.title') }}</label>
                    <input type="text" class="form-control @error('support[banner][support][title]') is-invalid @enderror"
                           id="supportBannerNewTitle"
                           name="support[banner][support][title]"
                           value="{{ old('support[banner][support][title]', config('theme.support.banner.support.title')) }}">

                    @error('support[banner][support][title]')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <div class="custom-control custom-switch mt-2">
                        <input type="checkbox" class="custom-control-input" id="supportBannerNewHidden"
                               name="support[banner][support][hidden]"
                               @if(config('theme.support.banner.support.hidden')) checked @endif>
                        <label class="custom-control-label" for="supportBannerNewHidden">
                            Ne pas afficher la bannier
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
