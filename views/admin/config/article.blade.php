<div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">{{ trans('theme::lang.config.global.name') }}</h6>
</div>
<div class="card-body">
    <div class="form-group">
        <fieldset class="mt-4">
            <legend>Article(s)</legend>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="articlesCommentHidden"
                       name="articles[comment][hidden]"
                       @if(config('theme.articles.comment.hidden')) checked @endif>
                <label class="custom-control-label" for="articlesCommentHidden">
                    {{ trans('theme::lang.config.global.article.comment') }}
                </label>
            </div>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="articlesLikeHidden"
                       name="articles[follow][hidden]"
                       @if(config('theme.articles.follow.hidden')) checked @endif>
                <label class="custom-control-label" for="articlesLikeHidden">
                    {{ trans('theme::lang.config.global.article.like') }}
                </label>
            </div>
        </fieldset>
    </div>
</div>
