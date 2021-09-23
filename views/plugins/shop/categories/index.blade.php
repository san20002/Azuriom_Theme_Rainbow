@extends('layouts.app')

@section('title', trans('shop::messages.title'))

@section('content')
    <div class="container content">
        <div class="alert alert-warning" role="alert"  @include('elements.string-aos', ['pageAos' => 'shop', 'itemAos'=>'shop'])>
            {{ trans('shop::messages.categories.empty') }}
        </div>
    </div>
@endsection
