@extends('layouts.app')

@section('title', trans('auth.passwords.reset'))

@section('content')
<div class="container content main-page" id="auth--password-email">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            @if(theme_config('passwordReset.items.passwordReset.media'))
                @if(!theme_config('passwordReset.items.passwordReset.hidden'))
                    <div class="mb-5 text-center">
                        <img class="img-fluid" src="{{image_url(theme_config('passwordReset.items.passwordReset.media'))}}"
                             alt="{{trans('auth.passwords.reset')}}">
                    </div>
                @endif
            @endif

            @include('elements.banner', ['banner' => 'passwordReset', 'value' => 'passwordReset'])

            <div class="card" @include('elements.string-aos', ['pageAos' => 'passwordReset', 'itemAos'=>'passwordReset'])>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" id="captcha-form">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ trans('auth.email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @include('elements.captcha', ['center' => true])

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('auth.passwords.send') }}
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
