<nav aria-label="breadcrumb" @include('elements.string-aos', ['pageAos' => 'forum', 'itemAos'=>'breadcrumb'])>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ trans('messages.home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('forum.home') }}">{{ trans('forum::messages.title') }}</a></li>

        @foreach(optional($current ?? null)->getNavigationStack() ?? [] as $breadcrumbLink => $breadcrumbName)
            <li class="breadcrumb-item"><a href="{{ $breadcrumbLink }}">{{ $breadcrumbName }}</a></li>
        @endforeach
    </ol>
</nav>
