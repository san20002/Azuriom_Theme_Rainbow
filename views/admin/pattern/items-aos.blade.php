@php($counterPartial++)
<div class="js-aos">
    <div class="my-2">
        <label
            for="items-animation-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.animation') }}</label>
        <select name="{{$key}}[items][{{$value}}][aos][animation]"
                id="items-animation-{{$key}}-{{$value}}-{{$counterPartial}}"
                class="form-control js-select-aos">
            @foreach($animations as $k => $val)
                <optgroup label="{{$k}}">
                    @foreach($val as $v)
                        <option value="{{ $v }}"
                                @if(theme_config($key.'.items.'.$value.'.aos.animation') === $v) selected @endif>{{ $v }}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>
    </div>
    <div class="js-aos-active d-none">
        <div class="my-2">
            <label
                for="items-easing-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.easing') }}</label>
            <select name="{{$key}}[items][{{$value}}][aos][easing]"
                    id="items-easing-{{$key}}-{{$value}}-{{$counterPartial}}" class="form-control">
                @foreach($easingAnimations as $k => $value)
                    <option value="{{ $value }}"
                            @if(theme_config($key.'.items.'.$value.'.aos.easing') === $value) selected @endif>{{ $value }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="items-placement-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.placement') }}</label>
            <select name="{{$key}}[items][{{$value}}][aos][placement]"
                    id="items-placement-{{$key}}-{{$value}}-{{$counterPartial}}" class="form-control">
                @foreach($placements as $k => $value)
                    <option value="{{ $value }}"
                            @if(theme_config($key.'.items.'.$value.'.aos.placement') === $value) selected @endif>{{ $value }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="items-duration-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.duration') }}</label>
            <input type="text"
                   class="form-control @error($key.'[items]['.$value.'][aos][duration]') is-invalid @enderror"
                   id="items-duration-{{$key}}-{{$value}}-{{$counterPartial}}"
                   name="{{$key}}[items][{{$value}}][aos][duration]"
                   value="{{ old($key.'[items]['.$value.'][aos][duration]', theme_config($key.'.items.'.$value.'.aos.duration')) }}">

            @error($key.'[items]['.$value.'][aos][duration]')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="my-2">
            <label
                for="items-offset-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.offset') }}</label>
            <input type="text"
                   class="form-control @error($key.'[items]['.$value.'][aos][offset]') is-invalid @enderror"
                   id="items-offset-{{$key}}-{{$value}}-{{$counterPartial}}"
                   name="{{$key}}[items][{{$value}}][aos][offset]"
                   value="{{ old($key.'[items]['.$value.'][aos][offset]', theme_config($key.'.items.'.$value.'.aos.offset')) }}">

            @error($key.'[items]['.$value.'][aos][offset]')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
</div>
