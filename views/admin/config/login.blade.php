<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.login.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}
    <div class="row">
        @include('admin.pattern.builder-items',[
                            'col' => 'col-md-6',
                            'arrayBanner'=>['key'=>'login', 'value' => 'login'],
                            'arrayItems' => ['key'=> 'login','value' => 'login',
                                            'filedsBuilder' => [
                                                ['type'=>'image','value' => 'media'],
                                                ['type'=>'checkbox','value' => 'hidden'],
                                                ]
                                            ]
                            ])

        @include('admin.pattern.builder-items',[
                            'col' => 'col-md-6',
                            'arrayItems' => ['key'=> 'login','value' => 'discord',
                                            'filedsBuilder' => [
                                                ['type'=>'image','value' => 'media'],
                                                ['type'=>'input','value' => 'text'],
                                                ['type'=>'checkbox','value' => 'hidden'],
                                                ]
                                            ]
                            ])
    </div>
</div>
