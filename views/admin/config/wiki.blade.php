<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.wiki.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}  @foreach($multiple_page as $k => $v)
        <div id="collapse-{{$page_current}}-{{$k}}" class="collapse @if($loop->index == 0) show @endif"
             aria-labelledby="heading-{{$page_current}}-{{$k}}" data-parent="#accordion-theme">
            <h3 class="font-weight-bold text-secondary">Page {{$v['name']}}</h3>
            @if($k === 'index')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                                                            'url' => route('wiki.index'),
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=>['key'=>'wiki', 'value' => 'wiki'],
                                                            'arrayItems' => ['key'=>'wiki', 'value' => 'wiki']
                                                            ])
                </div>
            @endif
            @if($k === 'show')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                                                            'url' => route('wiki.show', $wikis->first() ?? 0),
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=>['key'=>'wiki', 'value' => 'wiki-show'],
                                                            'arrayItems' => ['key'=>'wiki', 'value' => 'wiki-show']
                                                            ])
                </div>
            @endif
        </div>
    @endforeach
</div>
