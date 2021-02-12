@extends('layouts.app')

@section('title', trans('forum::messages.posts.title-edit'))

@include('forum::elements.markdown-editor')

@section('content')
    <div class="container" id="forum">
        <div class="banner">
            <div class="banner-icon banner-forum">
                <img src="{{theme_asset('image/items/icon__0026_Quetes.png')}}"
                     alt="banner-icon">
            </div>
            <div class="banner-title">
                <h1 class="mb-0">{{ trans('forum::messages.posts.title-edit') }}</h1>
            </div>
        </div>

        @include('forum::elements.nav')

        <form action="{{ route('forum.discussions.posts.update', [$post->discussion, $post]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="content">{{ trans('messages.comments.your-comment') }}</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="4">{{ old('content', $post->content) }}</textarea>

                @error('content')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> {{ trans('messages.actions.save') }}
            </button>
        </form>

    </div>
@endsection
