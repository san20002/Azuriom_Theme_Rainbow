@php($counterPartial++)
<div class="card">
    <div class="card-header">
        <div class="card-title">{{trans('theme::lang.'.$keyBanner.'.banner.'.$valueBanner.'.title')}}</div>
    </div>
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
                    class="card-img rounded img-preview-sm @if(!config($keyBanner.'.banner.'.$valueBanner.'.image')))d-none @endif"
                    id="filePreview-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}"
                    style="object-fit: contain;max-height: 90px">
            </div>
        </div>
        <label for="title-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}">{{ trans('theme::lang.title') }}</label>
        <input type="text"
               class="form-control @error($keyBanner.'[banner]['.$valueBanner.'][title]') is-invalid @enderror"
               id="title-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}"
               name="{{$keyBanner}}[banner][{{$valueBanner}}][title]"
               value="{{ old($keyBanner.'[banner]['.$valueBanner.'][title]', theme_config($keyBanner.'.banner.'.$valueBanner.'.title')) }}">

        @error($keyBanner.'[banner]['.$valueBanner.'][title]')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror

        @include('admin.pattern.aos',['keyBanner'=>$keyBanner, 'valueBanner' => $valueBanner])

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
