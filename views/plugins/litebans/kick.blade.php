@extends('layouts.app')

@section('title', trans('litebans::messages.navigation.kicks'))

@section('content')
    <div class="container content" id="litebans">
        @include('litebans::elements.navbar')
        <div class="table-responsive">
            <ul class="table--custom mt-5">
                <li class="table-header">
                    <div class="col col-3">{{ trans('litebans::messages.username') }}</div>
                    <div class="col col-3">{{ trans('litebans::messages.staff_kick') }}</div>
                    <div class="col col-4">{{ trans('litebans::messages.reason') }}</div>
                    <div class="col col-2">{{ trans('messages.fields.date') }}</div>
                </li>
                @forelse ($kicks as $item)
                    <li class="table-row">
                        <div class="col col-3">
                            <a href="{{ route('litebans.history', $item->name) }}">
                                <img src="https://cravatar.eu/avatar/{{ $item->name }}/25" alt="{{ $item->name }}">
                                {{ $item->name }}
                            </a>
                        </div>
                        <div class="col col-3">
                            <a href="{{ route('litebans.history.issued', $item->banned_by_name) }}">
                                {{ $item->banned_by_name }}
                            </a>
                        </div>
                        <div class="col col-4">{{ $item->reason }}</div>
                        <div class="col col-2">{{ format_date($item->time) }}</div>
                    </li>
                @empty
                    <li class="table-row">
                        <div class="col col-12">{{ trans('litebans::messages.no_punishments_found') }}</div>
                    </li>
                @endforelse
            </ul>
        </div>

        {{ $kicks->withQueryString()->links() }}
    </div>
@endsection
