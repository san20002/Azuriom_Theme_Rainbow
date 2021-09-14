<div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Entête</h6>
</div>
<div class="card-body">
    <fieldset class="mt-4">
        <legend>Entête</legend>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="headerIcon"
                   name="header[icons]"
                   @if(config('theme.header.icons')) checked @endif>
            <label class="custom-control-label" for="headerIcon">
                {{ trans('theme::lang.config.global.header.icon') }}
            </label>
        </div>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="headerTextHidden"
                   name="header[text][hidden]"
                   @if(config('theme.header.text.hidden')) checked @endif>
            <label class="custom-control-label" for="headerTextHidden">
                {{ trans('theme::lang.config.global.header.text') }}
            </label>
        </div>
    </fieldset>
</div>
