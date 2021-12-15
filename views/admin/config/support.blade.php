<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.support.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}
    @foreach($multiple_page as $k => $v)
        <div id="collapse-{{$page_current}}-{{$k}}" class="collapse @if($loop->index == 0) show @endif"
             aria-labelledby="heading-{{$page_current}}-{{$k}}" data-parent="#accordion-theme">
            <h3 class="font-weight-bold text-secondary">Page {{$v['name']}}</h3>
            @if($k === 'index')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                                                            'url' => route('support.tickets.index'),
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=>['key'=>'support', 'value' => 'support'],
                                                            'arrayItems' => ['key'=>'support', 'value' => 'support']
                                                            ])
                </div>
            @endif
            @if($k === 'show')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                                                            'url' => route('support.tickets.show', $tickets->first() ?? 0),
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=>['key'=>'support', 'value' => 'support-show'],
                                                            'arrayItems' => ['key'=>'support', 'value' => 'support-show']
                                                            ])
                </div>
            @endif
            @if($k === 'create')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                                                            'url' => route('support.tickets.create'),
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=>['key'=>'support', 'value' => 'support-create'],
                                                            'arrayItems' => ['key'=>'support', 'value' => 'support-create']
                                                            ])
                </div>
            @endif
        </div>
    @endforeach
</div>
