@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <div class="container content main-page" id="wiki">

        @include('elements.banner',['banner' => 'wiki', 'value' => 'wiki-show','category' => $category])

        <a href="{{ route('wiki.index') }}" class="btn btn-secondary mb-3 mt-5"  @include('elements.string-aos', ['pageAos' => 'wiki', 'itemAos'=>'wiki-show'])>
            <i class="fas fa-arrow-left"></i> {{ trans('wiki::messages.back') }}
        </a>

        <div class="row" @include('elements.string-aos', ['pageAos' => 'wiki', 'itemAos'=>'wiki-show'])>
            <div class="col-md-3">
                <div class="list-group" role="tablist">
                    @foreach($category->pages as $count => $page)
                        <a href="#page{{ $page->id }}" class="list-group-item @if($count === 0) active @endif"
                           data-toggle="tab" role="tab" aria-controls="page{{ $page->id }}"
                           aria-selected="{{ $count === 0 ? 'true' : 'false' }}">
                            {{ $page->title }}
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="col-md-9 tab-content px-0 card">
                @foreach($category->pages as $count => $page)
                    <div class="tab-pane card-body fade @if($count === 0) show active @endif" id="page{{ $page->id }}"
                         role="tabpanel" aria-labelledby="nav-home-tab">
                        <h2>{{ $page->title }}</h2>

                        {!! $page->content !!}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
