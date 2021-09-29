@extends('layouts.app')

@section('title', trans('jirai::messages.title'))

@section('content')

<div class="container" id="jirai">

    <div class="card mt-5 mb-5" @include('elements.string-aos', ['pageAos' => 'jirai', 'itemAos'=>'issues-show'])>
        <div class="card-header">
            <img class="rounded float-left mr-4" src="{{ $issue->user->getAvatar() }}" alt="{{ $issue->user->name }}" height="55">
            <h1 class="card-title">{{ $issue->title }}</h1>
            <div>
                @if ($issue->closed)
                    <button class="btn btn-danger btn-sm font-weight-bold">{{ trans('jirai::messages.closed') }}</button>
                @else
                    <button class="btn btn-success btn-sm rounded-pill font-weight-bold">{{ trans('jirai::messages.open') }}</button>
                @endif

                @foreach($issue->jiraiTags as $tag)
                    <button class="btn {{ $tag->color }} rounded-pill font-weight-bold btn-sm">{{ $tag->name }}</button>
                @endforeach
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <span>@lang('messages.posts.posted', ['user' => e($issue->user->name), 'date' => format_date($issue->created_at, true)])</span>
                <div>
                    @hasJiraiIssueEditPermission($issue->user_id)
                    <a class="btn btn-danger" href="{{ route('jirai.issues.edit', ['issue' => $issue->id]) }}">{{ trans('jirai::messages.edit') }}</a>
                    @endhasJiraiIssueEditPermission

                    @hasJiraiIssueDeletePermission($issue->user_id)
                    <a class="btn btn-danger" href="{{ route('jirai.issues.destroy', ['issue' => $issue->id]) }}" data-confirm="delete">{{ trans('jirai::messages.delete') }}</a>
                    @endhasJiraiIssueDeletePermission
                </div>
            </div>
        </div>
        <div class="card-body user-html-content p-2">
            {!! \Azuriom\Support\Markdown::parse($issue->message) !!}
        </div>
    </div>

    @foreach($issue->messages as $message)

        @if($message->referenced_jirai_changelog_id != null)
            <div class="card shadow-sm mb-3" @include('elements.string-aos', ['pageAos' => 'jirai', 'itemAos'=>'messages-show'])>
                <div class="card-header d-flex justify-content-between">
                    <small style="color: grey">
                        @lang('messages.posts.posted', ['user' => '<span class="btn btn-warning btn-sm mr-3 rounded-pill">Auto</span>', 'date' => format_date($message->created_at, true)])
                    </small>
                </div>
                <div class="card-body user-html-content">
                    {!! \Azuriom\Support\Markdown::parse(trans('jirai::messages.issue_solved_in', ['id' => $message->referenced_jirai_changelog_id, 'url' => route('jirai.changelogs.show', $message->referenced_jirai_changelog_id)])) !!}
                </div>
            </div>
        @else
            <div class="card shadow-sm mb-3" @include('elements.string-aos', ['pageAos' => 'jirai', 'itemAos'=>'messages-show'])>
                <div class="card-header d-flex justify-content-between">
                    <div class="d-flex ">
                        <img class="d-flex mr-2 rounded" src="{{ $message->user->getAvatar() }}" alt="{{ $message->user->name }}" height="35">
                        <span style="color: grey">
                            @lang('messages.posts.posted', ['user' => e($message->user->name), 'date' => format_date($message->created_at, true)])
                        </span>
                    </div>
                    <div>
                        <div class="d-flex">
                            @hasJiraiMessageDeletePermission($message->user_id)
                            <a class="btn btn-danger mr-1" href="{{ route('jirai.messages.edit', ['message' => $message->id]) }}" >{{ trans('jirai::messages.edit') }}</a>
                            @endhasJiraiMessageDeletePermission($message->user_id)

                            @hasJiraiMessageEditPermission($message->user_id)
                                <a class="btn btn-danger " href="{{ route('jirai.messages.destroy', ['message' => $message->id]) }}" data-confirm="delete">{{ trans('jirai::messages.delete') }}</a>
                            @endhasJiraiMessageEditPermission($message->user_id)
                        </div>
                    </div>
                </div>
                <div class="card-body user-html-content">
                    {!! \Azuriom\Support\Markdown::parse($message->message) !!}
                </div>
            </div>
        @endif
    @endforeach

    @can('jirai.message.post')
    <form action="{{ route('jirai.messages.store') }}" method="POST" @include('elements.string-aos', ['pageAos' => 'jirai', 'itemAos'=>'messages-create'])>
        @csrf
        <div class="card shadow-sm mb-3">
            <div class="card-header">
               <span>{{ trans('jirai::messages.answer') }}</span>
               <button type="submit" class="btn btn-primary float-right">{{ trans('jirai::messages.answer') }}</button>
            </div>
            <div class="card-body p-0">
                <textarea name="message" id="markdownEditor"></textarea>
                <input type="hidden" name="jirai_issue_id" value="{{ $issue->id }}">
            </div>
        </div>
    </form>
    @endcan


</div>

@can('jirai.message.post')
    @include('jirai::editor')
@endcan

@include('jirai::delete-modal')

@endsection
