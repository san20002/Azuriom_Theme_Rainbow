<div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.pages.title')}}</h6>
</div>
<div class="card-body">
    <div class="form-group">
        <fieldset>
            <legend>{{trans('theme::lang.pages.banner.page.title')}}</legend>
            <div class="row">
                <div class="col-md-6">
                    <label for="imageSelect">{{ trans('theme::lang.image') }}</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <a class="btn btn-outline-success"
                               href="{{ route('admin.images.create') }}"
                               target="_blank" rel="noopener noreferrer"><i
                                    class="fas fa-upload"></i></a>
                        </div>
                        <select class="custom-select"
                                id="imageSelect-pages"
                                name="pages[banner][pages][image]"
                                data-image-preview-select="filePreview-pages">
                            <option value="">none</option>
                            @foreach(\Azuriom\Models\Image::all() as $image)
                                <option value="{{ $image->file }}"
                                        @if(config('theme.pages.banner.pages.image') === $image->file) selected @endif>{{ $image->name }}</option>
                            @endforeach
                        </select>
                        <div class="mt-3 w-100">
                            <img
                                src="{{ config('theme.pages.banner.pages.image') ? image_url( old('pages[banner][pages][image]', config('theme.pages.banner.pages.image')) ): ''}}"
                                alt="{{ old('pages[banner][pages][image]', config('theme.pages.banner.pages.image')) }}"
                                class="card-img rounded img-preview-sm @if(!config('pages.banner.pages.image')))d-none @endif"
                                id="filePreview-pages"
                                style="object-fit: contain">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="pagesBannerNewTitle">{{ trans('theme::lang.title') }}</label>
                    <input type="text" class="form-control @error('pages[banner][pages][title]') is-invalid @enderror"
                           id="pagesBannerNewTitle"
                           name="pages[banner][pages][title]"
                           value="{{ old('pages[banner][pages][title]', config('theme.pages.banner.pages.title')) }}">

                    @error('pages[banner][pages][title]')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <div class="custom-control custom-switch mt-2">
                        <input type="checkbox" class="custom-control-input" id="pagesBannerNewHidden"
                               name="pages[banner][pages][hidden]"
                               @if(config('theme.pages.banner.pages.hidden')) checked @endif>
                        <label class="custom-control-label" for="pagesBannerNewHidden">
                            {{trans('theme::lang.pages.banner.page.hidden')}}
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
