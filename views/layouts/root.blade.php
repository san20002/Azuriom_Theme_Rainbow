@if(config('theme.project.color_themes'))
    @push('styles')
        <style>
            :root, [data-theme="default"] {
            {{config('theme.project.color_themes')}}
            }
        </style>
    @endpush
@endif
