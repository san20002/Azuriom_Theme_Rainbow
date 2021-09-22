<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.pages.title')}}</h3>
</div>
<div class="card-body">
    <div class="small font-italic mb-2">{!! trans('theme::lang.pages.banner.info')!!}</div>
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'pages', 'valueBanner' => 'page'])
        </div>
    </div>
</div>
