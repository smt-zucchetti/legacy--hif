@extends('layouts.formMaster', ['curPage'=> 2])

@section('title', 'Form Page 2')

@section('form')

    @include('partial/formOpen')

    <input type="hidden" name="curPage" value="2" />


    <div class="form-row row">
        <div class="col-xs-6">
            {{ Form::label('checkInTime', 'Check-in Time') }}
            {{ Form::text('checkInTime', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-row row">
        <div class="col-xs-6">
            {{ Form::label('checkOutTime', 'Check-Out Time') }}
            {{ Form::text('checkOutTime', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-row row">
        <div class="col-xs-6">
            {{ Form::label('frontDeskArrangements', 'Front Desk Arrangements (if not open 24 hours') }}
            {{ Form::textarea('frontDeskArrangements', null, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-row">
		<h3>Credit cards accepted, check all that apply:</h3>
	</div>
    <div class="form-container inner-borders table">
		<div class="form-row table-row">
			
			<?php 
				$data = ['paymentMethod1' => 'American Express', 'paymentMethod2' => 'Diners Club', 'paymentMethod3' => 'Discover', 'paymentMethod4' => 'JCB International', 'paymentMethod5' => 'MasterCard', 'paymentMethod6' => 'VISA', 'paymentMethod7' => 'En Route'];

				foreach($data as $key => $value):
			?>
					<div class="col-xs-3">
						{{ Form::label($key, $value, ['class' => 'checkbox-label'] ) }}
						{{ Form::checkbox($key, 1, null, ['id' => $key, 'class' => 'large-checkbox'] ) }} 
					</div>
			<?php
				endforeach;
			?>
		</div>

	</div>

	<div class="form-row">
		<h3>Family/Children Policy</h3>
	</div>
    <div class="form-container inner-borders table">
		<div class="form-row table-row">
			<div class="col-xs-3 table-cell">
				{{ Form::label('familyPolicy1', 'Adults only property', ['class' => 'checkbox-label']) }}
				{{ Form::checkbox('familyPolicy1', '1', null, ['id' => 'familyPolicy1', 'class' => 'large-checkbox']) }} 
			</div>
			<div class="col-xs-3 table-cell">
				{{ Form::label('familyPolicy2', 'Property suitable for Children', ['class' => 'checkbox-label']) }}
				{{ Form::checkbox('familyPolicy2', '1', null, ['id' => 'familyPolicy2', 'class' => 'large-checkbox']) }} 
			</div>
			<div class="col-xs-3 table-cell">
				{{ Form::label('familyPolicy3', 'Children stay free', ['class' => 'checkbox-label']) }}
				{{ Form::checkbox('familyPolicy3', '1', null, ['id' => 'familyPolicy3', 'class' => 'large-checkbox']) }} 
			</div>
			<div class="col-xs-3 table-cell">
				{{ Form::label('familyPolicy4', 'Children pay same rate as adult', ['class' => 'checkbox-label']) }}
				{{ Form::checkbox('familyPolicy4', '1', null, ['id' => 'familyPolicy4', 'class' => 'large-checkbox']) }} 
			</div>
		</div>
		<div class="form-row table-row">
			<div class="col-xs-4 table-cell">
				{{ Form::label('familyPolicy5', 'Maximum age to receive childred rate', ['class' => 'checkbox-label']) }}
			</div>
			<div class="col-xs-8 table-cell">
				{{ Form::text('familyPolicy5', null, ['id' => 'familyPolicy5', 'class' => '']) }} 
			</div>
		</div>
		<div class="form-row table-row">
			<div class="col-xs-4 table-cell">
				{{ Form::label('familyPolicy6', 'Max age for crib', ['class' => 'checkbox-label']) }}
			</div>
			<div class="col-xs-8 table-cell">
				{{ Form::text('familyPolicy6', null, ['id' => 'familyPolicy6', 'class' => '']) }} 
			</div>
		</div>
		<div class="form-row table-row">
			<div class="col-xs-4 table-cell">
				{{ Form::label('familyPolicy7', 'Max age for extra bed', ['class' => 'checkbox-label']) }}
			</div>
			<div class="col-xs-8 table-cell">
				{{ Form::text('familyPolicy7', null, ['id' => 'familyPolicy7', 'class' => '']) }} 
			</div>
		</div>
	</div>

	<div class="form-row">
		<h3>Children policy text, optional (max 500 characters)</h3>
	</div>
	<div class="form-row row">
        <div class="col-xs-6">
            {{ Form::textarea('childrenPolicyText', null, ['class' => 'form-control'] ) }}
        </div>
    </div>

    <div class="form-row">
		<h3>Pet policy</h3>
	</div>
    <div class="form-container inner-borders table">
		<div class="form-row table-row">
			<div class="col-xs-6 table-cell">
				{{ Form::label('petPolicy1', 'Service/Guide dogs allowed', ['class' => 'checkbox-label'] ) }}
				{{ Form::checkbox('petPolicy1', '1', null, ['id' => 'petPolicy1', 'class' => 'large-checkbox'] ) }} 
			</div>
			<div class="col-xs-6 table-cell">
				{{ Form::label('petPolicy2', 'Pets allowed', ['class' => 'checkbox-label'] ) }}
				{{ Form::checkbox('petPolicy2', '1', null, ['id' => 'petPolicy2', 'class' => 'large-checkbox'] ) }} 
			</div>
		</div>
		<div class="form-row table-row">
			<div class="col-xs-12 table-cell">
				{{ Form::label('petPolicy3', 'Pet charge if not free') }}
				{{ Form::text('petPolicy3', null, ['id' => 'petPolicy3', 'class' => ''] ) }} 
			</div>
		</div>
	</div>
	<div class="form-row">
		<h3>Pet policy text, optional (max 300 characters)</h3>
	</div>
	<div class="form-row row">
        <div class="col-xs-8">
            {{ Form::textarea('petPolicy4', null, ['class' => 'textarea'] ) }}
        </div>
    </div>

    <div class="form-row">
		<h3>Travel agent commission</h3>
	</div>
	<div class="form-row row">
    	<div class="col-xs-8">
    		{{ Form::label('rateTypes12', 'Travel agent commission % and description (industry standard is 10%):') }}
    		{{ Form::textarea('rateTypes12', null, ['class' => 'textarea'] ) }}
    	</div>
    </div>


    @include('partial/formClose')
    {{ Form::close() }}
@stop
