@extends('layouts.app')

@section('title', trans('auth.login'))

@section('content')
    <div class="container content main-page" id="auth--login">
        <div class="row justify-content-center flex-column align-items-center">
            <div class="col-lg-8 col-md-10">
                @if(!theme_config('login.items.login.hidden'))
                    @if(theme_config('login.items.login.media'))
                        <div class="mb-5 text-center w-75 mx-auto">
                            <img class="img-fluid" src="{{image_url(theme_config('login.items.login.media'))}}"
                                 alt="{{trans('auth.login')}}">
                        </div>
                    @else
                        <div class="mb-5 text-center w-75 mx-auto">
                            <img class="img-fluid" src="{{site_logo()}}"
                                 alt="{{trans('auth.login')}}">
                        </div>
                    @endif
                @endif

                @include('elements.banner', ['banner' => 'login', 'value' => 'login'])
                <div class="card" @include('elements.string-aos', ['pageAos' => 'login', 'itemAos'=>'login'])>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ trans('auth.email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ trans('auth.password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="custom-control-label" for="remember">
                                            {{ trans('auth.remember-me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ trans('auth.login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link px-1" href="{{ route('password.request') }}">
                                            {{ trans('auth.forgot-password') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @if(plugins()->isEnabled('discord-auth'))
                @if(!theme_config('login.items.discord.hidden'))
                    @guest
                        <div class="col-lg-4 col-md-6">
                            <a class="btn btn-primary d-inline-flex w-100 justify-content-center my-3"
                               style="font-size: 2rem"
                               @include('elements.string-aos', ['pageAos' => 'login', 'itemAos'=>'discord'])
                               href="{{ route('discord-auth.login') }}"
                               title="{{ trans('discord-auth::messages.login_via_discord') }}"
                               aria-labelledby="{{ trans('discord-auth::messages.login_via_discord') }}">
                                @if(theme_config('login.items.discord.media'))
                                    <img style="max-width: 65px"
                                         src="{{image_url(theme_config('login.items.discord.media'))}}"
                                         alt="{{trans('auth.login')}}">
                                @else
                                    <i class="fab fa-discord text-xl"></i>
                                @endif
                                <span class="pl-2" style="font-size: 1rem">
                                {{theme_config('login.items.discord.text') ?? ''}}
                                </span>
                            </a>
                        </div>
                    @endguest
                @endif
            @endif
        </div>
    </div>
@endsection
