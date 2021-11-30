@php($counterPartial++)
<div class="js-aos">
    <div class="my-2">
        <label
            for="widget-animation-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.animation') }}</label>
        <select name="widget[{{$key}}][items][{{$value}}][aos][animation]"
                id="widget-animation-{{$key}}-{{$value}}-{{$counterPartial}}"
                class="form-control js-select-aos">
            @foreach($animations as $k => $val)
                <optgroup label="{{$k}}">
                    @foreach($val as $v)
                        <option value="{{ $v }}"
                                @if(theme_config('widget.'.$key.'.items.'.$value.'.aos.animation') === $v) selected @endif>{{ $v }}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>
    </div>
    <div class="js-aos-active d-none">
        <div class="my-2">
            <label
                for="widget-items-easing-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.easing') }}</label>
            <select name="widget[{{$key}}][items][{{$value}}][aos][easing]"
                    id="widget-items-easing-{{$key}}-{{$value}}-{{$counterPartial}}" class="form-control">
                @foreach($easingAnimations as $k => $v)
                    <option value="{{ $v }}"
                            @if(theme_config('widget'.$key.'.items.'.$value.'.aos.easing') === $v) selected @endif>{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="widget-items-placement-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.placement') }}</label>
            <select name="widget[{{$key}}][items][{{$value}}][aos][placement]"
                    id="widget-items-placement-{{$key}}-{{$value}}-{{$counterPartial}}" class="form-control">
                @foreach($placements as $k => $v)
                    <option value="{{ $v }}"
                            @if(theme_config('widget'.$key.'.items.'.$value.'.aos.placement') === $v) selected @endif>{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="widget-items-duration-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.duration') }}</label>
            <input type="text"
                   class="form-control @error('widget'.$key.'[items]['.$value.'][aos][duration]') is-invalid @enderror"
                   id="widget-items-duration-{{$key}}-{{$value}}-{{$counterPartial}}"
                   name="widget[{{$key}}][items][{{$value}}][aos][duration]"
                   value="{{ old('widget'.$key.'[items]['.$value.'][aos][duration]', theme_config('widget'.$key.'.items.'.$value.'.aos.duration')) }}">

            @error('widget'.$key.'[items]['.$value.'][aos][duration]')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="my-2">
            <label
                for="widget-items-offset-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.offset') }}</label>
            <input type="text"
                   class="form-control @error('widget'.$key.'[items]['.$value.'][aos][offset]') is-invalid @enderror"
                   id="widget-items-offset-{{$key}}-{{$value}}-{{$counterPartial}}"
                   name="widget[{{$key}}][items][{{$value}}][aos][offset]"
                   value="{{ old('widget'.$key.'[items]['.$value.'][aos][offset]', theme_config($key.'.items.'.$value.'.aos.offset')) }}">

            @error('widget['.$key.'][items]['.$value.'][aos][offset]')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
</div>
