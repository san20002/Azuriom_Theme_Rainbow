<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.forum.title')}}</h3>
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
                </div>
            @endif
            @if($k === 'show')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                'url' => route('forum.show', $forums->first() ?? 0),
                'col' => 'col-md-6',
                'arrayBanner'=>['key'=>'forum', 'value' => 'forum-show'],
                'arrayItems' => ['key'=>'forum', 'value' => 'forum-show']])
                </div>
            @endif
            @if($k === 'profileEdit')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                'url' => route('forum.profile.edit'),
                'col' => 'col-md-6',
                'arrayBanner'=>['key'=>'forum', 'value' => 'forum-user-edit'],
                'arrayItems' => ['key'=>'forum', 'value' => 'forum-user-edit']])
                </div>
            @endif
            @if($k === 'discussionsPostsEdit')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                'url' => route('forum.discussions.posts.edit', [$forumsDiscussions->first()->id ?? 0 ,1 ?? 0]),
                'col' => 'col-md-6',
                'arrayBanner'=>['key'=>'forum', 'value' => 'forum-posts-edit'],
                'arrayItems' => ['key'=>'forum', 'value' => 'forum-posts-edit']])
                </div>
            @endif
            @if($k === 'discussionsPostsCreate')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                'url' => route('forum.forum.discussions.create', $forums->first() ?? 0),
                'col' => 'col-md-6',
                'arrayBanner'=>['key'=>'forum', 'value' => 'forum-discussions-create'],
                'arrayItems' => ['key'=>'forum', 'value' => 'forum-discussions-create']])

                </div>
            @endif
            @if($k === 'discussionsEdit')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                'url' => route('forum.discussions.edit', $forumsDiscussions->first() ?? 0),
                'col' => 'col-md-6',
                'arrayBanner'=>['key'=>'forum', 'value' => 'forum-discussions-edit'],
                'arrayItems' => ['key'=>'forum', 'value' => 'forum-discussions-edit']])
                </div>
            @endif
            @if($k === 'discussionsShow')
                <div class="row">
                    @include('admin.pattern.builder-items',[
                'url' => route('forum.discussions.show', $forumsDiscussions->first() ?? 0),
                'col' => 'col-md-6',
                'arrayBanner'=>['key'=>'forum', 'value' => 'forum-discussions-show'],
                'arrayItems' => ['key'=>'forum', 'value' => 'forum-discussions-show']])
                </div>
            @endif
        </div>
    @endforeach

</div>
