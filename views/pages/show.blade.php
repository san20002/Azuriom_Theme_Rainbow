@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)

@section('content')
    <div class="container content" id="page">
        <div class="banner">
            <div class="banner-icon banner-page">
                <img src="{{theme_asset('image/items/sprite.png')}}"
                     alt="banner-icon">
            </div>
            <div class="banner-title justify-content-between">
                <h1 class="mb-0">{{ $page->title }}</h1>
            </div>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="card-text user-html-content">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection
