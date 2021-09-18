<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.faq.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <fieldset class="form-group">
                <legend>{{trans('theme::lang.faq.banner.faq.title')}}</legend>
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
                                    id="imageSelect-faq"
                                    name="faq[banner][faq][image]"
                                    data-image-preview-select="filePreview-faq">
                                <option value="">none</option>
                                @foreach(\Azuriom\Models\Image::all() as $image)
                                    <option value="{{ $image->file }}"
                                            @if(config('theme.faq.banner.faq.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                @endforeach
                            </select>
                            <div class="mt-3 w-100">
                                <img
                                    src="{{ config('theme.faq.banner.faq.image') ? image_url( old('faq[banner][faq][image]', config('theme.faq.banner.faq.image')) ): ''}}"
                                    alt="{{ old('faq[banner][faq][image]', config('theme.faq.banner.faq.image')) }}"
                                    class="card-img rounded img-preview-sm @if(!config('faq.banner.faq.image')))d-none @endif"
                                    id="filePreview-faq"
                                    style="object-fit: contain">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="faqBannerNewTitle">{{ trans('theme::lang.title') }}</label>
                        <input type="text" class="form-control @error('faq[banner][faq][title]') is-invalid @enderror"
                               id="faqBannerNewTitle"
                               name="faq[banner][faq][title]"
                               value="{{ old('faq[banner][faq][title]', config('theme.faq.banner.faq.title')) }}">

                        @error('faq[banner][faq][title]')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="faqBannerNewHidden"
                                   name="faq[banner][faq][hidden]"
                                   @if(config('theme.faq.banner.faq.hidden')) checked @endif>
                            <label class="custom-control-label" for="faqBannerNewHidden">
                                {{trans('theme::lang.faq.banner.faq.hidden')}}
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
