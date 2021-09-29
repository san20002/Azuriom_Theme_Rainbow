<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.vote.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}
    <div class="row">
        @include('admin.pattern.builder-items',[
                                                'url' => route('vote.home'),
                                                'col' => 'col-md-12',
                                                'arrayBanner'=>['key'=>'vote', 'value' => 'vote'],
                                                'arrayItems' => [['key'=>'vote', 'value' => 'vote',
                                                                'filedsBuilder' => [
                                                                ['type'=>'checkbox','value' => 'hidden'],
                                                               ]],
                                                                ['key'=>'vote', 'value' => 'podium',
                                                                'filedsBuilder' => [
                                                                ['type'=>'checkbox','value' => 'hidden'],
                                                               ]],
                                                                ['key'=> 'vote','value' => 'classement'],
                                                                ['key'=> 'vote','value' => 'recompenses'],
                                                                ]
                                                ])
    </div>
</div>
