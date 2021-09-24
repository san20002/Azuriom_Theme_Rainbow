@php
    $profileItemsBuy = [
		                    'keyitems'=> 'profile',
                            'valueitems' => 'buy',
                            ];
    $profileItemsMonSkyn = [
		                    'keyitems'=> 'profile',
                            'valueitems' => 'skin',
                            ];
@endphp
<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.profile.title')}}</h3>
</div>
<div class="card-body">
    <div class="small font-italic mb-2">{!! trans('theme::lang.profile.banner.info')!!}</div>
    <div class="row">
        <div class="col-xl-4 col-lg-6">
                @include('admin.pattern.banner',['keyBanner'=>'profile', 'valueBanner' => 'buy'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'profile', 'valueBanner' => 'skin'])
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',$profileItemsBuy)
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',$profileItemsMonSkyn)
        </div>
    </div>
</div>
