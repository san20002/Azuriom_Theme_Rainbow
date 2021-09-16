@extends('layouts.app')

@section('title', trans('support::messages.title'))

@section('content')
    <div class="container content" id="support">

        @php($banner = 'support')
        @include('elements.banner')

        <div class="table-responsive">
            <ul class="table--custom">
                <li class="table-header">
                    <div class="col col-0">#</div>
                    <div class="col col-5">{{ trans('support::messages.fields.subject') }}</div>
                    <div class="col col-2">{{ trans('support::messages.fields.category') }}</div>
                    <div class="col col-2">{{ trans('messages.fields.status') }}</div>
                    <div class="col col-2">{{ trans('messages.fields.date') }}</div>
                </li>
                @foreach($tickets as $ticket)
                    <li class="table-row">
                        <div class="col col-0" scope="row">{{ $ticket->id }}</div>
                        <div class="col col-5">
                            <a href="{{ route('support.tickets.show', $ticket) }}">{{ $ticket->subject }}<i
                                    class="far fa-eye"></i></a>
                        </div>
                        <div class="col col-2">{{ Str::limit($ticket->category->name,50) }}</div>
                        <div class="col col-2">
                        <span class="badge badge-{{ $ticket->isClosed() ? 'danger' : 'success' }}">
                            {{ $ticket->statusMessage() }}
                        </span>
                        </div>
                        <div class="col col-2">{{ format_date_compact($ticket->created_at) }}</div>
                    </li>
                @endforeach
            </ul>
        </div>

        <a href="{{ route('support.tickets.create') }}" class="btn btn-success">
            {{ trans('support::messages.actions.open-new') }}
        </a>
    </div>
@endsection
