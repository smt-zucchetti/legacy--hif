@extends('layouts.formMaster', ['curPage'=>7, 'formType' => 'longForm'])

@section('title', 'Form Page 7')

@section('form')

    @include('partial/formOpen')

    <input type="hidden" name="curPage" value="7" />

    <div class="form-row"><h2>Policies: General Policies</h2></div>
    <div class="form-row row">
        <div class="col-xs-6">
            {{ Form::label('checkInTime', 'Check-in Time') }}
            {{ Form::text('checkInTime', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-row row">
        <div class="col-xs-6">
            {{ Form::label('checkOutTime', 'Check-Out Time') }}
            {{ Form::text('checkOutTime', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-row row">
        <div class="col-xs-6">
            {{ Form::label('holdReservationTime', 'Hold Reservation Time') }}
            {{ Form::text('holdReservationTime', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-row row">
        <div class="col-xs-6">
            Extra Person Allowed &nbsp;&nbsp;
            {{ Form::label('yesEPA', 'Yes') }}  {{ Form::radio('extraPersonAllowed', 'Yes', false, ['id' => 'yesEPA']) }}&nbsp;&nbsp; 
            {{ Form::label('noEPA', 'No') }} {{ Form::radio('extraPersonAllowed', 'No', false, ['id' => 'noEPA']) }}
        </div>
    </div>
    <div class="form-row row">
        <div class="col-xs-6">
            &nbsp;
            {{ Form::label('extraChildFee', 'Extra Child Fee') }}
            {{ Form::text('extraChildFee', null, array('class' => 'form-control')) }}
        </div>
        <div class="col-xs-6">
            {{ Form::label('extraPersonFee', 'Extra Person Fee') }}
            {{ Form::text('extraPersonFee', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-row row">
        <div class="col-xs-6">
            {{ Form::label('rollawayAdultFee', 'Rollaway Adult Fee') }}
            {{ Form::text('rollawayAdultFee', null, array('class' => 'form-control')) }}
        </div>
        <div class="col-xs-6">
            {{ Form::label('maximumNumAdultRollaways', 'Maximum # Adult Rollaways') }}
            {{ Form::text('maximumNumAdultRollaways', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-row row">
        <div class="col-xs-6">
            {{ Form::label('rollawayChildFee', 'Rollaway Child Fee') }}
            {{ Form::text('rollawayChildFee', null, array('class' => 'form-control')) }}
        </div>
        <div class="col-xs-6">
            {{ Form::label('maximumNumChildrenRollaways', 'Maximum # Children Rollaways') }}
            {{ Form::text('maximumNumChildrenRollaways', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-row row">
        <div class="col-xs-6">
            {{ Form::label('cribFee', 'Crib Fee') }}
            {{ Form::text('cribFee', null, array('class' => 'form-control')) }}
        </div>
        <div class="col-xs-6">
            {{ Form::label('maximumNumCribs', 'Maximum # Cribs') }}
            {{ Form::text('maximumNumCribs', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-row row">
        <div class="col-xs-12">
            {{ Form::label('advBookingReq', 'Advanced Booking Requirements:') }}
            {{ Form::text('advBookingReq', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-row row">
        <div class="col-xs-12">
            {{ Form::label('sameDayBookings', 'Property permits same day bookings') }}&nbsp;&nbsp;
            {{ Form::checkbox('sameDayBookings', 1, null, ['class' => '']) }}
        </div>
    </div>
    <h4>Choose one of the following:</h4>
    <div class="form-container inner-borders table height200">
        <div class="form-row table-row">
            <div class="col-xs-1 table-cell">
                {{ Form::radio('advancedBookingTimeType', 'Days', false, array('id'=>'')) }}
            </div>
            <div class="col-xs-11 table-cell">
                {{ Form::label('advancedBookingTime', 'Reservations must be booked') }}
                {{ Form::text('advancedBookingTime', null, array('class' => 'form-control inline-text short-text')) }}&nbsp;
                {{ Form::label('days', 'Days') }} {{ Form::radio('advanceBookingTimePeriod', 'days', false, ['id' => 'days'] ) }} &nbsp;&nbsp;
                {{ Form::label('hours', 'Hours') }} {{ Form::radio('advanceBookingTimePeriod', 'hours', false, ['id' => 'hours'] ) }} &nbsp;&nbsp;
                in advance.
            </div>    
        </div>
        <div class="form-row table-row">
            <div class="col-xs-1 table-cell">
                {{ Form::radio('advancedBookingTimeType', 'Hours', false, array('id'=>'')) }}
            </div>
            <div class="col-xs-11 table-cell">
                {{ Form::label('timeBookedBy', 'Reservations must be booked by') }}
                {{ Form::text('timeBookedBy', null, array('class' => 'form-control inline-text short-text', 'placeholder' => 'Ex: 12:00 PM')) }}&nbsp;
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        Children Free Using Existing Bedding Age:&nbsp;&nbsp;
        {{ Form::label('yes', 'Yes') }} {{ Form::radio('childrenFree', 'yes', false, ['id'  => 'yes']) }}&nbsp;&nbsp;
        {{ Form::label('no', 'No' ) }} {{ Form::radio('childrenFree', 'no', false, ['id' => 'no']) }}
    </div>

    <br>
    <div class="form-row"><h2>Policies: Cancellation / Guarantee Policies</h2></div>
    <div class="form-row"><h3>Guarantee / Deposit Policies</h3></div>
    <div class="form-row"><h4>Please indicate the 1 policy that applies to your Hotel:</h4></div>
    <div class="form-row myGrid form-container">
        <div class="col-xs-2">
            {{ Form::radio('holdGuaranteeDeposit', 'hold', false, array('id'=>'hold')) }} <h4 class="inline">{{ Form::label('hold', 'Hold') }}</h4>
        </div>
        <div class="col-xs-10 short-input-boxes">
            Reservation is NOT GUARANTEED but will be held until {{ Form::text('reservationHeldUntilHold', null, array('class' => 'form-control short-input-box')) }} PM. If arrival is after {{ Form::text('ifAfterHold', null, array('class' => 'form-control inline short-input-box')) }} PM reservation must be guaranteed by:<br>
            <br>
            
            {{ Form::radio('creditCardOrCheckHold', 'creditCard', false, array('id'=>'creditCardHold')) }} {{ Form::label('creditCardHold', 'Credit card (card will not be debited at time of booking)') }}<br>

            {{ Form::radio('creditCardOrCheckHold', 'checkDeposit', false, array('id'=>'checkDepositHold')) }} {{ Form::label('checkDepositHold', 'Check deposit (check will not be cashed at time of booking).') }}<br>

            Number of nights required for check deposit {{ Form::text('numNightsCheckDepositHold', null, array('class' => 'form-control short-input-box', 'id' => 'numNightsCheckDepositHold') ) }}
        </div>
    </div>
    <div class="form-row myGrid form-container">
        <div class="col-xs-2">
            {{ Form::radio('holdGuaranteeDeposit', 'guarantee', false, array('id' => 'guarantee')) }} <h4 class="inline">{{ Form::label('guarantee', 'Guarantee') }}</h4>
        </div>
        <div class="col-xs-10 short-input-boxes">
            All reservations must be guaranteed for late arrival by: {!! Form::text('reservationHeldUntilGuarantee', null, array('class' => 'form-control short-input-box')) !!} <br>
            <br>
            {{ Form::radio('creditCardOrCheckGuarantee', 'creditCard', false, array('id' => 'creditCardGuarantee')) }} {{ Form::label('creditCardGuarantee', 'Credit card (card will not be debited at time of booking).') }}<br>

            {{ Form::radio('creditCardOrCheckGuarantee', 'checkDeposit', false, array('id'  => 'checkDepositGuarantee')) }} {{Form::label('checkDepositGuarantee', 'Check deposit (check will not be cashed at time of booking).') }}<br>

            Number of nights required for check deposit {{ Form::text('numNightsCheckDepositGuarantee', null, array('class' => 'form-control short-input-box', 'id' => 'numNightsCheckDepositGuarantee'))  }}
        </div>
    </div>
    <div class="form-row myGrid form-container">
        <div class="col-xs-2">
            {{ Form::radio('holdGuaranteeDeposit', 'deposit', false, array('id' => 'deposit')) }} <h4 class="inline">{{ Form::label('deposit', 'Deposit')}}</h4>
        </div>
        <div class="col-xs-10">
            All reservations require a deposit by:<br>
            <br>
            {{ Form::radio('creditCardOrCheck', 'creditCard', false, array('id' => 'creditCardDeposit')) }} {{ Form::label('creditCardDeposit', 'Credit card (card will be debited at time of booking)' ) }}<br>

            Number of nights required for credit card deposit {{ Form::text('numNightsCreditCardDeposit', null, array('class' => 'form-control short-input-box')) }}<br>

            {{ Form::radio('creditCardOrCheck', 'checkDeposit', false, array('id'   => 'checkDeposit')) }} {{Form::label('checkDeposit', 'Check deposit (check will not be cashed at time of booking).' ) }}<br>

            Number of nights required for check deposit {{ Form::text('numNightsCheckDeposit', null, array('class' => 'form-control short-input-box', 'id' => 'numNightsCheckDeposit')) }}
        </div>
    </div>
    <div class="form-row myGrid form-container">
        <div class="form-row myGrid">
            <div class="col-xs-6">
                <h5 class="bold">Please indicate exceptions to the above options</h5>
            </div>
        </div>
        <div class="form-row myGrid">
            <div class="col-xs-12">
                Deposit by check is due at hotel {!! Form::text('depositDaysAfterBooking', null, array('class' => 'form-control short-input-box')) !!} days after booking and/or {!! Form::text('depositDaysBeforeArrival', null, array('class' => 'form-control short-input-box')) !!} days prior to arrival.<br><br>

                If deposit should be sent to an address other than the hotel, please specify:<br>
                {!! Form::text('depositAddress', null, array('class' => 'form-control')) !!}
            </div>
        </div>
    </div>
    <br>

    <div class="form-row myGrid">
        <div class="form-row myGrid">
            <div class="col-xs-12">
                <h3>Cancellation Policy</h3>
                <h4>All Cancellations for GDS reservations must be made through the GDS. Please indicate which of the following policies apply to your hotel.</h4>
            </div>
        </div>
    </div>
    <div class="form-container inner-borders table">
        <div class="form-row myGrid table-row">
            <div class="col-xs-1 text-center table-cell vertical-align">
                {{ Form::radio('cancellationGroup', 'first', false, array('class' => 'margin-center')) }} 
            </div>  
            <div class="col-xs-11 table-cell">
                Cancellations must be made by {!! Form::text('cancellationOfArrivalHours', null, array('class' => 'short-input-box')) !!} PM day of arrival<br>
                {{ Form::radio('consequenceGroup1', 'avoidCCCharge', false, ['id' => 'avoidCCCharge1']) }} {{ Form::label('avoidCCCharge1', 'To avoid credit card charges.') }}<br>
                {{ Form::radio('consequenceGroup1', 'refundDeposit', false, ['id' => 'refundDeposit1']) }} {{ Form::label('refundDeposit1', 'For refund of deposit.') }}
            </div>
        </div>
        <div class="form-row myGrid table-row">
            <div class="col-xs-1 text-center table-cell vertical-align">
                {{ Form::radio('cancellationGroup', 'second', false, array('class' => 'margin-center')) }} 
            </div>  
            <div class="col-xs-11 table-cell">
                Cancellations must be made {!! Form::text('cancellationOfArrivalDays', null, array('class' => 'short-input-box')) !!} day(s) prior to arrival<br>
                {{ Form::radio('consequenceGroup2', 'avoidCCCharge', false, ['id' => 'avoidCCCharge2']) }} {{ Form::label('avoidCCCharge2', 'To avoid credit card charges.') }}<br>
                {{ Form::radio('consequenceGroup2', 'refundDeposit', false, ['id' => 'refundDeposit2']) }} {{ Form::label('refundDeposit2', 'For refund of deposit.') }}
            </div>
        </div>
        <div class="form-row myGrid table-row">
            <div class="col-xs-12 table-cell">
                All cancellations are subject to a $ {!! Form::text('cancellationCharge', null, array('class' => 'short-input-box')) !!} cancellation fee.
            </div>
        </div>
        <div class="form-row myGrid table-row">
            <div class="col-xs-12 table-cell">
                Note: Please indicate exceptions to these options below.
            </div>
        </div>
    </div>
    <br>

    <div class="form-row">
        <div class="form-row myGrid">
            <div class="col-xs-6">
                <h3 class="inline">Exceptions</h3>
            </div>
        </div>
    </div>
    
    <div class="form-row myGrid form-container inner-borders table">
        <div class="form-row myGrid table-row">
            <div class="col-xs-2 table-cell">
                &nbsp;
            </div>
            <div class="col-xs-4 table-cell">
                Dates
            </div>
            <div class="col-xs-6 table-cell">
                &nbsp;
            </div>
        </div>
        <div class="form-row myGrid table-row">
            <div class="col-xs-2 table-cell">
              &nbsp;
            </div>
            <div class="col-xs-2 table-cell">
                From
            </div>
            <div class="col-xs-2 table-cell">
                To
            </div>
            <div class="col-xs-6 table-cell">
                Policy
            </div>
        </div>
        <div class="form-row myGrid table-row">
            <div class="col-xs-2 table-cell">
                <b>Advance Booking Policy</b> (e.g., 3 days advance booking applies)
            </div>
            <div class="col-xs-2 table-cell">
                {!! Form::text('from1', null, array('class' => 'form-control')) !!}
            </div>
            <div class="col-xs-2 table-cell">
                {!! Form::text('to1', null, array('class' => 'form-control')) !!}
            </div>
            <div class="col-xs-6 table-cell">
                {!! Form::textarea('policy1', null, array('class' => 'form-control textarea')) !!}
            </div>
        </div>
        <div class="form-row myGrid table-row">
            <div class="col-xs-2 table-cell">
                <b>Guarantee Policy</b> (e.g., all bookings require 1 night deposit)
            </div>
            <div class="col-xs-2 table-cell">
                {!! Form::text('from2', null, array('class' => 'form-control')) !!}
            </div>
            <div class="col-xs-2 table-cell">
                {!! Form::text('to2', null, array('class' => 'form-control')) !!}
            </div>
            <div class="col-xs-6 table-cell">
                {!! Form::textarea('policy2', null, array('class' => 'form-control textarea')) !!}
            </div>
        </div>
        <div class="form-row myGrid table-row">
            <div class="col-xs-2 table-cell">
                <b>Cancellation Policy</b> (ex: must cancel 1 days prior to avoid charges)
            </div>
            <div class="col-xs-2 table-cell">
                {!! Form::text('from3', null, array('class' => 'form-control')) !!}
            </div>
            <div class="col-xs-2 table-cell" >
                {!! Form::text('to3', null, array('class' => 'form-control')) !!}
            </div>
            <div class="col-xs-6 table-cell">
                {!! Form::textarea('policy3', null, array('class' => 'form-control textarea')) !!}
            </div>
        </div>
    </div>

        @include('partial/formClose')

        @stop