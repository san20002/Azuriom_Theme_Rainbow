@extends('layouts.app')

@section('title', trans('changelog::messages.title'))

@section('content')
<div class="container content main-page" id="changelog">
    <div class="alert alert-warning" role="alert"  @include('elements.string-aos', ['pageAos' => 'changelog', 'itemAos'=>'changelog'])>
        {{ trans('changelog::messages.changelog-empty') }}
    </div>
</div>
@endsection
