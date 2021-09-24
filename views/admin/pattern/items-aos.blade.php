@php($counterPartial++)
<div class="js-aos">
    <div class="my-2">
        <label
            for="items-animation-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.animation') }}</label>
        <select name="{{$keyAos}}[items][{{$valueAos}}][aos][animation]"
                id="items-animation-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}"
                class="form-control js-select-aos">
            @foreach($animations as $key => $value)
                <optgroup label="{{$key}}">
                    @foreach($value as $v)
                        <option value="{{ $v }}"
                                @if(theme_config($keyAos.'.items.'.$valueAos.'.aos.animation') === $v) selected @endif>{{ $v }}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>
    </div>
    <div class="js-aos-active d-none">
        <div class="my-2">
            <label
                for="items-easing-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.easing') }}</label>
            <select name="{{$keyAos}}[items][{{$valueAos}}][aos][easing]"
                    id="items-easing-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}" class="form-control">
                @foreach($easingAnimations as $key => $value)
                    <option value="{{ $value }}"
                            @if(theme_config($keyAos.'.items.'.$valueAos.'.aos.easing') === $value) selected @endif>{{ $value }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="items-placement-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.placement') }}</label>
            <select name="{{$keyAos}}[items][{{$valueAos}}][aos][placement]"
                    id="items-placement-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}" class="form-control">
                @foreach($placements as $key => $value)
                    <option value="{{ $value }}"
                            @if(theme_config($keyAos.'.items.'.$valueAos.'.aos.placement') === $value) selected @endif>{{ $value }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="items-duration-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.duration') }}</label>
            <input type="text"
                   class="form-control @error($keyAos.'[items]['.$valueAos.'][aos][duration]') is-invalid @enderror"
                   id="items-duration-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}"
                   name="{{$keyAos}}[items][{{$valueAos}}][aos][duration]"
                   value="{{ old($keyAos.'[items]['.$valueAos.'][aos][duration]', theme_config($keyAos.'.items.'.$valueAos.'.aos.duration')) }}">

            @error($keyAos.'[items]['.$valueAos.'][aos][duration]')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="my-2">
            <label
                for="items-offset-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.offset') }}</label>
            <input type="text"
                   class="form-control @error($keyAos.'[items]['.$valueAos.'][aos][offset]') is-invalid @enderror"
                   id="items-offset-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}"
                   name="{{$keyAos}}[items][{{$valueAos}}][aos][offset]"
                   value="{{ old($keyAos.'[items]['.$valueAos.'][aos][offset]', theme_config($keyAos.'.items.'.$valueAos.'.aos.offset')) }}">

            @error($keyAos.'[items]['.$valueAos.'][aos][offset]')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
</div>
