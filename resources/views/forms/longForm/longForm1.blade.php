@extends('layouts.formMaster', ['curPage'=>1, 'formType' => 'longForm'])

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
                {{ Form::label('resDeliveryEmailPrimary', 'Primary Email Address for Reservation Delivery') }}<span class="required"> * required</span>
                {{ Form::text('resDeliveryEmailPrimary', null, ['class' => 'form-control', 'data-required_field' => 'true']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('city', 'City') }}
                {{ Form::text('city', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('stateOrProvince', 'State/Province') }}
                {{ Form::text('stateOrProvince', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('country', 'Country') }}
                {{ Form::text('country', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('postalCode', 'Postal Code') }}
                {{ Form::text('postalCode', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('primaryContactName', 'Primary Contact Name') }}
                {{ Form::text('primaryContactName', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('primaryContactEmail', 'Primary Contact Email') }}
                {{ Form::text('primaryContactEmail', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('primaryContactNumber', 'Primary Telephone Number') }}
                {{ Form::text('primaryContactNumber', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('primaryFaxNumber', 'Primary Fax Number') }}
                {{ Form::text('primaryFaxNumber', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">

                @php
                    $arr = ['All Suites', 'B & B', 'All Inclusive', 'Beachfront', 'Convention Center', 'Extended Stay', 'Ranch/Farm', 'Standard Hotel', 'Apartments/Villas', 'Historic Property', 'Motel', 'Resort/Spa/Lodge'];
                @endphp
                {{ Form::label('hotelType', 'Hotel Type') }}
                {{ Form::select('hotelType', array_combine($arr, $arr)) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('propertyCurrency', 'Property Currency') }}
                @php
                    $arr = ['United States dollar','Aruban florin','Bahamian dollar','Barbadian dollar','Bermudian dollar','Belize dollar','Canadian dollar','Cayman Islands dollar','Colombian peso','Costa Rican colón','Cuban convertible peso','Cuban peso','Danish krone','Dominican peso','East Caribbean dollar','Euro','Guatemalan quetzal','Haitian gourde','Honduran lempira','Jamaican dollar','Mexican peso','Netherlands Antillean guilder','Nicaraguan córdoba','Panamanian balboa','Trinidad and Tobago dollar'];
                @endphp
                {{ Form::select('propertyCurrency', array_combine($arr, $arr)) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('propertyTimeZone', 'Property Time Zone (Greenwich Mean / GMT Delta)') }}
                {{ Form::text('propertyTimeZone', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('resDeliveryEmailSecondary', 'Secondary Email Address for Reservation Delivery') }}
                {{ Form::text('resDeliveryEmailSecondary', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('airportShuttle', 'Complimentary Airport Shuttle Provided (Y/N)') }}
                <br>
                {{ Form::label('APSYes', 'Yes') }} 
                {{ Form::radio('airportShuttle', 'APSYes', null, ['id' => 'APSYes']) }}
                
                {{ Form::label('APSNo', 'No') }} 
                {{ Form::radio('airportShuttle', 'APSNo', null, ['id'=>'APSNo']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('govtFireApproved', 'Government Safety / Fire Approved') }}
                <br>
                {{ Form::label('GFAYes', 'Yes') }} 
                {{ Form::radio('govtFireApproved', 'GFAYes', null, ['id' => 'GFAYes']) }}
                
                {{ Form::label('GFANo', 'No') }} 
                {{ Form::radio('govtFireApproved', 'GFANo', null, ['id'=>'GFANo']) }}
            </div>
        </div>

        @include('partial/formClose')
    {{ Form::close() }}
@stop
