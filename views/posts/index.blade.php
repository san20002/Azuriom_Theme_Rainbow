@extends('layouts.app')

@section('title', trans('messages.posts.posts'))

@section('content')
    <div class="container content" id="posts-all">

        @include('elements.banner', ['banner' => 'articles', 'value' => 'allArticle', 'posts' => $posts])

        <div class="row mt-5" @include('elements.string-aos', ['pageAos' => 'articles', 'itemAos'=>'allArticle'])>
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="post-preview card mb-3 shadow-sm">
                        @if($post->hasImage())
                            <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="card-img-top">
                        @endif
                        <div class="card-header">
                            <h2 class="card-title">
                                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                            </h2>
                            <small>{{ trans('messages.posts.posted', ['date' => format_date($post->published_at), 'user' => $post->author->name]) }}</small>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                            <a class="btn btn-primary"
                               href="{{ route('posts.show', $post) }}">{{ trans('messages.posts.read') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
