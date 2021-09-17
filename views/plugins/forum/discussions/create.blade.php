@extends('layouts.app')

@section('title', trans('forum::messages.discussions.title-create'))

@section('content')
    <div class="container content" id="forum">

        @include('elements.banner', ['banner' => 'forum'])

        @include('forum::elements.nav')

        <form action="{{ route('forum.forum.discussions.store', $forum->slug) }}" method="POST">
            @include('forum::discussions._form')

            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> {{ trans('messages.actions.save') }}
            </button>
        </form>
    </div>
@endsection
