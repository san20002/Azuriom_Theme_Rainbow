@extends('layouts.app')

@section('title', trans('auth.passwords.reset'))

@section('content')
    <div class="container content main-page" id="auth--password-reset">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                @if(!theme_config('passwordReset.items.passwordReset.hidden'))
                    @if(theme_config('passwordReset.items.passwordReset.media'))
                        <div class="mb-5 text-center w-75 mx-auto">
                            <img class="img-fluid"
                                 src="{{image_url(theme_config('passwordReset.items.passwordReset.media'))}}"
                                 alt="{{trans('auth.passwords.reset')}}">
                        </div>
                    @else
                        <div class="mb-5 text-center w-75 mx-auto">
                            <img class="img-fluid" src="{{site_logo()}}"
                                 alt="{{trans('auth.login')}}">
                        </div>
                    @endif
                @endif

                @include('elements.banner', ['banner' => 'passwordReset', 'value' => 'passwordReset'])

                <div
                    class="card" @include('elements.string-aos', ['pageAos' => 'passwordReset', 'itemAos'=>'passwordReset'])>
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ trans('auth.email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ trans('auth.confirm-password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ trans('auth.passwords.reset') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
