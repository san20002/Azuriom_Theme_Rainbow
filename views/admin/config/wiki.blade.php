<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.wiki.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'wiki', 'valueBanner' => 'wiki'])
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items-aos',['keyAos'=>'wiki', 'valueAos' => 'wiki'])
        </div>
    </div>
</div>
