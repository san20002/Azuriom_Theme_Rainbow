<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.shop.title')}}</h3>
</div>
<div class="card-body">
    <div class="small font-italic mb-2">{!! trans('theme::lang.shop.banner.info')!!}</div>
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <div class="form-group">
                <fieldset>
                    <legend>{{trans('theme::lang.shop.banner.shop.title')}}</legend>
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
                                        id="imageSelect-shop"
                                        name="shop[banner][shop][image]"
                                        data-image-preview-select="filePreview-shop">
                                    <option value="">none</option>
                                    @foreach(\Azuriom\Models\Image::all() as $image)
                                        <option value="{{ $image->file }}"
                                                @if(theme_config('shop.banner.shop.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                    @endforeach
                                </select>
                                <div class="mt-3 w-100">
                                    <img
                                        src="{{ theme_config('shop.banner.shop.image') ? image_url( old('shop[banner][shop][image]', theme_config('shop.banner.shop.image')) ): ''}}"
                                        alt="{{ old('shop[banner][shop][image]', theme_config('shop.banner.shop.image')) }}"
                                        class="card-img rounded img-preview-sm @if(!config('shop.banner.shop.image')))d-none @endif"
                                        id="filePreview-shop"
                                        style="object-fit: contain">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="shopBannerShopTitle">{{ trans('theme::lang.title') }}</label>
                            <input type="text"
                                   class="form-control @error('shop[banner][shop][title]') is-invalid @enderror"
                                   id="shopBannerShopTitle"
                                   name="shop[banner][shop][title]"
                                   value="{{ old('shop[banner][shop][title]', theme_config('shop.banner.shop.title')) }}">

                            @error('shop[banner][shop][title]')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="shopBannerShopHidden"
                                       name="shop[banner][shop][hidden]"
                                       @if(theme_config('shop.banner.shop.hidden')) checked @endif>
                                <label class="custom-control-label" for="shopBannerShopHidden">
                                    {{trans('theme::lang.shop.banner.shop.hidden')}}
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="form-group">
                <fieldset>
                    <legend>{{trans('theme::lang.shop.banner.filter.title')}}</legend>
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
                                        id="imageSelect--filter"
                                        name="shop[banner][filter][image]"
                                        data-image-preview-select="filePreview-filter">
                                    <option value="">none</option>
                                    @foreach(\Azuriom\Models\Image::all() as $image)
                                        <option value="{{ $image->file }}"
                                                @if(theme_config('shop.banner.filter.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                    @endforeach
                                </select>
                                <div class="mt-3 w-100">
                                    <img
                                        src="{{ theme_config('shop.banner.filter.image') ? image_url( old('shop[banner][filter][image]', theme_config('shop.banner.filter.image')) ): ''}}"
                                        alt="{{ old('shop[banner][filter][image]', theme_config('shop.banner.filter.image')) }}"
                                        class="card-img rounded img-preview-sm @if(!config('shop.banner.filter.image')))d-none @endif"
                                        id="filePreview-filter"
                                        style="object-fit: contain">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="shopBannerFilterTitle">{{ trans('theme::lang.title') }}</label>
                            <input type="text"
                                   class="form-control @error('shop[banner][filter][title]') is-invalid @enderror"
                                   id="shopBannerFilterTitle"
                                   name="shop[banner][filter][title]"
                                   value="{{ old('shop[banner][filter][title]', theme_config('shop.banner.filter.title')) }}">

                            @error('shop[banner][filter][title]')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="shopBannerFilterHidden"
                                       name="shop[banner][filter][hidden]"
                                       @if(theme_config('shop.banner.filter.hidden')) checked @endif>
                                <label class="custom-control-label" for="shopBannerFilterHidden">
                                    {{trans('theme::lang.shop.banner.filter.hidden')}}
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="form-group">
                <fieldset>
                    <legend>{{trans('theme::lang.shop.banner.cart.title')}}</legend>
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
                                        id="imageSelect--cart"
                                        name="shop[banner][cart][image]"
                                        data-image-preview-select="filePreview-cart">
                                    <option value="">none</option>
                                    @foreach(\Azuriom\Models\Image::all() as $image)
                                        <option value="{{ $image->file }}"
                                                @if(theme_config('shop.banner.cart.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                    @endforeach
                                </select>
                                <div class="mt-3 w-100">
                                    <img
                                        src="{{ theme_config('shop.banner.cart.image') ? image_url( old('shop[banner][cart][image]', theme_config('shop.banner.cart.image')) ): ''}}"
                                        alt="{{ old('shop[banner][cart][image]', theme_config('shop.banner.cart.image')) }}"
                                        class="card-img rounded img-preview-sm @if(!config('shop.banner.cart.image')))d-none @endif"
                                        id="filePreview-cart"
                                        style="object-fit: contain">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="shopBannerCartTitle">{{ trans('theme::lang.title') }}</label>
                            <input type="text"
                                   class="form-control @error('shop[banner][cart][title]') is-invalid @enderror"
                                   id="shopBannerCartTitle"
                                   name="shop[banner][cart][title]"
                                   value="{{ old('shop[banner][cart][title]', theme_config('shop.banner.cart.title')) }}">

                            @error('shop[banner][cart][title]')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="shopBannerCartHidden"
                                       name="shop[banner][cart][hidden]"
                                       @if(theme_config('shop.banner.cart.hidden')) checked @endif>
                                <label class="custom-control-label" for="shopBannerCartHidden">
                                    {{trans('theme::lang.shop.banner.cart.hidden')}}
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="col-12">
            <hr class="my-3 sidebar-divider">
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="form-group">
                <fieldset>
                    <legend>{{trans('theme::lang.shop.banner.profile.title')}}</legend>
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
                                        id="imageSelect--user"
                                        name="shop[banner][user][image]"
                                        data-image-preview-select="filePreview-user">
                                    <option value="">none</option>
                                    @foreach(\Azuriom\Models\Image::all() as $image)
                                        <option value="{{ $image->file }}"
                                                @if(theme_config('shop.banner.user.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                    @endforeach
                                </select>
                                <div class="mt-3 w-100">
                                    <img
                                        src="{{ theme_config('shop.banner.user.image') ? image_url( old('shop[banner][user][image]', theme_config('shop.banner.user.image')) ): ''}}"
                                        alt="{{ old('shop[banner][user][image]', theme_config('shop.banner.user.image')) }}"
                                        class="card-img rounded img-preview-sm @if(!config('shop.banner.user.image')))d-none @endif"
                                        id="filePreview-user"
                                        style="object-fit: contain">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="shopBannerUserTitle">{{ trans('theme::lang.title') }}</label>
                            <input type="text"
                                   class="form-control @error('shop[banner][user][title]') is-invalid @enderror"
                                   id="shopBannerUserTitle"
                                   name="shop[banner][user][title]"
                                   value="{{ old('shop[banner][user][title]', theme_config('shop.banner.user.title')) }}">

                            @error('shop[banner][user][title]')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="shopBannerUserHidden"
                                       name="shop[banner][user][hidden]"
                                       @if(theme_config('shop.banner.user.hidden')) checked @endif>
                                <label class="custom-control-label" for="shopBannerUserHidden">
                                    {{trans('theme::lang.shop.banner.profile.hidden')}}
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="form-group">
                <fieldset>
                    <legend>{{trans('theme::lang.shop.banner.coupons.title')}}</legend>
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
                                        id="imageSelect--coupons"
                                        name="shop[banner][coupons][image]"
                                        data-image-preview-select="filePreview-coupons">
                                    <option value="">none</option>
                                    @foreach(\Azuriom\Models\Image::all() as $image)
                                        <option value="{{ $image->file }}"
                                                @if(theme_config('shop.banner.coupons.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                    @endforeach
                                </select>
                                <div class="mt-3 w-100">
                                    <img
                                        src="{{ theme_config('shop.banner.coupons.image') ? image_url( old('shop[banner][coupons][image]', theme_config('shop.banner.coupons.image')) ): ''}}"
                                        alt="{{ old('shop[banner][coupons][image]', theme_config('shop.banner.coupons.image')) }}"
                                        class="card-img rounded img-preview-sm @if(!config('shop.banner.coupons.image')))d-none @endif"
                                        id="filePreview-coupons"
                                        style="object-fit: contain">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="shopBannerCouponsTitle">{{ trans('theme::lang.title') }}</label>
                            <input type="text"
                                   class="form-control @error('shop[banner][coupons][title]') is-invalid @enderror"
                                   id="shopBannerCouponsTitle"
                                   name="shop[banner][coupons][title]"
                                   value="{{ old('shop[banner][coupons][title]', theme_config('shop.banner.coupons.title')) }}">

                            @error('shop[banner][coupons][title]')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="shopBannerCouponsHidden"
                                       name="shop[banner][coupons][hidden]"
                                       @if(theme_config('shop.banner.coupons.hidden')) checked @endif>
                                <label class="custom-control-label" for="shopBannerCouponsHidden">
                                    {{trans('theme::lang.shop.banner.coupons.hidden')}}
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="form-group">
                <fieldset>
                    <legend>{{trans('theme::lang.shop.banner.addCoupons.title')}}</legend>
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
                                        id="imageSelect--addCoupons"
                                        name="shop[banner][addCoupons][image]"
                                        data-image-preview-select="filePreview-addCoupons">
                                    <option value="">none</option>
                                    @foreach(\Azuriom\Models\Image::all() as $image)
                                        <option value="{{ $image->file }}"
                                                @if(theme_config('shop.banner.addCoupons.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                    @endforeach
                                </select>
                                <div class="mt-3 w-100">
                                    <img
                                        src="{{ theme_config('shop.banner.addCoupons.image') ? image_url( old('shop[banner][addCoupons][image]', theme_config('shop.banner.addCoupons.image')) ): ''}}"
                                        alt="{{ old('shop[banner][addCoupons][image]', theme_config('shop.banner.addCoupons.image')) }}"
                                        class="card-img rounded img-preview-sm @if(!config('shop.banner.addCoupons.image')))d-none @endif"
                                        id="filePreview-addCoupons"
                                        style="object-fit: contain">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="shopBannerAddCouponsTitle">{{ trans('theme::lang.title') }}</label>
                            <input type="text"
                                   class="form-control @error('shop[banner][addCoupons][title]') is-invalid @enderror"
                                   id="shopBannerAddCouponsTitle"
                                   name="shop[banner][addCoupons][title]"
                                   value="{{ old('shop[banner][addCoupons][title]', theme_config('shop.banner.addCoupons.title')) }}">

                            @error('shop[banner][addCoupons][title]')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="shopBannerAddCouponsHidden"
                                       name="shop[banner][addCoupons][hidden]"
                                       @if(theme_config('shop.banner.addCoupons.hidden')) checked @endif>
                                <label class="custom-control-label" for="shopBannerAddCouponsHidden">
                                    {{trans('theme::lang.shop.banner.addCoupons.hidden')}}
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="col-12">
            <hr class="my-3 sidebar-divider">
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="form-group">
                <fieldset>
                    <legend>{{trans('theme::lang.shop.banner.payment.title')}}</legend>
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
                                        id="imageSelect--paiement"
                                        name="shop[banner][paiement][image]"
                                        data-image-preview-select="filePreview-paiement">
                                    <option value="">none</option>
                                    @foreach(\Azuriom\Models\Image::all() as $image)
                                        <option value="{{ $image->file }}"
                                                @if(theme_config('shop.banner.paiement.image') === $image->file) selected @endif>{{ $image->name }}</option>
                                    @endforeach
                                </select>
                                <div class="mt-3 w-100">
                                    <img
                                        src="{{ theme_config('shop.banner.paiement.image') ? image_url( old('shop[banner][paiement][image]', theme_config('shop.banner.paiement.image')) ): ''}}"
                                        alt="{{ old('shop[banner][paiement][image]', theme_config('shop.banner.paiement.image')) }}"
                                        class="card-img rounded img-preview-sm @if(!config('shop.banner.paiement.image')))d-none @endif"
                                        id="filePreview-paiement"
                                        style="object-fit: contain">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="shopBannerpaiementTitle">{{ trans('theme::lang.title') }}</label>
                            <input type="text"
                                   class="form-control @error('shop[banner][paiement][title]') is-invalid @enderror"
                                   id="shopBannerpaiementTitle"
                                   name="shop[banner][paiement][title]"
                                   value="{{ old('shop[banner][paiement][title]', theme_config('shop.banner.paiement.title')) }}">

                            @error('shop[banner][paiement][title]')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="shopBannerpaiementHidden"
                                       name="shop[banner][paiement][hidden]"
                                       @if(theme_config('shop.banner.paiement.hidden')) checked @endif>
                                <label class="custom-control-label" for="shopBannerpaiementHidden">
                                    {{trans('theme::lang.shop.banner.payment.hidden')}}
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>
