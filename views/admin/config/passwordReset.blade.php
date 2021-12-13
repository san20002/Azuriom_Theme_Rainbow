<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.passwordReset.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}
    <div class="row">
        @include('admin.pattern.builder-items',[
                            'col' => 'col-md-12',
                            'arrayBanner'=>['key'=>'passwordReset', 'value' => 'passwordReset'],
                            'arrayItems' => ['key'=> 'passwordReset','value' => 'passwordReset',
                                            'filedsBuilder' => [
                                                ['type'=>'image','value' => 'media'],
                                                ['type'=>'checkbox','value' => 'hidden'],
                                                ]
                                            ]
                            ])
    </div>
</div>
