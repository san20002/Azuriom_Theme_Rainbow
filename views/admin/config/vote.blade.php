<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.vote.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'vote', 'valueBanner' => 'vote'])
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'vote','valueitems' => 'vote',
                                'filedsBuilder' => [
                                    ['type'=>'checkbox','value' => 'hidden'],
                                ]
                            ])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'vote','valueitems' => 'podium',
                                'filedsBuilder' => [
                                    ['type'=>'checkbox','value' => 'hidden'],
                                ]
                            ])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'vote','valueitems' => 'classement'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',['keyitems'=> 'vote','valueitems' => 'recompenses'])
        </div>
    </div>
</div>
