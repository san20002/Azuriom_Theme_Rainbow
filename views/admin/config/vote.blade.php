<div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Vote</h6>
</div>
<div class="card-body">
    <div class="form-group">
        <fieldset class="mt-4">
            <legend>Plugin Vote</legend>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="voteIcon"
                       name="vote[icon]"
                       @if(config('theme.vote.icon')) checked @endif>
                <label class="custom-control-label" for="voteIcon">
                    {{ trans('theme::lang.config.global.vote.icon') }}
                </label>
            </div>
        </fieldset>
    </div>
</div>
