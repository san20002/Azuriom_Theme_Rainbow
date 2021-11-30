@php($counterPartial++)
<div class="card my-4  {{isset($url) && !empty($url) ?? 'disabled' }}">
    @if(isset($url) && !empty($url))
        <a class="badge badge-info"
           href="{{$url}}#config_trigger={{$key}}-banner-{{$value}}"
           target="_blank"
           style="font-size: 1.1rem;position: absolute;top: -15px;left: -15px;height: 35px;width: 35px;border-radius: 22.25px;line-height: 37px;padding: 0;"
        >
            <i class="fas fa-eye"></i>
        </a>
    @endif
    <div class="card-header d-flex align-items-center justify-content-between">
        <input
            class="btn btn-link d-none {{theme_config('widget.'.$key.'.banner.'.$value.'.chevron')?"collapsed":""}}"
            {{theme_config('widget.'.$key.'.banner.'.$value.'.chevron')?"checked":""}}
            type="checkbox"
            name="widget[{{$key}}][banner][{{$value}}][chevron]"
            data-toggle="collapse"
            data-target="#collapse-widget-{{$key}}-{{$value}}-{{$counterPartial}}"
            aria-expanded="{{theme_config('widget.'.$key.'.banner.'.$value.'.chevron')?"true":"false"}}"
            aria-controls="collapse-widget-{{$key}}-{{$value}}-{{$counterPartial}}"
            id="checkbox-widget-{{$key}}-{{$value}}-{{$counterPartial}}">
        <label for="checkbox-widget-{{$key}}-{{$value}}-{{$counterPartial}}"
               class="px-2 d-flex align-content-center justify-content-between w-100" style="cursor: pointer">
            <h4 class="card-title mb-0">
                {{trans('theme::lang.widget.'.$key.'.banner.'.$value.'.title')}}
            </h4>
            <i class="fas fa-chevron-down" style="padding: 6px"></i>
        </label>
    </div>

    <div class="collapse {{theme_config('widget.'.$key.'.banner.'.$value.'.chevron')?"show":""}}"
         id="collapse-widget-{{$key}}-{{$value}}-{{$counterPartial}}">
        <div class="card-body">
            <div class="small font-italic mb-2">{!! trans('theme::lang.widget.'.$key.'.banner.'.$value.'.info')!!}</div>
            <label
                for="selectImage-widget-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.image') }}</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <a class="btn btn-outline-success"
                       href="{{ route('admin.images.create') }}"
                       target="_blank" rel="noopener noreferrer"><i
                            class="fas fa-upload"></i></a>
                </div>
                <select class="custom-select"
                        id="selectImage-widget-{{$key}}-{{$value}}-{{$counterPartial}}"
                        name="widget[{{$key}}][banner][{{$value}}][image]"
                        data-image-preview-select="filePreview-widget-{{$key}}-{{$value}}-{{$counterPartial}}">
                    <option value="">none</option>
                    @foreach($allImagesStokage as $image)
                        <option value="{{ $image->file }}"
                                @if(theme_config('widget.'.$key.'.banner.'.$value.'.image') === $image->file) selected @endif>{{ $image->name }}</option>
                    @endforeach
                </select>
                <div class="mt-3 w-100">
                    <img
                        src="{{ theme_config('widget.'.$key.'.banner.'.$value.'.image') ? image_url( old('widget['.$key.'][banner]['.$value.'][image]', theme_config('widget.'.$key.'.banner.'.$value.'.image')) ): ''}}"
                        alt="{{ old('widget['.$key.'][banner]['.$value.'][image]', theme_config('widget.'.$key.'.banner.'.$value.'.image')) }}"
                        class="card-img rounded img-preview-sm @if(!theme_config('widget.'.$key.'.banner.'.$value.'.image'))d-none @endif"
                        id="filePreview-widget-{{$key}}-{{$value}}-{{$counterPartial}}"
                        style="object-fit: contain;max-height: 90px">
                </div>
            </div>
            <label
                for="title-widget-{{$key}}-{{$value}}-{{$counterPartial}}">{{ trans('theme::lang.title') }}</label>
            <input type="text"
                   class="form-control @error($key.'[banner]['.$value.'][title]') is-invalid @enderror"
                   id="title-widget-{{$key}}-{{$value}}-{{$counterPartial}}"
                   name="widget[{{$key}}][banner][{{$value}}][title]"
                   value="{{ old('widget['.$key.'][banner]['.$value.'][title]', theme_config('widget.'.$key.'.banner.'.$value.'.title')) }}">

            @error($key.'[banner]['.$value.'][title]')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror

            @include('admin.pattern.banner-aos',['keyAos'=>$key, 'value' => $value])

            <div class="custom-control custom-switch mt-2">
                <input type="checkbox" class="custom-control-input"
                       id="hidden-widget-{{$key}}-{{$value}}-{{$counterPartial}}"
                       name="widget[{{$key}}][banner][{{$value}}][hidden]"
                       @if(theme_config('widget.'.$key.'.banner.'.$value.'.hidden')) checked @endif>
                <label class="custom-control-label" for="hidden-widget-{{$key}}-{{$value}}-{{$counterPartial}}">
                    {{trans('theme::lang.widget.'.$key.'.banner.'.$value.'.hidden')}}
                </label>
            </div>
        </div>
    </div>
</div>
