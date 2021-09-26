@auth()
    @if(auth()->user()->role->name == 'Admin')
        data-config-trigger="{{$key}}-banner-{{$value}}"
    @endif
@endauth
