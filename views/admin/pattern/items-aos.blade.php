@php($counterPartial++)
<div class="card mb-4">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h4 class="card-title" style="flex: 0 1 90%; max-width: 90%;">
            {{trans('theme::lang.'.$keyAos.'.aos.'.$valueAos.'.title')}}
        </h4>
        <input
            class="btn btn-link d-none {{theme_config($keyAos.'.aos.'.$valueAos.'.chevron')?"collapsed":""}}"
            {{theme_config($keyAos.'.aos.'.$valueAos.'.chevron')?"checked":""}}
            type="checkbox"
            name="{{$keyAos}}[aos][{{$valueAos}}][chevron]"
            data-toggle="collapse"
            data-target="#collapse-aos-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}"
            aria-expanded="{{theme_config($keyAos.'.aos.'.$valueAos.'.chevron')?"true":"false"}}"
            aria-controls="collapse-aos-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}"
            id="checkbox-aos-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">
        <label for="checkbox-aos-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}" class="px-2 text-center"
               style="flex: 0 1 10%; max-width: 10%; cursor: pointer">
            <i class="fas fa-chevron-down"></i>
        </label>
    </div>
    <div class="collapse {{theme_config($keyAos.'.aos.'.$valueAos.'.chevron')?"show":""}}"
         id="collapse-aos-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">
        <div class="card-body">
            <div class="js-aos">
                <div class="my-2">
                    <label
                        for="items-animation-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}">{{ trans('theme::lang.animation') }}</label>
                    <select name="{{$keyAos}}[aos][{{$valueAos}}][animation]"
                            id="items-animation-{{$keyAos}}-{{$valueAos}}-{{$counterPartial}}"
                            class="form-control js-select-aos">
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
</div>
