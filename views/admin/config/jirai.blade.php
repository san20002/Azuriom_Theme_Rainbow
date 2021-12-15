<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.jirai.title')}}</h3>
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
                                        'url' => route('jirai.home'),
                                        'col' => 'col-md-12',
                                        'arrayBanner'=>['key'=>'jirai', 'value' => 'changelog'],
                                        'arrayItems' => ['key'=> 'jirai','value' => 'changelog']])

                    @include('admin.pattern.builder-items',[
                                        'url' => route('jirai.home'),
                                        'col' => 'col-md-6',
                                        'arrayBanner'=>['key'=>'jirai', 'value' => 'bugs'],
                                        'arrayItems' => ['key'=> 'jirai','value' => 'bugs']])

                    @include('admin.pattern.builder-items',[
                                        'url' => route('jirai.home'),
                                        'col' => 'col-md-6',
                                        'arrayBanner'=>['key'=>'jirai', 'value' => 'suggestions'],
                                        'arrayItems' => ['key'=> 'jirai','value' => 'suggestions']])
                </div>
            @endif
            @if($k === 'changelogs')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                                        'col' => 'col-md-12',
                                        'arrayItems' => [
                                                        ['url' => route('jirai.changelogs.create'),'key'=> 'jirai','value' => 'changelogs-create'],
                                                        ['url' => route('jirai.changelogs.edit', $jirai->first() ?? 0),'key'=> 'jirai','value' => 'changelogs-edit'],
                                                        ['url' => route('jirai.changelogs.show', $jirai->first() ?? 0),'key'=> 'jirai','value' => 'changelogs-show']
                                                        ]
                                        ])
                </div>
            @endif
            @if($k === 'issues')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                                        'col' => 'col-md-12',
                                        'arrayItems' => [
                                                        ['url' => route('jirai.issues.create','?type=bugs'),'key'=> 'jirai','value' => 'issues-create'],
                                                        ['url' => route('jirai.issues.edit', $jiraiIssue->first() ?? 0),'key'=> 'jirai','value' => 'issues-edit'],
                                                        ['url' => route('jirai.issues.show', $jiraiIssue->first() ?? 0),'key'=> 'jirai','value' => 'issues-show']
                                                        ]])
                </div>
            @endif
            @if($k === 'messages')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                                        'col' => 'col-md-12',
                                        'arrayItems' => [
                                                        ['url' => route('jirai.issues.show', $jiraiIssue->first() ?? 0),'key'=> 'jirai','value' => 'messages-create'],
                                                        ['url' => route('jirai.messages.edit', $jiraiMessages->first() ?? 0),'key'=> 'jirai','value' => 'messages-edit'],
                                                        ['url' => route('jirai.issues.show', $jiraiIssue->first() ?? 0),'key'=> 'jirai','value' => 'messages-show']
                                                        ]
                                        ])
                </div>
            @endif
        </div>
    @endforeach
</div>
