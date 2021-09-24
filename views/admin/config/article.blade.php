@php
    $articlesItemsArticle = [
		                    'keyitems'=> 'articles',
                            'valueitems' => 'article',
                            'filedsBuilder' => [
                                ['type'=>'checkbox','value' => 'comment-hidden'],
                                ['type'=>'checkbox','value' => 'follow-hidden'],
                                ]
                            ];
    $articlesItemsAllArticle = [
		                    'keyitems'=> 'articles',
                            'valueitems' => 'allArticle',
                            ];
@endphp
<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{ trans('theme::lang.articles.title') }}</h3>
</div>
<div class="card-body">
    <div class="small font-italic mb-2">{!! trans('theme::lang.articles.banner.info')!!}</div>
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'articles', 'valueBanner' => 'article'])
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',['keyBanner'=>'articles', 'valueBanner' => 'allArticle'])
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',$articlesItemsArticle)
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',$articlesItemsAllArticle)
        </div>
    </div>
</div>
