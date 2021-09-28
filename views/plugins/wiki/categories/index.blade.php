@extends('layouts.app')

@section('title', trans('wiki::messages.title'))

@section('content')
    <div class="container content" id="wiki">

        @include('elements.banner',['banner' => 'wiki', 'value' => 'wiki'])

        <div class="row mt-5" @include('elements.string-aos', ['pageAos' => 'wiki', 'itemAos'=>'wiki'])>
            @foreach($categories as $category)
                <div class="col-md-3">
                    <a href="{{ route('wiki.show', $category) }}">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="{{ $category->icon ?? 'fas fa-book' }} fa-fw fa-3x mb-3"></i>

                                <h2>{{ $category->name }}</h2>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
