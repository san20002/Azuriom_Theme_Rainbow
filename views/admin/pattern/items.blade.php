@php($counterPartial++)
<div class="card card-custom {{isset($url) && !empty($url) ?? 'disabled' }}">
    @if(isset($url) && !empty($url))
        <a class="badge badge-info"
           href="{{$url}}#config_trigger={{$key}}-items-{{$value}}"
           target="_blank"
        >
            <i class="fas fa-eye"></i>
        </a>
    @endif
    <div class="card-header d-flex align-items-center justify-content-between">
        <input
            class="btn btn-link d-none {{theme_config($key.'.items.'.$value.'.chevron')?"collapsed":""}}"
            {{theme_config($key.'.items.'.$value.'.chevron')?"checked":""}}
            type="checkbox"
            name="{{$key}}[items][{{$value}}][chevron]"
            data-toggle="collapse"
            data-target="#collapse-items-{{$key}}-{{$value}}-{{$counterPartial}}"
            aria-expanded="{{theme_config($key.'.items.'.$value.'.chevron')?"true":"false"}}"
            aria-controls="collapse-items-{{$key}}-{{$value}}-{{$counterPartial}}"
            id="checkbox-items-{{$key}}-{{$value}}-{{$counterPartial}}">
        <label for="checkbox-items-{{$key}}-{{$value}}-{{$counterPartial}}"
               class="px-2 d-flex align-content-center justify-content-between w-100" style="cursor: pointer">
            <h4 class="card-title mb-0">
                {{ trans('theme::lang.'.$key.'.items.'.$value.'.title') }}
            </h4>
            <i class="fas fa-chevron-down" style="padding: 6px;"></i>
        </label>
    </div>
    <div class="collapse {{theme_config($key.'.items.'.$value.'.chevron')?"show":""}}"
         id="collapse-items-{{$key}}-{{$value}}-{{$counterPartial}}">

        <div class="card-body">
            @if(trans()->has('theme::lang.'.$key.'.items.'.$value.'.info'))
                <div
                    class="small font-italic mb-2">{!! trans('theme::lang.'.$key.'.items.'.$value.'.info')!!}</div>
            @endif
            @if(isset($filedsBuilder))
                @foreach($filedsBuilder as $field)
                    @if($field['type'] === 'input')
                        <label class="mb-1  mt-2"
                               for="input-{{$key}}-{{$value}}-{{$field['value']}}-{{$counterPartial}}">{{ trans('theme::lang.'.$key.'.items.'.$value.'.label.'.$field['value']) }}</label>
                        <input type="text"
                               class="form-control @error($key.'[items]['.$value.']['.$field['value'].']') is-invalid @enderror"
                               placeholder="{{ trans('theme::lang.'.$key.'.items.'.$value.'.placeholder.'.$field['value']) }}"
                               id="input-{{$key}}-{{$value}}-{{$field['value']}}-{{$counterPartial}}"
                               name="{{$key}}[items][{{$value}}][{{$field['value']}}]"
                               value="{{ old($key.'[items]['.$value.']['.$field['value'].']', theme_config($key.'.items.'.$value.'.'.$field['value'])) }}">
                        @error($key.'[items]['.$value.']['.$field['value'].']')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                    @endif
                    @if($field['type'] === 'checkbox')
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input"
                                   id="checkbox-{{$key}}-{{$value}}-{{$field['value']}}-{{$counterPartial}}"
                                   name="{{$key}}[items][{{$value}}][{{$field['value']}}]"
                                   @if( theme_config($key.'.items.'.$value.'.'.$field['value'])) checked @endif>
                            <label class="custom-control-label"
                                   for="checkbox-{{$key}}-{{$value}}-{{$field['value']}}-{{$counterPartial}}">
                                {{ trans('theme::lang.'.$key.'.items.'.$value.'.label.'.$field['value']) }}
                            </label>
                        </div>
                    @endif
                    @if($field['type'] === 'select')
                        <div class="my-2">
                            <label class="mb-1  mt-2"
                                   for="select-{{$key}}-{{$value}}-{{$field['value']}}">{{ trans('theme::lang.styles') }}</label>
                            <select name="{{$key}}[items][{{$value}}][{{$field['value']}}]"
                                    id="select-{{$key}}-{{$value}}-{{$field['value']}}" class="form-control">
                                @foreach($field['option'] as $k => $v)
                                    <option value="{{ $k }}"
                                            @if(theme_config($key.'.items.'.$value.'.'.$field['value']) == $k) selected @endif>{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                    @if($field['type'] === 'image')
                        <div class="my-2">
                            <label
                                for="selectImage-{{$key}}-{{$value}}-{{$field['value']}}-{{$counterPartial}}">
                                @if(isset($field['label']) && $field['label'])
                                    {{ trans('theme::lang.'.$key.'.items.'.$value.'.label.'.$field['value']) }}
                                @else
                                    {{ trans('theme::lang.image') }}
                                @endif
                            </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <a class="btn btn-outline-success"
                                       href="{{ route('admin.images.create') }}"
                                       target="_blank" rel="noopener noreferrer"><i
                                            class="fas fa-upload"></i></a>
                                </div>
                                <select class="custom-select"
                                        id="selectImage-{{$key}}-{{$value}}-{{$field['value']}}-{{$counterPartial}}"
                                        name="{{$key}}[items][{{$value}}][{{$field['value']}}]"
                                        data-image-preview-select="filePreview-{{$key}}-{{$value}}-{{$field['value']}}-{{$counterPartial}}">
                                    <option value="">none</option>
                                    @foreach($allImagesStokage as $image)
                                        <option value="{{ $image->file }}"
                                                @if(theme_config($key.'.items.'.$value.'.'.$field['value']) === $image->file) selected @endif>{{ $image->name }}</option>
                                    @endforeach
                                </select>
                                <div class="mt-3 w-100">
                                    <img
                                        src="{{ theme_config($key.'.items.'.$value.'.'.$field['value']) ? image_url( old($key.'.items.'.$value.'.'.$field['value'], theme_config($key.'.items.'.$value.'.'.$field['value'])) ): ''}}"
                                        alt="{{ old($key.'.items.'.$value.'.'.$field['value'], theme_config($key.'.items.'.$value.'.'.$field['value'])) }}"
                                        class="card-img rounded img-preview-sm @if(!theme_config($key.'.items.'.$value.'.'.$field['value']))d-none @endif"
                                        id="filePreview-{{$key}}-{{$value}}-{{$field['value']}}-{{$counterPartial}}"
                                        style="object-fit: contain;max-height: 90px">
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
            @include('admin.pattern.items-aos',['key'=> $key, 'value' => $value])
        </div>
    </div>
</div>
