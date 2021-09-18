<div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">{{ trans('theme::lang.articles.title') }}</h6>
</div>
<div class="card-body">
    <div class="form-group">
        <fieldset>
            <legend>{{ trans('theme::lang.articles.banner.article.title') }}</legend>
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
                                id="imageSelect-articles"
                                name="articles[banner][articles][image]"
                                data-image-preview-select="filePreview-articles">
                            <option value="">none</option>
                            @foreach(\Azuriom\Models\Image::all() as $image)
                                <option value="{{ $image->file }}"
                                        @if(config('theme.articles.banner.articles.image') === $image->file) selected @endif>{{ $image->name }}</option>
                            @endforeach
                        </select>
                        <div class="mt-3 w-100">
                            <img
                                src="{{ config('theme.articles.banner.articles.image') ? image_url( old('articles[banner][articles][image]', config('theme.articles.banner.articles.image')) ): ''}}"
                                alt="{{ old('articles[banner][articles][image]', config('theme.articles.banner.articles.image')) }}"
                                class="card-img rounded img-preview-sm @if(!config('articles.banner.articles.image')))d-none @endif"
                                id="filePreview-articles"
                                style="object-fit: contain">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="articlesBannerNewTitle">{{ trans('theme::lang.title') }}</label>
                    <input type="text" class="form-control @error('articles[banner][articles][title]') is-invalid @enderror"
                           id="articlesBannerNewTitle"
                           name="articles[banner][articles][title]"
                           value="{{ old('articles[banner][articles][title]', config('theme.articles.banner.articles.title')) }}">

                    @error('articles[banner][articles][title]')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <div class="custom-control custom-switch mt-2">
                        <input type="checkbox" class="custom-control-input" id="articlesBannerNewHidden"
                               name="articles[banner][articles][hidden]"
                               @if(config('theme.articles.banner.articles.hidden')) checked @endif>
                        <label class="custom-control-label" for="articlesBannerNewHidden">
                            {{ trans('theme::lang.articles.banner.article.hidden') }}
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>

    <div class="form-group">
        <fieldset>
            <legend>{{ trans('theme::lang.articles.banner.allArticle.title') }}</legend>
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
                                id="imageSelect-allArticle"
                                name="articles[banner][allArticle][image]"
                                data-image-preview-select="filePreview-allArticle">
                            <option value="">none</option>
                            @foreach(\Azuriom\Models\Image::all() as $image)
                                <option value="{{ $image->file }}"
                                        @if(config('theme.articles.banner.allArticle.image') === $image->file) selected @endif>{{ $image->name }}</option>
                            @endforeach
                        </select>
                        <div class="mt-3 w-100">
                            <img
                                src="{{ config('theme.articles.banner.allArticle.image') ? image_url( old('articles[banner][allArticle][image]', config('theme.articles.banner.allArticle.image')) ): ''}}"
                                alt="{{ old('articles[banner][allArticle][image]', config('theme.articles.banner.allArticle.image')) }}"
                                class="card-img rounded img-preview-sm @if(!config('articles.banner.allArticle.image')))d-none @endif"
                                id="filePreview-allArticle"
                                style="object-fit: contain">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="articlesBannerNewTitle">{{ trans('theme::lang.title') }}</label>
                    <input type="text" class="form-control @error('articles[banner][allArticle][title]') is-invalid @enderror"
                           id="articlesBannerNewTitle"
                           name="articles[banner][allArticle][title]"
                           value="{{ old('articles[banner][allArticle][title]', config('theme.articles.banner.allArticle.title')) }}">

                    @error('articles[banner][allArticle][title]')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <div class="custom-control custom-switch mt-2">
                        <input type="checkbox" class="custom-control-input" id="articlesBannerNewHidden"
                               name="articles[banner][article][hidden]"
                               @if(config('theme.articles.banner.allArticle.hidden')) checked @endif>
                        <label class="custom-control-label" for="articlesBannerNewHidden">
                            {{ trans('theme::lang.articles.banner.allArticle.hidden') }}
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="form-group">
        <fieldset class="mt-4">
            <legend>{{ trans('theme::lang.articles.article.title') }}</legend>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="articlesCommentHidden"
                       name="articles[comment][hidden]"
                       @if(config('theme.articles.comment.hidden')) checked @endif>
                <label class="custom-control-label" for="articlesCommentHidden">
                    {{ trans('theme::lang.articles.article.comment') }}
                </label>
            </div>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="articlesLikeHidden"
                       name="articles[follow][hidden]"
                       @if(config('theme.articles.follow.hidden')) checked @endif>
                <label class="custom-control-label" for="articlesLikeHidden">
                    {{ trans('theme::lang.articles.article.like') }}
                </label>
            </div>
        </fieldset>
    </div>
</div>
