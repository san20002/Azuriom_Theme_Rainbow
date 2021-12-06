@extends('layouts.app')

@section('title', trans('forum::messages.discussions.title-create'))

@section('content')
    <div class="container content main-page" id="forum">

        @include('elements.banner', ['banner' => 'forum', 'value' => 'forum-discussions-create'])

        @include('forum::elements.nav')

        <form action="{{ route('forum.forum.discussions.store', $forum->slug) }}" method="POST" @include('elements.string-aos', ['pageAos' => 'forum', 'itemAos'=>'forum-discussions-create'])>
            @include('forum::discussions._form')

            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> {{ trans('messages.actions.save') }}
            </button>
        </form>
    </div>
@endsection
