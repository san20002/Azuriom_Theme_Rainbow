<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.shop.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}

    @foreach($multiple_page as $k => $v)
        <div id="collapse-{{$page_current}}-{{$k}}" class="collapse @if($loop->index == 0) show @endif"
             aria-labelledby="heading-{{$page_current}}-{{$k}}" data-parent="#accordion-theme">
            <h3 class="font-weight-bold text-secondary">Page {{$v['name']}}</h3>
            @if($k === 'index')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                                                            'url' => route('shop.home'),
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=>['key'=>'shop', 'value' => 'shop'],
                                                            'arrayItems' => ['key'=>'shop', 'value' => 'shop',
                                                            'filedsBuilder' => [
                                                                    ['type'=>'select','value' => 'style','option' => [
                                                                        0 => 'Style N°1',
                                                                        1 => 'Style N°2',
                                                                        ]
                                                                    ],
                                                                ]
                                                            ]
                                                            ])
                    @include('admin.pattern.builder-items',[
                                                            'url' => route('shop.home'),
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=>['key'=>'shop', 'value' => 'filter'],
                                                            'arrayItems' => ['key'=>'shop', 'value' => 'filter']
                                                            ])
                    @include('admin.pattern.builder-items',[
                                                            'url' => route('shop.home'),
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=>['key'=>'shop', 'value' => 'profile'],
                                                            'arrayItems' => ['key'=>'shop', 'value' => 'profile']
                                                            ])
                </div>
            @endif



            @if($k === 'cart')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                                                            'url' => route('shop.cart.index'),
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=>['key'=>'shop', 'value' => 'cart'],
                                                            'arrayItems' => ['key'=>'shop', 'value' => 'cart']
                                                            ])
                    @include('admin.pattern.builder-items',[
                                                            'url' => route('shop.cart.index'),
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=>['key'=>'shop', 'value' => 'coupons'],
                                                            'arrayItems' => ['key'=>'shop', 'value' => 'coupons']
                                                            ])
                    @include('admin.pattern.builder-items',[
                                                            'url' => route('shop.cart.index'),
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=>['key'=>'shop', 'value' => 'addCoupons'],
                                                            'arrayItems' => ['key'=>'shop', 'value' => 'addCoupons']
                                                            ])
                </div>
            @endif


            @if($k === 'offersSelect')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                                                            'url' => route('shop.offers.select'),
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=>['key'=>'shop', 'value' => 'method-payment'],
                                                            'arrayItems' => ['key'=>'shop', 'value' => 'method-payment']
                                                            ])
                </div>
            @endif
            @if($k === 'offersBuy')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                                                            'url' => route('shop.offers.buy','paypal'),
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=>['key'=>'shop', 'value' => 'select-payment'],
                                                            'arrayItems' => ['key'=>'shop', 'value' => 'select-payment']
                                                            ])
                </div>
            @endif
            @if($k === 'payments')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                                                            'url' => route('shop.payments.payment'),
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=>['key'=>'shop', 'value' => 'payment'],
                                                            'arrayItems' => ['key'=>'shop', 'value' => 'payment']
                                                            ])
                </div>
            @endif
            @if($k === 'profile')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                                                            'url' => route('shop.profile'),
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=>['key'=>'shop', 'value' => 'buy'],
                                                            'arrayItems' => ['key'=>'shop', 'value' => 'buy']
                                                            ])
                </div>
            @endif
        </div>
    @endforeach
</div>
