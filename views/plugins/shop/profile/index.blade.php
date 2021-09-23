@extends('layouts.app')

@section('title', trans('shop::messages.profile.payments'))

@section('content')
    <div class="container content">

        @include('elements.banner',['banner' => 'myAchat'])

        <div class="table-responsive" @include('elements.string-aos', ['pageAos' => 'profile', 'itemAos'=>'buy'])>
            <ul class="table--custom">
                <li class="table-header">
                    <div class="col col-1">#</div>
                    <div class="col col-1">{{ trans('shop::messages.fields.price') }}</div>
                    <div class="col col-2">{{ trans('messages.fields.type') }}</div>
                    <div class="col col-2">{{ trans('messages.fields.status') }}</div>
                    <div class="col col-3">{{ trans('shop::messages.fields.payment-id') }}</div>
                    <div class="col col-3">{{ trans('messages.fields.date') }}</div>
                </li>
                @foreach($payments as $payment)
                    <li class="table-row">
                        <div class="col col-1" scope="row">{{ $payment->id }}</div>
                        <div class="col col-1">{{ $payment->price }} {{ currency_display($payment->currency) }}</div>
                        <div class="col col-2">{{ $payment->getTypeName() }}</div>
                        <div class="col col-2">
                            <span class="badge badge-{{ $payment->statusColor() }}">
                                {{ trans('shop::admin.payments.payment-status.'.$payment->status) }}
                            </span>
                        </div>
                        <div class="col col-3">{{ $payment->transaction_id ?? trans('messages.unknown') }}</div>
                        <div class="col col-3">{{ format_date_compact($payment->created_at) }}</div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
