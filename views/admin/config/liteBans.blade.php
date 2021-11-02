<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.liteBans.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}
    <div class="row">
        @include('admin.pattern.builder-items',[
                                                'url' => route('litebans.index'),
                                                'col' => 'col-12',
                                                'arrayBanner'=>['key'=>'liteBans', 'value' => 'litebans'],
                                                'arrayItems' => [
                                                    ['key'=> 'liteBans','value' => 'navbar'],
                                                    ['key'=> 'liteBans','value' => 'liteBans'],
                                                    ]
                                                ])
    </div>
</div>
