<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.jirai.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        @include('admin.pattern.builder-items',[
                            'url' => route('jirai.home'),
                            'col' => 'col-md-4',
                            'arrayBanner'=>['key'=>'jirai', 'value' => 'changelog'],
                            'arrayItems' => ['key'=> 'jirai','value' => 'changelog']])

        @include('admin.pattern.builder-items',[
                            'url' => route('jirai.home'),
                            'col' => 'col-md-4',
                            'arrayBanner'=>['key'=>'jirai', 'value' => 'bugs'],
                            'arrayItems' => ['key'=> 'jirai','value' => 'bugs']])

        @include('admin.pattern.builder-items',[
                            'url' => route('jirai.home'),
                            'col' => 'col-md-4',
                            'arrayBanner'=>['key'=>'jirai', 'value' => 'suggestions'],
                            'arrayItems' => ['key'=> 'jirai','value' => 'suggestions']])

        @include('admin.pattern.builder-items',[
                            'url' => route('jirai.changelogs.create'),
                            'col' => 'col-md-4',
                            'arrayItems' => ['key'=> 'jirai','value' => 'changelogs-create']])

        @include('admin.pattern.builder-items',[
                            'url' => route('jirai.changelogs.edit', $jirai->first()),
                            'col' => 'col-md-4',
                            'arrayItems' => ['key'=> 'jirai','value' => 'changelogs-edit']])

        @include('admin.pattern.builder-items',[
                            'url' => route('jirai.changelogs.show', $jirai->first()),
                            'col' => 'col-md-4',
                            'arrayItems' => ['key'=> 'jirai','value' => 'changelogs-show']])

        @include('admin.pattern.builder-items',[
                            'url' => route('jirai.issues.create','?type=bugs'),
                            'col' => 'col-md-4',
                            'arrayItems' => ['key'=> 'jirai','value' => 'issues-create']])

        @include('admin.pattern.builder-items',[
                            'url' => route('jirai.issues.edit', $jiraiIssue->first()),
                            'col' => 'col-md-4',
                            'arrayItems' => ['key'=> 'jirai','value' => 'issues-edit']])

        @include('admin.pattern.builder-items',[
                            'url' => route('jirai.issues.show', $jiraiIssue->first()),
                            'col' => 'col-md-4',
                            'arrayItems' => ['key'=> 'jirai','value' => 'issues-show']])

        @include('admin.pattern.builder-items',[
                            'url' => route('jirai.issues.show', $jiraiIssue->first()),
                            'col' => 'col-md-4',
                            'arrayItems' => ['key'=> 'jirai','value' => 'messages-show']])

        @include('admin.pattern.builder-items',[
                            'url' => route('jirai.issues.create', $jiraiIssue->first()),
                            'col' => 'col-md-4',
                            'arrayItems' => ['key'=> 'jirai','value' => 'messages-create']])

        @include('admin.pattern.builder-items',[
                            'url' => route('jirai.messages.edit', $jiraiMessages->first()),
                            'col' => 'col-md-4',
                            'arrayItems' => ['key'=> 'jirai','value' => 'messages-edit']])
    </div>
</div>
