<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.shop.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        @include('admin.pattern.builder-items',[
                                                'url' => route('shop.home'),
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'shop', 'value' => 'shop'],
                                                'arrayItems' => ['key'=>'shop', 'value' => 'shop']
                                                ])
        @include('admin.pattern.builder-items',[
                                                'url' => route('shop.home'),
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'shop', 'value' => 'filter'],
                                                'arrayItems' => ['key'=>'shop', 'value' => 'filter']
                                                ])
        @include('admin.pattern.builder-items',[
                                                'url' => route('shop.cart.index'),
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'shop', 'value' => 'cart'],
                                                'arrayItems' => ['key'=>'shop', 'value' => 'cart']
                                                ])
        @include('admin.pattern.builder-items',[
                                                'url' => route('shop.home'),
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'shop', 'value' => 'profile'],
                                                'arrayItems' => ['key'=>'shop', 'value' => 'profile']
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
        @include('admin.pattern.builder-items',[
                                                'url' => route('shop.payments.payment'),
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'shop', 'value' => 'method-payment'],
                                                'arrayItems' => ['key'=>'shop', 'value' => 'method-payment']
                                                ])
        @include('admin.pattern.builder-items',[
                                                'url' => route('shop.payments.payment'),
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'shop', 'value' => 'select-payment'],
                                                'arrayItems' => ['key'=>'shop', 'value' => 'select-payment']
                                                ])
        @include('admin.pattern.builder-items',[
                                                'url' => route('shop.payments.payment'),
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'shop', 'value' => 'payment'],
                                                'arrayItems' => ['key'=>'shop', 'value' => 'payment']
                                                ])
        @include('admin.pattern.builder-items',[
                                                'url' => route('shop.profile'),
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'shop', 'value' => 'buy'],
                                                'arrayItems' => ['key'=>'shop', 'value' => 'buy']
                                                ])
    </div>
</div>
