<div class="js-aos">
    <div class="my-2">
        <label
            for="animation-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.animation') }}</label>
        <select name="{{$key}}[banner][{{$value}}][aos][animation]"
                id="animation-{{$key}}-{{$value}}-{{$counterPartial}}" class="form-control js-select-aos">
            @foreach($animations as $k => $val)
                <optgroup label="{{$k}}">
                    @foreach($val as $v)
                        <option value="{{ $v }}"
                                @if(theme_config($key.'.banner.'.$value.'.aos.animation') === $v) selected @endif>{{ $v }}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>
    </div>
    <div class="js-aos-active d-none">
        <div class="my-2">
            <label for="easing-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.easing') }}</label>
            <select name="{{$key}}[banner][{{$value}}][aos][easing]"
                    id="easing-{{$key}}-{{$value}}-{{$counterPartial}}" class="form-control">
                @foreach($easingAnimations as $k => $v)
                    <option value="{{ $v }}"
                            @if(theme_config($key.'.banner.'.$value.'.aos.easing') === $v) selected @endif>{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="placement-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.placement') }}</label>
            <select name="{{$key}}[banner][{{$value}}][aos][placement]"
                    id="placement-{{$key}}-{{$value}}-{{$counterPartial}}" class="form-control">
                @foreach($placements as $k => $v)
                    <option value="{{ $v }}"
                            @if(theme_config($key.'.banner.'.$value.'.aos.placement') === $value) selected @endif>{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="duration-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.duration') }}</label>
            <input type="text"
                   class="form-control @error($key.'[banner]['.$value.'][aos][duration]') is-invalid @enderror"
                   id="duration-{{$key}}-{{$value}}-{{$counterPartial}}"
                   name="{{$key}}[banner][{{$value}}][aos][duration]"
                   value="{{ old($key.'[banner]['.$value.'][aos][duration]', theme_config($key.'.banner.'.$value.'.aos.duration')) }}">

            @error($key.'[banner]['.$value.'][aos][duration]')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="my-2">
            <label for="offset-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.offset') }}</label>
            <input type="text"
                   class="form-control @error($key.'[banner]['.$value.'][aos][offset]') is-invalid @enderror"
                   id="offset-{{$key}}-{{$value}}-{{$counterPartial}}"
                   name="{{$key}}[banner][{{$value}}][aos][offset]"
                   value="{{ old($key.'[banner]['.$value.'][aos][offset]', theme_config($key.'.banner.'.$value.'.aos.offset')) }}">

            @error($key.'[banner]['.$value.'][aos][offset]')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
</div>
