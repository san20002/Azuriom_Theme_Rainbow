@php($counterPartial++)
<div class="card mb-4">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h4 class="card-title" style="flex: 0 1 90%; max-width: 90%;">
            {{trans('theme::lang.'.$keyBanner.'.banner.'.$valueBanner.'.title')}}</h4>
        <input
            class="btn btn-link d-none {{theme_config($keyBanner.'.banner.'.$valueBanner.'.chevron')?"collapsed":""}}"
            {{theme_config($keyBanner.'.banner.'.$valueBanner.'.chevron')?"checked":""}}
            type="checkbox"
            name="{{$keyBanner}}[banner][{{$valueBanner}}][chevron]"
            data-toggle="collapse"
            data-target="#collapse-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}"
            aria-expanded="{{theme_config($keyBanner.'.banner.'.$valueBanner.'.chevron')?"true":"false"}}"
            aria-controls="collapse-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}"
            id="checkbox-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}">
        <label for="checkbox-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}"
               class="px-2 text-center" style="flex: 0 1 10%; max-width: 10%; cursor: pointer">
            <i class="fas fa-chevron-down"></i>
        </label>
    </div>

    <div class="collapse {{theme_config($keyBanner.'.banner.'.$valueBanner.'.chevron')?"show":""}}"
         id="collapse-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}">
        <div class="card-body">
            <label
                for="selectImage-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}">{{ trans('theme::lang.image') }}</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <a class="btn btn-outline-success"
                       href="{{ route('admin.images.create') }}"
                       target="_blank" rel="noopener noreferrer"><i
                            class="fas fa-upload"></i></a>
                </div>
                <select class="custom-select"
                        id="selectImage-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}"
                        name="{{$keyBanner}}[banner][{{$valueBanner}}][image]"
                        data-image-preview-select="filePreview-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}">
                    <option value="">none</option>
                    @foreach($allImagesStokage as $image)
                        <option value="{{ $image->file }}"
                                @if(theme_config($keyBanner.'.banner.'.$valueBanner.'.image') === $image->file) selected @endif>{{ $image->name }}</option>
                    @endforeach
                </select>
                <div class="mt-3 w-100">
                    <img
                        src="{{ theme_config($keyBanner.'.banner.'.$valueBanner.'.image') ? image_url( old($keyBanner.'[banner]['.$valueBanner.'][image]', theme_config($keyBanner.'.banner.'.$valueBanner.'.image')) ): ''}}"
                        alt="{{ old($keyBanner.'[banner]['.$valueBanner.'][image]', theme_config($keyBanner.'.banner.'.$valueBanner.'.image')) }}"
                        class="card-img rounded img-preview-sm @if(!theme_config($keyBanner.'.banner.'.$valueBanner.'.image'))d-none @endif"
                        id="filePreview-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}"
                        style="object-fit: contain;max-height: 90px">
                </div>
            </div>
            <label
                for="title-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}">{{ trans('theme::lang.title') }}</label>
            <input type="text"
                   class="form-control @error($keyBanner.'[banner]['.$valueBanner.'][title]') is-invalid @enderror"
                   id="title-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}"
                   name="{{$keyBanner}}[banner][{{$valueBanner}}][title]"
                   value="{{ old($keyBanner.'[banner]['.$valueBanner.'][title]', theme_config($keyBanner.'.banner.'.$valueBanner.'.title')) }}">

            @error($keyBanner.'[banner]['.$valueBanner.'][title]')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror

            @include('admin.pattern.banner-aos',['keyAos'=>$keyBanner, 'valueAos' => $valueBanner])

            <div class="custom-control custom-switch mt-2">
                <input type="checkbox" class="custom-control-input"
                       id="hidden-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}"
                       name="{{$keyBanner}}[banner][{{$valueBanner}}][hidden]"
                       @if(theme_config($keyBanner.'.banner.'.$valueBanner.'.hidden')) checked @endif>
                <label class="custom-control-label" for="hidden-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}">
                    {{trans('theme::lang.'.$keyBanner.'.banner.'.$valueBanner.'.hidden')}}
                </label>
            </div>
        </div>
    </div>
</div>
