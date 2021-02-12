@extends('layouts.app')

@section('title', trans('shop::messages.cart.title'))

@section('content')
    <div class="container content">
        <div class="banner mt-5">
            <div class="banner-icon banner-cart">
                <img src="{{theme_asset('image/items/sprite-2.png')}}"
                     alt="banner-icon">
            </div>
            <div class="banner-title">
                <h1 class="mb-0">{{ trans('shop::messages.cart.title') }}</h1>
            </div>
        </div>
        @if(! $cart->isEmpty())

            <form action="{{ route('shop.cart.update') }}" method="POST">
                @csrf

                <div class="table-responsive">
                    <ul class="table--custom cart-items">
                        <li class="table-header">
                            <div class="col col-5">{{ trans('messages.fields.name') }}</div>
                            <div class="col col-2">{{ trans('shop::messages.fields.price') }}</div>
                            <div class="col col-2">{{ trans('shop::messages.fields.total') }}</div>
                            <div class="col col-1">{{ trans('shop::messages.fields.quantity') }}</div>
                            <div class="col col-2 text-center">{{ trans('messages.fields.action') }}</div>
                        </li>
                        @foreach($cart->content() as $cartItem)
                            <li class="table-row">
                                <div class="col col-5" scope="row">{{ $cartItem->name() }}</div>
                                <div class="col col-2">{{ shop_format_amount($cartItem->price()) }}</div>
                                <div class="col col-2">{{ shop_format_amount($cartItem->total()) }}</div>
                                <div class="col col-1">
                                    <input type="number" min="0" max="{{ $cartItem->maxQuantity() }}" size="5"
                                           class="form-control form-control-sm d-inline-block"
                                           name="quantities[{{ $cartItem->itemId }}]" value="{{ $cartItem->quantity }}"
                                           aria-label="{{ trans('shop::messages.fields.quantity') }}" required
                                           @if(!$cartItem->hasQuantity()) readonly @endif>
                                </div>
                                <div class="col col-2 text-center">
                                    <a href="{{ route('shop.cart.remove', $cartItem->id) }}"
                                       class="text-danger px-0" title="{{ trans('messages.actions.delete') }}">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <p class="text-right mb-4">
                    <button type="submit" class="btn btn-primary btn-sm">
                        {{ trans('messages.actions.update') }}
                    </button>
                </p>
            </form>

            <div class="row">
                <div class="col-md-8">
                    <div class="banner mt-5">
                        <div class="banner-icon banner-promo">
                            <img src="{{theme_asset('image/items/sprite.png')}}"
                                 alt="banner-icon">
                        </div>
                        <div class="banner-title">
                            <h5 class="mb-0">{{ trans('shop::messages.cart.coupons') }}</h5>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <ul class="table--custom coupons">
                            <li class="table-header">
                                <div class="col col-4">{{ trans('messages.fields.name') }}</div>
                                <div class="col col-4">{{ trans('shop::messages.fields.discount') }}</div>
                                <div class="col col-4">{{ trans('messages.fields.action') }}</div>
                            </li>
                            @foreach($cart->coupons() as $coupon)
                                <li class="table-row">
                                    <div class="col col-4" scope="row">{{ $coupon->code }}</div>
                                    <div class="col col-4">{{ $coupon->discount }}%</div>
                                    <div class="col col-4">
                                        <form action="{{ route('shop.cart.coupons.remove', $coupon) }}" method="POST"
                                              class="d-inline-block">
                                            @csrf

                                            <button type="submit" class="text-danger bg-transparent border-0"
                                                    title="{{ trans('messages.actions.delete') }}">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="banner mt-5">
                        <div class="banner-icon banner-promo">
                            <img src="{{theme_asset('image/items/sprite.png')}}"
                                 alt="banner-icon">
                        </div>
                        <div class="banner-title">
                            <h5 class="mb-0">{{ trans('shop::messages.cart.add-coupon') }}</h5>
                        </div>
                    </div>
                    <form action="{{ route('shop.cart.coupons.add') }}" method="POST" class="form-inline mb-3">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control @error('code') is-invalid @enderror mx-2"
                                   placeholder="Code" id="code" name="code" value="{{ old('code') }}">

                            @error('code')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">{{ trans('messages.actions.add') }}</button>
                    </form>
                </div>
            </div>

            <p class="font-weight-bold text-right mb-4">
                <span class="border border-dark p-2 rounded">
                    {{ trans('shop::messages.cart.total', ['total' => shop_format_amount($cart->total())]) }}
                </span>
            </p>

            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('shop.home') }}" class="btn btn-info">
                        {{ trans('shop::messages.cart.back') }}
                    </a>
                </div>

                <div class="col-md-6 text-right">
                    <form method="POST" action="{{ route('shop.cart.clear') }}" class="d-inline-block">
                        @csrf

                        <button type="submit" class="btn btn-danger">
                            {{ trans('shop::messages.cart.clear') }}
                        </button>
                    </form>

                    @if(use_site_money())
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#confirmBuyModal">
                            {{ trans('shop::messages.buy') }}
                        </button>
                    @else
                        <a href="{{ route('shop.payments.payment') }}" class="btn btn-primary">
                            {{ trans('shop::messages.cart.checkout') }}
                        </a>
                    @endif
                </div>
            </div>
        @else
            <div class="alert alert-warning" role="alert">
                {{ trans('shop::messages.cart.empty') }}
            </div>

            <a href="{{ route('shop.home') }}" class="btn btn-primary">
                {{ trans('shop::messages.cart.back') }}
            </a>
        @endif
    </div>

    @if(use_site_money())
        <div class="modal fade" id="confirmBuyModal" tabindex="-1" role="dialog" aria-labelledby="confirmBuyLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title"
                            id="confirmBuyLabel">{{ trans('shop::messages.cart.pay-confirm-title') }}</h2>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        {{ trans('shop::messages.cart.pay-confirm', ['price' => shop_format_amount($cart->total())]) }}
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button"
                                data-dismiss="modal">{{ trans('messages.actions.cancel') }}</button>

                        <form method="POST" action="{{ route('shop.cart.payment') }}">
                            @csrf

                            <button class="btn btn-primary" type="submit">
                                {{ trans('shop::messages.cart.pay') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
