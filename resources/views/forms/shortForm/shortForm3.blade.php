@extends('layouts.formMaster', ['curPage'=> 3])

@section('title', 'Form Page 3')

@section('form')

    @include('partial/formOpen')

    <input type="hidden" name="curPage" value="3" />
		<div class="form-row">
			<h3>Policies: Cancellation / Guarantee Policy</h3>
		</div>
            <div class="form-row myGrid form-container">
            <div class="col-xs-2">
                {{ Form::radio('holdGuaranteeDeposit', 'hold', null, ['id'=>'hold'] ) }} 
                <h4 class="inline">&nbsp;{{ Form::label('hold', 'Hold') }}</h4>
            </div>
            <div class="col-xs-10 short-input-boxes">
                Reservation is NOT GUARANTEED but will be held until 
                {{ Form::text('reservationHeldUntilHold', null, ['class' => 'form-control short-input-box'] ) }} PM.
            </div>
        </div>
        <div class="form-row myGrid form-container">
            <div class="col-xs-2">
                {{ Form::radio('holdGuaranteeDeposit', 'guarantee', null, ['id' => 'guarantee'] ) }} <h4 class="inline">&nbsp;{{ Form::label('guarantee', ' Guarantee') }}</h4>
            </div>
            <div class="col-xs-10 short-input-boxes">
                All reservations must be guaranteed for late arrival by valid credit card. (Card will not be debited at time of booking).
            </div>
        </div>
        <div class="form-row myGrid form-container">
            <div class="col-xs-2">
                {{ Form::radio('holdGuaranteeDeposit', 'deposit', null, ['id' => 'deposit'] ) }} <h4 class="inline">&nbsp;{{ Form::label('deposit', ' Deposit')}}</h4>
            </div>
            <div class="col-xs-10">
                All reservations require a deposit by credit card.<br>
                <br>
                Number of nights required for deposit {{ Form::text('numNightsCreditCardDeposit', null, ['class' => 'form-control short-input-box'] ) }}
            </div>
        </div>

	    <div class="form-row myGrid">
            <div class="col-xs-12">
                <h3>Cancellation Policy</h3>
            </div>
        </div>
        
        <div class="form-container inner-borders table">
            <div class="form-row myGrid table-row">
                <div class="col-xs-1 text-center table-cell vertical-align">
                    {{ Form::radio('cancellationGroup', 'first', null, ['class' => 'margin-center'] ) }} 
                </div>  
                <div class="col-xs-11 table-cell">
                    Cancellations must be made by {!! Form::text('cancellationOfArrivalHours', null, ['class' => 'short-input-box'] ) !!} PM day of arrival<br>
                    
                    {{ Form::radio('consequenceGroup1', 'avoidCCCharge', null, ['id' => 'avoidCCCharge1']) }} 
                    {{ Form::label('avoidCCCharge1', 'To avoid credit card charges.') }}<br>
                    
                    {{ Form::radio('consequenceGroup1', 'refundDeposit', null, ['id' => 'refundDeposit1']) }} 
                    {{ Form::label('refundDeposit1', 'For refund of deposit.') }}
                </div>
            </div>
            <div class="form-row myGrid table-row">
                <div class="col-xs-1 text-center table-cell vertical-align">
                    {{ Form::radio('cancellationGroup', 'second', null, ['class' => 'margin-center'] ) }} 
                </div>  
                <div class="col-xs-11 table-cell">
                    Cancellations must be made {!! Form::text('cancellationOfArrivalDays', null, ['class' => 'short-input-box']) !!} day(s) prior to arrival<br>
                    {{ Form::radio('consequenceGroup2', 'avoidCCCharge', null, ['id' => 'avoidCCCharge2']) }} {{ Form::label('avoidCCCharge2', 'To avoid credit card charges.') }}<br>
                    {{ Form::radio('consequenceGroup2', 'refundDeposit', null, ['id' => 'refundDeposit2']) }} {{ Form::label('refundDeposit2', 'For refund of deposit.') }}
                </div>
            </div>
            <div class="form-row myGrid table-row">
                <div class="col-xs-12 table-cell">
                    All cancellations are subject to a $ 
                    {{ Form::text('cancellationCharge', null, ['class' => 'short-input-box'] ) }} cancellation fee.
                </div>
            </div>
            <div class="form-row myGrid table-row">
                <div class="col-xs-12 table-cell">
                    Cancellations received within the cancellations period will be charged Click here to (number of nights charged).
                </div>
            </div>
        </div>

        <div class="form-row"><h2>Taxes and Fees</h2></div>


        <div class="row">
            <div class="form-group col-xs-3">
            	{{ Form::checkbox('taxIncluded', 'Yes', null, ['id'=>'taxIncluded']) }} 
                {{ Form::label('taxIncluded', 'Tax Included') }}                       
            </div>
            <div class="form-group col-xs-3">
				{{ Form::checkbox('serviceChargeIncluded', 'Yes', null, ['id'=>'serviceChargeIncluded']) }}
                {{ Form::label('serviceChargeIncluded', 'Service Charge Included') }}
            </div>
        </div>

        <div class="form-row myGrid">
            <div class="col-xs-2">{{ Form::label('Tax/Charge Type') }}</div>
            <div class="col-xs-3">{{ Form::label('Flat Charge Amount') }}</div>
            <div class="col-xs-3">{{ Form::label('Percentage Amount') }}</div>
            <div class="col-xs-4">{{ Form::label('Notes') }}</div>
        </div>
        <div class="form-row myGrid">
            <div class="col-xs-2">{{ Form::label('occupancyTaxFlatChargeAmt','Occupancy Tax') }}</div>
            <div class="col-xs-3">{{ Form::text('occupancyTaxFlatChargeAmt', null, ['class' => 'form-control']) }}</div>
            <div class="col-xs-3">{{ Form::text('occupancyTaxPercentageAmt', null, ['class' => 'form-control','placeholder'=>'10%']) }}</div>
            <div class="col-xs-4">{{ Form::text('occupancyTaxNotes', null, ['class' => 'form-control','placeholder'=>'Percent']) }}</div>
        </div>
        <div class="form-row myGrid">
            <div class="col-xs-2">{{ Form::label('roomTaxFlatChargeAmt', 'Room Tax') }}</div>
            <div class="col-xs-3">{{ Form::text('roomTaxFlatChargeAmt', null, ['class' => 'form-control']) }}</div>
            <div class="col-xs-3">{{ Form::text('roomTaxPercentageAmt', null, ['class' => 'form-control']) }}</div>
            <div class="col-xs-4">{{ Form::text('roomTaxNotes', null, ['class' => 'form-control']) }}</div>
        </div>
        <div class="form-row myGrid">
            <div class="col-xs-2">{{ Form::label('stateTaxFlatChargeAmt', 'State Tax') }}</div>
            <div class="col-xs-3">{{ Form::text('stateTaxFlatChargeAmt', null, ['class' => 'form-control']) }}</div>
            <div class="col-xs-3">{{ Form::text('stateTaxPercentageAmt', null, ['class' => 'form-control']) }}</div>
            <div class="col-xs-4">{{ Form::text('stateTaxNotes', null, ['class' => 'form-control']) }}</div>
        </div>
        <div class="form-row myGrid">
            <div class="col-xs-2">{{ Form::label('serviceTaxFlatChargeAmt', 'Service Tax') }}</div>
            <div class="col-xs-3">{{ Form::text('serviceTaxFlatChargeAmt', null, ['class' => 'form-control']) }}</div>
            <div class="col-xs-3">{{ Form::text('serviceTaxPercentageAmt', null, ['class' => 'form-control']) }}</div>
            <div class="col-xs-4">{{ Form::text('serviceTaxNotes', null, ['class' => 'form-control']) }}</div>
        </div>
        <div class="form-row myGrid">
            <div class="col-xs-2">{{ Form::label('otherTaxFlatChargeAmt', 'Other Charge or Tax') }}</div>
            <div class="col-xs-3">{{ Form::text('otherTaxFlatChargeAmt', null, ['class' => 'form-control']) }}</div>
            <div class="col-xs-3">{{ Form::text('otherTaxPercentageAmt', null, ['class' => 'form-control']) }}</div>
            <div class="col-xs-4">{{ Form::text('otherTaxNotes', null, ['class' => 'form-control']) }}</div>
        </div>

        <br>
        <div class="form-row myGrid">
        	<div class="col-xs-2">
	        	{{ Form::label('rateTypes16', 'Extra Adult Charge') }}
			</div>
			<div class="col-xs-3">
				{{Form::text('rateTypes16', null) }}
			</div>
            <div class="col-xs-1"></div>
        	<div class="col-xs-2">
	        	{{ Form::label('rateTypes17', 'Adult Rollaway Charge') }}
			</div>
			<div class="col-xs-4">
				{{ Form::text('rateTypes17', null) }}
			</div>
        </div>
        <div class="form-row myGrid">
        	<div class="col-xs-2">
	        	{{ Form::label('rateTypes18', 'Extra Child Charge') }}
			</div>
			<div class="col-xs-3">
				{{Form::text('rateTypes18', null) }}
			</div>
            <div class="col-xs-1"></div>
        	<div class="col-xs-2">
	        	{{ Form::label('rateTypes19', 'Child Rollaway Charge') }}
			</div>
			<div class="col-xs-4">
				{{ Form::text('rateTypes19', null) }}
			</div>
        </div>


    @include('partial/formClose')
    {{ Form::close() }}
@stop
