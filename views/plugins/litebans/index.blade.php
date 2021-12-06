@extends('layouts.app')

@section('title', trans('litebans::messages.navigation.warns'))

@section('content')
    <div class="container content main-page" id="litebans">
        @include('litebans::elements.navbar')
        <div class="table-responsive" @include('elements.string-aos', ['pageAos' => 'liteBans', 'itemAos'=>'litebans'])>
            <ul class="table--custom mt-5">
                <li class="table-header">
                    <div class="col col-2">{{ trans('litebans::messages.username') }}</div>
                    <div class="col col-2">{{ trans('litebans::messages.staff_ban') }}</div>
                    <div class="col col-4">{{ trans('litebans::messages.reason') }}</div>
                    <div class="col col-2">{{ trans('messages.fields.date') }}</div>
                    <div class="col col-2">{{ trans('litebans::messages.expires_at') }}</div>
                </li>
                @forelse ($bans as $item)
                    <li class="table-row">
                        <div class="col col-2">
                            <a href="{{ route('litebans.history', $item->name) }}">
                                <img src="https://cravatar.eu/avatar/{{ $item->name }}/25" alt="{{ $item->name }}">
                                {{ $item->name }}
                            </a>
                        </div>
                        <div class="col col-2">

                            <a href="{{ route('litebans.history.issued', $item->banned_by_name) }}">
                                {{ $item->banned_by_name }}
                            </a>
                        </div>
                        <div class="col col-4">{{ $item->reason }}</div>
                        <div class="col col-2">{{ format_date($item->time) }}</div>
                        @if(isset($item->removed_by_name))
                            <div class="col col-2">{{ trans('litebans::messages.unbanned') }}</div>
                        @elseif($item->until === null)
                            <div class="col col-2">{{ trans('litebans::messages.permanent') }}</div>
                        @elseif($item->until->isPast())
                            <div class="col col-2">{{ trans('litebans::messages.expired') }}</div>
                        @else
                            <div class="col col-2">{{ format_date($item->until) }}</div>
                        @endif
                    </li>
                @empty
                    <li class="table-row">
                        <div class="col col-12">{{ trans('litebans::messages.no_punishments_found') }}</div>
                    </li>
                @endforelse
            </ul>
        </div>

        {{ $bans->withQueryString()->links() }}
    </div>
@endsection
