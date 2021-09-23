<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{ trans('theme::lang.articles.title') }}</h3>
</div>
<div class="card-body">
    <div class="small font-italic mb-2">{!! trans('theme::lang.articles.banner.info')!!}</div>
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'articles', 'valueBanner' => 'article'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'articles', 'valueBanner' => 'allArticle'])
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items-aos',['keyAos'=>'articles', 'valueAos' => 'article'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items-aos',['keyAos'=>'articles', 'valueAos' => 'allArticle'])
        </div>
    </div>
    <fieldset class="mt-4 form-group">
        <legend>{{ trans('theme::lang.articles.article.title') }}</legend>
        <div class="pl-3">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="articlesCommentHidden"
                       name="articles[comment][hidden]"
                       @if(theme_config('articles.comment.hidden')) checked @endif>
                <label class="custom-control-label" for="articlesCommentHidden">
                    {{ trans('theme::lang.articles.article.commentHidden') }}
                </label>
            </div>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="articlesLikeHidden"
                       name="articles[follow][hidden]"
                       @if(theme_config('articles.follow.hidden')) checked @endif>
                <label class="custom-control-label" for="articlesLikeHidden">
                    {{ trans('theme::lang.articles.article.followHiiden') }}
                </label>
            </div>
        </div>
    </fieldset>
</div>
