@extends('layouts.app')

@section('title', trans('shop::messages.offers.title-select'))

@push('footer-scripts')
    <script>
        document.querySelectorAll('.payment-method').forEach(function (el) {
            el.addEventListener('click', function (ev) {
                ev.preventDefault();

                const form = document.getElementById('submitForm');
                form.action = el.href;
                form.submit();
            });
        });
    </script>
@endpush

@section('content')
    <div class="container content main-page" id="shops--select">
        @include('elements.banner', ['banner' => 'shop', 'value' => 'select-payment'])
        <div class="row">
            @forelse($offers as $offer)
                <div class="col-md-3" @include('elements.string-aos', ['pageAos' => 'shop', 'itemAos'=>'select-payment', 'noDuration'])
                @if(theme_config('shop.items.select-payment.aos.duration'))
                data-aos-duration='{{theme_config('shop.items.select-payment.aos.duration') * $loop->iteration}}'
                @endif>
                    <div class="card shadow-sm mb-3">
                        <a href="{{ route('shop.offers.pay', [$offer->id, $gateway->type]) }}" class="payment-method">
                            <div class="card-body text-center">
                                <h3>{{ $offer->name }}</h3>
                                <h4>{{ $offer->price }} {{ currency_display() }}</h4>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col">
                    <div class="alert alert-warning" role="alert">
                        {{ trans('shop::messages.offers.empty') }}
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    <form method="POST" id="submitForm">
        @csrf
    </form>
@endsection
