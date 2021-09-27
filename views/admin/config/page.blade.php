<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.pages.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        @include('admin.pattern.builder-items',[
                            'url' => route('pages.show', $pages->first()),
                            'col' => 'col-md-12',
                            'arrayBanner'=>['key'=>'pages', 'value' => 'page'],
                            'arrayItems' => ['key'=> 'pages','value' => 'page']
                            ])
    </div>
</div>
