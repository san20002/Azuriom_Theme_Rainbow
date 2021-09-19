<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.pages.title')}}</h3>
</div>
<div class="card-body">
    <div class="small font-italic mb-2">{!! trans('theme::lang.pages.banner.info')!!}</div>
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <fieldset class="form-group">
                <legend>{{trans('theme::lang.pages.banner.page.title')}}</legend>
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
                                    id="imageSelect-pages"
                                    name="pages[banner][pages][image]"
                                    data-image-preview-select="filePreview-pages">
                                <option value="">none</option>
                                @foreach(\Azuriom\Models\Image::all() as $image)
                                    <option value="{{ $image->file }}"
                                            @if(theme_config('pages.banner.pages.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                @endforeach
                            </select>
                            <div class="mt-3 w-100">
                                <img
                                    src="{{ theme_config('pages.banner.pages.image') ? image_url( old('pages[banner][pages][image]', theme_config('pages.banner.pages.image')) ): ''}}"
                                    alt="{{ old('pages[banner][pages][image]', theme_config('pages.banner.pages.image')) }}"
                                    class="card-img rounded img-preview-sm @if(!config('pages.banner.pages.image')))d-none @endif"
                                    id="filePreview-pages"
                                    style="object-fit: contain">
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
