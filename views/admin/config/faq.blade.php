<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.faq.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        @include('admin.pattern.builder-items',[
                            'url' => route('faq.index'),
                            'col' => 'col-md-12',
                            'arrayBanner'=>['key'=>'faq', 'value' => 'faq'],
                            'arrayItems' => ['key'=> 'faq','value' => 'faq']])
    </div>
</div>
