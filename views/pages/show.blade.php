@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)

@section('content')
    <div class="container content" id="page">
        @include('elements.banner', ['banner' => 'pages', 'value' => 'page','page' => $page])

        <div class="card shadow-sm" @include('elements.string-aos', ['pageAos' => 'pages', 'itemAos'=>'page'])>
            <div class="card-body">
                <div class="card-text user-html-content">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection
