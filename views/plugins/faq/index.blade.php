@extends('layouts.app')

@section('title', trans('faq::messages.title'))

@section('content')
    <div class="container content">
        <div class="banner">
            <div class="banner-icon banner-faq">
                <img src="{{theme_asset('image/items/icon__0025_Geoposition.png')}}"
                     alt="banner-icon">
            </div>
            <div class="banner-title">
                <h1 class="mb-0">{{ trans('faq::messages.title') }}</h1>
            </div>
        </div>
        @if($questions->isEmpty())
            <div class="alert alert-info" role="alert">
                {{ trans('faq::messages.empty') }}
            </div>
        @else
            <div class="accordion" id="faq">
                @foreach($questions as $question)
                    <div class="card">
                        <div class="card-header px-3 py-4" id="heading{{ $question->id }}">
                            <a class="collapsed" data-toggle="collapse" href="#collapse{{ $question->id }}" data-target="#collapse{{ $question->id }}" aria-expanded="false" aria-controls="collapse{{ $question->id }}">
                                {{ $question->name }}
                            </a>
                        </div>

                        <div id="collapse{{ $question->id }}" class="collapse" aria-labelledby="heading{{ $question->id }}" data-parent="#faq">
                            <div class="card-body">
                                {{ $question->parseAnswer() }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
