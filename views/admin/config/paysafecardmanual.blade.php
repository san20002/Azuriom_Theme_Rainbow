<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.paysafecardmanual.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}
    <div class="row">
        @include('admin.pattern.builder-items',[
                            'url' => route('shop.offers.buy','paysafecardmanual'),
                            'col' => 'col-md-12',
                            'arrayBanner'=>['key'=>'paysafecardmanual', 'value' => 'paysafecardmanual'],
                            'arrayItems' => ['key'=> 'paysafecardmanual','value' => 'paysafecardmanual']])
    </div>
</div>
