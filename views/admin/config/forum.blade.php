<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.forum.title')}}</h3>
</div>
<div class="card-body">
    <div class="small font-italic mb-2">{!! trans('theme::lang.forum.banner.info')!!}</div>
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'forum', 'valueBanner' => 'forum'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'forum', 'valueBanner' => 'forum-show'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'forum', 'valueBanner' => 'forum-user-edit'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'forum', 'valueBanner' => 'forum-posts-edit'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'forum', 'valueBanner' => 'forum-discussions-create'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'forum', 'valueBanner' => 'forum-discussions-edit'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'forum', 'valueBanner' => 'forum-discussions-show'])
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'forum','valueitems' => 'forum'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'forum','valueitems' => 'breadcrumb'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'forum','valueitems' => 'message'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'forum','valueitems' => 'stati'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'forum','valueitems' => 'user'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'forum','valueitems' => 'forum-show'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'forum','valueitems' => 'forum-user-edit'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'forum','valueitems' => 'forum-posts-edit'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'forum','valueitems' => 'forum-discussions-create'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'forum','valueitems' => 'forum-discussions-edit'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'forum','valueitems' => 'forum-discussions-show'])
        </div>
    </div>
</div>
