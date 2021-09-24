@php($counterPartial++)
<div class="card mb-4">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h4 class="card-title mb-0" style="flex: 0 1 90%; max-width: 90%;">
            {{ trans('theme::lang.'.$keyitems.'.items.'.$valueitems.'.title') }}
        </h4>
        <input
            class="btn btn-link d-none {{theme_config($keyitems.'.items.'.$valueitems.'.chevron')?"collapsed":""}}"
            {{theme_config($keyitems.'.items.'.$valueitems.'.chevron')?"checked":""}}
            type="checkbox"
            name="{{$keyitems}}[items][{{$valueitems}}][chevron]"
            data-toggle="collapse"
            data-target="#collapse-items-{{$keyitems}}-{{$valueitems}}-{{$counterPartial}}"
            aria-expanded="{{theme_config($keyitems.'.items.'.$valueitems.'.chevron')?"true":"false"}}"
            aria-controls="collapse-items-{{$keyitems}}-{{$valueitems}}-{{$counterPartial}}"
            id="checkbox-items-{{$keyitems}}-{{$valueitems}}-{{$counterPartial}}">
        <label for="checkbox-items-{{$keyitems}}-{{$valueitems}}-{{$counterPartial}}"
               class="px-2 text-center" style="flex: 0 1 10%; max-width: 10%; cursor: pointer">
            <i class="fas fa-chevron-down"></i>
        </label>
    </div>
    <div class="collapse {{theme_config($keyitems.'.items.'.$valueitems.'.chevron')?"show":""}}"
         id="collapse-items-{{$keyitems}}-{{$valueitems}}-{{$counterPartial}}">

        <div class="card-body">
            @if(trans()->has('theme::lang.'.$keyitems.'.items.'.$valueitems.'.info'))
                <div
                    class="small font-italic mb-2">{!! trans('theme::lang.'.$keyitems.'.items.'.$valueitems.'.info')!!}</div>
            @endif
            @if(isset($filedsBuilder))
                @foreach($filedsBuilder as $field)
                    @if($field['type'] === 'input')
                        <label class="mb-1  mt-2"
                               for="input-{{$keyitems}}-{{$valueitems}}-{{$field['value']}}-{{$counterPartial}}">{{ trans('theme::lang.'.$keyitems.'.items.'.$valueitems.'.label.'.$field['value']) }}</label>
                        <input type="text"
                               class="form-control @error($keyitems.'[items]['.$valueitems.']['.$field['value'].']') is-invalid @enderror"
                               placeholder="{{ trans('theme::lang.'.$keyitems.'.items.'.$valueitems.'.placeholder.'.$field['value']) }}"
                               id="input-{{$keyitems}}-{{$valueitems}}-{{$field['value']}}-{{$counterPartial}}"
                               name="{{$keyitems}}[items][{{$valueitems}}][{{$field['value']}}]"
                               value="{{ old($keyitems.'[items]['.$valueitems.']['.$field['value'].']', theme_config($keyitems.'.items.'.$valueitems.'.'.$field['value'])) }}">
                        @error($keyitems.'[items]['.$valueitems.']['.$field['value'].']')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                    @endif
                    @if($field['type'] === 'checkbox')
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input"
                                   id="checkbox-{{$keyitems}}-{{$valueitems}}-{{$field['value']}}-{{$counterPartial}}"
                                   name="{{$keyitems}}[items][{{$valueitems}}][{{$field['value']}}]"
                                   @if( theme_config($keyitems.'.items.'.$valueitems.'.'.$field['value'])) checked @endif>
                            <label class="custom-control-label"
                                   for="checkbox-{{$keyitems}}-{{$valueitems}}-{{$field['value']}}-{{$counterPartial}}">
                                {{ trans('theme::lang.'.$keyitems.'.items.'.$valueitems.'.label.'.$field['value']) }}
                            </label>
                        </div>
                    @endif
                @endforeach
            @endif
            @include('admin.pattern.items-aos',['keyAos'=> $keyitems, 'valueAos' => $valueitems])
        </div>
    </div>
</div>
