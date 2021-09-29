<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.changelog.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}
    <div class="row">
        @include('admin.pattern.builder-items',[
                            'url' => route('changelog.index'),
                            'col' => 'col-md-12',
                            'arrayBanner'=>['key'=>'changelog', 'value' => 'changelog'],
                            'arrayItems' => ['key'=> 'changelog','value' => 'changelog']])
    </div>
</div>
