@php

    $articlesItemsArticle = [
                            'url' => route('posts.show', $articles->first() ?? 0),
		                    'key'=> 'articles',
                            'value' => 'article',
                            'filedsBuilder' => [
                                ['type'=>'checkbox','value' => 'comment-hidden'],
                                ['type'=>'checkbox','value' => 'follow-hidden'],
                                ]
                            ];
    $articlesItemsAllArticle = [
                            'url' => route('posts.index'),
		                    'key'=> 'articles',
                            'value' => 'allArticle',
                            ];
@endphp
<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{ trans('theme::lang.articles.title') }}</h3>
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
                                                            'col' => 'col-md-6',
                                                            'arrayBanner'=> [
                                                                'url' => route('posts.show', $articles->first() ?? 0),
                                                                'key'=>'articles',
                                                                'value' => 'article'],
                                                            'arrayItems' => $articlesItemsArticle])
                </div>
            @endif
            @if($k === 'show')
                @include('admin.pattern.builder-items',['url' => route('posts.index'),'col' => 'col-md-6','arrayBanner'=>['key'=>'articles', 'value' => 'allArticle'], 'arrayItems' => $articlesItemsAllArticle])
            @endif
        </div>
    @endforeach
</div>
