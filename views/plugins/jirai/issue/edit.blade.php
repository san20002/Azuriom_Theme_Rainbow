@extends('layouts.app')

@section('title', trans('jirai::messages.title'))

@section('content')
    <div class="container content main-page" id="jirai">
        <div class="card shadow mb-4" @include('elements.string-aos', ['pageAos' => 'jirai', 'itemAos'=>'issues-edit'])>
            <div class="card-body">
                <form action="{{ route('jirai.issues.update', $issue) }}" method="POST">
                    @method('PUT')

                    <div class="form-group custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="closed" name="closed" @if($issue->closed ?? true) checked @endif>
                        <label class="custom-control-label" for="closed">Fermer de ticket</label>
                    </div>


                    @include('jirai::issue._form')

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> {{ trans('messages.actions.save') }}
                    </button>
                    <a href="{{ route('jirai.issues.destroy', ['issue' => $issue->id]) }}" class="btn btn-danger" data-confirm="delete">
                        <i class="fas fa-trash"></i> {{ trans('messages.actions.delete') }}
                    </a>
                </form>
            </div>
        </div>
    </div>
    @include('jirai::delete-modal')
@endsection
