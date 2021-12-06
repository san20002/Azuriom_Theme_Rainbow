@extends('layouts.app')

@section('title', $displayAll ? trans('changelog::messages.title') : $category->name)

@section('content')
    <div class="container content main-page" id="changelog">

        @include('elements.banner', ['banner' => 'changelog', 'value' => 'changelog'])

        <div class="row"  @include('elements.string-aos', ['pageAos' => 'changelog', 'itemAos'=>'changelog'])>
            <div class="col-md-3">
                @include('changelog::sidebar')
            </div>
            <div class="col-md-9">
                <div class="row">
                    @forelse(($displayAll ? $updates : $category->updates) as $update)
                        <div class="card mb-3">
                            <div class="card-header">
                                {{ $update->name }}
                                <span class="ml-2 badge badge-primary mr-1">
                                    <i class="fas fa-folder"></i> {{ $update->category->name }}
                                </span>
                                <span class="badge badge-primary">
                                    <i class="fas fa-calendar-week"></i> {{ format_date($update->created_at) }}
                                </span>
                            </div>
                            <div class="card-body">
                                {!! $update->description !!}
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-warning" role="alert">
                            {{ trans('changelog::messages.categories.empty') }}
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
