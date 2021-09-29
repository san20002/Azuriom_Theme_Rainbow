<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.support.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}
    <div class="row">
        @include('admin.pattern.builder-items',[
                                                'url' => route('support.tickets.index'),
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'support', 'value' => 'support'],
                                                'arrayItems' => ['key'=>'support', 'value' => 'support']
                                                ])
        @include('admin.pattern.builder-items',[
                                                'url' => route('support.tickets.create'),
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'support', 'value' => 'support-create'],
                                                'arrayItems' => ['key'=>'support', 'value' => 'support-create']
                                                ])
        @include('admin.pattern.builder-items',[
                                                'url' => route('support.tickets.show', $tickets->first() ?? 0),
                                                'col' => 'col-md-6',
                                                'arrayBanner'=>['key'=>'support', 'value' => 'support-show'],
                                                'arrayItems' => ['key'=>'support', 'value' => 'support-show']
                                                ])
    </div>
</div>
