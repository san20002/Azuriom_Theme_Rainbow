@extends('layouts.app')

@section('title', 'Payment')

@section('content')
    <div class="container content" id="shops">
        <h1>{{ trans('shop::messages.payment.success') }}</h1>

        <p>{{ trans('shop::messages.payment.success-info') }}</p>
    </div>
@endsection
