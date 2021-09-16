<div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Plugin Litebans</h6>
</div>
<div class="card-body">
    <div class="form-group">
        <fieldset>
            <legend>Banner LiteBan</legend>
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
                                id="imageSelect-liteban"
                                name="liteBans[banner][liteban][image]"
                                data-image-preview-select="filePreview-liteban">
                            <option value="">none</option>
                            @foreach(\Azuriom\Models\Image::all() as $image)
                                <option value="{{ $image->file }}"
                                        @if(config('theme.liteBans.banner.liteban.image') === $image->file) selected @endif>{{ $image->name }}</option>
                            @endforeach
                        </select>
                        <div class="mt-3 w-100">
                            <img
                                src="{{ config('theme.liteBans.banner.liteban.image') ? image_url( old('liteBans[banner][liteban][image]', config('theme.liteBans.banner.liteban.image')) ): ''}}"
                                alt="{{ old('liteBans[banner][liteban][image]', config('theme.liteBans.banner.liteban.image')) }}"
                                class="card-img rounded img-preview-sm @if(!config('liteban.banner.liteban.image')))d-none @endif"
                                id="filePreview-liteban"
                                style="object-fit: contain">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="litebanBannerNewTitle">{{ trans('theme::lang.config.title') }}</label>
                    <input type="text" class="form-control @error('liteBans[banner][liteban][title]') is-invalid @enderror"
                           id="litebanBannerNewTitle"
                           name="liteBans[banner][liteban][title]"
                           value="{{ old('liteBans[banner][liteban][title]', config('theme.liteBans.banner.liteban.title')) }}">

                    @error('liteBans[banner][liteban][title]')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <div class="custom-control custom-switch mt-2">
                        <input type="checkbox" class="custom-control-input" id="litebanBannerNewHidden"
                               name="liteBans[banner][liteban][hidden]"
                               @if(config('theme.liteBans.banner.liteban.hidden')) checked @endif>
                        <label class="custom-control-label" for="litebanBannerNewHidden">
                            Ne pas afficher la bannier
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
