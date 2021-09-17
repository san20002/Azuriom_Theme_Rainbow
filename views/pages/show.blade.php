@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)

@section('content')
    <div class="container content" id="page">
        @include('elements.banner', ['banner' => 'page','page' => $page])

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="card-text user-html-content">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection
