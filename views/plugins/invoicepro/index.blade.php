@extends('layouts.app')

@section('title', trans('invoicepro::messages.invoice'))

@section('content')

    @php
        $notRequired = setting('invoicepro_force_required', 0) == 0
    @endphp
    <div class="container content main-page" id="invoicepro">
        <form action="{{route('invoicepro.store')}}" method="POST"  @include('elements.string-aos', ['pageAos' => 'invoicepro', 'itemAos'=>'invoicepro'])>
            @csrf
            <div class="form-group">
              <label for="invoicepro_name">{{trans('messages.fields.name')}}</label>
              <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="invoicepro_name" placeholder="John Doe">
                @error('name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="invoicepro_address">{{trans('invoicepro::messages.address')}} @if($notRequired) (optional)@endif</label>
                <input name="address" type="text" class="form-control @error('address') is-invalid @enderror" id="invoicepro_address" placeholder="75 rue de Paris">
                @error('address')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="invoicepro_postal_code">{{trans('invoicepro::messages.postal-code')}} @if($notRequired) (optional)@endif</label>
                <input name="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror" id="invoicepro_postal_code" placeholder="10000">
                @error('postal_code')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="invoicepro_city">{{trans('invoicepro::messages.city')}} @if($notRequired) (optional)@endif</label>
                <input name="city" type="text" class="form-control @error('city') is-invalid @enderror" id="invoicepro_city" placeholder="Paris">
                @error('city')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <label for="invoicepro_country">{{trans('invoicepro::messages.country')}}</label>
                <select name="country_id" class="form-control @error('country_id') is-invalid @enderror" id="invoicepro_country" aria-label="Country...">
                    @foreach ($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
                @error('country_id')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="invoicepro_state">{{trans('invoicepro::messages.state')}}</label>
                <select name="state_id" class="form-control selectpicker @error('state_id') is-invalid @enderror" data-live-search="true" id="invoicepro_state" aria-label="State/Region...">
                </select>
                @error('state_id')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">{{trans('messages.actions.continue')}}</button>
        </form>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function(){
        document.querySelector('#invoicepro_country').addEventListener('change', async (event) => {
            const stateSelect = document.querySelector('#invoicepro_state');

            const response = await axios.get('/invoicepro/'+event.target.value);
            while (stateSelect.firstChild && !stateSelect.firstChild.remove());
            response.data.forEach(element => {
                let option = document.createElement("option");
                option.text = element.name;
                option.value = element.id;
                stateSelect.appendChild(option);
            });
        });
    });
</script>
@endpush
