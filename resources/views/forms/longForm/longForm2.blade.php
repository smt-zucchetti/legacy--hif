@extends('layouts.formMaster', ['curPage'=>2, 'formType' => 'longForm'])

@section('title', 'Form Page 2')

@section('form')


        @include('partial/formOpen')

        <input type="hidden" name="curPage" value="2" />

            <div class="row">
                <div class="form-group col-xs-6">
                    {{ Form::label('meetsAmerWithDisabAct', 'Meets Americans with Disabilities Act of 1990 Specifications (Y/N)') }}
                    <br>{{Form::label('AWDYes','Yes') }} {{ Form::radio('meetsAmerWithDisabAct', 'Yes', true, array('id'=>'AWDYes')) }} &nbsp;
                    {{Form::label('AWDNo','No') }} {{ Form::radio('meetsAmerWithDisabAct', 'No', false, array('id' => 'AWDNo')) }}
                </div>
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
                    {{ Form::label('numberElevators', 'Number of Guest Elevators') }}
                    {{ Form::text('numberElevators', null, array('class' => 'form-control')) }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-6">
                    {{ Form::label('taxIncluded', 'Tax Included (Y/N)') }}
                    <br>{{ Form::label('TIYes','Yes') }} {{ Form::radio('taxIncluded', 'Yes', true,array('id'=>'TIYes')) }}&nbsp;
                    {{ Form::label('TINo','No') }} {{ Form::radio('taxIncluded', 'No', false, array('id'=>'TINo')) }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-6">
                    {{ Form::label('serviceChargeIncluded', 'Service Charge Included (Y/N)') }}
                    <br>{{ Form::label('SCYes','Yes' ) }} {{ Form::radio('serviceChargeIncluded', 'Yes', true, array('id'=>'SCYes')) }}&nbsp;
                    {{ Form::label('SCNo','No' ) }} {{ Form::radio('serviceChargeIncluded', 'No', false, array('id'=>'SCNo')) }}
                </div>
            </div>
            <br>
            <br>
            <div class="form-row"><h2>Taxes and Fees</h2></div>
            <div class="form-row myGrid">
                <div class="col-xs-2">{{ Form::label('Tax/Charge Type') }}</div>
                <div class="col-xs-3">{{ Form::label('Flat Charge Amount') }}</div>
                <div class="col-xs-3">{{ Form::label('Percentage Amount') }}</div>
                <div class="col-xs-4">{{ Form::label('Notes') }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-2">{{ Form::label('occupancyTaxFlatChargeAmt','Occupancy Tax') }}</div>
                <div class="col-xs-3">{{ Form::text('occupancyTaxFlatChargeAmt', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('occupancyTaxPercentageAmt', null, array('class' => 'form-control','placeholder'=>'10%')) }}</div>
                <div class="col-xs-4">{{ Form::text('occupancyTaxNotes', null, array('class' => 'form-control','placeholder'=>'Percent')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-2">{{ Form::label('roomTaxFlatChargeAmt', 'Room Tax') }}</div>
                <div class="col-xs-3">{{ Form::text('roomTaxFlatChargeAmt', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('roomTaxPercentageAmt', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-4">{{ Form::text('roomTaxNotes', null, array('class' => 'form-control')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-2">{{ Form::label('stateTaxFlatChargeAmt', 'State Tax') }}</div>
                <div class="col-xs-3">{{ Form::text('stateTaxFlatChargeAmt', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('stateTaxPercentageAmt', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-4">{{ Form::text('stateTaxNotes', null, array('class' => 'form-control')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-2">{{ Form::label('serviceTaxFlatChargeAmt', 'Service Tax') }}</div>
                <div class="col-xs-3">{{ Form::text('serviceTaxFlatChargeAmt', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('serviceTaxPercentageAmt', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-4">{{ Form::text('serviceTaxNotes', null, array('class' => 'form-control')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-2">{{ Form::label('otherTaxFlatChargeAmt', 'Other Charge or Tax') }}</div>
                <div class="col-xs-3">{{ Form::text('otherTaxFlatChargeAmt', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('otherTaxPercentageAmt', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-4">{{ Form::text('otherTaxNotes', null, array('class' => 'form-control')) }}</div>
            </div>
            <br>
            <br>
            <div class="form-row"><h2>Hotel Rating/Award Information</h2></div>
            <div class="form-row myGrid">
                <div class="col-xs-6">{{ Form::label('Rating/Award Type') }}</div>
                <div class="col-xs-6">{{ Form::label('Rating Received') }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-6">{{ Form::text('ratingAwardType1', null, array('class' => 'form-control', 'placeholder' => 'Star Rating, 4 Stars')) }}</div>
                <div class="col-xs-6">{{ Form::text('ratingReceived1', null, array('class' => 'form-control', 'placeholder' => 'January 1, 2014')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-6">{{ Form::text('ratingAwardType2', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-6">{{ Form::text('ratingReceived2', null, array('class' => 'form-control')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-6">{{ Form::text('ratingAwardType3', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-6">{{ Form::text('ratingReceived3', null, array('class' => 'form-control')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-6">{{ Form::text('ratingAwardType4', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-6">{{ Form::text('ratingReceived4', null, array('class' => 'form-control')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-6">{{ Form::text('ratingAwardType5', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-6">{{ Form::text('ratingReceived5', null, array('class' => 'form-control')) }}</div>
            </div>
@include('partial/formClose')

        @stop