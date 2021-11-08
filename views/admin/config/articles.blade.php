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
    <div class="row">
        @include('admin.pattern.builder-items',[
                                                'col' => 'col-md-6',
                                                'arrayBanner'=> [
                                                    'url' => route('posts.show', $articles->first() ?? 0),
                                                    'key'=>'articles',
                                                    'value' => 'article'],
                                                'arrayItems' => $articlesItemsArticle])
        @include('admin.pattern.builder-items',['url' => route('posts.index'),'col' => 'col-md-6','arrayBanner'=>['key'=>'articles', 'value' => 'allArticle'], 'arrayItems' => $articlesItemsAllArticle])
    </div>
</div>