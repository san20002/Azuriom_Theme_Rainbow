<div class="{{$col ?? 'col-xl-4 col-lg-6'}} js-detect-col js-detect-order h-auto mb-4" data-builder-order="" data-builder-collg="">
    <div class="border border-secondary rounded h-100">
        <div class="row d-none">
            <div class="col-auto">
                <label class="sr-only" for="inlineFormInputGroup">Ordre</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Ordre</div>
                    </div>
                    <select name="home[article][order]" id="" class="form-control js-select-order">
                        @for($i=1; $i < 12 ; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <div class="col-auto">
                <label class="sr-only" for="inlineFormInputGroup">Col</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Col-xl</div>
                    </div>
                    <select name="home[article][col-xl]" id="" class="form-control js-select-col" data-col="xl">
                        @for($i=2; $i <= 12 ; $i++)
                            <option value="col-xl-{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <div class="col-auto">
                <label class="sr-only" for="inlineFormInputGroup">Col</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Col-lg</div>
                    </div>
                    <select name="home[article][col-lg]" id="" class="form-control js-select-col" data-col="lg">
                        @for($i=2; $i <= 12 ; $i++)
                            <option value="col-lg-{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <div class="col-auto">
                <label class="sr-only" for="inlineFormInputGroup">Col</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Col-md</div>
                    </div>
                    <select name="home[article][col-md]" id="" class="form-control js-select-col" data-col="md">
                        @for($i=2; $i <= 12 ; $i++)
                            <option value="col-md-{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                </div>
            </div>
        </div>
        @if(isset($arrayBanner) && $arrayBanner)
            <div class="col-auto">
                @include('admin.pattern.banner',$arrayBanner)
            </div>
        @endif
        @if(isset($arrayItems) && $arrayItems)
            @if(array_key_exists(0,$arrayItems))
                @foreach($arrayItems as $arrayItem)
                    <div class="col-auto">
                        @include('admin.pattern.items',$arrayItem)
                    </div>
                @endforeach
            @else
                <div class="col-auto">
                    @include('admin.pattern.items',$arrayItems)
                </div>
            @endif
        @endif

    </div>
</div>
