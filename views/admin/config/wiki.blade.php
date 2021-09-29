<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.wiki.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}
    <div class="row">
        @include('admin.pattern.builder-items',[
                                                'url' => route('wiki.index'),
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'wiki', 'value' => 'wiki'],
                                                'arrayItems' => ['key'=>'wiki', 'value' => 'wiki']
                                                ])
        @include('admin.pattern.builder-items',[
                                                'url' => route('wiki.show', $wikis->first() ?? 0),
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'wiki', 'value' => 'wiki-show'],
                                                'arrayItems' => ['key'=>'wiki', 'value' => 'wiki-show']
                                                ])
    </div>
</div>
