<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.forum.title')}}</h3>
</div>
<div class="card-body">
    <div class="small font-italic mb-2">{!! trans('theme::lang.forum.banner.info')!!}</div>
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'forum', 'valueBanner' => 'forum'])
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items-aos',['keyAos'=>'forum', 'valueAos' => 'forum'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items-aos',['keyAos'=>'forum', 'valueAos' => 'breadcrumb'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items-aos',['keyAos'=>'forum', 'valueAos' => 'message'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items-aos',['keyAos'=>'forum', 'valueAos' => 'stati'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items-aos',['keyAos'=>'forum', 'valueAos' => 'user'])
        </div>
    </div>
</div>
