<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.skinApi.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        @include('admin.pattern.builder-items',[
                                                'url' => route('skin-api.home'),
                                                'col' => 'col-md-12',
                                                'arrayBanner'=>['key'=>'skinApi', 'value' => 'skin'],
                                                'arrayItems' => ['key'=> 'skinApi','value' => 'skin']
                                                ])
    </div>
</div>
