<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.invoicepro.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}
    <div class="row">
        @include('admin.pattern.builder-items',[
                            'url' => route('invoicepro.index'),
                            'col' => 'col-md-12',
                            'arrayItems' => ['key'=> 'invoicepro','value' => 'invoicepro']])
    </div>
</div>
