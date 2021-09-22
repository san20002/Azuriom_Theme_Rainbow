<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.wiki.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <fieldset class="form-group">
                <legend>{{trans('theme::lang.wiki.banner.wiki.title')}}</legend>
                <div class="small font-italic mb-2">{!! trans('theme::lang.wiki.banner.info')!!}</div>
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
                                    id="imageSelect-wiki"
                                    name="wiki[banner][wiki][image]"
                                    data-image-preview-select="filePreview-wiki">
                                <option value="">none</option>
                                @foreach(\Azuriom\Models\Image::all() as $image)
                                    <option value="{{ $image->file }}"
                                            @if(theme_config('wiki.banner.wiki.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                @endforeach
                            </select>
                            <div class="mt-3 w-100">
                                <img
                                    src="{{ theme_config('wiki.banner.wiki.image') ? image_url( old('wiki[banner][wiki][image]', theme_config('wiki.banner.wiki.image')) ): ''}}"
                                    alt="{{ old('wiki[banner][wiki][image]', theme_config('wiki.banner.wiki.image')) }}"
                                    class="card-img rounded img-preview-sm @if(!config('wiki.banner.wiki.image')))d-none @endif"
                                    id="filePreview-wiki"
                                    style="object-fit: contain">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="wikiBannerNewTitle">{{ trans('theme::lang.title') }}</label>
                        <input type="text" class="form-control @error('wiki[banner][wiki][title]') is-invalid @enderror"
                               id="wikiBannerNewTitle"
                               name="wiki[banner][wiki][title]"
                               value="{{ old('wiki[banner][wiki][title]', theme_config('wiki.banner.wiki.title')) }}">

                        @error('wiki[banner][wiki][title]')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="wikiBannerNewHidden"
                                   name="wiki[banner][wiki][hidden]"
                                   @if(theme_config('wiki.banner.wiki.hidden')) checked @endif>
                            <label class="custom-control-label" for="wikiBannerNewHidden">
                                {{trans('theme::lang.wiki.banner.wiki.hidden')}}
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>