<div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Plugin Forum</h6>
</div>
<div class="card-body">
    <div class="form-group">
        <fieldset>
            <legend>Banner Forum</legend>
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
                                id="imageSelect-forum"
                                name="forum[banner][forum][image]"
                                data-image-preview-select="filePreview-forum">
                            <option value="">none</option>
                            @foreach(\Azuriom\Models\Image::all() as $image)
                                <option value="{{ $image->file }}"
                                        @if(config('theme.forum.banner.forum.image') === $image->file) selected @endif>{{ $image->name }}</option>
                            @endforeach
                        </select>
                        <div class="mt-3 w-100">
                            <img
                                src="{{ config('theme.forum.banner.forum.image') ? image_url( old('forum[banner][forum][image]', config('theme.forum.banner.forum.image')) ): ''}}"
                                alt="{{ old('forum[banner][forum][image]', config('theme.forum.banner.forum.image')) }}"
                                class="card-img rounded img-preview-sm @if(!config('forum.banner.forum.image')))d-none @endif"
                                id="filePreview-forum"
                                style="object-fit: contain">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="forumBannerNewTitle">{{ trans('theme::lang.config.title') }}</label>
                    <input type="text" class="form-control @error('forum[banner][forum][title]') is-invalid @enderror"
                           id="forumBannerNewTitle"
                           name="forum[banner][forum][title]"
                           value="{{ old('forum[banner][forum][title]', config('theme.forum.banner.forum.title')) }}">

                    @error('forum[banner][forum][title]')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <div class="custom-control custom-switch mt-2">
                        <input type="checkbox" class="custom-control-input" id="forumBannerNewHidden"
                               name="forum[banner][forum][hidden]"
                               @if(config('theme.forum.banner.forum.hidden')) checked @endif>
                        <label class="custom-control-label" for="forumBannerNewHidden">
                            Ne pas afficher la bannier
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
