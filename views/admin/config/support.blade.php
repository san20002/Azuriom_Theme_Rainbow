<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.support.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        @include('admin.pattern.builder-items',[
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'support', 'value' => 'support'],
                                                'arrayItems' => ['key'=>'support', 'value' => 'support']
                                                ])
        @include('admin.pattern.builder-items',[
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'support', 'value' => 'support-create'],
                                                'arrayItems' => ['key'=>'support', 'value' => 'support-create']
                                                ])
        @include('admin.pattern.builder-items',[
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'support', 'value' => 'support-show'],
                                                'arrayItems' => ['key'=>'support', 'value' => 'support-show']
                                                ])
    </div>
</div>
