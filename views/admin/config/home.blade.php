@push('footer-scripts')
    <script>
        function addCommandIconMenu(el) {
            let i = 1;
            el.addEventListener('click', function () {
                const element = el.closest('.slider');
                element.parentNode.removeChild(element);
                document.getElementById('sliders').querySelectorAll('.slider').forEach(function (el) {
                    let count = i++
                    el.querySelector('.card-title').innerHTML = 'Slider ' + count;
                })
            });
        }

        document.querySelectorAll('.command-remove-slider').forEach(function (el) {
            addCommandIconMenu(el);
        });

        document.getElementById('addCommandButton').addEventListener('click', function () {
            let i = 1;
            let input = `@include('admin.pattern.slider')`;

            const newElement = document.createElement('div');
            newElement.classList.add('slider', 'col-xl-4', 'col-lg-6', 'my-3')
            newElement.innerHTML = input
            addCommandIconMenu(newElement.querySelector('.command-remove-slider'));

            document.getElementById('sliders').appendChild(newElement);
            document.getElementById('sliders').querySelectorAll('.slider').forEach(function (el) {
                let count = i++
                el.querySelector('.card-title').innerHTML = 'Slider ' + count;
                el.querySelector('select').setAttribute('data-image-preview-select', 'filePreview-' + count)
                el.querySelector('img').setAttribute('id', 'filePreview-' + count)
                imagePreviewSelect(el.querySelector('select'))
            })

        });

        function configFormSlider(i) {
            document.getElementById('sliders').querySelectorAll('.form-row').forEach(function (el) {
                el.querySelectorAll('input').forEach(function (input) {
                    input.name = input.name.replace('{index}', i.toString());
                });
                el.querySelectorAll('select').forEach(function (select) {
                    select.name = select.name.replace('{index}', i.toString());
                });

                i++;
            });
        }
    </script>
@endpush
<div class="card-header">
    <h3 class="m-0 font-weight-bold text-primary">{{ trans('theme::lang.home.title') }}</h3>
</div>
@php
    $homeItemsIpServer = [
	                'keyitems'=> 'home',
                    'valueitems' => 'ip-server',
                    'filedsBuilder' => [
                        ['type'=>'input','value' => 'ip'],
                        ['type'=>'checkbox','value' => 'hidden'],
                        ]
                    ];

    $homeItemsDownload = [
		            'keyitems'=> 'home',
                    'valueitems' => 'download',
                    'filedsBuilder' => [
                        ['type'=>'input','value' => 'name'],
                        ['type'=>'input','value' => 'url'],
                        ['type'=>'checkbox','value' => 'hidden'],
                        ]
                    ];
    $homeItemsCountResgister = [
		                    'keyitems'=> 'home',
                            'valueitems' => 'count-register',
                            'filedsBuilder' => [
                                ['type'=>'checkbox','value' => 'hidden'],
                                ]
                            ];
    $homeItemsDiscord = [
                            'keyitems'=> 'home',
                            'valueitems' => 'discord',
                            'filedsBuilder' => [
								['type'=>'input','value' => 'id'],
                                ['type'=>'checkbox','value' => 'hidden'],
                            ]
                        ];
    $homeItemsArticle = [
                            'keyitems'=> 'home',
                            'valueitems' => 'article',
                        ];
    $homeBannerArticle = ['keyBanner'=>'home', 'valueBanner' => 'article'];
    $homeBannerInformation = ['keyBanner'=>'home', 'valueBanner' => 'information'];
    $homeBannerLogin = ['keyBanner'=>'home', 'valueBanner' => 'login'];
@endphp
<div class="card-body">
    <fieldset class="form-group">
        <legend>{{trans('theme::lang.home.slider.title')}}</legend>
        <div class="small font-italic mb-2">{!! trans('theme::lang.home.slider.info')!!}</div>
        <button type="button" id="addCommandButton" class="btn btn-sm btn-success">
            <i class="fas fa-plus"></i> {{ trans('messages.actions.add') }}
        </button>
        <div id="sliders" class="row">
            @forelse( theme_config('sliders') ?? [] as $slider )

                <div class="slider col-xl-4 col-lg-6 my-3">
                    @include('admin.pattern.slider')
                </div>
            @empty
                <div class="slider col-xl-4 col-lg-6 my-3">
                    @include('admin.pattern.slider')
                </div>
            @endforelse
        </div>
    </fieldset>
    <hr class="my-3 sidebar-divider">
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items' ,$homeItemsIpServer)
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',$homeItemsDownload)
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',$homeItemsCountResgister)
        </div>
    </div>
    <hr class="my-3 sidebar-divider">
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',$homeBannerArticle)
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',$homeItemsArticle)
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',$homeBannerInformation)
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.banner',$homeBannerLogin)
        </div>
        <div class="col-xl-4 col-lg-6">
            @include('admin.pattern.items',$homeItemsDiscord)
        </div>
    </div>

</div>
