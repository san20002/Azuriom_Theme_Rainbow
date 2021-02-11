@extends('layouts.app')

@section('title', trans('wiki::messages.title'))

@section('content')
    <div class="container content" id="wiki">
        <div class="banner">
            <div class="banner-icon banner-wiki">
                <img src="{{theme_asset('image/items/icon__0036_encyclopedia.png')}}"
                     alt="banner-icon">
            </div>
            <div class="banner-title">
                <h1 class="mb-0">{{ trans('wiki::messages.title') }}</h1>
            </div>
        </div>
        <div class="row mt-5">
            @foreach($categories as $category)
                <div class="col-md-3">
                    <a href="{{ route('wiki.show', $category) }}">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="{{ $category->icon ?? 'fas fa-book' }} fa-fw fa-3x mb-3"></i>

                                <h2>{{ $category->name }}</h2>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
