@extends('layouts.app')

@section('title', trans('advancedban::messages.title'))

@section('content')
    <div class="container content">
        @include('elements.banner',['banner' => 'advancedban'])

        <div class="table-responsive"  @include('elements.string-aos', ['pageAos' => 'advancedBan', 'itemAos'=>'advancedBan'])>
            <ul class="table--custom">
                <li class="table-header">
                    <div class="col col-1">{{ trans('messages.fields.type') }}</div>
                    <div class="col col-2">{{ trans('advancedban::messages.username') }}</div>
                    <div class="col col-2">{{ trans('advancedban::messages.reason') }}</div>
                    <div class="col col-2">{{ trans('advancedban::messages.staff') }}</div>
                    <div class="col col-2">{{ trans('messages.fields.date') }}</div>
                    <div class="col col-2">{{ trans('advancedban::messages.expires_at') }}</div>
                    <div class="col col-1">{{ trans('messages.fields.status') }}</div>
                </li>
                @forelse($allPunishments as $punishment)
                    <li class="table-row">
                        <div class="col col-0" scope="row">{{ $punishment->punishmentType }}</div>
                        <div class="col col-5"><img
                                src="https://crafthead.net/avatar/{{ $punishment->uuid }}/30"> {{ $punishment->name }}
                        </div>
                        <div class="col col-2">{{ $punishment->reason }}</div>
                        <div class="col col-2"><img data-name="{{ $punishment->operator }}"
                                                    src="https://crafthead.net/avatar/8667ba71-b85a-4004-af54-457a9734eed7/30"> {{ $punishment->operator }}
                        </div>
                        <div
                            class="col col-2">{{ format_date(Carbon\Carbon::createFromTimestampMs($punishment->start)) }}
                            <span class="badge badge-info">{{ strftime('%H:%M', $punishment->start / 1000) }}</span>
                        </div>
                        <div class="col col-2">
                            @if($punishment->end != -1)
                                {{ format_date(Carbon\Carbon::createFromTimestampMs($punishment->end)) }}
                                <span class="badge badge-info">{{ strftime('%H:%M', $punishment->end / 1000) }}</span>
                            @else
                                N/A
                            @endif
                        </div>
                        <div class="col col-2">
                            @if(in_array($punishment, $punishments) && time() < $punishment->end)
                                {{ trans('advancedban::messages.active') }}
                            @else
                                {{ trans('advancedban::messages.finished') }}
                            @endif
                        </div>
                    </li>
                @empty
                    <li class="table-row">
                        <div class="col col-0"
                             scope="row">{{ trans('advancedban::messages.no_punishments_found') }}</div>
                    </li>
                @endforelse
            </ul>
        </div>

        {{ $allPunishments->links() }}
    </div>
@endsection

@push('scripts')
    <script>
        window.addEventListener('load', function () {
            var links = document.getElementsByTagName("img");
            var linksArr = Array.from(links);

            linksArr.forEach(function (element) {
                let name = element.getAttribute('data-name');
                if (name === null) return;

                element.setAttribute('src', 'https://crafthead.net/avatar/' + name + '/30');
            });
        })
    </script>
@endpush
