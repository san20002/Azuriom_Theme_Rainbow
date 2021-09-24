<div class="js-aos">
    <div class="my-2">
        <label
            for="animation-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.animation') }}</label>
        <select name="{{$keyAos}}[banner][{{$valueAos}}][aos][animation]"
                id="animation-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}" class="form-control js-select-aos">
            @foreach($animations as $key => $value)
                <optgroup label="{{$key}}">
                    @foreach($value as $v)
                        <option value="{{ $v }}"
                                @if(theme_config($keyAos.'.banner.'.$valueAos.'.aos.animation') === $v) selected @endif>{{ $v }}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>
    </div>
    <div class="js-aos-active d-none">
        <div class="my-2">
            <label for="easing-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.easing') }}</label>
            <select name="{{$keyAos}}[banner][{{$valueAos}}][aos][easing]"
                    id="easing-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}" class="form-control">
                @foreach($easingAnimations as $key => $value)
                    <option value="{{ $value }}"
                            @if(theme_config($keyAos.'.banner.'.$valueAos.'.aos.easing') === $value) selected @endif>{{ $value }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="placement-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.placement') }}</label>
            <select name="{{$keyAos}}[banner][{{$valueAos}}][aos][placement]"
                    id="placement-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}" class="form-control">
                @foreach($placements as $key => $value)
                    <option value="{{ $value }}"
                            @if(theme_config($keyAos.'.banner.'.$valueAos.'.aos.placement') === $value) selected @endif>{{ $value }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="duration-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.duration') }}</label>
            <input type="text"
                   class="form-control @error($keyAos.'[banner]['.$valueAos.'][aos][duration]') is-invalid @enderror"
                   id="duration-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}"
                   name="{{$keyAos}}[banner][{{$valueAos}}][aos][duration]"
                   value="{{ old($keyAos.'[banner]['.$valueAos.'][aos][duration]', theme_config($keyAos.'.banner.'.$valueAos.'.aos.duration')) }}">

            @error($keyAos.'[banner]['.$valueAos.'][aos][duration]')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="my-2">
            <label for="offset-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.offset') }}</label>
            <input type="text"
                   class="form-control @error($keyAos.'[banner]['.$valueAos.'][aos][offset]') is-invalid @enderror"
                   id="offset-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}"
                   name="{{$keyAos}}[banner][{{$valueAos}}][aos][offset]"
                   value="{{ old($keyAos.'[banner]['.$valueAos.'][aos][offset]', theme_config($keyAos.'.banner.'.$valueAos.'.aos.offset')) }}">

            @error($keyAos.'[banner]['.$valueAos.'][aos][offset]')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
</div>
