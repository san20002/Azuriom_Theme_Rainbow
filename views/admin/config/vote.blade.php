<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.vote.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'vote', 'valueBanner' => 'vote'])
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items-aos',['keyAos'=>'vote', 'valueAos' => 'vote'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items-aos',['keyAos'=>'vote', 'valueAos' => 'classement'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items-aos',['keyAos'=>'vote', 'valueAos' => 'recompenses'])
        </div>
    </div>
    <div class="form-group">
        <fieldset class="mt-4">
            <legend>{{ trans('theme::lang.vote.favicon.title') }}</legend>
            <div class="pl-3">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="voteIcon"
                           name="vote[icon]"
                           @if(theme_config('vote.icon')) checked @endif>
                    <label class="custom-control-label" for="voteIcon">
                        {{ trans('theme::lang.vote.favicon.hidden') }}
                    </label>
                </div>
            </div>
        </fieldset>
    </div>
</div>
