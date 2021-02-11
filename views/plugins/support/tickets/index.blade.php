@extends('layouts.app')

@section('title', trans('support::messages.title'))

@section('content')
    <div class="container content" id="support">
        <div class="banner">
            <div class="banner-icon banner-support">
                <img src="{{theme_asset('image/items/icon__0043_familiers.png')}}"
                     alt="banner-icon">
            </div>
            <div class="banner-title">
                <h1 class="mb-0">{{ trans('support::messages.title') }}</h1>
            </div>
        </div>
        <ul class="responsive-table table--custom">
            <li class="table-header">
                <div class="col col-0">#</div>
                <div class="col col-5">{{ trans('support::messages.fields.subject') }}</div>
                <div class="col col-2">{{ trans('support::messages.fields.category') }}</div>
                <div class="col col-2">{{ trans('messages.fields.status') }}</div>
                <div class="col col-3">{{ trans('messages.fields.date') }}</div>
            </li>
            @foreach($tickets as $ticket)
                <li class="table-row">
                    <div class="col col-0" scope="row">{{ $ticket->id }}</div>
                    <div class="col col-5">
                        <a href="{{ route('support.tickets.show', $ticket) }}">{{ $ticket->subject }}<i class="far fa-eye"></i></a>
                    </div>
                    <div class="col col-2">{{ Str::limit($ticket->category->name,50) }}</div>
                    <div class="col col-2">
                        <span class="badge badge-{{ $ticket->isClosed() ? 'danger' : 'success' }}">
                            {{ $ticket->statusMessage() }}
                        </span>
                    </div>
                    <div class="col col-3">{{ format_date_compact($ticket->created_at) }}</div>
                </li>
            @endforeach
        </ul>
        <table class="table">
            <tbody>


            </tbody>
        </table>

        <a href="{{ route('support.tickets.create') }}" class="btn btn-success">
            {{ trans('support::messages.actions.open-new') }}
        </a>
    </div>
@endsection
