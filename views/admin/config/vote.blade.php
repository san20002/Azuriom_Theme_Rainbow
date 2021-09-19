<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.vote.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <fieldset class="form-group">
                <legend>{{trans('theme::lang.vote.banner.vote.title')}}</legend>
                <div class="small font-italic mb-2">{!! trans('theme::lang.vote.banner.info')!!}</div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="imageSelect">{{ trans('theme::lang.image') }}</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <a class="btn btn-outline-success"
                                   href="{{ route('admin.images.create') }}"
                                   target="_blank" rel="noopener noreferrer"><i
                                        class="fas fa-upload"></i></a>
                            </div>
                            <select class="custom-select"
                                    id="imageSelect-vote"
                                    name="vote[banner][vote][image]"
                                    data-image-preview-select="filePreview-vote">
                                <option value="">none</option>
                                @foreach(\Azuriom\Models\Image::all() as $image)
                                    <option value="{{ $image->file }}"
                                            @if(theme_config('vote.banner.vote.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                @endforeach
                            </select>
                            <div class="mt-3 w-100">
                                <img
                                    src="{{ theme_config('vote.banner.vote.image') ? image_url( old('vote[banner][vote][image]', theme_config('vote.banner.vote.image')) ): ''}}"
                                    alt="{{ old('vote[banner][vote][image]', theme_config('vote.banner.vote.image')) }}"
                                    class="card-img rounded img-preview-sm @if(!config('vote.banner.vote.image')))d-none @endif"
                                    id="filePreview-vote"
                                    style="object-fit: contain">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="voteBannerNewTitle">{{ trans('theme::lang.title') }}</label>
                        <input type="text" class="form-control @error('vote[banner][vote][title]') is-invalid @enderror"
                               id="voteBannerNewTitle"
                               name="vote[banner][vote][title]"
                               value="{{ old('vote[banner][vote][title]', theme_config('vote.banner.vote.title')) }}">

                        @error('vote[banner][vote][title]')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="voteBannerNewHidden"
                                   name="vote[banner][vote][hidden]"
                                   @if(theme_config('vote.banner.vote.hidden')) checked @endif>
                            <label class="custom-control-label" for="voteBannerNewHidden">
                                {{trans('theme::lang.vote.banner.vote.hidden')}}
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="form-group">
        <fieldset class="mt-4">
            <legend>{{ trans('theme::lang.vote.favicon.title') }}</legend>
            <div class="pl-3">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="voteIcon"
                           name="vote[icon]"
                           @if(theme_config('vote.icon')) checked @endif>
                    <label class="custom-control-label" for="voteIcon">
                        {{ trans('theme::lang.vote.favicon.hidden') }}
                    </label>
                </div>
            </div>
        </fieldset>
    </div>
</div>
