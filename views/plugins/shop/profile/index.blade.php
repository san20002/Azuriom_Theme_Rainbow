@extends('layouts.app')

@section('title', trans('shop::messages.profile.payments'))

@section('content')
    <div class="container content">
        <div class="banner">
            <div class="banner-icon banner-cart">
                <img src="{{theme_asset('image/items/sprite-2.png')}}"
                     alt="banner-icon">
            </div>
            <div class="banner-title">
                <h1 class="mb-0">{{ trans('shop::messages.profile.payments') }}</h1>
            </div>
        </div>


        <ul class="responsive-table table--custom">
            <li class="table-header">
                <div class="col col-0">#</div>
                <div class="col col-2">{{ trans('shop::messages.fields.price') }}</div>
                <div class="col col-2">{{ trans('messages.fields.type') }}</div>
                <div class="col col-2">{{ trans('messages.fields.status') }}</div>
                <div class="col col-3">{{ trans('shop::messages.fields.payment-id') }}</div>
                <div class="col col-4">{{ trans('messages.fields.date') }}</div>
            </li>
            @foreach($payments as $payment)
                <li class="table-row">
                    <div class="col col-0" scope="row">{{ $payment->id }}</div>
                    <div class="col col-2">{{ $payment->price }} {{ currency_display($payment->currency) }}</div>
                    <div class="col col-2">{{ $payment->getTypeName() }}</div>
                    <div class="col col-2">
                            <span class="badge badge-{{ $payment->statusColor() }}">
                                {{ trans('shop::admin.payments.payment-status.'.$payment->status) }}
                            </span>
                    </div>
                    <div class="col col-3">{{ $payment->transaction_id ?? trans('messages.unknown') }}</div>
                    <div class="col col-4">{{ format_date_compact($payment->created_at) }}</div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
