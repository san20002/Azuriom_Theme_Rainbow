<div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Page d'accueil</h6>
</div>
<div class="card-body">
    <div class="form-group">
        <label for="discord">{{ trans('theme::lang.config.discord') }}</label>
        <input type="text" class="form-control @error('discord[id]') is-invalid @enderror"
               id="discord"
               name="discord[id]" value="{{ old('discord[id]', config('theme.discord.id')) }}">

        @error('discord[id]')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
</div>
