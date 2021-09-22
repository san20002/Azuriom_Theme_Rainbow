<div class="my-2">
    <label for="animation-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}">Animations</label>
    <select name="{{$keyBanner}}[banner][{{$valueBanner}}][animation]"
            id="animation-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}" class="form-control">
        @foreach($animations as $key => $value)
            <optgroup label="{{$key}}">
                @foreach($value as $v)
                    <option value="{{ $v }}"
                    @if(theme_config($keyBanner.'.banner.'.$valueBanner.'.animation') === $v) selected @endif>{{ $v }}</option>
                @endforeach
            </optgroup>
        @endforeach
    </select>
</div>
<div class="my-2">
    <label for="easing-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}">Easing </label>
    <select name="{{$keyBanner}}]banner][{{$valueBanner}}][easing]"
            id="easing-{{$keyBanner}}-{{$valueBanner}}-{{$counterPartial}}" class="form-control">
        @foreach($easingAnimations as $key => $value)
            <option value="{{ $value }}"
            @if(theme_config($keyBanner.'.banner.'.$valueBanner.'.easing') === $value) selected @endif>{{ $value }}</option>
        @endforeach
    </select>
</div>
