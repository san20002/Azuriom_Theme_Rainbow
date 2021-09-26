<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.forum.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        @include('admin.pattern.builder-items',[
                                                'col' => 'col-12',
                                                'arrayBanner'=>['key'=>'forum', 'value' => 'forum'],
                                                'arrayItems' => [
                                                    ['key'=> 'forum','value' => 'forum'],
                                                    ['key'=> 'forum','value' => 'breadcrumb'],
                                                    ['key'=> 'forum','value' => 'message'],
                                                    ['key'=> 'forum','value' => 'stati'],
                                                    ['key'=> 'forum','value' => 'user'],
                                                    ]
                                                ])
        @include('admin.pattern.builder-items',['col' => 'col-md-6','arrayBanner'=>['key'=>'forum', 'value' => 'forum-show'], 'arrayItems' => ['key'=>'forum', 'value' => 'forum-show']])
        @include('admin.pattern.builder-items',['col' => 'col-md-6','arrayBanner'=>['key'=>'forum', 'value' => 'forum-user-edit'], 'arrayItems' => ['key'=>'forum', 'value' => 'forum-user-edit']])
        @include('admin.pattern.builder-items',['col' => 'col-md-6','arrayBanner'=>['key'=>'forum', 'value' => 'forum-posts-edit'], 'arrayItems' => ['key'=>'forum', 'value' => 'forum-posts-edit']])
        @include('admin.pattern.builder-items',['col' => 'col-md-6','arrayBanner'=>['key'=>'forum', 'value' => 'forum-discussions-create'], 'arrayItems' => ['key'=>'forum', 'value' => 'forum-discussions-create']])
        @include('admin.pattern.builder-items',['col' => 'col-md-6','arrayBanner'=>['key'=>'forum', 'value' => 'forum-discussions-edit'], 'arrayItems' => ['key'=>'forum', 'value' => 'forum-discussions-edit']])
        @include('admin.pattern.builder-items',['col' => 'col-md-6','arrayBanner'=>['key'=>'forum', 'value' => 'forum-discussions-show'], 'arrayItems' => ['key'=>'forum', 'value' => 'forum-discussions-show']])
    </div>
</div>
