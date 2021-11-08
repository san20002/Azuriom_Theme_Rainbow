@extends('layouts.app')

@section('title', $category->name)

@push('footer-scripts')
    <script>
        document.querySelectorAll('[data-package-url]').forEach(function (el) {
            el.addEventListener('click', function (ev) {
                ev.preventDefault();

                axios.get(el.dataset['packageUrl'], {
                    headers: {
                        'X-PJAX': 'true'
                    }
                }).then(function (response) {
                    $('#itemModal').html(response.data).modal('show');
                }).catch(function (error) {
                    createAlert('danger', error, true);
                });
            });
        });
    </script>
@endpush

@section('content')
    <div class="container content" id="shops">
        <div class="row
        @if(theme_config('shop.items.shop.style') == 0 || !theme_config('shop.items.shop.style'))
            @elseif(theme_config('shop.items.shop.style') == 1)
            flex-row-reverse
            @endif
            ">
            <div class="col-lg-9">
                @include('elements.banner', ['banner' => 'shop', 'value' => 'shop'])
                <div class="row">
                    @forelse($category->packages as $package)
                        <div class="col-md-4 mb-4"
                             @include('elements.string-aos', ['pageAos' => 'shop', 'itemAos'=>'shop', 'noDuration'])
                             @if(theme_config('shop.items.shop.aos.duration'))
                             data-aos-duration='{{theme_config('shop.items.shop.aos.duration') * $loop->iteration}}'
                            @endif>
                            <div class="card h-100">
                                @if($package->image !== null)
                                    <a href="#" data-package-url="{{ route('shop.packages.show', $package) }}">
                                        <img class="card-img-top" src="{{ $package->imageUrl() }}"
                                             alt="{{ $package->name }}">
                                    </a>
                                @endif

                                <div class="card-body">
                                    <h4 class="card-title">{{ $package->name }}</h4>
                                    <h5>
                                        @if($package->isDiscounted())
                                            <del class="small">{{ $package->getOriginalPrice() }}</del>
                                        @endif
                                        {{ shop_format_amount($package->getPrice()) }}
                                    </h5>

                                    <a href="#" class="btn btn-primary btn-block"
                                       data-package-url="{{ route('shop.packages.show', $package) }}">
                                        {{ trans('shop::messages.buy') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col">
                            <div class="alert alert-warning" role="alert">
                                {{ trans('shop::messages.categories.empty') }}
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="col-lg-3">
                @include('shop::categories.sidebar')
            </div>
        </div>
    </div>

    <div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="itemModalLabel"
         aria-hidden="true"></div>
@endsection
