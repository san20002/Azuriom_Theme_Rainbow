<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.jirai.title')}}</h3>
</div>
<div class="card-body">
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

        @include('admin.pattern.builder-items',[
                            'col' => 'col-md-6',
                            'arrayItems' => [
                                            ['url' => route('jirai.changelogs.create'),'key'=> 'jirai','value' => 'changelogs-create'],
                                            ['url' => route('jirai.changelogs.edit', $jirai->first()),'key'=> 'jirai','value' => 'changelogs-edit'],
                                            ['url' => route('jirai.changelogs.show', $jirai->first()),'key'=> 'jirai','value' => 'changelogs-show']
                                            ]
                            ])

        @include('admin.pattern.builder-items',[
                            'col' => 'col-md-6',
                            'arrayItems' => [
                                            ['url' => route('jirai.issues.create','?type=bugs'),'key'=> 'jirai','value' => 'issues-create'],
                                            ['url' => route('jirai.issues.edit', $jiraiIssue->first()),'key'=> 'jirai','value' => 'issues-edit'],
                                            ['url' => route('jirai.issues.show', $jiraiIssue->first()),'key'=> 'jirai','value' => 'issues-show']
                                            ]])


        @include('admin.pattern.builder-items',[
                            'col' => 'col-md-6',
                            'arrayItems' => [
                                            ['url' => route('jirai.issues.show', $jiraiIssue->first()),'key'=> 'jirai','value' => 'messages-create'],
                                            ['url' => route('jirai.messages.edit', $jiraiMessages->first()),'key'=> 'jirai','value' => 'messages-edit'],
                                            ['url' => route('jirai.issues.show', $jiraiIssue->first()),'key'=> 'jirai','value' => 'messages-show']
                                            ]
                            ])
    </div>
</div>
