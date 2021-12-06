@extends('layouts.app')

@section('title', trans('forum::messages.title'))

@section('content')
    <div class="container content main-page" id="forum">
        @include('elements.banner', ['banner' => 'forum', 'value' => 'forum'])

        @include('forum::elements.nav')
        <div class="row">
            <div class="col-md-9" @include('elements.string-aos', ['pageAos' => 'forum', 'itemAos'=>'forum'])>
                @foreach($categories as $category)
                    <div class="card mb-3">
                        <div class="card-header">
                            <h2 class="h3">{{ $category->name }}</h2>
                            <small>{{ $category->description }}</small>
                        </div>

                        <div class="list-group list-group-flush">
                            @foreach($category->forums as $forum)
                                @can('view', $forum)
                                    <div class="list-group-item">
                                        <div class="row">
                                            <div class="col-xl-1 col-md-2 col-2 text-center">
                                                <i class="{{ $forum->icon ?? 'fas fa-comments' }} fa-2x fa-fw forum-big-icon"></i>
                                            </div>

                                            <div class="col-xl-8 col-md-7 col-10 pl-md-0">
                                                <h3 class="h5">
                                                    <a href="{{ route('forum.show', $forum->slug) }}">{{ $forum->name }}</a>
                                                </h3>

                                                {{ $forum->description ?? '' }}
                                            </div>

                                            <div class="col-xl-3 col-md-3 d-none d-md-block">
                                                {{ trans_choice('forum::messages.forums.discussions-count', $forum->discussions_count) }}
                                                <br>
                                                {{ trans_choice('forum::messages.discussions.posts-count', $forum->posts_count) }}
                                            </div>
                                        </div>
                                    </div>
                                @endcan
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-3" >
                <div class="card mb-3"@include('elements.string-aos', ['pageAos' => 'forum', 'itemAos'=>'message'])>
                    <div class="card-header">
                        <i class="fas fa-comments fa-fw"></i> {{ trans('forum::messages.latest.title') }}
                    </div>
                    <div class="list-group list-group-flush">
                        @foreach($latestPosts as $post)
                            <div class="list-group-item">
                                <a href="{{ route('forum.discussions.show', $post->discussion) }}">
                                    {{ $post->discussion->title }}
                                </a>

                                <br>

                                <small>
                                    <a href="{{ route('forum.users.show', $post->author) }}">{{ $post->author->name }}</a>,
                                    {{ format_date($post->created_at) }}
                                </small>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="card mb-3" @include('elements.string-aos', ['pageAos' => 'forum', 'itemAos'=>'stati'])>
                    <div class="card-header">
                        <i class="fas fa-chart-bar fa-fw"></i> {{ trans('forum::messages.stats.title') }}
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li>{{ trans_choice('forum::messages.stats.discussions', $discussionsCount) }}</li>
                            <li>{{ trans_choice('forum::messages.stats.posts', $postsCount) }}</li>
                            <li>{{ trans_choice('forum::messages.stats.users', $usersCount) }}</li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-3" @include('elements.string-aos', ['pageAos' => 'forum', 'itemAos'=>'user'])>
                    <div class="card-header">
                        <i class="fas fa-users fa-fw"></i> {{ trans('forum::messages.online.title') }}
                    </div>
                    <div class="card-body">
                        @forelse($onlineUsers as $id => $user)
                            @if($id !== 0)
                                ,
                            @endif
                            <a href="{{ route('forum.users.show', $user) }}">
                                {{ $user->name }}
                            </a>
                        @empty
                            {{ trans('forum::messages.online.none') }}
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
