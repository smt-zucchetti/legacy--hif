@extends('layouts.formMaster', ['curPage' => 1])

@section('title', 'Form Page 1')


@section('form')

    @include('partial/formOpen')
    
    <input type="hidden" name="curPage" value="1" />

        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('hotelName', 'Hotel Name') }}<span class="required"> * required</span>
                {{ Form::text('hotelName', null, ['class' => 'form-control', 'data-required_field' => 'true']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('streetAddress', 'Street Address') }}<span class="required"> * required</span>
                {{ Form::text('streetAddress', null, ['class' => 'form-control', 'data-required_field' => 'true']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('resDeliveryEmailPrimary', 'Email Address') }}<span class="required"> * required</span>
                {{ Form::text('resDeliveryEmailPrimary', null, ['class' => 'form-control', 'data-required_field' => 'true']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('city', 'City') }}
                {{ Form::text('city', null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('stateOrProvince', 'State/Province') }}
                {{ Form::text('stateOrProvince', null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('country', 'Country') }}
                {{ Form::text('country', null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('postalCode', 'Postal Code') }}
                {{ Form::text('postalCode', null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('propertyCurrency', 'Property Currency') }}
                @php
                    $currencies = ['United States dollar','Aruban florin','Bahamian dollar','Barbadian dollar','Bermudian dollar','Belize dollar','Canadian dollar','Cayman Islands dollar','Colombian peso','Costa Rican colón','Cuban convertible peso','Cuban peso','Danish krone','Dominican peso','East Caribbean dollar','Euro','Guatemalan quetzal','Haitian gourde','Honduran lempira','Jamaican dollar','Mexican peso','Netherlands Antillean guilder','Nicaraguan córdoba','Panamanian balboa','Trinidad and Tobago dollar']; 
                @endphp

                {{ Form::select('propertyCurrency', array_combine($currencies, $currencies), null) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('primaryContactNumber', 'Phone Number') }}
                {{ Form::text('primaryContactNumber', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('primaryFaxNumber', 'Fax Number') }}
                {{ Form::text('primaryFaxNumber', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('url', 'URL') }}
                {{ Form::text('url', null, ['class' => 'form-control']) }}
            </div>
        </div>
    <div class="form-row">
        <h3>Property Type, check up to three:</h3>
    </div>
    <div class="form-container inner-borders">
        @php
            $data = ['allSuites' => 'All Suites','bAndB' => 'B & B','allInclusive' => 'All Inclusive','beachfront' => 'Beachfront','conventionCenter' => 'Convention Center','extendedStay' => 'Extended Stay','ranchFarm' => 'Ranch/Farm','standardHotel' => 'Standard Hotel','apartmentsVillas' => 'Apartments/Villas','historicProperty' => 'Historic Property','motel' => 'Motel','resortSpaLodge' => 'Resort/Spa/Lodge'];
        @endphp

        @foreach($data as $key => $value)     
            <div class="col-xs-3 table-cell">
                {{ Form::label($key, $value, ['class' => 'checkbox-label'] ) }}
                {{ Form::checkbox($key, 1, null, ['class' => 'large-checkbox', 'id' => $key]) }}
            </div>
        @endforeach
    </div>
    <div class="form-row">
        <h3>Market Tier, check up to three:</h3>
    </div>
    <div class="form-container inner-borders">
        @php
            $data = ['economy' => 'Economy', 'midscale' => 'Midscale', 'upperMidscale' => 'Upper Midscale', 'upper' => 'Upper', 'upperUpscale' => 'Upper Upperscale', 'luxury' => 'Luxury'];
        @endphp

        @foreach($data as $key => $value)
            <div class="col-xs-3 table-cell">
                {{ Form::label($key, $value, ['class' => 'checkbox-label']) }}
                {{ Form::checkbox($key, 1, null, ['class' => 'large-checkbox', 'id' => $key])}}
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="form-group col-xs-6">
            {{ Form::label('yearBuilt', 'Year Built') }}
            {{ Form::text('yearBuilt', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-6">
            {{ Form::label('yearRenovated', 'Year Last Renovated') }}
            {{ Form::text('yearRenovated', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-6">
            {{ Form::label('numberRooms', 'Number of Rooms') }}
            {{ Form::text('numberRooms', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-6">
            {{ Form::label('numberFloors', 'Number of Floors') }}
            {{ Form::text('numberFloors', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-6">
            {{ Form::label('numberNonSmokingRooms', 'Number of Non Smoking Rooms') }}
            {{ Form::text('numberNonSmokingRooms', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-6">
            @php  
                $aaaRatingArr = array('1 Diamond', '2 Diamond', '3 Diamond', '4 Diamond', '5 Diamond');
            @endphp
            {{ Form::label('aaaRating', 'AAA Rating') }}
            {{ Form::select('aaaRating', $aaaRatingArr) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-6">
            @php  
                $starRatingArr = array('1 Star', '2 Star', '3 Star', '4 Star', '5 Star');
            @endphp
            {{ Form::label('starRating', 'Star Rating') }}
            {{ Form::select('starRating', $starRatingArr) }}
        </div>
    </div>

    @include('partial/formClose')
    {{ Form::close() }}    
@stop

