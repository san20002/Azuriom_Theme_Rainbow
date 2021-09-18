<div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.profile.title')}}</h6>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-md-4">
            <fieldset>
                <legend>{{trans('theme::lang.profile.banner.buy.title')}}</legend>
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
                                    id="imageSelect-achat"
                                    name="profile[banner][achat][image]"
                                    data-image-preview-select="filePreview-achat">
                                <option value="">none</option>
                                @foreach(\Azuriom\Models\Image::all() as $image)
                                    <option value="{{ $image->file }}"
                                            @if(config('theme.profile.banner.achat.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                @endforeach
                            </select>
                            <div class="mt-3 w-100">
                                <img
                                    src="{{ config('theme.profile.banner.achat.image') ? image_url( old('profile[banner][achat][image]', config('theme.profile.banner.achat.image')) ): ''}}"
                                    alt="{{ old('profile[banner][achat][image]', config('theme.profile.banner.achat.image')) }}"
                                    class="card-img rounded img-preview-sm @if(!config('profile.banner.achat.image')))d-none @endif"
                                    id="filePreview-achat"
                                    style="object-fit: contain">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="profileBannerachatTitle">{{ trans('theme::lang.title') }}</label>
                        <input type="text"
                               class="form-control @error('profile[banner][achat][title]') is-invalid @enderror"
                               id="profileBannerachatTitle"
                               name="profile[banner][achat][title]"
                               value="{{ old('profile[banner][achat][title]', config('theme.profile.banner.achat.title')) }}">

                        @error('profile[banner][achat][title]')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="profileBannerachatHidden"
                                   name="profile[banner][achat][hidden]"
                                   @if(config('theme.profile.banner.achat.hidden')) checked @endif>
                            <label class="custom-control-label" for="profileBannerachatHidden">
                                {{trans('theme::lang.profile.banner.buy.hidden')}}
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="col-md-4">
            <fieldset>
                <legend>{{trans('theme::lang.profile.banner.skin.title')}}</legend>
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
                                    id="imageSelect-skin"
                                    name="profile[banner][skin][image]"
                                    data-image-preview-select="filePreview-skin">
                                <option value="">none</option>
                                @foreach(\Azuriom\Models\Image::all() as $image)
                                    <option value="{{ $image->file }}"
                                            @if(config('theme.profile.banner.skin.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                @endforeach
                            </select>
                            <div class="mt-3 w-100">
                                <img
                                    src="{{ config('theme.profile.banner.skin.image') ? image_url( old('profile[banner][skin][image]', config('theme.profile.banner.skin.image')) ): ''}}"
                                    alt="{{ old('profile[banner][skin][image]', config('theme.profile.banner.skin.image')) }}"
                                    class="card-img rounded img-preview-sm @if(!config('profile.banner.skin.image')))d-none @endif"
                                    id="filePreview-skin"
                                    style="object-fit: contain">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="skinBannerNewTitle">{{ trans('theme::lang.title') }}</label>
                        <input type="text"
                               class="form-control @error('profile[banner][skin][title]') is-invalid @enderror"
                               id="skinBannerNewTitle"
                               name="profile[banner][skin][title]"
                               value="{{ old('profile[banner][skin][title]', config('theme.profile.banner.skin.title')) }}">

                        @error('profile[banner][skin][title]')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="skinBannerNewHidden"
                                   name="profile[banner][skin][hidden]"
                                   @if(config('theme.profile.banner.skin.hidden')) checked @endif>
                            <label class="custom-control-label" for="skinBannerNewHidden">
                                {{trans('theme::lang.profile.banner.skin.hidden')}}
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
