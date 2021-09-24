<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.advancedBan.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'advancedBan', 'valueBanner' => 'advancedBan'])
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'advancedBan','valueitems' => 'advancedBan'])
        </div>
    </div>
</div>
