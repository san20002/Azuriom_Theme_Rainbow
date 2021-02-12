@extends('layouts.app')

@section('title', trans('forum::messages.discussions.title-create'))

@section('content')
    <div class="container content" id="forum">
        <div class="banner">
            <div class="banner-icon banner-faq">
                <img src="{{theme_asset('image/items/icon__0026_Quetes.png')}}"
                     alt="banner-icon">
            </div>
            <div class="banner-title">
                <h1 class="mb-0">{{ trans('forum::messages.discussions.title-create') }}</h1>
            </div>
        </div>
        @include('forum::elements.nav')

        <form action="{{ route('forum.forum.discussions.store', $forum->slug) }}" method="POST">
            @include('forum::discussions._form')

            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> {{ trans('messages.actions.save') }}
            </button>
        </form>
    </div>
@endsection
