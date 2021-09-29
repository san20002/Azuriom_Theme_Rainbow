<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.cps.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}
    <div class="row">
        @include('admin.pattern.builder-items',[
                            'url' => route('cps.index'),
                            'col' => 'col-md-12',
                            'arrayBanner'=>['key'=>'cps', 'value' => 'cps'],
                            'arrayItems' => ['key'=> 'cps','value' => 'cps']])
    </div>
</div>
