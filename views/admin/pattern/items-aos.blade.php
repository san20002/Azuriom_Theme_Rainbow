@php($counterPartial++)
<div class="card">
    <div class="card-header">
        <h4 class="card-title">{{trans('theme::lang.'.$keyAos.'.aos.'.$valueAos.'.title')}}</h4>
    </div>
    <div class="card-body">
        <div class="js-aos">
            <div class="my-2">
                <label
                    for="items-animation-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.animation') }}</label>
                <select name="{{$keyAos}}[aos][{{$valueAos}}][animation]"
                        id="items-animation-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}" class="form-control js-select-aos">
                    @foreach($animations as $key => $value)
                        <optgroup label="{{$key}}">
                            @foreach($value as $v)
                                <option value="{{ $v }}"
                                        @if(theme_config($keyAos.'.aos.'.$valueAos.'.animation') === $v) selected @endif>{{ $v }}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
            </div>
            <div class="js-aos-active d-none">
                <div class="my-2">
                    <label
                        for="items-easing-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.easing') }}</label>
                    <select name="{{$keyAos}}[aos][{{$valueAos}}][easing]"
                            id="items-easing-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}" class="form-control">
                        @foreach($easingAnimations as $key => $value)
                            <option value="{{ $value }}"
                                    @if(theme_config($keyAos.'.aos.'.$valueAos.'.easing') === $value) selected @endif>{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="my-2">
                    <label
                        for="items-placement-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.placement') }}</label>
                    <select name="{{$keyAos}}[aos][{{$valueAos}}][placement]"
                            id="items-placement-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}" class="form-control">
                        @foreach($placements as $key => $value)
                            <option value="{{ $value }}"
                                    @if(theme_config($keyAos.'.aos.'.$valueAos.'.placement') === $value) selected @endif>{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="my-2">
                    <label
                        for="items-duration-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.duration') }}</label>
                    <input type="text"
                           class="form-control @error($keyAos.'[aos]['.$valueAos.'][duration]') is-invalid @enderror"
                           id="items-duration-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}"
                           name="{{$keyAos}}[aos][{{$valueAos}}][duration]"
                           value="{{ old($keyAos.'[aos]['.$valueAos.'][duration]', theme_config($keyAos.'.aos.'.$valueAos.'.duration')) }}">

                    @error($keyAos.'[aos]['.$valueAos.'][duration]')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="my-2">
                    <label
                        for="items-offset-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.offset') }}</label>
                    <input type="text"
                           class="form-control @error($keyAos.'[aos]['.$valueAos.'][offset]') is-invalid @enderror"
                           id="items-offset-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}"
                           name="{{$keyAos}}[aos][{{$valueAos}}][offset]"
                           value="{{ old($keyAos.'[aos]['.$valueAos.'][offset]', theme_config($keyAos.'.aos.'.$valueAos.'.offset')) }}">

                    @error($keyAos.'[aos]['.$valueAos.'][offset]')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
