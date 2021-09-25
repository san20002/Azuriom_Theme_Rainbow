@extends('layouts.app')

@section('title', trans('shop::messages.offers.title-payment'))

@section('content')
    <div class="container content" id="shops--select">


        @include('elements.banner', ['banner' => 'method-payment'])
        <div class="row">
            @forelse($gateways as $gateway)
                <div class="col-md-3" @include('elements.string-aos', ['pageAos' => 'shop', 'itemAos'=>'method-payment', 'noDuration'])
                    @if(theme_config('shop.items.method-payment.aos.duration'))
                        data-aos-duration='{{theme_config('shop.items.method-payment.aos.duration') * $loop->iteration}}'
                    @endif>
                    <div class="card shadow-sm mb-3">
                        <a href="{{ route('shop.offers.buy', $gateway) }}" class="payment-method">
                            <div class="card-body text-center">
                                <img src="{{ $gateway->paymentMethod()->image() }}" style="max-height: 45px" class="img-fluid" alt="{{ $gateway->name }}">
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col">
                    <div class="alert alert-warning" role="alert">
                        {{ trans('shop::messages.payment.empty') }}
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
