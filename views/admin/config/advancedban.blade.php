<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.advancedBan.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        @include('admin.pattern.builder-items',[
                                            'url' => route('advancedban.index'),
                                            'col' => 'col-md-12',
                                            'arrayBanner'=>['key'=>'advancedBan', 'value' => 'advancedBan'],
                                            'arrayItems' => ['key'=> 'advancedBan','value' => 'advancedBan']])
    </div>
</div>
