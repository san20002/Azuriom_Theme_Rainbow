@extends('layouts.app')

@section('title', trans('vote::messages.title'))

@if(setting('vote.ipv4-v6-compatibility'))
    @push('scripts')
        <script src="https://ipv6-adapter.com/api/v1/api.js" async defer></script>
    @endpush
@endif

@section('content')
    <div class="container content main-page" id="vote">
        <div id="vote-alert"></div>

        @include('elements.banner',['banner' => 'vote', 'value' => 'vote'])

        <div class="row">
            <div class="col-12" @include('elements.string-aos', ['pageAos' => 'vote', 'itemAos'=>'vote'])>
                <div class="vote vote-now text-center position-relative mb-4 py-5">
                    <div class="@auth d-none @endauth" data-vote-step="1">
                        <form id="voteNameForm">
                            <div class="form-group">
                                <input type="text" id="stepNameInput" name="name" class="form-control"
                                       @auth value="{{ auth()->user()->name }}"
                                       @endauth placeholder="{{ trans('messages.fields.name') }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                {{ trans('messages.actions.continue') }}
                                <span class="d-none spinner-border spinner-border-sm load-spinner" role="status"></span>
                            </button>
                        </form>
                    </div>

                    <div
                        class="@guest d-none @endguest h-100"
                        data-vote-step="2">
                        <div id="vote-spinner" class="d-none h-100">
                            <div class="spinner-border text-white" role="status"></div>
                        </div>
                        <div class="row justify-content-lg-center">
                            @forelse($sites as $site)
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <a class="btn btn-primary my-2 w-100" href="{{ $site->url }}" target="_blank"
                                       rel="noopener noreferrer"
                                       data-site-url="{{ route('vote.vote', $site) }}">
                                        @if(!theme_config('vote.items.vote.hidden'))
                                            <img
                                                src="https://www.google.com/s2/favicons?sz=16&domain_url={{ $site->url }}"
                                                alt="{{ $site->name }}" class="mr-1">
                                        @endif
                                        {{ $site->name }}
                                    </a>
                                </div>
                            @empty
                                <div class="alert alert-warning col-12"
                                     role="alert">{{ trans('vote::messages.no-site') }}</div>
                            @endforelse
                        </div>
                    </div>
                    <div class="d-none" data-vote-step="3">
                        <p id="vote-result"></p>
                    </div>
                </div>
            </div>
            @if(count($votes) >= 1)
                <div class="col-12 podium">
                    @if(!theme_config('vote.items.podium.hidden') && game()->name() == "Minecraft")
                        <div class="podium">
                            @foreach($votes as $id => $vote)
                                @if($id == 2)
                                    <div class="player second-player">
                                        <h1 class="pseudo">{{ $vote['user']->name }}
                                            <br><span>{{ $vote['votes'] }}</span>
                                            votes</h1>
                                        <img src="https://minotar.net/armor/body/{{ $vote['user']->name }}/200.png"
                                             alt="{{ $vote['user']->name }} Skin">
                                        <p class="step"><i class="fas fa-trophy"></i> #2</p>
                                    </div>
                                @endif
                            @endforeach
                            @foreach($votes as $id => $vote)
                                @if($id == 1)
                                    <div class="player first-player">
                                        <h1 class="pseudo">{{ $vote['user']->name }}
                                            <br><span>{{ $vote['votes'] }}</span>
                                            votes</h1>
                                        <img src="https://minotar.net/armor/body/{{ $vote['user']->name }}/200.png"
                                             alt="{{ $vote['user']->name }} Skin">
                                        <p class="step"><i class="fas fa-trophy"></i> #1</p>
                                    </div>
                                @endif
                            @endforeach
                            @foreach($votes as $id => $vote)
                                @if($id == 3)
                                    <div class="player third-player">
                                        <h1 class="pseudo">{{ $vote['user']->name }}
                                            <br><span>{{ $vote['votes'] }}</span>
                                            votes</h1>
                                        <img src="https://minotar.net/armor/body/{{ $vote['user']->name }}/200.png"
                                             alt="{{ $vote['user']->name }} Skin">
                                        <p class="step"><i class="fas fa-trophy"></i> #3</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            @endif
            <div class="col-md-6" @include('elements.string-aos', ['pageAos' => 'vote', 'itemAos'=>'classement'])>
                <h2 class="mt-5 pb-2">{{ trans('vote::messages.sections.top') }}</h2>
                <div class="table-responsive">
                    <ul class="table--custom">
                        <li class="table-header">
                            <div class="col col-2">#</div>
                            <div class="col col-7">{{ trans('messages.fields.name') }}</div>
                            <div class="col col-3">{{ trans('vote::messages.fields.votes') }}</div>
                        </li>
                        @foreach($votes as $id => $vote)
                            <li class="table-row">
                                <div class="col col-2" scope="row">{{ $id }}</div>
                                <div class="col col-7">{{ $vote['user']->name }}</div>
                                <div class="col col-3">{{ $vote['votes'] }}</div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-6" @include('elements.string-aos', ['pageAos' => 'vote', 'itemAos'=>'recompenses'])>
                @if(display_rewards())
                    <h2 class="mt-5 pb-2">{{ trans('vote::messages.sections.rewards') }}</h2>
                    <div class="table-responsive">
                        <ul class="table--custom">
                            <li class="table-header">
                                <div class="col col-6">{{ trans('messages.fields.name') }}</div>
                                <div class="col col-6">{{ trans('vote::messages.fields.chances') }}</div>
                            </li>
                            @foreach($rewards as $reward)
                                <li class="table-row">
                                    <div class="col col-6" scope="row">{{ $reward->name }}</div>
                                    <div class="col col-6">{{ $reward->chances }} %</div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @if(setting('vote.ipv4-v6-compatibility'))
        <script src="https://ipv6-adapter.com/api/v1/api.js" async defer></script>
    @endif

    <script src="{{ plugin_asset('vote', 'js/vote.js') }}" defer></script>
    <script>
        const voteRoute = '{{ route('vote.verify-user', '') }}';
        let username @auth = '{{ auth()->user()->name }}' @endauth;
    </script>
@endpush

@push('styles')
    <style>
        #vote-spinner {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(70, 70, 70, 0.6);
            z-index: 10;
        }
    </style>
@endpush
