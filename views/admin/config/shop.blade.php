<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.shop.title')}}</h3>
</div>
<div class="card-body">
    <div class="small font-italic mb-2">{!! trans('theme::lang.shop.banner.info')!!}</div>
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'shop', 'valueBanner' => 'shop'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'shop', 'valueBanner' => 'filter'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'shop', 'valueBanner' => 'cart'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'shop', 'valueBanner' => 'profile'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'shop', 'valueBanner' => 'coupons'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'shop', 'valueBanner' => 'addCoupons'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'shop', 'valueBanner' => 'payment'])
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'shop','valueitems' => 'shop'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'shop','valueitems' => 'filter'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'shop','valueitems' => 'cart'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'shop','valueitems' => 'profile'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'shop','valueitems' => 'coupons'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'shop','valueitems' => 'addCoupons'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'shop','valueitems' => 'payment'])
        </div>
    </div>
</div>
