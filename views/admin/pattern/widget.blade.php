@php($counterPartial++)
<div class="card my-4  {{isset($url) && !empty($url) ?? 'disabled' }}">
    @if(isset($url) && !empty($url))
        <a class="badge badge-info"
           href="{{$url}}#config_trigger={{$key}}-items-{{$value}}"
           target="_blank"
           style="font-size: 1.1rem;position: absolute;top: -15px;left: -15px;height: 35px;width: 35px;border-radius: 22.25px;line-height: 37px;padding: 0;"
        >
            <i class="fas fa-eye"></i>
        </a>
    @endif
    <div class="card-header d-flex align-items-center justify-content-between">
        <input
            class="btn btn-link d-none {{theme_config('widget.'.$key.'.items.'.$value.'.chevron')?"collapsed":""}}"
            {{theme_config('widget.'.$key.'.items.'.$value.'.chevron')?"checked":""}}
            type="checkbox"
            name="widget[{{$key}}][items][{{$value}}][chevron]"
            data-toggle="collapse"
            data-target="#collapse-widget-{{$key}}-{{$value}}-{{$counterPartial}}"
            aria-expanded="{{theme_config('widget.'.$key.'.items.'.$value.'.chevron')?"true":"false"}}"
            aria-controls="collapse-widget-{{$key}}-{{$value}}-{{$counterPartial}}"
            id="checkbox-widget-{{$key}}-{{$value}}-{{$counterPartial}}">
        <label for="checkbox-widget-{{$key}}-{{$value}}-{{$counterPartial}}"
               class="px-2 d-flex align-content-center justify-content-between w-100" style="cursor: pointer">
            <h4 class="card-title mb-0">
                {{ trans('theme::lang.widget.'.$key.'.items.'.$value.'.title') }}
            </h4>
            <i class="fas fa-chevron-down" style="padding: 6px;"></i>
        </label>
    </div>
    <div class="collapse {{theme_config('widget.'.$key.'.items.'.$value.'.chevron')?"show":""}}"
         id="collapse-widget-{{$key}}-{{$value}}-{{$counterPartial}}">

        <div class="card-body">
            @if(trans()->has('theme::lang.widget.'.$key.'.items.'.$value.'.info'))
                <div
                    class="small font-italic mb-2">{!! trans('theme::lang.widget.'.$key.'.items.'.$value.'.info')!!}</div>
            @endif
            @if(isset($filedsBuilder))
                @foreach($filedsBuilder as $field)
                    @if($field['type'] === 'input')
                        <label class="mb-1  mt-2"
                               for="input-widget-{{$key}}-{{$value}}-{{$field['value']}}-{{$counterPartial}}">{{ trans('theme::lang.widget.'.$key.'.items.'.$value.'.label.'.$field['value']) }}</label>
                        <input type="text"
                               class="form-control @error($widget.'['.$key.'][items]['.$value.']['.$field['value'].']') is-invalid @enderror"
                               placeholder="{{ trans('theme::lang.widget.'.$key.'.items.'.$value.'.placeholder.'.$field['value']) }}"
                               id="input-widget-{{$key}}-{{$value}}-{{$field['value']}}-{{$counterPartial}}"
                               name="widget[{{$key}}][items][{{$value}}][{{$field['value']}}]"
                               value="{{ old($widget.'['.$key.'][items]['.$value.']['.$field['value'].']', theme_config('widget.'.$key.'.items.'.$value.'.'.$field['value'])) }}">
                        @error($widget.'['.$key.'][items]['.$value.']['.$field['value'].']')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                    @endif
                    @if($field['type'] === 'checkbox')
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input"
                                   id="checkbox-widget-{{$key}}-{{$value}}-{{$field['value']}}-{{$counterPartial}}"
                                   name="widget[{{$key}}][items][{{$value}}][{{$field['value']}}]"
                                   @if( theme_config('widget.'.$key.'.items.'.$value.'.'.$field['value'])) checked @endif>
                            <label class="custom-control-label"
                                   for="checkbox-widget-{{$key}}-{{$value}}-{{$field['value']}}-{{$counterPartial}}">
                                {{ trans('theme::lang.widget.'.$key.'.items.'.$value.'.label.'.$field['value']) }}
                            </label>
                        </div>
                    @endif
                    @if($field['type'] === 'select')
                            <div class="my-2">
                                <label class="mb-1  mt-2"
                                       for="select-widget-{{$key}}-{{$value}}-{{$field['value']}}">{{ trans('theme::lang.styles') }}</label>
                                <select name="widget[{{$key}}][items][{{$value}}][{{$field['value']}}]"
                                        id="select-{{$key}}-{{$value}}-{{$field['value']}}" class="form-control">
                                    @foreach($field['option'] as $k => $v)
                                        <option value="{{ $k }}"
                                                @if(theme_config('widget.'.$key.'.items.'.$value.'.'.$field['value']) == $k) selected @endif>{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                    @endif
                @endforeach
            @endif
            @include('admin.pattern.items-aos',['key'=> $key, 'value' => $value])
        </div>
    </div>
</div>
