@extends('layouts.app')

@section('title', trans('faq::messages.title'))

@section('content')
    <div class="container content main-page">

        @include('elements.banner',['banner' => 'faq', 'value' => 'faq'])

        @if($questions->isEmpty())
            <div class="alert alert-info" role="alert">
                {{ trans('faq::messages.empty') }}
            </div>
        @else
            <div class="accordion" id="faq"  @include('elements.string-aos', ['pageAos' => 'faq', 'itemAos'=>'faq'])>
                @foreach($questions as $question)
                    <div class="card">
                        <div class="card-header px-3 py-4" id="heading{{ $question->id }}">
                            <a class="collapsed" data-toggle="collapse" href="#collapse{{ $question->id }}"
                               data-target="#collapse{{ $question->id }}" aria-expanded="false"
                               aria-controls="collapse{{ $question->id }}">
                                {{ $question->name }}
                            </a>
                        </div>

                        <div id="collapse{{ $question->id }}" class="collapse"
                             aria-labelledby="heading{{ $question->id }}" data-parent="#faq">
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
