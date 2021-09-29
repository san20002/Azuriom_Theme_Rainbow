<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.forum.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}
    <div class="row">
        @include('admin.pattern.builder-items',[
    'url' => route('forum.home'),
    'col' => 'col-12',
    'arrayBanner'=>['key'=>'forum', 'value' => 'forum'],
    'arrayItems' => [
        ['key'=> 'forum','value' => 'forum'],
        ['key'=> 'forum','value' => 'breadcrumb'],
        ['key'=> 'forum','value' => 'message'],
        ['key'=> 'forum','value' => 'stati'],
        ['key'=> 'forum','value' => 'user'],
        ]])

        @include('admin.pattern.builder-items',[
    'url' => route('forum.show', $forums->first() ?? 0),
    'col' => 'col-md-6',
    'arrayBanner'=>['key'=>'forum', 'value' => 'forum-show'],
    'arrayItems' => ['key'=>'forum', 'value' => 'forum-show']])

        @include('admin.pattern.builder-items',[
    'url' => route('forum.profile.edit'),
    'col' => 'col-md-6',
    'arrayBanner'=>['key'=>'forum', 'value' => 'forum-user-edit'],
    'arrayItems' => ['key'=>'forum', 'value' => 'forum-user-edit']])

        @include('admin.pattern.builder-items',[
    'url' => route('forum.discussions.posts.edit', [$forumsDiscussions->first()->id ?? 0 ,1 ?? 0]),
    'col' => 'col-md-6',
    'arrayBanner'=>['key'=>'forum', 'value' => 'forum-posts-edit'],
    'arrayItems' => ['key'=>'forum', 'value' => 'forum-posts-edit']])

        @include('admin.pattern.builder-items',[
    'url' => route('forum.forum.discussions.create', $forums->first() ?? 0),
    'col' => 'col-md-6',
    'arrayBanner'=>['key'=>'forum', 'value' => 'forum-discussions-create'],
    'arrayItems' => ['key'=>'forum', 'value' => 'forum-discussions-create']])

        @include('admin.pattern.builder-items',[
    'url' => route('forum.discussions.edit', $forumsDiscussions->first() ?? 0),
    'col' => 'col-md-6',
    'arrayBanner'=>['key'=>'forum', 'value' => 'forum-discussions-edit'],
    'arrayItems' => ['key'=>'forum', 'value' => 'forum-discussions-edit']])

        @include('admin.pattern.builder-items',[
    'url' => route('forum.discussions.show', $forumsDiscussions->first() ?? 0),
    'col' => 'col-md-6',
    'arrayBanner'=>['key'=>'forum', 'value' => 'forum-discussions-show'],
    'arrayItems' => ['key'=>'forum', 'value' => 'forum-discussions-show']])
    </div>
</div>
