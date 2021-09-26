<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.wiki.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        @include('admin.pattern.builder-items',[
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'wiki', 'value' => 'wiki'],
                                                'arrayItems' => ['key'=>'wiki', 'value' => 'wiki']
                                                ])
        @include('admin.pattern.builder-items',[
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'wiki', 'value' => 'wiki-show'],
                                                'arrayItems' => ['key'=>'wiki', 'value' => 'wiki-show']
                                                ])
    </div>
</div>
